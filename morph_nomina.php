<?php
include_once '../_classes.inc.php';
include_once '../_functions_general.inc.php';
include_once 'morph__nomina_functions.inc.php';
include_once 'morph__general_functions.inc.php';
include_once 'morph__classes.inc.php';




$nomen = new NomenBuilder($_GET['id']);
$endung = substr($nomen->lemma, -2);
$info = '';
$status = '';
$warning = '';
$sonderformen_array = array('familia', 'deus', 'dea', 'filia', 'filius', 'negotium', 'nummus', 'modius', 'sestertius', 'talentum', 'duumvir', 'triumvir', 'decemvir', 'faber', 'liberi', 'locus', 'arcus', 'artus', 'tribus', 'exercitus', 'lacus', 'domus', 'parentes', 'mensis', 'vates', 'mus', 'fraus', 'civitas', 'Iuppiter', 'senex', 'bos', 'supellex', 'caro', 'nix', 'iter', 'vas', 'vis', 'opes', 'fruges', 'preces', 'fas', 'nefas');

if(in_array($nomen->lemma, $sonderformen_array))
{
    $warning = 'F&uuml;r die Form gibt es Sonderformen. Bitte manuell hinzuf&uuml;gen!';
}




/*=============================================>>>>>
====================================================
= Existiert das Nomen? Funktionsauswahl =
====================================================
===============================================>>>>>*/
if (!empty($nomen->lemma))
{

    // Welche Datei soll ausgelesen werden?
    if ($nomen->sonderformen===1)
    {
        $xml_filename = 'xml/la_nomina_s.xml';
    }
    else
    {
        $xml_filename = 'xml/la_nomina.xml';
    }




    // SimpleXML: Datei einlesen
    $xml_sim = simplexml_load_file($xml_filename);




    // Alle Lemmata als Array speichern
    $id_array = array();
    foreach($xml_sim->wort as $wort)
    {
        $id_array[] .= $wort['id'];
    }




    /*=============================================>>>>>
    = FALL: Nomen mit der ID ist bereits vorhanden =
    ===============================================>>>>>*/
    if (in_array($nomen->id, $id_array))
    {
        // Eintrag loeschen und durch neuen ersetzen
        $status = "Nomen mit ID $nomen->id wurde aktualisiert!";
        $nomen_existing = $xml_sim->xpath("//wort[@id=" . $nomen->id . "]");
        $nomen_existing_dom=dom_import_simplexml($nomen_existing[0]);
        $nomen_existing_dom->parentNode->removeChild($nomen_existing_dom);
        $xml_sim->asXML($xml_filename);
    }




    /*=============================================>>>>>
    = FALL: Sonderform =
    ===============================================>>>>>*/
    if ($nomen->sonderformen === 1)
    {
        insert_nomen_s($nomen);
        $status = "Sonderform von $nomen->lemma erstellt!";
    }




    /*=============================================>>>>>
    = FALL: Keine Sonderform =
    ===============================================>>>>>*/
    else {
        switch ($nomen->dklasse)
        {

            /*----------- FALL: A-Deklination -----------*/
            case 'a':
                insert_nomen_a_deklination($nomen);
                break;




            /*----------- FALL: O-Deklination -----------*/
            case 'o':
                if($nomen->genus == 'n')
                {
                    $neutrum_auf_us = array('vulgus', 'virus');
                    if(in_array($nomen->lemma, $neutrum_auf_us))
                    {
                        insert_nomen_o_deklination_mask($nomen, $endung);
                        $info = 'Neutrum auf -us erkannt!';
                    }
                    else
                    {
                        insert_nomen_o_deklination_neutr($nomen);
                    }

                }
                else
                {
                    if ($endung == 'er')
                    {
                        $info = 'Endung: Substantiv auf -' . $endung . ' erkannt';
                    }
                    insert_nomen_o_deklination_mask($nomen, $endung);
                }
                break;




            /*-----------FALL: U-Deklination -----------*/
            case 'u':
                if($nomen->genus == 'n')
                {
                    insert_nomen_u_deklination_neutr($nomen);
                }
                else
                {
                    insert_nomen_u_deklination_mask($nomen);
                }
                break;




            /*-----------FALL: E-Deklination -----------*/
            case 'e':
                insert_nomen_e_deklination($nomen);
                break;




            /*-----------FALL: Indeklinabile -----------*/
            case 'indekl':
                insert_nomen_indekl($nomen);
                break;




            /*-----------FALL: 3. Deklination: Vgl. RH §§ 37-44 -----------*/
            case '3dekl':

                $lastletter = substr($nomen->lemma, -1);
                $vokalisch2_array = array('turris', 'febris', 'puppis', 'securis', 'puppis', 'sitis', 'Tiberis', 'Neapolis');
                $ium_woerter = array('ovis', 'vulpes', 'pars', 'os', 'imber', 'venter', 'faux', 'lis', 'nix', 'optimates', 'penates', 'Samnites', 'ignis');


                // Regefall!
                $kasusendungen = array(
                    'nom_pl'=>'es',
                    'gen_sg'=>'is',
                    'gen_pl'=>'um',
                    'dat_sg'=>'i',
                    'dat_pl'=>'ibus',
                    'akk_sg'=>'em',
                    'akk_pl'=>'es',
                    'abl_sg'=>'e',
                    'abl_pl'=>'ibus');


                /*----------- Unterklasse feststellen -----------*/
                if(($endung == 'al' && $nomen->genus=='n') || ($endung == 'ar' && $nomen->genus=='n') || ($lastletter == 'e' && $nomen->genus=='n'))
                {
                    $kasusendungen['nom_pl'] = 'ia';
                    $kasusendungen['gen_pl'] = 'ium';
                    $kasusendungen['abl_sg'] = 'i';
                    $kasusendungen['akk_pl'] = 'ia';
                    $info = '3. Dekl.: Vokalischer Stamm (Gruppe 1: Neutrum) nach RH §38.1 erkannt!';

                }

                else if (in_array($nomen->lemma, $vokalisch2_array))
                {
                    $kasusendungen['gen_pl'] = 'ium';
                    $kasusendungen['akk_sg'] = 'im';
                    $kasusendungen['akk_pl'] = 'is';
                    $kasusendungen['abl_sg'] = 'i';
                    $info = '3. Dekl.: Vokalischer Stamm (Gruppe 2) nach RH §38.2 erkannt!';
                }

                else if (in_array($nomen->lemma, $ium_woerter))
                {
                    $kasusendungen['gen_pl'] = 'ium';
                    $info = '3. Dekl.: Vokalischer Stamm (Gruppe 3) nach RH §38.3 erkannt!';
                }

                else if ($nomen->genus =='n')
                {
                    $kasusendungen['nom_pl'] = 'ia';
                    $kasusendungen['akk_pl'] = 'ia';
                    $info = '3. Dekl.: Konsonantischer Stamm im Neutrum erkannt!';
                }

                else
                {
                    $info = '3. Dekl.: Konsonantischer Stamm erkannt!';
                }


                insert_nomen_3dekl($nomen, $kasusendungen);

                break;




            case '':
                $status = 'Keine Deklinationsklasse zugeordnet.';
                break;
        }
    }
}



else
{
    $status = "Das Lemma existiert nicht!";
}




echo "<div id='morph_notification'>";
    echo $info . "<br>";
    echo $warning . "<br>";
    echo $status . "<br>";
echo "<br></div>";



preview_nomen_table($nomen);



?>
