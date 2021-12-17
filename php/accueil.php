<?php

$content=\file_get_contents('data/accueil.yaml');
$data=yaml_parse($content);

//print_r($data);

echo '<div id="bordure">';
echo '<div id="accroche">';
    echo '<h2>'.$data['accroche']['label'].'</h2>';
    echo '<p>'.$data['accroche']['contenu'].'</p>';
echo '</div>';

echo '<div id="display">';
    echo '<div id="photo1">';
        echo '<img src="'.$data['photo']['src']['1'].'" />';
    echo '</div>';
echo '</div>';
echo '<footer>';
    echo $data['footer'];
echo '</div>';
?>