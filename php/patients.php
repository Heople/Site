<?php
try {
  //select.php
 $id = new PDO('mysql:host=localhost;dbname=e_kine', 'root', '');
 echo "blblbl";
 $id->exec('SET NAMES "utf8"');
 $output = array();
 $res = $id->query('SELECT * FROM `patient`');
 // $query = "SELECT * FROM patient";
 // $result = mysqli_query($connect, $query);
  $obj = $res->fetchAll(PDO::FETCH_ASSOC);
 if(mysqli_num_rows($obj) > 0)
 {
      while($row = mysqli_fetch_array($obj))
      {
           $output[] = $row;
      }
      // echo json_encode($output);
      $json_output = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
 }
}
catch(PDOException $e) {
  echo $e->getMessage();
}

 ?>
