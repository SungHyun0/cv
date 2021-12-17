<?php

$data=yaml_parse_file('data/formations.yaml');

foreach ($data as $formations){
    echo "<div>";
    echo $data["poste"]."<br />";
    echo $data["entreprise"]."<br />";
    echo $data["entreprise"]." à ".$data["lieu"]."<br />";
    echo "De ".$data["dateDebut"]." à ".$data["dateFin"]."<br />";
    echo $data["descriptif"]."<br />";
    echo "<br />";
    echo "</div>";
}