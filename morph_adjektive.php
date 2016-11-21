<?php
include_once '../_classes.inc.php';
include_once '../_functions_general.inc.php';
include_once 'morph__adjektive_functions.inc.php';
include_once 'morph__general_functions.inc.php';
include_once 'morph__classes.inc.php';


$adjektiv = new AdjektivBuilder($_GET['id']);


// INFORMATIONEN
$general_info = '';
$steigerung_info = '';
$status = '';
$warning = '';


// BAUSTEINE
$komparativ_stamm = substr($adjektiv->komparativ, 0, -2);
$superlativ_stamm = substr($adjektiv->superlativ, 0, -2);


// AUSNAHMEN
$sonderformen_array = array('novus', 'inops', 'frugifer');
if(in_array($adjektiv->lemma, $sonderformen_array))
{
    $warning = 'F&uuml;r die Form gibt es Sonderformen. Bitte manuell hinzuf&uuml;gen!';
}
$adj_pos_gruppe2 = array('vetus', 'dives', 'princeps', 'particeps', 'pauper', 'compos', 'superstes', 'sospes');
$adj_pos_gruppe2_ausnahmen = array('memor', 'inops', 'vigil');
$adj_komp_magis_ausnahmen = array('liberalis', 'familiaris', 'salutaris', 'clarus', 'purus', 'verus');
$vokal_us_endungen = array('aus', 'eus', 'ius', 'ous', 'uus');

/*----------- Wann wird der Komparativ mit magis gebildet? -----------*/
if (in_array($adjektiv->endung_3, $vokal_us_endungen) && $adjektiv->endung_4 != 'quus' && $adjektiv->endung_4 != 'guis' && $adjektiv->endung_3 != 'uis')
{
    $magis_maxime = true;
}

else if ($adjektiv->endung_4==='ulus' || $adjektiv->endung_4==='alis' || $adjektiv->endung_4==='aris')
{
    if (in_array($adjektiv->lemma, $adj_komp_magis_ausnahmen))
    {
        $magis_maxime = false;
    }
    else
    {
        $magis_maxime = true;
    }
}

else if ($adjektiv->endung_3 === 'rus')
{
    if (in_array($adjektiv->lemma, $adj_komp_magis_ausnahmen))
    {
        $magis_maxime = false;
    }
    else
    {
        $magis_maxime = true;
    }
}

else
{
    $magis_maxime = false;
}



/*=============================================>>>>>
=============================================
= FORMEN Positiv =
=============================================
===============================================>>>>>*/

