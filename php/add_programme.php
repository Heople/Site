<?php

try {


  $titre=$_POST['titre'];
  // $exo=$_POST['exo'];
  $idtab=$_POST['idtab'];
  $tabfreq=$_POST['tabfreq'];
  $tabrec=$_POST['tabrec'];
  $idpatient=$_POST['idpatient'];
  echo "Après php :".$titre;
  // echo "id exo:".$exo;
  print_r($idtab) ;
  print_r($tabfreq);
  print_r($tabrec);
  echo $idpatient;


  $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
  // $id->set_charset("utf8");
   $id->exec('SET NAMES "utf8"');
//	$id = mysqli_connect("venus","lbouque","","lbouque");
   $res = $id->query("INSERT INTO Programme (Titre) VALUES ('".$titre."') ");
   echo "INSERT INTO Programme (Titre) VALUES ('".$titre."') ";
  // echo "INSERT INTO programme (Titre) VALUES (".$titre.")";
  $res1 = $id->query("SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'");
  // echo "SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'";

while($ligne = $res1->fetch(PDO::FETCH_ASSOC)){
      print_r($ligne);
      for ($i = 0; $i < count($idtab); $i++) {
        $res2 = $id->query("INSERT INTO prog_exe (id_prog, id_exe, Fréquence, Récurrence)
        VALUES ($ligne[Id_prog], $idtab[$i], $tabfreq[$i], $tabrec[$i]);");
        echo "INSERT INTO prog_exe (id_prog, id_exe, Fréquence, Récurrence)
        VALUES ($ligne[Id_prog], $idtab[$i], $tabfreq[$i], $tabrec[$i]);";

        }
        $res3 = $id->query("UPDATE patient SET id_prog=$ligne[Id_prog]  WHERE Id = '".$idpatient."'");
        echo "UPDATE patient SET id_prog=$ligne[Id_prog]  WHERE Id = '".$idpatient."'";
      }
}

  catch(PDOException $e) {
  	echo $e->getMessage();
  }


  ?>
