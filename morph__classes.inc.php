<?php
include_once '../_classes.inc.php';
include_once '../_functions_general.inc.php';

class AdjektivBuilder
{
    public $id;
    public $lemma;
    public $genitiv;
    public $stamm;
    public $dklasse;
    public $genera;
    public $komparativ;
    public $superlativ;
    public $sonderformen;
    public $endung_2;
    public $endung_3;
    public $endung_4;
    public $xml_filename;

    function __construct($c_id)
    {
        $this->id = $c_id;

        $sql_formbuilder =
        "SELECT lemma, fb_genitiv, fb_stamm, fb_dklasse, fb_genera, fb_komparativ, fb_superlativ, fb_misc
        FROM la_adjektive
        WHERE adjektiv_id = ?";

        $stmt_formbuilder = db::prepare($sql_formbuilder);
        $stmt_formbuilder->bind_param('i', $c_id);
        $stmt_formbuilder->execute();
        $res_formbuilder = $stmt_formbuilder->get_result();
        $stmt_formbuilder->close();

        $formbuilder = $res_formbuilder->fetch_all(MYSQLI_ASSOC);

        $this->lemma = $formbuilder[0]['lemma'];
        $this->genitiv = $formbuilder[0]['fb_genitiv'];
        $this->stamm = $formbuilder[0]['fb_stamm'];
        $this->dklasse = $formbuilder[0]['fb_dklasse'];
        $this->genera = $formbuilder[0]['fb_genera'];
        $this->komparativ = $formbuilder[0]['fb_komparativ'];
        $this->superlativ = $formbuilder[0]['fb_superlativ'];
        $this->sonderformen = $formbuilder[0]['fb_misc'];
        $this->endung_2 = substr($formbuilder[0]['lemma'], -2);
        $this->endung_3 = substr($formbuilder[0]['lemma'], -3);
        $this->endung_4 = substr($formbuilder[0]['lemma'], -4);
        // Welche Datei soll ausgelesen werden?
        if ($formbuilder[0]['fb_misc']===1)
            {$this->xml_filename = 'xml/la_adjektive_s.xml';}
        else
            {$this->xml_filename = 'xml/la_adjektive.xml';}

    }
}


class NomenBuilder
{
    public $id;
    public $lemma;
    public $genitiv;
    public $stamm;
    public $dklasse;
    public $genus;
    public $bes_numerus;
    public $sonderformen;

    function __construct($c_id)
    {
        $this->id = $c_id;

        $sql_formbuilder =
        "SELECT lemma, fb_genitiv, fb_stamm, fb_dklasse, fb_genus, fb_misc, fb_bes_numerus
        FROM la_nomina
        WHERE nomen_id = ?";

        $stmt_formbuilder = db::prepare($sql_formbuilder);
        $stmt_formbuilder->bind_param('i', $c_id);
        $stmt_formbuilder->execute();
        $res_formbuilder = $stmt_formbuilder->get_result();
        $stmt_formbuilder->close();

        $formbuilder = $res_formbuilder->fetch_all(MYSQLI_ASSOC);

        $this->lemma = $formbuilder[0]['lemma'];
        $this->genitiv = $formbuilder[0]['fb_genitiv'];
        $this->dklasse = $formbuilder[0]['fb_dklasse'];
        $this->stamm = $formbuilder[0]['fb_stamm'];
        $this->genus = $formbuilder[0]['fb_genus'];
        $this->bes_numerus = $formbuilder[0]['fb_bes_numerus'];
        $this->sonderformen = $formbuilder[0]['fb_misc'];
        // Welche Datei soll ausgelesen werden?
        if ($formbuilder[0]['fb_misc']===1)
            {$this->xml_filename = 'xml/la_nomina_s.xml';}
        else
            {$this->xml_filename = 'xml/la_nomina.xml';}

    }

}



?>