switch ($adjektiv->genera)
{
    case '3endig':

        if ($adjektiv->dklasse == 'ao')
        {
            /*=============================================>>>>>
            = FORMEN A-O-Deklination =
            ===============================================>>>>>*/
            $formen_positiv =[
            // SINGULAR
            'sg_mask_nom' => $adjektiv->lemma,
            'sg_mask_gen' => $adjektiv->stamm . 'i',
            'sg_mask_dat' => $adjektiv->stamm . 'o',
            'sg_mask_akk' => $adjektiv->stamm . 'um',
            'sg_mask_vok' => $adjektiv->stamm . 'e',
            'sg_mask_abl' => $adjektiv->stamm . 'o',

            'sg_fem_nom' => $adjektiv->stamm . 'a',
            'sg_fem_gen' => $adjektiv->stamm . 'ae',
            'sg_fem_dat' => $adjektiv->stamm . 'ae',
            'sg_fem_akk' => $adjektiv->stamm . 'am',
            'sg_fem_vok' => $adjektiv->stamm . 'a',
            'sg_fem_abl' => $adjektiv->stamm . 'a',

            'sg_neutr_nom' => $adjektiv->stamm . 'um',
            'sg_neutr_gen' => $adjektiv->stamm . 'i',
            'sg_neutr_dat' => $adjektiv->stamm . 'o',
            'sg_neutr_akk' => $adjektiv->stamm . 'um',
            'sg_neutr_vok' => $adjektiv->stamm . 'um',
            'sg_neutr_abl' => $adjektiv->stamm . 'o',

            // PLURAL
            'pl_mask_nom' => $adjektiv->stamm . 'i',
            'pl_mask_gen' => $adjektiv->stamm . 'orum',
            'pl_mask_dat' => $adjektiv->stamm . 'is',
            'pl_mask_akk' => $adjektiv->stamm . 'os',
            'pl_mask_vok' => $adjektiv->stamm . 'i',
            'pl_mask_abl' => $adjektiv->stamm . 'is',

            'pl_fem_nom' => $adjektiv->stamm . 'ae',
            'pl_fem_gen' => $adjektiv->stamm . 'arum',
            'pl_fem_dat' => $adjektiv->stamm . 'is',
            'pl_fem_akk' => $adjektiv->stamm . 'as',
            'pl_fem_vok' => $adjektiv->stamm . 'ae',
            'pl_fem_abl' => $adjektiv->stamm . 'is',

            'pl_neutr_nom' => $adjektiv->stamm . 'a',
            'pl_neutr_gen' => $adjektiv->stamm . 'orum',
            'pl_neutr_dat' => $adjektiv->stamm . 'is',
            'pl_neutr_akk' => $adjektiv->stamm . 'a',
            'pl_neutr_vok' => $adjektiv->stamm . 'a',
            'pl_neutr_abl' => $adjektiv->stamm . 'is'];
        }

        else
        {
            /*=============================================>>>>>
            = ENDUNGEN: 3. Deklination =
            ===============================================>>>>>*/
            $formen_positiv =[
            // SINGULAR
            'sg_mask_nom' => $adjektiv->lemma,
            'sg_mask_gen' => $adjektiv->stamm . 'is',
            'sg_mask_dat' => $adjektiv->stamm . 'i',
            'sg_mask_akk' => $adjektiv->stamm . 'em',
            'sg_mask_vok' => $adjektiv->lemma,
            'sg_mask_abl' => $adjektiv->stamm . 'i',

            'sg_fem_nom' => $adjektiv->stamm . 'is',
            'sg_fem_gen' => $adjektiv->stamm . 'is',
            'sg_fem_dat' => $adjektiv->stamm . 'i',
            'sg_fem_akk' => $adjektiv->stamm . 'em',
            'sg_fem_vok' => $adjektiv->stamm . 'is',
            'sg_fem_abl' => $adjektiv->stamm . 'i',

            'sg_neutr_nom' => $adjektiv->stamm . 'e',
            'sg_neutr_gen' => $adjektiv->stamm . 'is',
            'sg_neutr_dat' => $adjektiv->stamm . 'i',
            'sg_neutr_akk' => $adjektiv->stamm . 'e',
            'sg_neutr_vok' => $adjektiv->stamm . 'e',
            'sg_neutr_abl' => $adjektiv->stamm . 'i',

            // PLURAL
            'pl_mask_nom' => $adjektiv->stamm . 'es',
            'pl_mask_gen' => $adjektiv->stamm . 'ium',
            'pl_mask_dat' => $adjektiv->stamm . 'ibus',
            'pl_mask_akk' => $adjektiv->stamm . 'es',
            'pl_mask_vok' => $adjektiv->stamm . 'es',
            'pl_mask_abl' => $adjektiv->stamm . 'ibus',

            'pl_fem_nom' => $adjektiv->stamm . 'es',
            'pl_fem_gen' => $adjektiv->stamm . 'ium',
            'pl_fem_dat' => $adjektiv->stamm . 'ibus',
            'pl_fem_akk' => $adjektiv->stamm . 'es',
            'pl_fem_vok' => $adjektiv->stamm . 'es',
            'pl_fem_abl' => $adjektiv->stamm . 'ibus',

            'pl_neutr_nom' => $adjektiv->stamm . 'ia',
            'pl_neutr_gen' => $adjektiv->stamm . 'ium',
            'pl_neutr_dat' => $adjektiv->stamm . 'ibus',
            'pl_neutr_akk' => $adjektiv->stamm . 'ia',
            'pl_neutr_vok' => $adjektiv->stamm . 'ia',
            'pl_neutr_abl' => $adjektiv->stamm . 'ibus'];

        }

        break;

    case '2endig':
        $formen_positiv =[
        // SINGULAR
        'sg_mask_nom' => $adjektiv->lemma,
        'sg_mask_gen' => $adjektiv->stamm . 'is',
        'sg_mask_dat' => $adjektiv->stamm . 'i',
        'sg_mask_akk' => $adjektiv->stamm . 'em',
        'sg_mask_vok' => $adjektiv->lemma,
        'sg_mask_abl' => $adjektiv->stamm . 'i',

        'sg_fem_nom' => $adjektiv->lemma,
        'sg_fem_gen' => $adjektiv->stamm . 'is',
        'sg_fem_dat' => $adjektiv->stamm . 'i',
        'sg_fem_akk' => $adjektiv->stamm . 'em',
        'sg_fem_vok' => $adjektiv->stamm . 'is',
        'sg_fem_abl' => $adjektiv->stamm . 'i',

        'sg_neutr_nom' => $adjektiv->stamm . 'e',
        'sg_neutr_gen' => $adjektiv->stamm . 'is',
        'sg_neutr_dat' => $adjektiv->stamm . 'i',
        'sg_neutr_akk' => $adjektiv->stamm . 'e',
        'sg_neutr_vok' => $adjektiv->stamm . 'e',
        'sg_neutr_abl' => $adjektiv->stamm . 'i',

        // PLURAL
        'pl_mask_nom' => $adjektiv->stamm . 'es',
        'pl_mask_gen' => $adjektiv->stamm . 'ium',
        'pl_mask_dat' => $adjektiv->stamm . 'ibus',
        'pl_mask_akk' => $adjektiv->stamm . 'es',
        'pl_mask_vok' => $adjektiv->stamm . 'es',
        'pl_mask_abl' => $adjektiv->stamm . 'ibus',

        'pl_fem_nom' => $adjektiv->stamm . 'es',
        'pl_fem_gen' => $adjektiv->stamm . 'ium',
        'pl_fem_dat' => $adjektiv->stamm . 'ibus',
        'pl_fem_akk' => $adjektiv->stamm . 'es',
        'pl_fem_vok' => $adjektiv->stamm . 'es',
        'pl_fem_abl' => $adjektiv->stamm . 'ibus',

        'pl_neutr_nom' => $adjektiv->stamm . 'ia',
        'pl_neutr_gen' => $adjektiv->stamm . 'ium',
        'pl_neutr_dat' => $adjektiv->stamm . 'ibus',
        'pl_neutr_akk' => $adjektiv->stamm . 'ia',
        'pl_neutr_vok' => $adjektiv->stamm . 'ia',
        'pl_neutr_abl' => $adjektiv->stamm . 'ibus'];
        break;

    case '1endig':
    $formen_positiv =[
        // SINGULAR
        'sg_mask_nom' => $adjektiv->lemma,
        'sg_mask_gen' => $adjektiv->stamm . 'is',
        'sg_mask_dat' => $adjektiv->stamm . 'i',
        'sg_mask_akk' => $adjektiv->stamm . 'em',
        'sg_mask_vok' => $adjektiv->lemma,
        'sg_mask_abl' => $adjektiv->stamm . 'i',

        'sg_fem_nom' => $adjektiv->lemma,
        'sg_fem_gen' => $adjektiv->stamm . 'is',
        'sg_fem_dat' => $adjektiv->stamm . 'i',
        'sg_fem_akk' => $adjektiv->stamm . 'em',
        'sg_fem_vok' => $adjektiv->lemma,
        'sg_fem_abl' => $adjektiv->stamm . 'i',

        'sg_neutr_nom' => $adjektiv->lemma,
        'sg_neutr_gen' => $adjektiv->stamm . 'is',
        'sg_neutr_dat' => $adjektiv->stamm . 'i',
        'sg_neutr_akk' => $adjektiv->lemma,
        'sg_neutr_vok' => $adjektiv->lemma,
        'sg_neutr_abl' => $adjektiv->stamm . 'i',

        // PLURAL
        'pl_mask_nom' => $adjektiv->stamm . 'es',
        'pl_mask_gen' => $adjektiv->stamm . 'ium',
        'pl_mask_dat' => $adjektiv->stamm . 'ibus',
        'pl_mask_akk' => $adjektiv->stamm . 'es',
        'pl_mask_vok' => $adjektiv->stamm . 'es',
        'pl_mask_abl' => $adjektiv->stamm . 'ibus',

        'pl_fem_nom' => $adjektiv->stamm . 'es',
        'pl_fem_gen' => $adjektiv->stamm . 'ium',
        'pl_fem_dat' => $adjektiv->stamm . 'ibus',
        'pl_fem_akk' => $adjektiv->stamm . 'es',
        'pl_fem_vok' => $adjektiv->stamm . 'es',
        'pl_fem_abl' => $adjektiv->stamm . 'ibus',

        'pl_neutr_nom' => $adjektiv->stamm . 'ia',
        'pl_neutr_gen' => $adjektiv->stamm . 'ium',
        'pl_neutr_dat' => $adjektiv->stamm . 'ibus',
        'pl_neutr_akk' => $adjektiv->stamm . 'ia',
        'pl_neutr_vok' => $adjektiv->stamm . 'ia',
        'pl_neutr_abl' => $adjektiv->stamm . 'ibus'];
        break;
}






