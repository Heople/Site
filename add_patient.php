<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-kiné - Rechercher un patient</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="controllers/add_patientcontroller.js"></script>
    <title>Ajouter un patient</title>
</head>

<body ng-app="sa_display">
    <div ng-controller="add_patientcontroller" class="prog-container">
        <h1>Informations patient</h1>
        Nom : <input id='nompatient' required></input> <br />
        Prenom : <input id='prenompatient' required></input><br />
        Date de Naissance: <input id='naissancepatient' required></input><br />
        E-mail : <input id='emailpatient' required></input><br />
        Tel : <input id='telpatient' required></input><br />
        Age : <input id='agepatient' required></input><br />
        Antécédents : <input id='antépatient' required></input>
        <button id='add_patient'>Ajouter ce patient</button>
    </div>
</body>

</html>
