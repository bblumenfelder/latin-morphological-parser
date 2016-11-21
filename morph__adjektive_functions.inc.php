<?php



/*=============================================>>>>>
= Formen fuer Sonderform generieren =
===============================================>>>>>*/
function insert_adjektiv_s($adjektiv) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load($adjektiv->xml_filename);


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'adjektiv');
    $neueswort_tag->setAttribute('genera', $adjektiv->genera);
    $neueswort_tag->setAttribute('id', $adjektiv->id);
    $neueswort_tag->setAttribute('sonderform', 'true');
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($adjektiv->lemma);
    //APPEND
    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);
    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    $neueswort_positiv_tag = $xml_dom->createElement('positiv');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_tag = $xml_dom->createElement('singular');
    $neueswort_positiv_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_positiv_tag);
    $neueswort_positiv_tag->appendChild($neueswort_positiv_singular_tag);
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_mask_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_nom_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_gen_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_dat_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_akk_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_vok_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_mask_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_mask_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_mask_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_mask_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_mask_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_mask_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_mask_nom_tag->appendChild($neueswort_positiv_singular_mask_nom);
    $neueswort_positiv_singular_mask_gen_tag->appendChild($neueswort_positiv_singular_mask_gen);
    $neueswort_positiv_singular_mask_dat_tag->appendChild($neueswort_positiv_singular_mask_dat);
    $neueswort_positiv_singular_mask_akk_tag->appendChild($neueswort_positiv_singular_mask_akk);
    $neueswort_positiv_singular_mask_vok_tag->appendChild($neueswort_positiv_singular_mask_vok);
    $neueswort_positiv_singular_mask_abl_tag->appendChild($neueswort_positiv_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_fem_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_nom_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_gen_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_dat_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_akk_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_vok_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_fem_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_fem_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_fem_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_fem_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_fem_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_fem_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_fem_nom_tag->appendChild($neueswort_positiv_singular_fem_nom);
    $neueswort_positiv_singular_fem_gen_tag->appendChild($neueswort_positiv_singular_fem_gen);
    $neueswort_positiv_singular_fem_dat_tag->appendChild($neueswort_positiv_singular_fem_dat);
    $neueswort_positiv_singular_fem_akk_tag->appendChild($neueswort_positiv_singular_fem_akk);
    $neueswort_positiv_singular_fem_vok_tag->appendChild($neueswort_positiv_singular_fem_vok);
    $neueswort_positiv_singular_fem_abl_tag->appendChild($neueswort_positiv_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_neutr_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_nom_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_gen_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_dat_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_akk_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_vok_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_neutr_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_neutr_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_neutr_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_neutr_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_neutr_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_singular_neutr_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_singular_neutr_nom_tag->appendChild($neueswort_positiv_singular_neutr_nom);
    $neueswort_positiv_singular_neutr_gen_tag->appendChild($neueswort_positiv_singular_neutr_gen);
    $neueswort_positiv_singular_neutr_dat_tag->appendChild($neueswort_positiv_singular_neutr_dat);
    $neueswort_positiv_singular_neutr_akk_tag->appendChild($neueswort_positiv_singular_neutr_akk);
    $neueswort_positiv_singular_neutr_vok_tag->appendChild($neueswort_positiv_singular_neutr_vok);
    $neueswort_positiv_singular_neutr_abl_tag->appendChild($neueswort_positiv_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_tag = $xml_dom->createElement('plural');
    $neueswort_positiv_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_tag->appendChild($neueswort_positiv_plural_tag);
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_mask_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_nom_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_gen_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_dat_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_akk_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_vok_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_mask_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_mask_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_mask_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_mask_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_mask_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_mask_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_mask_nom_tag->appendChild($neueswort_positiv_plural_mask_nom);
    $neueswort_positiv_plural_mask_gen_tag->appendChild($neueswort_positiv_plural_mask_gen);
    $neueswort_positiv_plural_mask_dat_tag->appendChild($neueswort_positiv_plural_mask_dat);
    $neueswort_positiv_plural_mask_akk_tag->appendChild($neueswort_positiv_plural_mask_akk);
    $neueswort_positiv_plural_mask_vok_tag->appendChild($neueswort_positiv_plural_mask_vok);
    $neueswort_positiv_plural_mask_abl_tag->appendChild($neueswort_positiv_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_fem_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_nom_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_gen_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_dat_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_akk_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_vok_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_fem_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_fem_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_fem_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_fem_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_fem_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_fem_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_fem_nom_tag->appendChild($neueswort_positiv_plural_fem_nom);
    $neueswort_positiv_plural_fem_gen_tag->appendChild($neueswort_positiv_plural_fem_gen);
    $neueswort_positiv_plural_fem_dat_tag->appendChild($neueswort_positiv_plural_fem_dat);
    $neueswort_positiv_plural_fem_akk_tag->appendChild($neueswort_positiv_plural_fem_akk);
    $neueswort_positiv_plural_fem_vok_tag->appendChild($neueswort_positiv_plural_fem_vok);
    $neueswort_positiv_plural_fem_abl_tag->appendChild($neueswort_positiv_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_neutr_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_nom_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_gen_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_dat_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_akk_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_vok_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_neutr_nom = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_neutr_gen = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_neutr_dat = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_neutr_akk = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_neutr_vok = $xml_dom->createTextNode($adjektiv->lemma);
    $neueswort_positiv_plural_neutr_abl = $xml_dom->createTextNode($adjektiv->stamm);
    $neueswort_positiv_plural_neutr_nom_tag->appendChild($neueswort_positiv_plural_neutr_nom);
    $neueswort_positiv_plural_neutr_gen_tag->appendChild($neueswort_positiv_plural_neutr_gen);
    $neueswort_positiv_plural_neutr_dat_tag->appendChild($neueswort_positiv_plural_neutr_dat);
    $neueswort_positiv_plural_neutr_akk_tag->appendChild($neueswort_positiv_plural_neutr_akk);
    $neueswort_positiv_plural_neutr_vok_tag->appendChild($neueswort_positiv_plural_neutr_vok);
    $neueswort_positiv_plural_neutr_abl_tag->appendChild($neueswort_positiv_plural_neutr_abl);



    /*=============================================>>>>>
    = KOMPARATIV =
    ===============================================>>>>>*/
    $neueswort_komparativ_tag = $xml_dom->createElement('komparativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_komparativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_komparativ_tag);
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_singular_tag);
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_mask_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_nom_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_gen_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_dat_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_akk_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_vok_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_mask_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_mask_nom_tag->appendChild($neueswort_komparativ_singular_mask_nom);
    $neueswort_komparativ_singular_mask_gen_tag->appendChild($neueswort_komparativ_singular_mask_gen);
    $neueswort_komparativ_singular_mask_dat_tag->appendChild($neueswort_komparativ_singular_mask_dat);
    $neueswort_komparativ_singular_mask_akk_tag->appendChild($neueswort_komparativ_singular_mask_akk);
    $neueswort_komparativ_singular_mask_vok_tag->appendChild($neueswort_komparativ_singular_mask_vok);
    $neueswort_komparativ_singular_mask_abl_tag->appendChild($neueswort_komparativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_fem_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_nom_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_gen_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_dat_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_akk_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_vok_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_fem_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_fem_nom_tag->appendChild($neueswort_komparativ_singular_fem_nom);
    $neueswort_komparativ_singular_fem_gen_tag->appendChild($neueswort_komparativ_singular_fem_gen);
    $neueswort_komparativ_singular_fem_dat_tag->appendChild($neueswort_komparativ_singular_fem_dat);
    $neueswort_komparativ_singular_fem_akk_tag->appendChild($neueswort_komparativ_singular_fem_akk);
    $neueswort_komparativ_singular_fem_vok_tag->appendChild($neueswort_komparativ_singular_fem_vok);
    $neueswort_komparativ_singular_fem_abl_tag->appendChild($neueswort_komparativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_neutr_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_nom_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_gen_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_dat_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_akk_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_vok_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_neutr_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_singular_neutr_nom_tag->appendChild($neueswort_komparativ_singular_neutr_nom);
    $neueswort_komparativ_singular_neutr_gen_tag->appendChild($neueswort_komparativ_singular_neutr_gen);
    $neueswort_komparativ_singular_neutr_dat_tag->appendChild($neueswort_komparativ_singular_neutr_dat);
    $neueswort_komparativ_singular_neutr_akk_tag->appendChild($neueswort_komparativ_singular_neutr_akk);
    $neueswort_komparativ_singular_neutr_vok_tag->appendChild($neueswort_komparativ_singular_neutr_vok);
    $neueswort_komparativ_singular_neutr_abl_tag->appendChild($neueswort_komparativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_komparativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_plural_tag);
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_mask_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_nom_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_gen_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_dat_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_akk_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_vok_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_mask_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_mask_nom_tag->appendChild($neueswort_komparativ_plural_mask_nom);
    $neueswort_komparativ_plural_mask_gen_tag->appendChild($neueswort_komparativ_plural_mask_gen);
    $neueswort_komparativ_plural_mask_dat_tag->appendChild($neueswort_komparativ_plural_mask_dat);
    $neueswort_komparativ_plural_mask_akk_tag->appendChild($neueswort_komparativ_plural_mask_akk);
    $neueswort_komparativ_plural_mask_vok_tag->appendChild($neueswort_komparativ_plural_mask_vok);
    $neueswort_komparativ_plural_mask_abl_tag->appendChild($neueswort_komparativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_fem_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_nom_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_gen_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_dat_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_akk_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_vok_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_fem_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_fem_nom_tag->appendChild($neueswort_komparativ_plural_fem_nom);
    $neueswort_komparativ_plural_fem_gen_tag->appendChild($neueswort_komparativ_plural_fem_gen);
    $neueswort_komparativ_plural_fem_dat_tag->appendChild($neueswort_komparativ_plural_fem_dat);
    $neueswort_komparativ_plural_fem_akk_tag->appendChild($neueswort_komparativ_plural_fem_akk);
    $neueswort_komparativ_plural_fem_vok_tag->appendChild($neueswort_komparativ_plural_fem_vok);
    $neueswort_komparativ_plural_fem_abl_tag->appendChild($neueswort_komparativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_neutr_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_nom_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_gen_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_dat_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_akk_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_vok_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_neutr_nom = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_gen = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_dat = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_akk = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_vok = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_abl = $xml_dom->createTextNode($adjektiv->komparativ);
    $neueswort_komparativ_plural_neutr_nom_tag->appendChild($neueswort_komparativ_plural_neutr_nom);
    $neueswort_komparativ_plural_neutr_gen_tag->appendChild($neueswort_komparativ_plural_neutr_gen);
    $neueswort_komparativ_plural_neutr_dat_tag->appendChild($neueswort_komparativ_plural_neutr_dat);
    $neueswort_komparativ_plural_neutr_akk_tag->appendChild($neueswort_komparativ_plural_neutr_akk);
    $neueswort_komparativ_plural_neutr_vok_tag->appendChild($neueswort_komparativ_plural_neutr_vok);
    $neueswort_komparativ_plural_neutr_abl_tag->appendChild($neueswort_komparativ_plural_neutr_abl);



    /*=============================================>>>>>
    = SUPERLATIV =
    ===============================================>>>>>*/
    $neueswort_superlativ_tag = $xml_dom->createElement('superlativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_superlativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_superlativ_tag);
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_singular_tag);
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_mask_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_nom_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_gen_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_dat_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_akk_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_vok_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_mask_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_mask_nom_tag->appendChild($neueswort_superlativ_singular_mask_nom);
    $neueswort_superlativ_singular_mask_gen_tag->appendChild($neueswort_superlativ_singular_mask_gen);
    $neueswort_superlativ_singular_mask_dat_tag->appendChild($neueswort_superlativ_singular_mask_dat);
    $neueswort_superlativ_singular_mask_akk_tag->appendChild($neueswort_superlativ_singular_mask_akk);
    $neueswort_superlativ_singular_mask_vok_tag->appendChild($neueswort_superlativ_singular_mask_vok);
    $neueswort_superlativ_singular_mask_abl_tag->appendChild($neueswort_superlativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_fem_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_nom_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_gen_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_dat_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_akk_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_vok_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_fem_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_fem_nom_tag->appendChild($neueswort_superlativ_singular_fem_nom);
    $neueswort_superlativ_singular_fem_gen_tag->appendChild($neueswort_superlativ_singular_fem_gen);
    $neueswort_superlativ_singular_fem_dat_tag->appendChild($neueswort_superlativ_singular_fem_dat);
    $neueswort_superlativ_singular_fem_akk_tag->appendChild($neueswort_superlativ_singular_fem_akk);
    $neueswort_superlativ_singular_fem_vok_tag->appendChild($neueswort_superlativ_singular_fem_vok);
    $neueswort_superlativ_singular_fem_abl_tag->appendChild($neueswort_superlativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_neutr_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_nom_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_gen_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_dat_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_akk_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_vok_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_neutr_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_singular_neutr_nom_tag->appendChild($neueswort_superlativ_singular_neutr_nom);
    $neueswort_superlativ_singular_neutr_gen_tag->appendChild($neueswort_superlativ_singular_neutr_gen);
    $neueswort_superlativ_singular_neutr_dat_tag->appendChild($neueswort_superlativ_singular_neutr_dat);
    $neueswort_superlativ_singular_neutr_akk_tag->appendChild($neueswort_superlativ_singular_neutr_akk);
    $neueswort_superlativ_singular_neutr_vok_tag->appendChild($neueswort_superlativ_singular_neutr_vok);
    $neueswort_superlativ_singular_neutr_abl_tag->appendChild($neueswort_superlativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_superlativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_plural_tag);
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_mask_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_nom_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_gen_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_dat_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_akk_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_vok_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_mask_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_mask_nom_tag->appendChild($neueswort_superlativ_plural_mask_nom);
    $neueswort_superlativ_plural_mask_gen_tag->appendChild($neueswort_superlativ_plural_mask_gen);
    $neueswort_superlativ_plural_mask_dat_tag->appendChild($neueswort_superlativ_plural_mask_dat);
    $neueswort_superlativ_plural_mask_akk_tag->appendChild($neueswort_superlativ_plural_mask_akk);
    $neueswort_superlativ_plural_mask_vok_tag->appendChild($neueswort_superlativ_plural_mask_vok);
    $neueswort_superlativ_plural_mask_abl_tag->appendChild($neueswort_superlativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_fem_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_nom_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_gen_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_dat_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_akk_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_vok_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_fem_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_fem_nom_tag->appendChild($neueswort_superlativ_plural_fem_nom);
    $neueswort_superlativ_plural_fem_gen_tag->appendChild($neueswort_superlativ_plural_fem_gen);
    $neueswort_superlativ_plural_fem_dat_tag->appendChild($neueswort_superlativ_plural_fem_dat);
    $neueswort_superlativ_plural_fem_akk_tag->appendChild($neueswort_superlativ_plural_fem_akk);
    $neueswort_superlativ_plural_fem_vok_tag->appendChild($neueswort_superlativ_plural_fem_vok);
    $neueswort_superlativ_plural_fem_abl_tag->appendChild($neueswort_superlativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_neutr_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_nom_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_gen_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_dat_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_akk_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_vok_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_neutr_nom = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_gen = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_dat = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_akk = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_vok = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_abl = $xml_dom->createTextNode($adjektiv->superlativ);
    $neueswort_superlativ_plural_neutr_nom_tag->appendChild($neueswort_superlativ_plural_neutr_nom);
    $neueswort_superlativ_plural_neutr_gen_tag->appendChild($neueswort_superlativ_plural_neutr_gen);
    $neueswort_superlativ_plural_neutr_dat_tag->appendChild($neueswort_superlativ_plural_neutr_dat);
    $neueswort_superlativ_plural_neutr_akk_tag->appendChild($neueswort_superlativ_plural_neutr_akk);
    $neueswort_superlativ_plural_neutr_vok_tag->appendChild($neueswort_superlativ_plural_neutr_vok);
    $neueswort_superlativ_plural_neutr_abl_tag->appendChild($neueswort_superlativ_plural_neutr_abl);

    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->save($adjektiv->xml_filename);
}




/*=============================================>>>>>
= Formen fuer A-O-Deklination generieren =
===============================================>>>>>*/
function insert_adjektiv_ao_deklination($adjektiv, $formen_positiv, $formen_komparativ, $formen_superlativ) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load($adjektiv->xml_filename);


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'adjektiv');
    $neueswort_tag->setAttribute('genera', $adjektiv->genera);
    $neueswort_tag->setAttribute('id', $adjektiv->id);
    $neueswort_tag->setAttribute('sonderform', 'true');
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($adjektiv->lemma);
    //APPEND
    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);
    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);

    // Vokativ Mask. Singular
    switch ($adjektiv->endung_2)
    {
        case 'us':
            $vokativ = $adjektiv->stamm . 'e';
            break;

        case 'er':
            $vokativ = $adjektiv->lemma;
            break;
    }


    /*=============================================>>>>>
    = POSITIV =
    ===============================================>>>>>*/
    $neueswort_positiv_tag = $xml_dom->createElement('positiv');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_tag = $xml_dom->createElement('singular');
    $neueswort_positiv_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_positiv_tag);
    $neueswort_positiv_tag->appendChild($neueswort_positiv_singular_tag);
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_mask_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_nom_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_gen_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_dat_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_akk_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_vok_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_mask_nom = $xml_dom->createTextNode($formen_positiv['sg_mask_nom']);
    $neueswort_positiv_singular_mask_gen = $xml_dom->createTextNode($formen_positiv['sg_mask_gen']);
    $neueswort_positiv_singular_mask_dat = $xml_dom->createTextNode($formen_positiv['sg_mask_dat']);
    $neueswort_positiv_singular_mask_akk = $xml_dom->createTextNode($formen_positiv['sg_mask_akk']);
    $neueswort_positiv_singular_mask_vok = $xml_dom->createTextNode($formen_positiv['sg_mask_vok']);
    $neueswort_positiv_singular_mask_abl = $xml_dom->createTextNode($formen_positiv['sg_mask_abl']);
    $neueswort_positiv_singular_mask_nom_tag->appendChild($neueswort_positiv_singular_mask_nom);
    $neueswort_positiv_singular_mask_gen_tag->appendChild($neueswort_positiv_singular_mask_gen);
    $neueswort_positiv_singular_mask_dat_tag->appendChild($neueswort_positiv_singular_mask_dat);
    $neueswort_positiv_singular_mask_akk_tag->appendChild($neueswort_positiv_singular_mask_akk);
    $neueswort_positiv_singular_mask_vok_tag->appendChild($neueswort_positiv_singular_mask_vok);
    $neueswort_positiv_singular_mask_abl_tag->appendChild($neueswort_positiv_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_fem_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_nom_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_gen_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_dat_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_akk_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_vok_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_fem_nom = $xml_dom->createTextNode($formen_positiv['sg_fem_nom']);
    $neueswort_positiv_singular_fem_gen = $xml_dom->createTextNode($formen_positiv['sg_fem_gen']);
    $neueswort_positiv_singular_fem_dat = $xml_dom->createTextNode($formen_positiv['sg_fem_dat']);
    $neueswort_positiv_singular_fem_akk = $xml_dom->createTextNode($formen_positiv['sg_fem_akk']);
    $neueswort_positiv_singular_fem_vok = $xml_dom->createTextNode($formen_positiv['sg_fem_vok']);
    $neueswort_positiv_singular_fem_abl = $xml_dom->createTextNode($formen_positiv['sg_fem_abl']);
    $neueswort_positiv_singular_fem_nom_tag->appendChild($neueswort_positiv_singular_fem_nom);
    $neueswort_positiv_singular_fem_gen_tag->appendChild($neueswort_positiv_singular_fem_gen);
    $neueswort_positiv_singular_fem_dat_tag->appendChild($neueswort_positiv_singular_fem_dat);
    $neueswort_positiv_singular_fem_akk_tag->appendChild($neueswort_positiv_singular_fem_akk);
    $neueswort_positiv_singular_fem_vok_tag->appendChild($neueswort_positiv_singular_fem_vok);
    $neueswort_positiv_singular_fem_abl_tag->appendChild($neueswort_positiv_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_neutr_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_nom_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_gen_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_dat_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_akk_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_vok_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_neutr_nom = $xml_dom->createTextNode($formen_positiv['sg_neutr_nom']);
    $neueswort_positiv_singular_neutr_gen = $xml_dom->createTextNode($formen_positiv['sg_neutr_gen']);
    $neueswort_positiv_singular_neutr_dat = $xml_dom->createTextNode($formen_positiv['sg_neutr_dat']);
    $neueswort_positiv_singular_neutr_akk = $xml_dom->createTextNode($formen_positiv['sg_neutr_akk']);
    $neueswort_positiv_singular_neutr_vok = $xml_dom->createTextNode($formen_positiv['sg_neutr_vok']);
    $neueswort_positiv_singular_neutr_abl = $xml_dom->createTextNode($formen_positiv['sg_neutr_abl']);
    $neueswort_positiv_singular_neutr_nom_tag->appendChild($neueswort_positiv_singular_neutr_nom);
    $neueswort_positiv_singular_neutr_gen_tag->appendChild($neueswort_positiv_singular_neutr_gen);
    $neueswort_positiv_singular_neutr_dat_tag->appendChild($neueswort_positiv_singular_neutr_dat);
    $neueswort_positiv_singular_neutr_akk_tag->appendChild($neueswort_positiv_singular_neutr_akk);
    $neueswort_positiv_singular_neutr_vok_tag->appendChild($neueswort_positiv_singular_neutr_vok);
    $neueswort_positiv_singular_neutr_abl_tag->appendChild($neueswort_positiv_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_tag = $xml_dom->createElement('plural');
    $neueswort_positiv_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_tag->appendChild($neueswort_positiv_plural_tag);
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_mask_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_nom_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_gen_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_dat_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_akk_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_vok_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_mask_nom = $xml_dom->createTextNode($adjektiv->stamm . 'i');
    $neueswort_positiv_plural_mask_gen = $xml_dom->createTextNode($adjektiv->stamm . 'orum');
    $neueswort_positiv_plural_mask_dat = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_mask_akk = $xml_dom->createTextNode($adjektiv->stamm . 'os');
    $neueswort_positiv_plural_mask_vok = $xml_dom->createTextNode($adjektiv->stamm . 'i');
    $neueswort_positiv_plural_mask_abl = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_mask_nom_tag->appendChild($neueswort_positiv_plural_mask_nom);
    $neueswort_positiv_plural_mask_gen_tag->appendChild($neueswort_positiv_plural_mask_gen);
    $neueswort_positiv_plural_mask_dat_tag->appendChild($neueswort_positiv_plural_mask_dat);
    $neueswort_positiv_plural_mask_akk_tag->appendChild($neueswort_positiv_plural_mask_akk);
    $neueswort_positiv_plural_mask_vok_tag->appendChild($neueswort_positiv_plural_mask_vok);
    $neueswort_positiv_plural_mask_abl_tag->appendChild($neueswort_positiv_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_fem_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_nom_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_gen_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_dat_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_akk_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_vok_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_fem_nom = $xml_dom->createTextNode($adjektiv->stamm . 'ae');
    $neueswort_positiv_plural_fem_gen = $xml_dom->createTextNode($adjektiv->stamm . 'arum');
    $neueswort_positiv_plural_fem_dat = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_fem_akk = $xml_dom->createTextNode($adjektiv->stamm . 'as');
    $neueswort_positiv_plural_fem_vok = $xml_dom->createTextNode($adjektiv->stamm . 'ae');
    $neueswort_positiv_plural_fem_abl = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_fem_nom_tag->appendChild($neueswort_positiv_plural_fem_nom);
    $neueswort_positiv_plural_fem_gen_tag->appendChild($neueswort_positiv_plural_fem_gen);
    $neueswort_positiv_plural_fem_dat_tag->appendChild($neueswort_positiv_plural_fem_dat);
    $neueswort_positiv_plural_fem_akk_tag->appendChild($neueswort_positiv_plural_fem_akk);
    $neueswort_positiv_plural_fem_vok_tag->appendChild($neueswort_positiv_plural_fem_vok);
    $neueswort_positiv_plural_fem_abl_tag->appendChild($neueswort_positiv_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_neutr_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_nom_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_gen_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_dat_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_akk_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_vok_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_neutr_nom = $xml_dom->createTextNode($adjektiv->stamm . 'a');
    $neueswort_positiv_plural_neutr_gen = $xml_dom->createTextNode($adjektiv->stamm . 'orum');
    $neueswort_positiv_plural_neutr_dat = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_neutr_akk = $xml_dom->createTextNode($adjektiv->stamm . 'a');
    $neueswort_positiv_plural_neutr_vok = $xml_dom->createTextNode($adjektiv->stamm . 'a');
    $neueswort_positiv_plural_neutr_abl = $xml_dom->createTextNode($adjektiv->stamm . 'is');
    $neueswort_positiv_plural_neutr_nom_tag->appendChild($neueswort_positiv_plural_neutr_nom);
    $neueswort_positiv_plural_neutr_gen_tag->appendChild($neueswort_positiv_plural_neutr_gen);
    $neueswort_positiv_plural_neutr_dat_tag->appendChild($neueswort_positiv_plural_neutr_dat);
    $neueswort_positiv_plural_neutr_akk_tag->appendChild($neueswort_positiv_plural_neutr_akk);
    $neueswort_positiv_plural_neutr_vok_tag->appendChild($neueswort_positiv_plural_neutr_vok);
    $neueswort_positiv_plural_neutr_abl_tag->appendChild($neueswort_positiv_plural_neutr_abl);


    /*=============================================>>>>>
    = KOMPARATIV =
    ===============================================>>>>>*/
    $neueswort_komparativ_tag = $xml_dom->createElement('komparativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_komparativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_komparativ_tag);
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_singular_tag);
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_mask_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_nom_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_gen_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_dat_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_akk_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_vok_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_mask_nom = $xml_dom->createTextNode($formen_komparativ['sg_mask_nom']);
    $neueswort_komparativ_singular_mask_gen = $xml_dom->createTextNode($formen_komparativ['sg_mask_gen']);
    $neueswort_komparativ_singular_mask_dat = $xml_dom->createTextNode($formen_komparativ['sg_mask_dat']);
    $neueswort_komparativ_singular_mask_akk = $xml_dom->createTextNode($formen_komparativ['sg_mask_akk']);
    $neueswort_komparativ_singular_mask_vok = $xml_dom->createTextNode($formen_komparativ['sg_mask_vok']);
    $neueswort_komparativ_singular_mask_abl = $xml_dom->createTextNode($formen_komparativ['sg_mask_abl']);
    $neueswort_komparativ_singular_mask_nom_tag->appendChild($neueswort_komparativ_singular_mask_nom);
    $neueswort_komparativ_singular_mask_gen_tag->appendChild($neueswort_komparativ_singular_mask_gen);
    $neueswort_komparativ_singular_mask_dat_tag->appendChild($neueswort_komparativ_singular_mask_dat);
    $neueswort_komparativ_singular_mask_akk_tag->appendChild($neueswort_komparativ_singular_mask_akk);
    $neueswort_komparativ_singular_mask_vok_tag->appendChild($neueswort_komparativ_singular_mask_vok);
    $neueswort_komparativ_singular_mask_abl_tag->appendChild($neueswort_komparativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_fem_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_nom_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_gen_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_dat_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_akk_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_vok_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_fem_nom = $xml_dom->createTextNode($formen_komparativ['sg_fem_nom']);
    $neueswort_komparativ_singular_fem_gen = $xml_dom->createTextNode($formen_komparativ['sg_fem_gen']);
    $neueswort_komparativ_singular_fem_dat = $xml_dom->createTextNode($formen_komparativ['sg_fem_dat']);
    $neueswort_komparativ_singular_fem_akk = $xml_dom->createTextNode($formen_komparativ['sg_fem_akk']);
    $neueswort_komparativ_singular_fem_vok = $xml_dom->createTextNode($formen_komparativ['sg_fem_vok']);
    $neueswort_komparativ_singular_fem_abl = $xml_dom->createTextNode($formen_komparativ['sg_fem_abl']);
    $neueswort_komparativ_singular_fem_nom_tag->appendChild($neueswort_komparativ_singular_fem_nom);
    $neueswort_komparativ_singular_fem_gen_tag->appendChild($neueswort_komparativ_singular_fem_gen);
    $neueswort_komparativ_singular_fem_dat_tag->appendChild($neueswort_komparativ_singular_fem_dat);
    $neueswort_komparativ_singular_fem_akk_tag->appendChild($neueswort_komparativ_singular_fem_akk);
    $neueswort_komparativ_singular_fem_vok_tag->appendChild($neueswort_komparativ_singular_fem_vok);
    $neueswort_komparativ_singular_fem_abl_tag->appendChild($neueswort_komparativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_neutr_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_nom_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_gen_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_dat_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_akk_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_vok_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_neutr_nom = $xml_dom->createTextNode($formen_komparativ['sg_neutr_nom']);
    $neueswort_komparativ_singular_neutr_gen = $xml_dom->createTextNode($formen_komparativ['sg_neutr_gen']);
    $neueswort_komparativ_singular_neutr_dat = $xml_dom->createTextNode($formen_komparativ['sg_neutr_dat']);
    $neueswort_komparativ_singular_neutr_akk = $xml_dom->createTextNode($formen_komparativ['sg_neutr_akk']);
    $neueswort_komparativ_singular_neutr_vok = $xml_dom->createTextNode($formen_komparativ['sg_neutr_vok']);
    $neueswort_komparativ_singular_neutr_abl = $xml_dom->createTextNode($formen_komparativ['sg_neutr_abl']);
    $neueswort_komparativ_singular_neutr_nom_tag->appendChild($neueswort_komparativ_singular_neutr_nom);
    $neueswort_komparativ_singular_neutr_gen_tag->appendChild($neueswort_komparativ_singular_neutr_gen);
    $neueswort_komparativ_singular_neutr_dat_tag->appendChild($neueswort_komparativ_singular_neutr_dat);
    $neueswort_komparativ_singular_neutr_akk_tag->appendChild($neueswort_komparativ_singular_neutr_akk);
    $neueswort_komparativ_singular_neutr_vok_tag->appendChild($neueswort_komparativ_singular_neutr_vok);
    $neueswort_komparativ_singular_neutr_abl_tag->appendChild($neueswort_komparativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_komparativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_plural_tag);
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_mask_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_nom_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_gen_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_dat_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_akk_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_vok_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_mask_nom = $xml_dom->createTextNode($formen_komparativ['pl_mask_nom']);
    $neueswort_komparativ_plural_mask_gen = $xml_dom->createTextNode($formen_komparativ['pl_mask_gen']);
    $neueswort_komparativ_plural_mask_dat = $xml_dom->createTextNode($formen_komparativ['pl_mask_dat']);
    $neueswort_komparativ_plural_mask_akk = $xml_dom->createTextNode($formen_komparativ['pl_mask_akk']);
    $neueswort_komparativ_plural_mask_vok = $xml_dom->createTextNode($formen_komparativ['pl_mask_vok']);
    $neueswort_komparativ_plural_mask_abl = $xml_dom->createTextNode($formen_komparativ['pl_mask_abl']);
    $neueswort_komparativ_plural_mask_nom_tag->appendChild($neueswort_komparativ_plural_mask_nom);
    $neueswort_komparativ_plural_mask_gen_tag->appendChild($neueswort_komparativ_plural_mask_gen);
    $neueswort_komparativ_plural_mask_dat_tag->appendChild($neueswort_komparativ_plural_mask_dat);
    $neueswort_komparativ_plural_mask_akk_tag->appendChild($neueswort_komparativ_plural_mask_akk);
    $neueswort_komparativ_plural_mask_vok_tag->appendChild($neueswort_komparativ_plural_mask_vok);
    $neueswort_komparativ_plural_mask_abl_tag->appendChild($neueswort_komparativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_fem_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_nom_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_gen_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_dat_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_akk_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_vok_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_fem_nom = $xml_dom->createTextNode($formen_komparativ['pl_fem_nom']);
    $neueswort_komparativ_plural_fem_gen = $xml_dom->createTextNode($formen_komparativ['pl_fem_gen']);
    $neueswort_komparativ_plural_fem_dat = $xml_dom->createTextNode($formen_komparativ['pl_fem_dat']);
    $neueswort_komparativ_plural_fem_akk = $xml_dom->createTextNode($formen_komparativ['pl_fem_akk']);
    $neueswort_komparativ_plural_fem_vok = $xml_dom->createTextNode($formen_komparativ['pl_fem_vok']);
    $neueswort_komparativ_plural_fem_abl = $xml_dom->createTextNode($formen_komparativ['pl_fem_abl']);
    $neueswort_komparativ_plural_fem_nom_tag->appendChild($neueswort_komparativ_plural_fem_nom);
    $neueswort_komparativ_plural_fem_gen_tag->appendChild($neueswort_komparativ_plural_fem_gen);
    $neueswort_komparativ_plural_fem_dat_tag->appendChild($neueswort_komparativ_plural_fem_dat);
    $neueswort_komparativ_plural_fem_akk_tag->appendChild($neueswort_komparativ_plural_fem_akk);
    $neueswort_komparativ_plural_fem_vok_tag->appendChild($neueswort_komparativ_plural_fem_vok);
    $neueswort_komparativ_plural_fem_abl_tag->appendChild($neueswort_komparativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_neutr_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_nom_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_gen_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_dat_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_akk_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_vok_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_neutr_nom = $xml_dom->createTextNode($formen_komparativ['pl_neutr_nom']);
    $neueswort_komparativ_plural_neutr_gen = $xml_dom->createTextNode($formen_komparativ['pl_neutr_gen']);
    $neueswort_komparativ_plural_neutr_dat = $xml_dom->createTextNode($formen_komparativ['pl_neutr_dat']);
    $neueswort_komparativ_plural_neutr_akk = $xml_dom->createTextNode($formen_komparativ['pl_neutr_akk']);
    $neueswort_komparativ_plural_neutr_vok = $xml_dom->createTextNode($formen_komparativ['pl_neutr_vok']);
    $neueswort_komparativ_plural_neutr_abl = $xml_dom->createTextNode($formen_komparativ['pl_neutr_abl']);
    $neueswort_komparativ_plural_neutr_nom_tag->appendChild($neueswort_komparativ_plural_neutr_nom);
    $neueswort_komparativ_plural_neutr_gen_tag->appendChild($neueswort_komparativ_plural_neutr_gen);
    $neueswort_komparativ_plural_neutr_dat_tag->appendChild($neueswort_komparativ_plural_neutr_dat);
    $neueswort_komparativ_plural_neutr_akk_tag->appendChild($neueswort_komparativ_plural_neutr_akk);
    $neueswort_komparativ_plural_neutr_vok_tag->appendChild($neueswort_komparativ_plural_neutr_vok);
    $neueswort_komparativ_plural_neutr_abl_tag->appendChild($neueswort_komparativ_plural_neutr_abl);




    /*=============================================>>>>>
    = SUPERLATIV =
    ===============================================>>>>>*/
    $neueswort_superlativ_tag = $xml_dom->createElement('superlativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_superlativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_superlativ_tag);
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_singular_tag);
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_mask_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_nom_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_gen_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_dat_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_akk_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_vok_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_mask_nom = $xml_dom->createTextNode($formen_superlativ['sg_mask_nom']);
    $neueswort_superlativ_singular_mask_gen = $xml_dom->createTextNode($formen_superlativ['sg_mask_gen']);
    $neueswort_superlativ_singular_mask_dat = $xml_dom->createTextNode($formen_superlativ['sg_mask_dat']);
    $neueswort_superlativ_singular_mask_akk = $xml_dom->createTextNode($formen_superlativ['sg_mask_akk']);
    $neueswort_superlativ_singular_mask_vok = $xml_dom->createTextNode($formen_superlativ['sg_mask_vok']);
    $neueswort_superlativ_singular_mask_abl = $xml_dom->createTextNode($formen_superlativ['sg_mask_abl']);
    $neueswort_superlativ_singular_mask_nom_tag->appendChild($neueswort_superlativ_singular_mask_nom);
    $neueswort_superlativ_singular_mask_gen_tag->appendChild($neueswort_superlativ_singular_mask_gen);
    $neueswort_superlativ_singular_mask_dat_tag->appendChild($neueswort_superlativ_singular_mask_dat);
    $neueswort_superlativ_singular_mask_akk_tag->appendChild($neueswort_superlativ_singular_mask_akk);
    $neueswort_superlativ_singular_mask_vok_tag->appendChild($neueswort_superlativ_singular_mask_vok);
    $neueswort_superlativ_singular_mask_abl_tag->appendChild($neueswort_superlativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_fem_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_nom_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_gen_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_dat_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_akk_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_vok_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_fem_nom = $xml_dom->createTextNode($formen_superlativ['sg_fem_nom']);
    $neueswort_superlativ_singular_fem_gen = $xml_dom->createTextNode($formen_superlativ['sg_fem_gen']);
    $neueswort_superlativ_singular_fem_dat = $xml_dom->createTextNode($formen_superlativ['sg_fem_dat']);
    $neueswort_superlativ_singular_fem_akk = $xml_dom->createTextNode($formen_superlativ['sg_fem_akk']);
    $neueswort_superlativ_singular_fem_vok = $xml_dom->createTextNode($formen_superlativ['sg_fem_vok']);
    $neueswort_superlativ_singular_fem_abl = $xml_dom->createTextNode($formen_superlativ['sg_fem_abl']);
    $neueswort_superlativ_singular_fem_nom_tag->appendChild($neueswort_superlativ_singular_fem_nom);
    $neueswort_superlativ_singular_fem_gen_tag->appendChild($neueswort_superlativ_singular_fem_gen);
    $neueswort_superlativ_singular_fem_dat_tag->appendChild($neueswort_superlativ_singular_fem_dat);
    $neueswort_superlativ_singular_fem_akk_tag->appendChild($neueswort_superlativ_singular_fem_akk);
    $neueswort_superlativ_singular_fem_vok_tag->appendChild($neueswort_superlativ_singular_fem_vok);
    $neueswort_superlativ_singular_fem_abl_tag->appendChild($neueswort_superlativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_neutr_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_nom_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_gen_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_dat_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_akk_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_vok_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_neutr_nom = $xml_dom->createTextNode($formen_superlativ['sg_neutr_nom']);
    $neueswort_superlativ_singular_neutr_gen = $xml_dom->createTextNode($formen_superlativ['sg_neutr_gen']);
    $neueswort_superlativ_singular_neutr_dat = $xml_dom->createTextNode($formen_superlativ['sg_neutr_dat']);
    $neueswort_superlativ_singular_neutr_akk = $xml_dom->createTextNode($formen_superlativ['sg_neutr_akk']);
    $neueswort_superlativ_singular_neutr_vok = $xml_dom->createTextNode($formen_superlativ['sg_neutr_vok']);
    $neueswort_superlativ_singular_neutr_abl = $xml_dom->createTextNode($formen_superlativ['sg_neutr_abl']);
    $neueswort_superlativ_singular_neutr_nom_tag->appendChild($neueswort_superlativ_singular_neutr_nom);
    $neueswort_superlativ_singular_neutr_gen_tag->appendChild($neueswort_superlativ_singular_neutr_gen);
    $neueswort_superlativ_singular_neutr_dat_tag->appendChild($neueswort_superlativ_singular_neutr_dat);
    $neueswort_superlativ_singular_neutr_akk_tag->appendChild($neueswort_superlativ_singular_neutr_akk);
    $neueswort_superlativ_singular_neutr_vok_tag->appendChild($neueswort_superlativ_singular_neutr_vok);
    $neueswort_superlativ_singular_neutr_abl_tag->appendChild($neueswort_superlativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_superlativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_plural_tag);
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_mask_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_nom_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_gen_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_dat_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_akk_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_vok_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_mask_nom = $xml_dom->createTextNode($formen_superlativ['pl_mask_nom']);
    $neueswort_superlativ_plural_mask_gen = $xml_dom->createTextNode($formen_superlativ['pl_mask_gen']);
    $neueswort_superlativ_plural_mask_dat = $xml_dom->createTextNode($formen_superlativ['pl_mask_dat']);
    $neueswort_superlativ_plural_mask_akk = $xml_dom->createTextNode($formen_superlativ['pl_mask_akk']);
    $neueswort_superlativ_plural_mask_vok = $xml_dom->createTextNode($formen_superlativ['pl_mask_vok']);
    $neueswort_superlativ_plural_mask_abl = $xml_dom->createTextNode($formen_superlativ['pl_mask_abl']);
    $neueswort_superlativ_plural_mask_nom_tag->appendChild($neueswort_superlativ_plural_mask_nom);
    $neueswort_superlativ_plural_mask_gen_tag->appendChild($neueswort_superlativ_plural_mask_gen);
    $neueswort_superlativ_plural_mask_dat_tag->appendChild($neueswort_superlativ_plural_mask_dat);
    $neueswort_superlativ_plural_mask_akk_tag->appendChild($neueswort_superlativ_plural_mask_akk);
    $neueswort_superlativ_plural_mask_vok_tag->appendChild($neueswort_superlativ_plural_mask_vok);
    $neueswort_superlativ_plural_mask_abl_tag->appendChild($neueswort_superlativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_fem_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_nom_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_gen_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_dat_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_akk_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_vok_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_fem_nom = $xml_dom->createTextNode($formen_superlativ['pl_fem_nom']);
    $neueswort_superlativ_plural_fem_gen = $xml_dom->createTextNode($formen_superlativ['pl_fem_gen']);
    $neueswort_superlativ_plural_fem_dat = $xml_dom->createTextNode($formen_superlativ['pl_fem_dat']);
    $neueswort_superlativ_plural_fem_akk = $xml_dom->createTextNode($formen_superlativ['pl_fem_akk']);
    $neueswort_superlativ_plural_fem_vok = $xml_dom->createTextNode($formen_superlativ['pl_fem_vok']);
    $neueswort_superlativ_plural_fem_abl = $xml_dom->createTextNode($formen_superlativ['pl_fem_abl']);
    $neueswort_superlativ_plural_fem_nom_tag->appendChild($neueswort_superlativ_plural_fem_nom);
    $neueswort_superlativ_plural_fem_gen_tag->appendChild($neueswort_superlativ_plural_fem_gen);
    $neueswort_superlativ_plural_fem_dat_tag->appendChild($neueswort_superlativ_plural_fem_dat);
    $neueswort_superlativ_plural_fem_akk_tag->appendChild($neueswort_superlativ_plural_fem_akk);
    $neueswort_superlativ_plural_fem_vok_tag->appendChild($neueswort_superlativ_plural_fem_vok);
    $neueswort_superlativ_plural_fem_abl_tag->appendChild($neueswort_superlativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_neutr_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_nom_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_gen_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_dat_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_akk_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_vok_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_neutr_nom = $xml_dom->createTextNode($formen_superlativ['pl_neutr_nom']);
    $neueswort_superlativ_plural_neutr_gen = $xml_dom->createTextNode($formen_superlativ['pl_neutr_gen']);
    $neueswort_superlativ_plural_neutr_dat = $xml_dom->createTextNode($formen_superlativ['pl_neutr_dat']);
    $neueswort_superlativ_plural_neutr_akk = $xml_dom->createTextNode($formen_superlativ['pl_neutr_akk']);
    $neueswort_superlativ_plural_neutr_vok = $xml_dom->createTextNode($formen_superlativ['pl_neutr_vok']);
    $neueswort_superlativ_plural_neutr_abl = $xml_dom->createTextNode($formen_superlativ['pl_neutr_abl']);
    $neueswort_superlativ_plural_neutr_nom_tag->appendChild($neueswort_superlativ_plural_neutr_nom);
    $neueswort_superlativ_plural_neutr_gen_tag->appendChild($neueswort_superlativ_plural_neutr_gen);
    $neueswort_superlativ_plural_neutr_dat_tag->appendChild($neueswort_superlativ_plural_neutr_dat);
    $neueswort_superlativ_plural_neutr_akk_tag->appendChild($neueswort_superlativ_plural_neutr_akk);
    $neueswort_superlativ_plural_neutr_vok_tag->appendChild($neueswort_superlativ_plural_neutr_vok);
    $neueswort_superlativ_plural_neutr_abl_tag->appendChild($neueswort_superlativ_plural_neutr_abl);

    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->save($adjektiv->xml_filename);
}




/*=============================================>>>>>
= Formen fuer 3. Deklination generieren =
===============================================>>>>>*/
function insert_adjektiv_3_deklination($adjektiv, $formen_positiv, $formen_komparativ, $formen_superlativ) {

    $xml_dom = new DOMDocument('1.0');
    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->load($adjektiv->xml_filename);


    //CREATE    <wort>
    $neueswort_tag = $xml_dom->createElement("wort");
    //CREATE    <wort category='' id=''>
    $neueswort_tag->setAttribute('category', 'adjektiv');
    $neueswort_tag->setAttribute('genera', $adjektiv->genera);
    $neueswort_tag->setAttribute('id', $adjektiv->id);
    $neueswort_tag->setAttribute('sonderform', 'true');
    //CREATE    <wort><lemma>
    $neueswort_lemma_tag = $xml_dom->createElement('lemma');
    //CREATE    <wort><lemma> lemma
    $neueswort_lemma = $xml_dom->createTextNode($adjektiv->lemma);
    //APPEND
    $root_tag = $xml_dom->documentElement;
    //APPEND    <wort>
    $root_tag->appendChild($neueswort_tag);
    //APPEND    <wort><lemma>
    $neueswort_tag->appendChild($neueswort_lemma_tag);
    //APPEND    <wort><lemma> lemma
    $neueswort_lemma_tag->appendChild($neueswort_lemma);


    /*=============================================>>>>>
    = POSITIV =
    ===============================================>>>>>*/
    $neueswort_positiv_tag = $xml_dom->createElement('positiv');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_tag = $xml_dom->createElement('singular');
    $neueswort_positiv_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_positiv_tag);
    $neueswort_positiv_tag->appendChild($neueswort_positiv_singular_tag);
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_mask_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_nom_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_gen_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_dat_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_akk_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_vok_tag);
    $neueswort_positiv_singular_mask_tag->appendChild($neueswort_positiv_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_mask_nom = $xml_dom->createTextNode($formen_positiv['sg_mask_nom']);
    $neueswort_positiv_singular_mask_gen = $xml_dom->createTextNode($formen_positiv['sg_mask_gen']);
    $neueswort_positiv_singular_mask_dat = $xml_dom->createTextNode($formen_positiv['sg_mask_dat']);
    $neueswort_positiv_singular_mask_akk = $xml_dom->createTextNode($formen_positiv['sg_mask_akk']);
    $neueswort_positiv_singular_mask_vok = $xml_dom->createTextNode($formen_positiv['sg_mask_vok']);
    $neueswort_positiv_singular_mask_abl = $xml_dom->createTextNode($formen_positiv['sg_mask_abl']);
    $neueswort_positiv_singular_mask_nom_tag->appendChild($neueswort_positiv_singular_mask_nom);
    $neueswort_positiv_singular_mask_gen_tag->appendChild($neueswort_positiv_singular_mask_gen);
    $neueswort_positiv_singular_mask_dat_tag->appendChild($neueswort_positiv_singular_mask_dat);
    $neueswort_positiv_singular_mask_akk_tag->appendChild($neueswort_positiv_singular_mask_akk);
    $neueswort_positiv_singular_mask_vok_tag->appendChild($neueswort_positiv_singular_mask_vok);
    $neueswort_positiv_singular_mask_abl_tag->appendChild($neueswort_positiv_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_fem_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_nom_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_gen_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_dat_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_akk_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_vok_tag);
    $neueswort_positiv_singular_fem_tag->appendChild($neueswort_positiv_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_fem_nom = $xml_dom->createTextNode($formen_positiv['sg_fem_nom']);
    $neueswort_positiv_singular_fem_gen = $xml_dom->createTextNode($formen_positiv['sg_fem_gen']);
    $neueswort_positiv_singular_fem_dat = $xml_dom->createTextNode($formen_positiv['sg_fem_dat']);
    $neueswort_positiv_singular_fem_akk = $xml_dom->createTextNode($formen_positiv['sg_fem_akk']);
    $neueswort_positiv_singular_fem_vok = $xml_dom->createTextNode($formen_positiv['sg_fem_vok']);
    $neueswort_positiv_singular_fem_abl = $xml_dom->createTextNode($formen_positiv['sg_fem_abl']);
    $neueswort_positiv_singular_fem_nom_tag->appendChild($neueswort_positiv_singular_fem_nom);
    $neueswort_positiv_singular_fem_gen_tag->appendChild($neueswort_positiv_singular_fem_gen);
    $neueswort_positiv_singular_fem_dat_tag->appendChild($neueswort_positiv_singular_fem_dat);
    $neueswort_positiv_singular_fem_akk_tag->appendChild($neueswort_positiv_singular_fem_akk);
    $neueswort_positiv_singular_fem_vok_tag->appendChild($neueswort_positiv_singular_fem_vok);
    $neueswort_positiv_singular_fem_abl_tag->appendChild($neueswort_positiv_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_positiv_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_singular_tag->appendChild($neueswort_positiv_singular_neutr_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_nom_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_gen_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_dat_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_akk_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_vok_tag);
    $neueswort_positiv_singular_neutr_tag->appendChild($neueswort_positiv_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_positiv_singular_neutr_nom = $xml_dom->createTextNode($formen_positiv['sg_neutr_nom']);
    $neueswort_positiv_singular_neutr_gen = $xml_dom->createTextNode($formen_positiv['sg_neutr_gen']);
    $neueswort_positiv_singular_neutr_dat = $xml_dom->createTextNode($formen_positiv['sg_neutr_dat']);
    $neueswort_positiv_singular_neutr_akk = $xml_dom->createTextNode($formen_positiv['sg_neutr_akk']);
    $neueswort_positiv_singular_neutr_vok = $xml_dom->createTextNode($formen_positiv['sg_neutr_vok']);
    $neueswort_positiv_singular_neutr_abl = $xml_dom->createTextNode($formen_positiv['sg_neutr_abl']);
    $neueswort_positiv_singular_neutr_nom_tag->appendChild($neueswort_positiv_singular_neutr_nom);
    $neueswort_positiv_singular_neutr_gen_tag->appendChild($neueswort_positiv_singular_neutr_gen);
    $neueswort_positiv_singular_neutr_dat_tag->appendChild($neueswort_positiv_singular_neutr_dat);
    $neueswort_positiv_singular_neutr_akk_tag->appendChild($neueswort_positiv_singular_neutr_akk);
    $neueswort_positiv_singular_neutr_vok_tag->appendChild($neueswort_positiv_singular_neutr_vok);
    $neueswort_positiv_singular_neutr_abl_tag->appendChild($neueswort_positiv_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_tag = $xml_dom->createElement('plural');
    $neueswort_positiv_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_positiv_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_tag->appendChild($neueswort_positiv_plural_tag);
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_mask_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_nom_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_gen_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_dat_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_akk_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_vok_tag);
    $neueswort_positiv_plural_mask_tag->appendChild($neueswort_positiv_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_mask_nom = $xml_dom->createTextNode($formen_positiv['pl_mask_nom']);
    $neueswort_positiv_plural_mask_gen = $xml_dom->createTextNode($formen_positiv['pl_mask_gen']);
    $neueswort_positiv_plural_mask_dat = $xml_dom->createTextNode($formen_positiv['pl_mask_dat']);
    $neueswort_positiv_plural_mask_akk = $xml_dom->createTextNode($formen_positiv['pl_mask_akk']);
    $neueswort_positiv_plural_mask_vok = $xml_dom->createTextNode($formen_positiv['pl_mask_vok']);
    $neueswort_positiv_plural_mask_abl = $xml_dom->createTextNode($formen_positiv['pl_mask_abl']);
    $neueswort_positiv_plural_mask_nom_tag->appendChild($neueswort_positiv_plural_mask_nom);
    $neueswort_positiv_plural_mask_gen_tag->appendChild($neueswort_positiv_plural_mask_gen);
    $neueswort_positiv_plural_mask_dat_tag->appendChild($neueswort_positiv_plural_mask_dat);
    $neueswort_positiv_plural_mask_akk_tag->appendChild($neueswort_positiv_plural_mask_akk);
    $neueswort_positiv_plural_mask_vok_tag->appendChild($neueswort_positiv_plural_mask_vok);
    $neueswort_positiv_plural_mask_abl_tag->appendChild($neueswort_positiv_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_positiv_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_fem_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_nom_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_gen_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_dat_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_akk_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_vok_tag);
    $neueswort_positiv_plural_fem_tag->appendChild($neueswort_positiv_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_fem_nom = $xml_dom->createTextNode($formen_positiv['pl_fem_nom']);
    $neueswort_positiv_plural_fem_gen = $xml_dom->createTextNode($formen_positiv['pl_fem_gen']);
    $neueswort_positiv_plural_fem_dat = $xml_dom->createTextNode($formen_positiv['pl_fem_dat']);
    $neueswort_positiv_plural_fem_akk = $xml_dom->createTextNode($formen_positiv['pl_fem_akk']);
    $neueswort_positiv_plural_fem_vok = $xml_dom->createTextNode($formen_positiv['pl_fem_vok']);
    $neueswort_positiv_plural_fem_abl = $xml_dom->createTextNode($formen_positiv['pl_fem_abl']);
    $neueswort_positiv_plural_fem_nom_tag->appendChild($neueswort_positiv_plural_fem_nom);
    $neueswort_positiv_plural_fem_gen_tag->appendChild($neueswort_positiv_plural_fem_gen);
    $neueswort_positiv_plural_fem_dat_tag->appendChild($neueswort_positiv_plural_fem_dat);
    $neueswort_positiv_plural_fem_akk_tag->appendChild($neueswort_positiv_plural_fem_akk);
    $neueswort_positiv_plural_fem_vok_tag->appendChild($neueswort_positiv_plural_fem_vok);
    $neueswort_positiv_plural_fem_abl_tag->appendChild($neueswort_positiv_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_positiv_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_positiv_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_positiv_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_positiv_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_positiv_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_positiv_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_positiv_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_positiv_plural_tag->appendChild($neueswort_positiv_plural_neutr_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_nom_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_gen_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_dat_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_akk_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_vok_tag);
    $neueswort_positiv_plural_neutr_tag->appendChild($neueswort_positiv_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_positiv_plural_neutr_nom = $xml_dom->createTextNode($formen_positiv['pl_neutr_nom']);
    $neueswort_positiv_plural_neutr_gen = $xml_dom->createTextNode($formen_positiv['pl_neutr_gen']);
    $neueswort_positiv_plural_neutr_dat = $xml_dom->createTextNode($formen_positiv['pl_neutr_dat']);
    $neueswort_positiv_plural_neutr_akk = $xml_dom->createTextNode($formen_positiv['pl_neutr_akk']);
    $neueswort_positiv_plural_neutr_vok = $xml_dom->createTextNode($formen_positiv['pl_neutr_vok']);
    $neueswort_positiv_plural_neutr_abl = $xml_dom->createTextNode($formen_positiv['pl_neutr_abl']);
    $neueswort_positiv_plural_neutr_nom_tag->appendChild($neueswort_positiv_plural_neutr_nom);
    $neueswort_positiv_plural_neutr_gen_tag->appendChild($neueswort_positiv_plural_neutr_gen);
    $neueswort_positiv_plural_neutr_dat_tag->appendChild($neueswort_positiv_plural_neutr_dat);
    $neueswort_positiv_plural_neutr_akk_tag->appendChild($neueswort_positiv_plural_neutr_akk);
    $neueswort_positiv_plural_neutr_vok_tag->appendChild($neueswort_positiv_plural_neutr_vok);
    $neueswort_positiv_plural_neutr_abl_tag->appendChild($neueswort_positiv_plural_neutr_abl);


    /*=============================================>>>>>
    = KOMPARATIV =
    ===============================================>>>>>*/
    $neueswort_komparativ_tag = $xml_dom->createElement('komparativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_komparativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_komparativ_tag);
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_singular_tag);
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_mask_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_nom_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_gen_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_dat_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_akk_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_vok_tag);
    $neueswort_komparativ_singular_mask_tag->appendChild($neueswort_komparativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_mask_nom = $xml_dom->createTextNode($formen_komparativ['sg_mask_nom']);
    $neueswort_komparativ_singular_mask_gen = $xml_dom->createTextNode($formen_komparativ['sg_mask_gen']);
    $neueswort_komparativ_singular_mask_dat = $xml_dom->createTextNode($formen_komparativ['sg_mask_dat']);
    $neueswort_komparativ_singular_mask_akk = $xml_dom->createTextNode($formen_komparativ['sg_mask_akk']);
    $neueswort_komparativ_singular_mask_vok = $xml_dom->createTextNode($formen_komparativ['sg_mask_vok']);
    $neueswort_komparativ_singular_mask_abl = $xml_dom->createTextNode($formen_komparativ['sg_mask_abl']);
    $neueswort_komparativ_singular_mask_nom_tag->appendChild($neueswort_komparativ_singular_mask_nom);
    $neueswort_komparativ_singular_mask_gen_tag->appendChild($neueswort_komparativ_singular_mask_gen);
    $neueswort_komparativ_singular_mask_dat_tag->appendChild($neueswort_komparativ_singular_mask_dat);
    $neueswort_komparativ_singular_mask_akk_tag->appendChild($neueswort_komparativ_singular_mask_akk);
    $neueswort_komparativ_singular_mask_vok_tag->appendChild($neueswort_komparativ_singular_mask_vok);
    $neueswort_komparativ_singular_mask_abl_tag->appendChild($neueswort_komparativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_fem_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_nom_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_gen_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_dat_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_akk_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_vok_tag);
    $neueswort_komparativ_singular_fem_tag->appendChild($neueswort_komparativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_fem_nom = $xml_dom->createTextNode($formen_komparativ['sg_fem_nom']);
    $neueswort_komparativ_singular_fem_gen = $xml_dom->createTextNode($formen_komparativ['sg_fem_gen']);
    $neueswort_komparativ_singular_fem_dat = $xml_dom->createTextNode($formen_komparativ['sg_fem_dat']);
    $neueswort_komparativ_singular_fem_akk = $xml_dom->createTextNode($formen_komparativ['sg_fem_akk']);
    $neueswort_komparativ_singular_fem_vok = $xml_dom->createTextNode($formen_komparativ['sg_fem_vok']);
    $neueswort_komparativ_singular_fem_abl = $xml_dom->createTextNode($formen_komparativ['sg_fem_abl']);
    $neueswort_komparativ_singular_fem_nom_tag->appendChild($neueswort_komparativ_singular_fem_nom);
    $neueswort_komparativ_singular_fem_gen_tag->appendChild($neueswort_komparativ_singular_fem_gen);
    $neueswort_komparativ_singular_fem_dat_tag->appendChild($neueswort_komparativ_singular_fem_dat);
    $neueswort_komparativ_singular_fem_akk_tag->appendChild($neueswort_komparativ_singular_fem_akk);
    $neueswort_komparativ_singular_fem_vok_tag->appendChild($neueswort_komparativ_singular_fem_vok);
    $neueswort_komparativ_singular_fem_abl_tag->appendChild($neueswort_komparativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_komparativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_singular_tag->appendChild($neueswort_komparativ_singular_neutr_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_nom_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_gen_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_dat_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_akk_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_vok_tag);
    $neueswort_komparativ_singular_neutr_tag->appendChild($neueswort_komparativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_komparativ_singular_neutr_nom = $xml_dom->createTextNode($formen_komparativ['sg_neutr_nom']);
    $neueswort_komparativ_singular_neutr_gen = $xml_dom->createTextNode($formen_komparativ['sg_neutr_gen']);
    $neueswort_komparativ_singular_neutr_dat = $xml_dom->createTextNode($formen_komparativ['sg_neutr_dat']);
    $neueswort_komparativ_singular_neutr_akk = $xml_dom->createTextNode($formen_komparativ['sg_neutr_akk']);
    $neueswort_komparativ_singular_neutr_vok = $xml_dom->createTextNode($formen_komparativ['sg_neutr_vok']);
    $neueswort_komparativ_singular_neutr_abl = $xml_dom->createTextNode($formen_komparativ['sg_neutr_abl']);
    $neueswort_komparativ_singular_neutr_nom_tag->appendChild($neueswort_komparativ_singular_neutr_nom);
    $neueswort_komparativ_singular_neutr_gen_tag->appendChild($neueswort_komparativ_singular_neutr_gen);
    $neueswort_komparativ_singular_neutr_dat_tag->appendChild($neueswort_komparativ_singular_neutr_dat);
    $neueswort_komparativ_singular_neutr_akk_tag->appendChild($neueswort_komparativ_singular_neutr_akk);
    $neueswort_komparativ_singular_neutr_vok_tag->appendChild($neueswort_komparativ_singular_neutr_vok);
    $neueswort_komparativ_singular_neutr_abl_tag->appendChild($neueswort_komparativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_komparativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_komparativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_tag->appendChild($neueswort_komparativ_plural_tag);
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_mask_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_nom_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_gen_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_dat_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_akk_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_vok_tag);
    $neueswort_komparativ_plural_mask_tag->appendChild($neueswort_komparativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_mask_nom = $xml_dom->createTextNode($formen_komparativ['pl_mask_nom']);
    $neueswort_komparativ_plural_mask_gen = $xml_dom->createTextNode($formen_komparativ['pl_mask_gen']);
    $neueswort_komparativ_plural_mask_dat = $xml_dom->createTextNode($formen_komparativ['pl_mask_dat']);
    $neueswort_komparativ_plural_mask_akk = $xml_dom->createTextNode($formen_komparativ['pl_mask_akk']);
    $neueswort_komparativ_plural_mask_vok = $xml_dom->createTextNode($formen_komparativ['pl_mask_vok']);
    $neueswort_komparativ_plural_mask_abl = $xml_dom->createTextNode($formen_komparativ['pl_mask_abl']);
    $neueswort_komparativ_plural_mask_nom_tag->appendChild($neueswort_komparativ_plural_mask_nom);
    $neueswort_komparativ_plural_mask_gen_tag->appendChild($neueswort_komparativ_plural_mask_gen);
    $neueswort_komparativ_plural_mask_dat_tag->appendChild($neueswort_komparativ_plural_mask_dat);
    $neueswort_komparativ_plural_mask_akk_tag->appendChild($neueswort_komparativ_plural_mask_akk);
    $neueswort_komparativ_plural_mask_vok_tag->appendChild($neueswort_komparativ_plural_mask_vok);
    $neueswort_komparativ_plural_mask_abl_tag->appendChild($neueswort_komparativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_komparativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_fem_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_nom_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_gen_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_dat_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_akk_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_vok_tag);
    $neueswort_komparativ_plural_fem_tag->appendChild($neueswort_komparativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_fem_nom = $xml_dom->createTextNode($formen_komparativ['pl_fem_nom']);
    $neueswort_komparativ_plural_fem_gen = $xml_dom->createTextNode($formen_komparativ['pl_fem_gen']);
    $neueswort_komparativ_plural_fem_dat = $xml_dom->createTextNode($formen_komparativ['pl_fem_dat']);
    $neueswort_komparativ_plural_fem_akk = $xml_dom->createTextNode($formen_komparativ['pl_fem_akk']);
    $neueswort_komparativ_plural_fem_vok = $xml_dom->createTextNode($formen_komparativ['pl_fem_vok']);
    $neueswort_komparativ_plural_fem_abl = $xml_dom->createTextNode($formen_komparativ['pl_fem_abl']);
    $neueswort_komparativ_plural_fem_nom_tag->appendChild($neueswort_komparativ_plural_fem_nom);
    $neueswort_komparativ_plural_fem_gen_tag->appendChild($neueswort_komparativ_plural_fem_gen);
    $neueswort_komparativ_plural_fem_dat_tag->appendChild($neueswort_komparativ_plural_fem_dat);
    $neueswort_komparativ_plural_fem_akk_tag->appendChild($neueswort_komparativ_plural_fem_akk);
    $neueswort_komparativ_plural_fem_vok_tag->appendChild($neueswort_komparativ_plural_fem_vok);
    $neueswort_komparativ_plural_fem_abl_tag->appendChild($neueswort_komparativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_komparativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_komparativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_komparativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_komparativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_komparativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_komparativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_komparativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_komparativ_plural_tag->appendChild($neueswort_komparativ_plural_neutr_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_nom_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_gen_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_dat_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_akk_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_vok_tag);
    $neueswort_komparativ_plural_neutr_tag->appendChild($neueswort_komparativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_komparativ_plural_neutr_nom = $xml_dom->createTextNode($formen_komparativ['pl_neutr_nom']);
    $neueswort_komparativ_plural_neutr_gen = $xml_dom->createTextNode($formen_komparativ['pl_neutr_gen']);
    $neueswort_komparativ_plural_neutr_dat = $xml_dom->createTextNode($formen_komparativ['pl_neutr_dat']);
    $neueswort_komparativ_plural_neutr_akk = $xml_dom->createTextNode($formen_komparativ['pl_neutr_akk']);
    $neueswort_komparativ_plural_neutr_vok = $xml_dom->createTextNode($formen_komparativ['pl_neutr_vok']);
    $neueswort_komparativ_plural_neutr_abl = $xml_dom->createTextNode($formen_komparativ['pl_neutr_abl']);
    $neueswort_komparativ_plural_neutr_nom_tag->appendChild($neueswort_komparativ_plural_neutr_nom);
    $neueswort_komparativ_plural_neutr_gen_tag->appendChild($neueswort_komparativ_plural_neutr_gen);
    $neueswort_komparativ_plural_neutr_dat_tag->appendChild($neueswort_komparativ_plural_neutr_dat);
    $neueswort_komparativ_plural_neutr_akk_tag->appendChild($neueswort_komparativ_plural_neutr_akk);
    $neueswort_komparativ_plural_neutr_vok_tag->appendChild($neueswort_komparativ_plural_neutr_vok);
    $neueswort_komparativ_plural_neutr_abl_tag->appendChild($neueswort_komparativ_plural_neutr_abl);




    /*=============================================>>>>>
    = SUPERLATIV =
    ===============================================>>>>>*/
    $neueswort_superlativ_tag = $xml_dom->createElement('superlativ');
    /*-----------MASK SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_tag = $xml_dom->createElement('singular');
    $neueswort_superlativ_singular_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_singular_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_tag->appendChild($neueswort_superlativ_tag);
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_singular_tag);
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_mask_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_nom_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_gen_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_dat_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_akk_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_vok_tag);
    $neueswort_superlativ_singular_mask_tag->appendChild($neueswort_superlativ_singular_mask_abl_tag);

    /*-----------MASK SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_mask_nom = $xml_dom->createTextNode($formen_superlativ['sg_mask_nom']);
    $neueswort_superlativ_singular_mask_gen = $xml_dom->createTextNode($formen_superlativ['sg_mask_gen']);
    $neueswort_superlativ_singular_mask_dat = $xml_dom->createTextNode($formen_superlativ['sg_mask_dat']);
    $neueswort_superlativ_singular_mask_akk = $xml_dom->createTextNode($formen_superlativ['sg_mask_akk']);
    $neueswort_superlativ_singular_mask_vok = $xml_dom->createTextNode($formen_superlativ['sg_mask_vok']);
    $neueswort_superlativ_singular_mask_abl = $xml_dom->createTextNode($formen_superlativ['sg_mask_abl']);
    $neueswort_superlativ_singular_mask_nom_tag->appendChild($neueswort_superlativ_singular_mask_nom);
    $neueswort_superlativ_singular_mask_gen_tag->appendChild($neueswort_superlativ_singular_mask_gen);
    $neueswort_superlativ_singular_mask_dat_tag->appendChild($neueswort_superlativ_singular_mask_dat);
    $neueswort_superlativ_singular_mask_akk_tag->appendChild($neueswort_superlativ_singular_mask_akk);
    $neueswort_superlativ_singular_mask_vok_tag->appendChild($neueswort_superlativ_singular_mask_vok);
    $neueswort_superlativ_singular_mask_abl_tag->appendChild($neueswort_superlativ_singular_mask_abl);



    /*-----------FEM SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_singular_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_fem_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_nom_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_gen_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_dat_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_akk_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_vok_tag);
    $neueswort_superlativ_singular_fem_tag->appendChild($neueswort_superlativ_singular_fem_abl_tag);

    /*-----------FEM SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_fem_nom = $xml_dom->createTextNode($formen_superlativ['sg_fem_nom']);
    $neueswort_superlativ_singular_fem_gen = $xml_dom->createTextNode($formen_superlativ['sg_fem_gen']);
    $neueswort_superlativ_singular_fem_dat = $xml_dom->createTextNode($formen_superlativ['sg_fem_dat']);
    $neueswort_superlativ_singular_fem_akk = $xml_dom->createTextNode($formen_superlativ['sg_fem_akk']);
    $neueswort_superlativ_singular_fem_vok = $xml_dom->createTextNode($formen_superlativ['sg_fem_vok']);
    $neueswort_superlativ_singular_fem_abl = $xml_dom->createTextNode($formen_superlativ['sg_fem_abl']);
    $neueswort_superlativ_singular_fem_nom_tag->appendChild($neueswort_superlativ_singular_fem_nom);
    $neueswort_superlativ_singular_fem_gen_tag->appendChild($neueswort_superlativ_singular_fem_gen);
    $neueswort_superlativ_singular_fem_dat_tag->appendChild($neueswort_superlativ_singular_fem_dat);
    $neueswort_superlativ_singular_fem_akk_tag->appendChild($neueswort_superlativ_singular_fem_akk);
    $neueswort_superlativ_singular_fem_vok_tag->appendChild($neueswort_superlativ_singular_fem_vok);
    $neueswort_superlativ_singular_fem_abl_tag->appendChild($neueswort_superlativ_singular_fem_abl);



    /*-----------NEUTR SINGULAR TAGS erstellen -----------*/
    $neueswort_superlativ_singular_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_singular_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_singular_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_singular_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_singular_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_singular_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_singular_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_singular_tag->appendChild($neueswort_superlativ_singular_neutr_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_nom_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_gen_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_dat_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_akk_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_vok_tag);
    $neueswort_superlativ_singular_neutr_tag->appendChild($neueswort_superlativ_singular_neutr_abl_tag);

    /*-----------NEUTR SINGULAR TAG-Values erstellen -----------*/
    $neueswort_superlativ_singular_neutr_nom = $xml_dom->createTextNode($formen_superlativ['sg_neutr_nom']);
    $neueswort_superlativ_singular_neutr_gen = $xml_dom->createTextNode($formen_superlativ['sg_neutr_gen']);
    $neueswort_superlativ_singular_neutr_dat = $xml_dom->createTextNode($formen_superlativ['sg_neutr_dat']);
    $neueswort_superlativ_singular_neutr_akk = $xml_dom->createTextNode($formen_superlativ['sg_neutr_akk']);
    $neueswort_superlativ_singular_neutr_vok = $xml_dom->createTextNode($formen_superlativ['sg_neutr_vok']);
    $neueswort_superlativ_singular_neutr_abl = $xml_dom->createTextNode($formen_superlativ['sg_neutr_abl']);
    $neueswort_superlativ_singular_neutr_nom_tag->appendChild($neueswort_superlativ_singular_neutr_nom);
    $neueswort_superlativ_singular_neutr_gen_tag->appendChild($neueswort_superlativ_singular_neutr_gen);
    $neueswort_superlativ_singular_neutr_dat_tag->appendChild($neueswort_superlativ_singular_neutr_dat);
    $neueswort_superlativ_singular_neutr_akk_tag->appendChild($neueswort_superlativ_singular_neutr_akk);
    $neueswort_superlativ_singular_neutr_vok_tag->appendChild($neueswort_superlativ_singular_neutr_vok);
    $neueswort_superlativ_singular_neutr_abl_tag->appendChild($neueswort_superlativ_singular_neutr_abl);





    /*-----------MASK PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_tag = $xml_dom->createElement('plural');
    $neueswort_superlativ_plural_mask_tag = $xml_dom->createElement('maskulin');
    $neueswort_superlativ_plural_mask_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_mask_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_mask_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_mask_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_mask_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_mask_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_tag->appendChild($neueswort_superlativ_plural_tag);
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_mask_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_nom_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_gen_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_dat_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_akk_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_vok_tag);
    $neueswort_superlativ_plural_mask_tag->appendChild($neueswort_superlativ_plural_mask_abl_tag);

    /*-----------MASK PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_mask_nom = $xml_dom->createTextNode($formen_superlativ['pl_mask_nom']);
    $neueswort_superlativ_plural_mask_gen = $xml_dom->createTextNode($formen_superlativ['pl_mask_gen']);
    $neueswort_superlativ_plural_mask_dat = $xml_dom->createTextNode($formen_superlativ['pl_mask_dat']);
    $neueswort_superlativ_plural_mask_akk = $xml_dom->createTextNode($formen_superlativ['pl_mask_akk']);
    $neueswort_superlativ_plural_mask_vok = $xml_dom->createTextNode($formen_superlativ['pl_mask_vok']);
    $neueswort_superlativ_plural_mask_abl = $xml_dom->createTextNode($formen_superlativ['pl_mask_abl']);
    $neueswort_superlativ_plural_mask_nom_tag->appendChild($neueswort_superlativ_plural_mask_nom);
    $neueswort_superlativ_plural_mask_gen_tag->appendChild($neueswort_superlativ_plural_mask_gen);
    $neueswort_superlativ_plural_mask_dat_tag->appendChild($neueswort_superlativ_plural_mask_dat);
    $neueswort_superlativ_plural_mask_akk_tag->appendChild($neueswort_superlativ_plural_mask_akk);
    $neueswort_superlativ_plural_mask_vok_tag->appendChild($neueswort_superlativ_plural_mask_vok);
    $neueswort_superlativ_plural_mask_abl_tag->appendChild($neueswort_superlativ_plural_mask_abl);



    /*-----------FEM PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_fem_tag = $xml_dom->createElement('feminin');
    $neueswort_superlativ_plural_fem_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_fem_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_fem_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_fem_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_fem_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_fem_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_fem_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_nom_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_gen_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_dat_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_akk_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_vok_tag);
    $neueswort_superlativ_plural_fem_tag->appendChild($neueswort_superlativ_plural_fem_abl_tag);

    /*-----------FEM PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_fem_nom = $xml_dom->createTextNode($formen_superlativ['pl_fem_nom']);
    $neueswort_superlativ_plural_fem_gen = $xml_dom->createTextNode($formen_superlativ['pl_fem_gen']);
    $neueswort_superlativ_plural_fem_dat = $xml_dom->createTextNode($formen_superlativ['pl_fem_dat']);
    $neueswort_superlativ_plural_fem_akk = $xml_dom->createTextNode($formen_superlativ['pl_fem_akk']);
    $neueswort_superlativ_plural_fem_vok = $xml_dom->createTextNode($formen_superlativ['pl_fem_vok']);
    $neueswort_superlativ_plural_fem_abl = $xml_dom->createTextNode($formen_superlativ['pl_fem_abl']);
    $neueswort_superlativ_plural_fem_nom_tag->appendChild($neueswort_superlativ_plural_fem_nom);
    $neueswort_superlativ_plural_fem_gen_tag->appendChild($neueswort_superlativ_plural_fem_gen);
    $neueswort_superlativ_plural_fem_dat_tag->appendChild($neueswort_superlativ_plural_fem_dat);
    $neueswort_superlativ_plural_fem_akk_tag->appendChild($neueswort_superlativ_plural_fem_akk);
    $neueswort_superlativ_plural_fem_vok_tag->appendChild($neueswort_superlativ_plural_fem_vok);
    $neueswort_superlativ_plural_fem_abl_tag->appendChild($neueswort_superlativ_plural_fem_abl);



    /*-----------NEUTR PLURAL TAGS erstellen -----------*/
    $neueswort_superlativ_plural_neutr_tag = $xml_dom->createElement('neutrum');
    $neueswort_superlativ_plural_neutr_nom_tag = $xml_dom->createElement('nominativ');
    $neueswort_superlativ_plural_neutr_gen_tag = $xml_dom->createElement('genitiv');
    $neueswort_superlativ_plural_neutr_dat_tag = $xml_dom->createElement('dativ');
    $neueswort_superlativ_plural_neutr_akk_tag = $xml_dom->createElement('akkusativ');
    $neueswort_superlativ_plural_neutr_vok_tag = $xml_dom->createElement('vokativ');
    $neueswort_superlativ_plural_neutr_abl_tag = $xml_dom->createElement('ablativ');
    $neueswort_superlativ_plural_tag->appendChild($neueswort_superlativ_plural_neutr_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_nom_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_gen_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_dat_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_akk_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_vok_tag);
    $neueswort_superlativ_plural_neutr_tag->appendChild($neueswort_superlativ_plural_neutr_abl_tag);

    /*-----------NEUTR PLURAL TAG-Values erstellen -----------*/
    $neueswort_superlativ_plural_neutr_nom = $xml_dom->createTextNode($formen_superlativ['pl_neutr_nom']);
    $neueswort_superlativ_plural_neutr_gen = $xml_dom->createTextNode($formen_superlativ['pl_neutr_gen']);
    $neueswort_superlativ_plural_neutr_dat = $xml_dom->createTextNode($formen_superlativ['pl_neutr_dat']);
    $neueswort_superlativ_plural_neutr_akk = $xml_dom->createTextNode($formen_superlativ['pl_neutr_akk']);
    $neueswort_superlativ_plural_neutr_vok = $xml_dom->createTextNode($formen_superlativ['pl_neutr_vok']);
    $neueswort_superlativ_plural_neutr_abl = $xml_dom->createTextNode($formen_superlativ['pl_neutr_abl']);
    $neueswort_superlativ_plural_neutr_nom_tag->appendChild($neueswort_superlativ_plural_neutr_nom);
    $neueswort_superlativ_plural_neutr_gen_tag->appendChild($neueswort_superlativ_plural_neutr_gen);
    $neueswort_superlativ_plural_neutr_dat_tag->appendChild($neueswort_superlativ_plural_neutr_dat);
    $neueswort_superlativ_plural_neutr_akk_tag->appendChild($neueswort_superlativ_plural_neutr_akk);
    $neueswort_superlativ_plural_neutr_vok_tag->appendChild($neueswort_superlativ_plural_neutr_vok);
    $neueswort_superlativ_plural_neutr_abl_tag->appendChild($neueswort_superlativ_plural_neutr_abl);

    $xml_dom->preserveWhiteSpace = false;
    $xml_dom->formatOutput = true;
    $xml_dom->save($adjektiv->xml_filename);
}