/*=============================================>>>>>
=============================================
= FORMEN KOMPARATIV =
=============================================
===============================================>>>>>*/


/*=============================================>>>>>
= KOMPARATIV mit magis =
===============================================>>>>>*/
if ($magis_maxime===true)
{
    $steigerung_info = 'Komparativ wird mit magis, Superlativ mit maxime gebildet!';
    $formen_komparativ=[
        // SINGULAR
        'sg_mask_nom' => 'magis ' . $formen_positiv['sg_mask_nom'],
        'sg_mask_gen' => 'magis ' . $formen_positiv['sg_mask_gen'],
        'sg_mask_dat' => 'magis ' . $formen_positiv['sg_mask_dat'],
        'sg_mask_akk' => 'magis ' . $formen_positiv['sg_mask_akk'],
        'sg_mask_vok' => 'magis ' . $formen_positiv['sg_mask_vok'],
        'sg_mask_abl' => 'magis ' . $formen_positiv['sg_mask_abl'],

        'sg_fem_nom' => 'magis ' . $formen_positiv['sg_fem_nom'],
        'sg_fem_gen' => 'magis ' . $formen_positiv['sg_fem_gen'],
        'sg_fem_dat' => 'magis ' . $formen_positiv['sg_fem_dat'],
        'sg_fem_akk' => 'magis ' . $formen_positiv['sg_fem_akk'],
        'sg_fem_vok' => 'magis ' . $formen_positiv['sg_fem_vok'],
        'sg_fem_abl' => 'magis ' . $formen_positiv['sg_fem_abl'],

        'sg_neutr_nom' => 'magis ' . $formen_positiv['sg_neutr_nom'],
        'sg_neutr_gen' => 'magis ' . $formen_positiv['sg_neutr_gen'],
        'sg_neutr_dat' => 'magis ' . $formen_positiv['sg_neutr_dat'],
        'sg_neutr_akk' => 'magis ' . $formen_positiv['sg_neutr_akk'],
        'sg_neutr_vok' => 'magis ' . $formen_positiv['sg_neutr_vok'],
        'sg_neutr_abl' => 'magis ' . $formen_positiv['sg_neutr_abl'],

        // PLURAL
        'pl_mask_nom' => 'magis ' . $formen_positiv['pl_mask_nom'],
        'pl_mask_gen' => 'magis ' . $formen_positiv['pl_mask_gen'],
        'pl_mask_dat' => 'magis ' . $formen_positiv['pl_mask_dat'],
        'pl_mask_akk' => 'magis ' . $formen_positiv['pl_mask_akk'],
        'pl_mask_vok' => 'magis ' . $formen_positiv['pl_mask_vok'],
        'pl_mask_abl' => 'magis ' . $formen_positiv['pl_mask_abl'],

        'pl_fem_nom' => 'magis ' . $formen_positiv['pl_fem_nom'],
        'pl_fem_gen' => 'magis ' . $formen_positiv['pl_fem_gen'],
        'pl_fem_dat' => 'magis ' . $formen_positiv['pl_fem_dat'],
        'pl_fem_akk' => 'magis ' . $formen_positiv['pl_fem_akk'],
        'pl_fem_vok' => 'magis ' . $formen_positiv['pl_fem_vok'],
        'pl_fem_abl' => 'magis ' . $formen_positiv['pl_fem_abl'],

        'pl_neutr_nom' => 'magis ' . $formen_positiv['pl_neutr_nom'],
        'pl_neutr_gen' => 'magis ' . $formen_positiv['pl_neutr_gen'],
        'pl_neutr_dat' => 'magis ' . $formen_positiv['pl_neutr_dat'],
        'pl_neutr_akk' => 'magis ' . $formen_positiv['pl_neutr_akk'],
        'pl_neutr_vok' => 'magis ' . $formen_positiv['pl_neutr_vok'],
        'pl_neutr_abl' => 'magis ' . $formen_positiv['pl_neutr_abl']];
}
/*=============================================>>>>>
= Regelmaeßiger KOMPARATIV =
===============================================>>>>>*/
else
{
    $formen_komparativ=[
        // SINGULAR
        'sg_mask_nom' => $adjektiv->komparativ,
        'sg_mask_gen' => $adjektiv->komparativ . 'is',
        'sg_mask_dat' => $adjektiv->komparativ . 'i',
        'sg_mask_akk' => $adjektiv->komparativ . 'em',
        'sg_mask_vok' => $adjektiv->komparativ,
        'sg_mask_abl' => $adjektiv->komparativ . 'e',

        'sg_fem_nom' => $adjektiv->komparativ,
        'sg_fem_gen' => $adjektiv->komparativ . 'is',
        'sg_fem_dat' => $adjektiv->komparativ . 'i',
        'sg_fem_akk' => $adjektiv->komparativ . 'em',
        'sg_fem_vok' => $adjektiv->komparativ . 'is',
        'sg_fem_abl' => $adjektiv->komparativ . 'e',

        'sg_neutr_nom' => $komparativ_stamm . 'us',
        'sg_neutr_gen' => $adjektiv->komparativ . 'is',
        'sg_neutr_dat' => $adjektiv->komparativ . 'i',
        'sg_neutr_akk' => $komparativ_stamm . 'us',
        'sg_neutr_vok' => $komparativ_stamm . 'us',
        'sg_neutr_abl' => $adjektiv->komparativ . 'e',

        // PLURAL
        'pl_mask_nom' => $adjektiv->komparativ . 'es',
        'pl_mask_gen' => $adjektiv->komparativ . 'um',
        'pl_mask_dat' => $adjektiv->komparativ . 'ibus',
        'pl_mask_akk' => $adjektiv->komparativ . 'es',
        'pl_mask_vok' => $adjektiv->komparativ . 'es',
        'pl_mask_abl' => $adjektiv->komparativ . 'ibus',

        'pl_fem_nom' => $adjektiv->komparativ . 'es',
        'pl_fem_gen' => $adjektiv->komparativ . 'um',
        'pl_fem_dat' => $adjektiv->komparativ . 'ibus',
        'pl_fem_akk' => $adjektiv->komparativ . 'es',
        'pl_fem_vok' => $adjektiv->komparativ . 'es',
        'pl_fem_abl' => $adjektiv->komparativ . 'ibus',

        'pl_neutr_nom' => $adjektiv->komparativ . 'a',
        'pl_neutr_gen' => $adjektiv->komparativ . 'um',
        'pl_neutr_dat' => $adjektiv->komparativ . 'ibus',
        'pl_neutr_akk' => $adjektiv->komparativ . 'a',
        'pl_neutr_vok' => $adjektiv->komparativ . 'a',
        'pl_neutr_abl' => $adjektiv->komparativ . 'ibus'];
}


