<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-kiné - Rechercher un patient</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script type="text/javascript" src="controllers/authcontroller.js"></script>
  <title>Mon patient</title>
</head>
<body ng-app="myapp">
<div ng-controller="authcontroller" class="prog-container">
<FieldSet>
<FORM action="php/verifauth.php" method=POST>
<Legend>  Identification</Legend>
<INPUT Type=Test Name="Login"  placeholder="Login"   required>
<INPUT Type=Test Name="Password" placeholder="Password" required>
<INPUT Type=SUBMIT Value="Log !">
</FORM>
</FieldSet>
</div>
echo
</body>
</html>
