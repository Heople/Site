<?php
session_start();
try {
    $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //connexion à la base de données
	$id->exec('SET NAMES "utf8"');
	$res = $id->query('SELECT * FROM `exercice`'); //on récupère tous les exercices
    $obj = $res->fetchAll(PDO::FETCH_ASSOC); //on place le resultat de la requête dans $obj
    $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); //on convertit en json
    echo  $json_output ; //on retourne la chaîne en json 
}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
