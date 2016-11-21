<?php

require_once 'morph__classes.inc.php';
$adjektiv = new AdjektivBuilder('4');

print_r ($adjektiv->stamm);

    $endungen = [
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

echo "<pre>";
    print_r($endungen);
echo "</pre><br>";

?>
