<?php
// Formen fuer Sonderform generieren
function insert_nomen_s($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina_s.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    $neueswort_tag->setAttribute('sonderform', 'true');
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);


    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm);

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm);
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm);

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }


    $xml_dom->save('xml/la_nomina_s.xml');
}





// Formen fuer A-Deklination generieren
function insert_nomen_a_deklination($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);



    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'ae');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'ae');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . 'am');
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'a');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'ae');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'arum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'is');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'as');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'ae');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'is');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }


    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer O-Deklination Mask. generieren
function insert_nomen_o_deklination_mask($nomen, $endung) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);



    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'i');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'o');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . 'um');
        //FALL: Substantiv auf -er?
        if($endung == 'er')
        {
            //CREATE    <wort><singular><vokativ> vokativ
            $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        }
        else
        {
            //CREATE    <wort><singular><vokativ> vokativ
            $neueswort_singular_vok = $xml_dom->createTextNode($nomen->stamm . 'e');
        }
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'o');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'i');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'orum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'is');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'os');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'i');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'is');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }

    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer O-Deklination Neutr. generieren
function insert_nomen_o_deklination_neutr($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);



    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'i');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'o');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'o');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'a');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'orum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'is');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'a');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'a');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'is');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }


    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer U-Deklination Mask. generieren
function insert_nomen_u_deklination_mask($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);



    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'us');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'ui');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . 'um');
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'u');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'us');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'uum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'ibus');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'us');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'us');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'ibus');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }

    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer U-Deklination Neutr. generieren
function insert_nomen_u_deklination_neutr($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);

    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'us');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'u');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . 'u');
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'u');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'ua');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'uum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'ibus');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'ua');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'ua');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'ibus');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }

    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer E-Deklination generieren
function insert_nomen_e_deklination($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);



    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . 'ei');
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . 'ei');
        //CREATE    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . 'em');
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . 'e');

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . 'es');
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . 'erum');
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . 'ebus');
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . 'es');
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->stamm . 'es');
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . 'ebus');

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }

    $xml_dom->save('xml/la_nomina.xml');
}



// Formen fuer E-Deklination generieren
function insert_nomen_indekl($nomen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);


    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);


    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    $xml_dom->save('xml/la_nomina.xml');
}