/*=============================================>>>>>
=============================================
= FORMEN SUPERLATIV =
=============================================
===============================================>>>>>*/

if ($magis_maxime===true)
{
    $formen_superlativ=[
        // SINGULAR
        'sg_mask_nom' => 'maxime ' . $formen_positiv['sg_mask_nom'],
        'sg_mask_gen' => 'maxime ' . $formen_positiv['sg_mask_gen'],
        'sg_mask_dat' => 'maxime ' . $formen_positiv['sg_mask_dat'],
        'sg_mask_akk' => 'maxime ' . $formen_positiv['sg_mask_akk'],
        'sg_mask_vok' => 'maxime ' . $formen_positiv['sg_mask_vok'],
        'sg_mask_abl' => 'maxime ' . $formen_positiv['sg_mask_abl'],

        'sg_fem_nom' => 'maxime ' . $formen_positiv['sg_fem_nom'],
        'sg_fem_gen' => 'maxime ' . $formen_positiv['sg_fem_gen'],
        'sg_fem_dat' => 'maxime ' . $formen_positiv['sg_fem_dat'],
        'sg_fem_akk' => 'maxime ' . $formen_positiv['sg_fem_akk'],
        'sg_fem_vok' => 'maxime ' . $formen_positiv['sg_fem_vok'],
        'sg_fem_abl' => 'maxime ' . $formen_positiv['sg_fem_abl'],

        'sg_neutr_nom' => 'maxime ' . $formen_positiv['sg_neutr_nom'],
        'sg_neutr_gen' => 'maxime ' . $formen_positiv['sg_neutr_gen'],
        'sg_neutr_dat' => 'maxime ' . $formen_positiv['sg_neutr_dat'],
        'sg_neutr_akk' => 'maxime ' . $formen_positiv['sg_neutr_akk'],
        'sg_neutr_vok' => 'maxime ' . $formen_positiv['sg_neutr_vok'],
        'sg_neutr_abl' => 'maxime ' . $formen_positiv['sg_neutr_abl'],

        // PLURAL
        'pl_mask_nom' => 'maxime ' . $formen_positiv['pl_mask_nom'],
        'pl_mask_gen' => 'maxime ' . $formen_positiv['pl_mask_gen'],
        'pl_mask_dat' => 'maxime ' . $formen_positiv['pl_mask_dat'],
        'pl_mask_akk' => 'maxime ' . $formen_positiv['pl_mask_akk'],
        'pl_mask_vok' => 'maxime ' . $formen_positiv['pl_mask_vok'],
        'pl_mask_abl' => 'maxime ' . $formen_positiv['pl_mask_abl'],

        'pl_fem_nom' => 'maxime ' . $formen_positiv['pl_fem_nom'],
        'pl_fem_gen' => 'maxime ' . $formen_positiv['pl_fem_gen'],
        'pl_fem_dat' => 'maxime ' . $formen_positiv['pl_fem_dat'],
        'pl_fem_akk' => 'maxime ' . $formen_positiv['pl_fem_akk'],
        'pl_fem_vok' => 'maxime ' . $formen_positiv['pl_fem_vok'],
        'pl_fem_abl' => 'maxime ' . $formen_positiv['pl_fem_abl'],

        'pl_neutr_nom' => 'maxime ' . $formen_positiv['pl_neutr_nom'],
        'pl_neutr_gen' => 'maxime ' . $formen_positiv['pl_neutr_gen'],
        'pl_neutr_dat' => 'maxime ' . $formen_positiv['pl_neutr_dat'],
        'pl_neutr_akk' => 'maxime ' . $formen_positiv['pl_neutr_akk'],
        'pl_neutr_vok' => 'maxime ' . $formen_positiv['pl_neutr_vok'],
        'pl_neutr_abl' => 'maxime ' . $formen_positiv['pl_neutr_abl']];
}

