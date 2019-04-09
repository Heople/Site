<?php
session_start();
try {
    $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //connexion à la base de données 
    $id->exec('SET NAMES "utf8"');
	$res = $id->query("SELECT Id, Nom, Email, Age FROM `patient`, compte_kine WHERE patient.Id = compte_kine.id_compte AND `id_kine`='".$_SESSION['Idkine']."'"); //sélectionner les données relatives à tous les patiens du kiné connecté 
    $obj = $res->fetchAll(PDO::FETCH_ASSOC); //on récupère les données dans $obj
    $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); //on convertit en json 
    echo  $json_output ; //on retourne la chaîne en json 
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
