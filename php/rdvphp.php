<?php

session_start();

try {
    $Idpatient=$_POST['Idpatient']; //on récupère la variable IdPatient qui a été tranmise par l'appel ajax
	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //on se connecte à la base de données
	$res = $id->query("SELECT Date, Heure, Nom, Prenom FROM `rdv`, patient WHERE `id_kine`='".$_SESSION['Idkine']."' AND rdv.id_compte=patient.Id"); //grâce à la requête on va chercher les infos dans la base de données
    $obj = $res->fetchAll(PDO::FETCH_ASSOC); //on place les infos récupérées dans la variable $obj
    $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);   // on convertit $obj en json 
    echo  $json_output; //on fait un echo pour renvoyer les données en json au controlleur
}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
