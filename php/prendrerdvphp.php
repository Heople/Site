<?php
session_start();
try {
    $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //connexion à la base de données
	$id->exec('SET NAMES "utf8"');
    $res = $id->query("SELECT * FROM `patient`, compte_kine WHERE patient.Id = compte_kine.id_compte AND id_kine='".$_SESSION['Idkine']."'"); //selectionné les patient dépendants du kiné connecté
    $obj = $res->fetchAll(PDO::FETCH_ASSOC); //récupérer le résultat dans $obj
    $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); //conversion en json 
    echo  $json_output ; //on fait un echo pour renvoyer les données en json au controlleur
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
