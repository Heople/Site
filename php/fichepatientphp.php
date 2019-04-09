<?php
session_start();
try {
    $Idpatient=$_POST['Idpatient'];//récupération de la variable depuis le controlleur
	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //connexion à la base de données 
    $id->exec('SET NAMES "utf8"');
	$res = $id->query("SELECT * FROM `patient` WHERE Id = '".$Idpatient."'"); //première requête où on récupère les données du patient
	$res1= $id->query("SELECT FeedBack FROM `programme`, patient WHERE programme.id_prog = patient.id_prog AND Id = '".$Idpatient."' "); //deuxième requête pour récupérer le Feedback du programme
    $res2= $id->query("SELECT FeedBackexo FROM prog_exe, patient WHERE prog_exe.id_prog=patient.id_prog AND Id ='".$Idpatient."' "); // troisième requête pour récupérer les feedback des exercices 
    $obj = $res->fetchAll(PDO::FETCH_ASSOC); //on récupère les données des 3 requêtes séparemment dans 3 variables 
    $obj1 = $res1->fetchAll(PDO::FETCH_ASSOC);
    $obj2 = $res2->fetchAll(PDO::FETCH_ASSOC);
    $json_output = json_encode(array($obj,$obj1,$obj2), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); //on convertit en json $obj, $obj1, $obj2
    echo  $json_output; //on retourne le json

}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
