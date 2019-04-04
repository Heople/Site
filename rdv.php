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
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.min.js"></script> -->

  <script type="text/javascript" src="controllers/rdvcontroller.js"></script>
  <title>Mon patient</title>
</head>
<h1>Mes prochains rdv</h1>
<body>
  <div class="container" ng-app="myapp">
     <center><input type="text" ng-model="task" /></center>
       <h3 align="center">Vos patients</h3>
       <div ng-controller="rdvcontroller">
            <table class="table table-bordered">
<tr>
     <th>Heure</th>
     <th>Date</th>
     <th>Prenom</th>
     <th>Nom</th>
     <!-- <th>Patient</th> -->
</tr>
<tr ng-repeat="x in rdv | filter: task">
    <td>{{x.Date}}</td>
    <td>{{x.Heure}}</td>
    <td>{{x.Prenom}}</td>
    <td>{{x.Nom}}</td>

</tr>
</table>
</table>

</div>
</div>

</body>
</html>
