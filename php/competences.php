<?php

$data=yaml_parse_file('data/competences.yaml');

foreach ($data as $competences){
    echo "<div id='comp1'>";
    echo '<progress id="file" max="100" value="50"> 50% </progress><br />';
    echo '<progress id="file" max="100" value="30"> 30% </progress><br />';
    echo '<progress id="file" max="100" value="40"> 40% </progress><br />';
    echo '<progress id="file" max="100" value="70"> 70% </progress><br />';
    echo "</div>";
}