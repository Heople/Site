<?php

try {


  $titre=$_POST['titre'];
  // $exo=$_POST['exo'];
  $idtab=$_POST['idtab'];
  echo "Après php :".$titre;
  // echo "id exo:".$exo;
  print_r($idtab) ;


  $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
  // $id->set_charset("utf8");
   $id->exec('SET NAMES "utf8"');
//	$id = mysqli_connect("venus","lbouque","","lbouque");
  $res = $id->query("INSERT INTO Programme (Titre) VALUES ('".$titre."') ");
  // echo "INSERT INTO programme (Titre) VALUES (".$titre.")";
  $res1 = $id->query("SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'");
  // echo "SELECT Id_prog FROM Programme WHERE Titre = '".$titre."'";

  while($ligne = $res1->fetch(PDO::FETCH_ASSOC)){
    print_r($ligne);
    for ($i = 0; $i <= count($idtab); $i++) {
      $res2 = $id->query("INSERT INTO prog_exe (id_prog, id_exe)
VALUES ($ligne[0], $idtab[i]);");

  }




}
}
  catch(PDOException $e) {
  	echo $e->getMessage();
  }


  ?>