else
{
    $formen_superlativ =[
    // SINGULAR
    'sg_mask_nom' => $adjektiv->superlativ,
    'sg_mask_gen' => $superlativ_stamm . 'i',
    'sg_mask_dat' => $superlativ_stamm . 'o',
    'sg_mask_akk' => $superlativ_stamm . 'um',
    'sg_mask_vok' => $superlativ_stamm . 'e',
    'sg_mask_abl' => $superlativ_stamm . 'o',

    'sg_fem_nom' => $superlativ_stamm . 'a',
    'sg_fem_gen' => $superlativ_stamm . 'ae',
    'sg_fem_dat' => $superlativ_stamm . 'ae',
    'sg_fem_akk' => $superlativ_stamm . 'am',
    'sg_fem_vok' => $superlativ_stamm . 'a',
    'sg_fem_abl' => $superlativ_stamm . 'a',

    'sg_neutr_nom' => $superlativ_stamm . 'um',
    'sg_neutr_gen' => $superlativ_stamm . 'i',
    'sg_neutr_dat' => $superlativ_stamm . 'o',
    'sg_neutr_akk' => $superlativ_stamm . 'um',
    'sg_neutr_vok' => $superlativ_stamm . 'um',
    'sg_neutr_abl' => $superlativ_stamm . 'o',

    // PLURAL
    'pl_mask_nom' => $superlativ_stamm . 'i',
    'pl_mask_gen' => $superlativ_stamm . 'orum',
    'pl_mask_dat' => $superlativ_stamm . 'is',
    'pl_mask_akk' => $superlativ_stamm . 'os',
    'pl_mask_vok' => $superlativ_stamm . 'i',
    'pl_mask_abl' => $superlativ_stamm . 'is',

    'pl_fem_nom' => $superlativ_stamm . 'ae',
    'pl_fem_gen' => $superlativ_stamm . 'arum',
    'pl_fem_dat' => $superlativ_stamm . 'is',
    'pl_fem_akk' => $superlativ_stamm . 'as',
    'pl_fem_vok' => $superlativ_stamm . 'ae',
    'pl_fem_abl' => $superlativ_stamm . 'is',

    'pl_neutr_nom' => $superlativ_stamm . 'a',
    'pl_neutr_gen' => $superlativ_stamm . 'orum',
    'pl_neutr_dat' => $superlativ_stamm . 'is',
    'pl_neutr_akk' => $superlativ_stamm . 'a',
    'pl_neutr_vok' => $superlativ_stamm . 'a',
    'pl_neutr_abl' => $superlativ_stamm . 'is'];
}


