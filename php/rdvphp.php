<?php
// echo"TROLOLO";
session_start();
// echo $_SESSION['Idkine'];
try {
  // echo"TROLOLO";
$Idpatient=$_POST['Idpatient'];
	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
	// $id->set_charset("utf8");
	 $id->exec('SET NAMES "utf8"');
//	$id = mysqli_connect("venus","lbouque","","lbouque");
	$res = $id->query("SELECT Date, Heure, Nom, Prenom FROM `rdv`, patient WHERE `id_kine`='".$_SESSION['Idkine']."' AND rdv.id_compte=patient.Id");

  // echo "SELECT Date,Heure FROM `rdv` WHERE `id_kine`='".$_SESSION['Idkine']."'";

	  // echo "SELECT FeedBack FROM prog_exe, patient WHERE prog_exe.id_prog=patient.id_prog AND Id ='".$Idpatient."' ";
	    $obj = $res->fetchAll(PDO::FETCH_ASSOC);

  // print_r($obj);
	     // conversion en json
       // $json_output =  htmlspecialchars(json_encode($obj));
	     $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

			 echo  $json_output;

      // echo htmlspecialchars(json_encode($json_output));
}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