// Formen fuer O-Deklination Mask. generieren
function insert_nomen_3dekl($nomen, $kasusendungen) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load('xml/la_nomina.xml');




    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'nomen');
    $neueswort_tag->setAttribute('id', $nomen->id);
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($nomen->lemma);

    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);

    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*----------- SINGULAR TAGS erstellen -----------*/
    //CREATE    <wort><singular>
    $neueswort_singular_tag = $xml_dom->createElement('singular');
    //CREATE    <wort><singular><nominativ>
    $neueswort_singular_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><singular><genitiv>
    $neueswort_singular_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><singular><dativ>
    $neueswort_singular_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><singular><akkusativ>
    $neueswort_singular_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><singular><vokativ>
    $neueswort_singular_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><singular><ablativ>
    $neueswort_singular_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><singular>
    $neueswort_tag->appendChild($neueswort_singular_tag);
    //APPEND    <wort><singular><nominativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_nom_tag);
    //APPEND    <wort><singular><genitiv>
    $neueswort_singular_tag->appendChild($neueswort_singular_gen_tag);
    //APPEND    <wort><singular><dativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_dat_tag);
    //APPEND    <wort><singular><akkusativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_akk_tag);
    //APPEND    <wort><singular><vokativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_vok_tag);
    //APPEND    <wort><singular><ablativ>
    $neueswort_singular_tag->appendChild($neueswort_singular_abl_tag);



    /*----------- SINGULAR TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'pltantum') {
        //CREATE    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['gen_sg']);
        //CREATE    <wort><singular><dativ> dativ
        $neueswort_singular_dat = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['dat_sg']);
        if($nomen->genus === 'n')
        {
            //CREATE    <wort><singular><akkusativ> akkusativ
            $neueswort_singular_akk = $xml_dom->createTextNode($nomen->lemma);
        }
        else
        {
            //CREATE    <wort><singular><akkusativ> akkusativ
            $neueswort_singular_akk = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['akk_sg']);
        }
        //CREATE    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['abl_sg']);

        //APPEND    <wort><singular><nominativ> nominativ
        $neueswort_singular_nom_tag->appendChild($neueswort_singular_nom);
        //APPEND    <wort><singular><genitiv> genitiv
        $neueswort_singular_gen_tag->appendChild($neueswort_singular_gen);
        //APPEND    <wort><singular><dativ> dativ
        $neueswort_singular_dat_tag->appendChild($neueswort_singular_dat);
        //APPEND    <wort><singular><akkusativ> akkusativ
        $neueswort_singular_akk_tag->appendChild($neueswort_singular_akk);
        //APPEND    <wort><singular><vokativ> vokativ
        $neueswort_singular_vok_tag->appendChild($neueswort_singular_vok);
        //APPEND    <wort><singular><ablativ> ablativ
        $neueswort_singular_abl_tag->appendChild($neueswort_singular_abl);
    }



    /*----------- PLURAL TAGS erstellen -----------*/
    //CREATE    <wort><plural>
    $neueswort_plural_tag = $xml_dom->createElement('plural');
    //CREATE    <wort><plural><nominativ>
    $neueswort_plural_nom_tag = $xml_dom->createElement('nominativ');
    //CREATE    <wort><plural><genitiv>
    $neueswort_plural_gen_tag = $xml_dom->createElement('genitiv');
    //CREATE    <wort><plural><dativ>
    $neueswort_plural_dat_tag = $xml_dom->createElement('dativ');
    //CREATE    <wort><plural><akkusativ>
    $neueswort_plural_akk_tag = $xml_dom->createElement('akkusativ');
    //CREATE    <wort><plural><vokativ>
    $neueswort_plural_vok_tag = $xml_dom->createElement('vokativ');
    //CREATE    <wort><plural><ablativ>
    $neueswort_plural_abl_tag = $xml_dom->createElement('ablativ');

    //APPEND    <wort><plural>
    $neueswort_tag->appendChild($neueswort_plural_tag);
    //APPEND    <wort><plural><nominativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_nom_tag);
    //APPEND    <wort><plural><genitiv>
    $neueswort_plural_tag->appendChild($neueswort_plural_gen_tag);
    //APPEND    <wort><plural><dativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_dat_tag);
    //APPEND    <wort><plural><akkusativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_akk_tag);
    //APPEND    <wort><plural><vokativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_vok_tag);
    //APPEND    <wort><plural><ablativ>
    $neueswort_plural_tag->appendChild($neueswort_plural_abl_tag);



    /*----------- PLURAL TAG-Values erstellen -----------*/
    if($nomen->bes_numerus !== 'sgtantum') {
        //CREATE    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['nom_pl']);
        //CREATE    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['gen_pl']);
        //CREATE    <wort><plural><dativ> dativ
        $neueswort_plural_dat = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['dat_pl']);
        //CREATE    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['akk_pl']);
        //CREATE    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok = $xml_dom->createTextNode($nomen->lemma);
        //CREATE    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl = $xml_dom->createTextNode($nomen->stamm . $kasusendungen['abl_pl']);

        //APPEND    <wort><plural><nominativ> nominativ
        $neueswort_plural_nom_tag->appendChild($neueswort_plural_nom);
        //APPEND    <wort><plural><genitiv> genitiv
        $neueswort_plural_gen_tag->appendChild($neueswort_plural_gen);
        //APPEND    <wort><plural><dativ> dativ
        $neueswort_plural_dat_tag->appendChild($neueswort_plural_dat);
        //APPEND    <wort><plural><akkusativ> akkusativ
        $neueswort_plural_akk_tag->appendChild($neueswort_plural_akk);
        //APPEND    <wort><plural><vokativ> vokativ
        $neueswort_plural_vok_tag->appendChild($neueswort_plural_vok);
        //APPEND    <wort><plural><ablativ> ablativ
        $neueswort_plural_abl_tag->appendChild($neueswort_plural_abl);
    }

    $xml_dom->save('xml/la_nomina.xml');
}















?>
