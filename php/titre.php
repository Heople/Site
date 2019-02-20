<?php

try {
  $titre=$_POST['titre'];
  echo("PUTAIN");
  }
  catch(PDOException $e) {
  	echo $e->getMessage();
  }


  ?>
