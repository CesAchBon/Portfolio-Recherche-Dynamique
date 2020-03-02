<?php

$suggestions = array("Crepes","Gaufres","Falafels","Gougeres") ;
$recherche = $_GET["recherche"];

if (strlen($recherche) > 0) {

    $suggerer = "";

    for ($i = 0; $i < count($suggestions); $i++) {
        if (strtolower($recherche) == strtolower(substr($suggestions[$i], 0, strlen($recherche)))) {
            if ($suggerer == "") {
                $suggerer = $suggestions[$i];
            } 
            else {
                $suggerer = $suggerer . " , " . $suggestions[$i];
            }
        }
    }
}

echo ($suggerer == "") ? 'aucune suggestion pour vous.' : $suggerer;

?>