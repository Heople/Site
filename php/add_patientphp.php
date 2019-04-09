<?php
session_start();
try {
    $nompatient=$_POST['nompatient'];
    $prenompatient=$_POST['prenompatient'];
    $naissancepatient=$_POST['naissancepatient'];
    $emailpatient=$_POST['emailpatient'];
    $telpatient=$_POST['telpatient'];
    $agepatient=$_POST['agepatient'];
    $antépatient=$_POST['antépatient'];
    $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
    $id->exec('SET NAMES "utf8"');
    $res = $id->query("INSERT INTO patient (Nom, Prenom, Email, Tel, Age, DatedeNaissance, Antecedents) VALUES ('".$nompatient."','".$prenompatient."','".$emailpatient."','".$telpatient."','".$agepatient."','".$naissancepatient."','".$antépatient."') ;");
echo "INSERT INTO patient (Nom, Prenom, Email, Tel, Age, DatedeNaissance, Antecedents) VALUES ('".$nompatient."','".$prenompatient."','".$emailpatient."','".$telpatient."','".$agepatient."','".$naissancepatient."','".$antépatient."') ;";
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
