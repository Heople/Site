<?php
session_start();
try {
    $daterdv=$_POST['daterdv'];
    $heurerdv=$_POST['heurerdv'];
    $id_patient=$_POST['id_patient'];
	$id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
    $id->exec('SET NAMES "utf8"');
	$res = $id->query("INSERT INTO rdv (id_compte, id_kine, Date, Heure) VALUES ('".$id_patient."','".$_SESSION['Idkine']."','".$daterdv."', '".$heurerdv."') ;");
    echo "INSERT INTO rdv (id_compte, id_kine, Date, Heure) VALUES ('".$id_patient."','".$_SESSION['Idkine']."','".$daterdv."', '".$heurerdv."') ;";
    $obj = $res->fetchAll(PDO::FETCH_ASSOC);
    $json_output = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    echo  $json_output ;

}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