/*=============================================>>>>>
====================================================
= Existiert das Adjektiv? Funktionsauswahl =
====================================================
===============================================>>>>>*/
if (!empty($adjektiv->lemma))
{
    // SimpleXML: Datei einlesen
    $xml_sim = simplexml_load_file($adjektiv->xml_filename);

    // Alle Lemmata als Array speichern
    $id_array = array();
    foreach($xml_sim->wort as $wort)
    {
        $id_array[] .= $wort['id'];
    }


    /*=============================================>>>>>
    = FALL: adjektiv mit der ID ist bereits vorhanden =
    ===============================================>>>>>*/
    if (in_array($adjektiv->id, $id_array))
    {
        // Eintrag loeschen und durch neuen ersetzen
        $status = "Adjektiv mit ID $adjektiv->id wurde aktualisiert!";
        $adjektiv_existing = $xml_sim->xpath("//wort[@id=" . $adjektiv->id . "]");
        $adjektiv_existing_dom=dom_import_simplexml($adjektiv_existing[0]);
        $adjektiv_existing_dom->parentNode->removeChild($adjektiv_existing_dom);
        $xml_sim->asXML($adjektiv->xml_filename);
    }




    /*=============================================>>>>>
    = FALL: Sonderform =
    ===============================================>>>>>*/
    if ($adjektiv->sonderformen === 1)
    {
        insert_adjektiv_s($adjektiv);
        $status = "Sonderform von $adjektiv->lemma erstellt!";
    }




    /*=============================================>>>>>
    = FALL: Keine Sonderform =
    ===============================================>>>>>*/
    else {
        switch ($adjektiv->dklasse)
        {



            /*----------- FALL: O-Deklination -----------*/
            case 'ao':
                $general_info = "Adjektiv der a-o-Deklination auf -" . $adjektiv->endung_2 . " erkannt!";
                insert_adjektiv_ao_deklination($adjektiv, $formen_positiv, $formen_komparativ, $formen_superlativ);
                break;



            /*----------- FALL: 3.Deklination -----------*/
            case '3kons':
                $general_info = "Adjektiv der 3. Deklination auf -" . $adjektiv->endung_2 . " erkannt!";

                /*----------- Gruppe 2: altior, vetus -----------*/
                if (in_array($adjektiv->lemma, $adj_pos_gruppe2))
                {
                    $formen_3kons_positiv['sg_mask_abl'] = $adjektiv->stamm . 'e';
                    $formen_3kons_positiv['sg_fem_abl'] = $adjektiv->stamm . 'e';
                    $formen_3kons_positiv['sg_neutr_abl'] = $adjektiv->stamm . 'e';
                    $formen_3kons_positiv['pl_neutr_nom'] = $adjektiv->stamm . 'a';
                    $formen_3kons_positiv['pl_neutr_akk'] = $adjektiv->stamm . 'a';
                    $formen_3kons_positiv['pl_mask_gen'] = $adjektiv->stamm . 'um';
                    $formen_3kons_positiv['pl_fem_gen'] = $adjektiv->stamm . 'um';
                    $formen_3kons_positiv['pl_neutr_gen'] = $adjektiv->stamm . 'um';
                    $general_info = "Adjektiv der 3. Deklination auf -" . $adjektiv->endung_2 . " (Gruppe 2 nach RH §43,2) erkannt: Abl. Sg. auf -e, Gen. Pl. auf -um, Nom. und Akk. Pl. (Neutrum) auf -a,";
                }
                if (in_array($adjektiv->lemma, $adj_pos_gruppe2_ausnahmen))
                {
                    $formen_3kons_positiv['sg_mask_abl'] = $adjektiv->stamm . 'i';
                    $formen_3kons_positiv['sg_fem_abl'] = $adjektiv->stamm . 'i';
                    $formen_3kons_positiv['sg_neutr_abl'] = $adjektiv->stamm . 'i';
                    $formen_3kons_positiv['pl_neutr_nom'] = $adjektiv->stamm . 'a';
                    $formen_3kons_positiv['pl_neutr_akk'] = $adjektiv->stamm . 'a';
                    $formen_3kons_positiv['pl_mask_gen'] = $adjektiv->stamm . 'um';
                    $formen_3kons_positiv['pl_fem_gen'] = $adjektiv->stamm . 'um';
                    $formen_3kons_positiv['pl_neutr_gen'] = $adjektiv->stamm . 'um';
                    $general_info = "Adjektiv der 3. Deklination auf -" . $adjektiv->endung_2. " (Gruppe 2 nach RH §43,2) erkannt: Abl. Sg. auf -i, Gen. Pl. auf -um, Nom. und Akk. Pl. (Neutrum) auf -a,";
                }

                insert_adjektiv_3_deklination($adjektiv, $formen_positiv, $formen_komparativ, $formen_superlativ);
                break;



            /*----------- FALL: Keine Deklination -----------*/
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
    echo $general_info . "<br>";
    echo $steigerung_info . "<br>";
    echo $warning . "<br>";
    echo $status . "<br>";
echo "<br></div><br><br>";



preview_adjektiv_table($adjektiv);



?>
