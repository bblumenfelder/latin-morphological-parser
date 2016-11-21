<?php
include_once 'morph__classes.inc.php';



/*=============================================>>>>>
= NOMEN =
===============================================>>>>>*/

function preview_nomen_table($nomen)
{
    $xml_sim = simplexml_load_file($nomina->xml_filename);
    $nomen_existing = $xml_sim->xpath("//wort[@id=" . $nomen->id . "]");

    echo "<table cellpadding='5' id='morph_table'>";
        echo "<tr>";
            echo "<th class='morph_id'>ID:" . $nomen_existing[0]["id"] . "</th><th>Singular</th><th>Plural</th>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Nominativ</td>";
            echo "<td>" . $nomen_existing[0]->singular->nominativ . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->nominativ . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Genitiv</td>";
            echo "<td>" . $nomen_existing[0]->singular->genitiv . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->genitiv . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Dativ</td>";
            echo "<td>" . $nomen_existing[0]->singular->dativ . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->dativ . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Akkusativ</td>";
            echo "<td>" . $nomen_existing[0]->singular->akkusativ . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->akkusativ . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Vokativ</td>";
            echo "<td>" . $nomen_existing[0]->singular->vokativ . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->vokativ . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td class='morph_table_case'>Ablativ</td>";
            echo "<td>" . $nomen_existing[0]->singular->ablativ . "</td>";
            echo "<td>" . $nomen_existing[0]->plural->ablativ . "</td>";
        echo "</tr>";

    echo "</table><br><br>";

}



/*=============================================>>>>>
= ADJEKTIV =
===============================================>>>>>*/

function preview_adjektiv_table($adjektiv)
{
    $xml_sim = simplexml_load_file($adjektiv->xml_filename);
    $adjektiv_existing = $xml_sim->xpath("//wort[@id=" . $adjektiv->id . "]");


    /*----------- POSITIV -----------*/
    echo "<div id='div_positiv' class='two_column_table_container'>";
        echo "<span class='morph_title'>Positiv</span><br><hr><br>";
        echo "<table cellpadding='5' id='morph_table' class='two_columns_left'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Singular</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->singular->neutrum->ablativ . "</td>";
            echo "</tr>";
        echo "</table>";


        echo "<table cellpadding='5' id='morph_table' class='two_columns_right'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Plural</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->positiv->plural->neutrum->ablativ . "</td>";
            echo "</tr>";

        echo "</table><br><br>";
        echo "<div class='clearer'></div>";
    echo "</div>";

    echo "<br><br><br>";

    /*----------- KOMPARATIV -----------*/
    echo "<div id='div_komparativ' class='two_column_table_container'>";
        echo "<span class='morph_title'>Komparativ</span><br><hr><br>";
        echo "<table cellpadding='5' id='morph_table' class='two_columns_left'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Singular</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->singular->neutrum->ablativ . "</td>";
            echo "</tr>";
        echo "</table>";

        echo "<table cellpadding='5' id='morph_table' class='two_columns_right'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Plural</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->komparativ->plural->neutrum->ablativ . "</td>";
            echo "</tr>";

        echo "</table><br><br>";
        echo "<div class='clearer'></div>";
    echo "<div>";

    echo "<br><br><br>";

    /*----------- SUPERLATIV -----------*/
    echo "<div id='div_superlativ' class='two_column_table_container'>";
        echo "<span class='morph_title'>Superlativ</span><br><hr><br>";
        echo "<table cellpadding='5' id='morph_table' class='two_columns_left'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Singular</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->singular->neutrum->ablativ . "</td>";
            echo "</tr>";
        echo "</table>";

        echo "<table cellpadding='5' id='morph_table' class='two_columns_right'>";
            echo "<tr>";
                echo "<th class='morph_table_title'>Plural</th><th>Maskulin</th><th>Feminin</th><th>Neutrum</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Nominativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->nominativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->nominativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Genitiv</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->genitiv . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->genitiv . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Dativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->dativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->dativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Akkusativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->akkusativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->akkusativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Vokativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->vokativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->vokativ . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td class='morph_table_case'>Ablativ</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->maskulin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->feminin->ablativ . "</td>";
                echo "<td>" . $adjektiv_existing[0]->superlativ->plural->neutrum->ablativ . "</td>";
            echo "</tr>";

        echo "</table><br><br>";
        echo "<div class='clearer'></div>";
    echo "<div>";

}
?>
