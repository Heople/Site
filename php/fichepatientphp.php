<?php
// echo"TROLOLO";
try {
  // echo"TROLOLO";
$Idpatient=$_POST['Idpatient'];
	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
	// $id->set_charset("utf8");
	 $id->exec('SET NAMES "utf8"');
//	$id = mysqli_connect("venus","lbouque","","lbouque");
	$res = $id->query("SELECT * FROM `patient` WHERE Id = '".$Idpatient."'");
	$res1= $id->query("SELECT FeedBack FROM `programme`, patient WHERE programme.id_prog = patient.id_prog AND Id = '".$Idpatient."' ");
	 $res2= $id->query("SELECT FeedBackexo FROM prog_exe, patient WHERE prog_exe.id_prog=patient.id_prog AND Id ='".$Idpatient."' ");
	  // echo "SELECT FeedBack FROM prog_exe, patient WHERE prog_exe.id_prog=patient.id_prog AND Id ='".$Idpatient."' ";
	    $obj = $res->fetchAll(PDO::FETCH_ASSOC);
			$obj1 = $res1->fetchAll(PDO::FETCH_ASSOC);
			$obj2 = $res2->fetchAll(PDO::FETCH_ASSOC);
  // print_r($obj);
	     // conversion en json
       // $json_output =  htmlspecialchars(json_encode($obj));
	     $json_output = json_encode(array($obj,$obj1,$obj2), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

			 echo  $json_output;

      // echo htmlspecialchars(json_encode($json_output));
}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
