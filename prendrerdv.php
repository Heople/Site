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
  <script type="text/javascript" src="controllers/prendrerdvcontroller.js"></script>
  <title>Mon patient</title>
</head>
<body ng-app="myapp">
<div ng-controller="prendrerdvcontroller" class="prog-container">
<h1>Informations patient</h1>
Choisir le patient :
<input class="choisirpatient" placeholder="Ex : Louise Bouque" list="listepatient" type="" ng-model="SelectPatient" ng-change="Truc(SelectPatient)" />

<datalist id="listepatient">
    <option ng-repeat="patient in patients" value="{{patient.Nom}} {{patient.Prenom}}">
</datalist><br/>
<p ng-repeat="patient in patients">{{patient.Nom}}</p>
Choisir la date (jj/mm/aaaa) : <input id='daterdv'></input><br/>
Choisir l'heure : <input id='heurerdv'></input></br>
Description de la prochaine séance : <input id='descriptionseancepro'></input>
<button class='add_rdv'>Ajouter le rdv</button>
<div class='echo'></div>
<p>Nom : {{Nom}} </p>
</div>
</body>
</html>
