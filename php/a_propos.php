<?php

$content=\file_get_contents('data/a_propos.yaml');
$data=yaml_parse($content);

echo '<div>';
    echo '<h1>'.$data['titre'].'</h1>';
echo '</div>';

echo '<div id="info">';
    echo'<div id="dside">';
        echo'<p>'.$data['info']['contenu'].'</p>';
    echo '</div>';
echo '</div>';
echo '<div id="display">';
    echo '<div id="photo2">';
        echo '<img src="'.$data['photo']['src']['1'].'" />';
        echo '<img src="'.$data['photo']['src']['2'].'" />';
        echo '<img src="'.$data['photo']['src']['3'].'" />';
    echo '</div>';
echo '</div>';
echo '<footer>';
    echo $data['footer'];