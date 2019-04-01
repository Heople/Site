<?php
echo"TROLOLO";
try {
  echo"TROLOLO";

	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
	// $id->set_charset("utf8");
	 $id->exec('SET NAMES "utf8"');
//	$id = mysqli_connect("venus","lbouque","","lbouque");
	$res = $id->query('SELECT * FROM `patient`');
	    $obj = $res->fetchAll(PDO::FETCH_ASSOC);
  print_r($obj);
	     // conversion en json
       // $json_output =  htmlspecialchars(json_encode($obj));
	     $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

			 echo  $json_output ;
       
      // echo htmlspecialchars(json_encode($json_output));
}
catch(PDOException $e) {
	echo $e->getMessage();
}


?>
