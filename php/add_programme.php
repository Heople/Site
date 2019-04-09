<?php
session_start();
try {
    $titre=$_POST['titre'];
    $idtab=$_POST['idtab'];
    $tabfreq=$_POST['tabfreq'];
    $tabrec=$_POST['tabrec'];
    $idpatient=$_POST['idpatient'];
    //variables récupérées grâce à l'appel ajax
    
    $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', ''); //connexion à la base de données
    $id->exec('SET NAMES "utf8"');
    $res = $id->query("INSERT INTO Programme (Titre) VALUES ('".$titre."') "); //première requête : on insère le titre du programme dans la table Programme
    echo "INSERT INTO Programme (Titre) VALUES ('".$titre."')"; 
    $res1 = $id->query("SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'"); //deuxième requête
    echo "SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'";
    while($ligne = $res1->fetch(PDO::FETCH_ASSOC)){ //on récupère le résulat de la deuxième requête dans $ligne
      print_r($ligne);
      for ($i = 0; $i < count($idtab); $i++) { //on insère dans la table prog_exe les données relatives aux exercices
          $res2 = $id->query("INSERT INTO prog_exe (id_prog, id_exe, Repetition, Duree) VALUES ($ligne[Id_prog], $idtab[$i], $tabfreq[$i], $tabrec[$i]);");
          echo "INSERT INTO prog_exe (id_prog, id_exe, Repetition, Duree) VALUES ($ligne[Id_prog], $idtab[$i], $tabfreq[$i], $tabrec[$i]);";
        

      }
        $res3 = $id->query("UPDATE patient SET id_prog=$ligne[Id_prog]  WHERE Id = '".$idpatient."'"); // troisième requête : on attribut au patient sur lequel on travaille son nouvel exercice
        
    }
}

  catch(PDOException $e) {
  	echo $e->getMessage();
  }


  ?>
