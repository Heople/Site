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
    <script type="text/javascript" src="controllers/fichepatientcontroller.js"></script>
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Mon patient</title>
</head>

<body ng-app="myapp">
    <!--        module utilisé -->

    <div ng-controller="fichepatientcontroller" class="prog-container">
<!--        controlleur utilisé -->
        <h1>Informations patient</h1>
        Nom : {{Nom}} <br /> 
        Id : {{Id}} <br />
        Prenom : {{Prenom}} <br />
        Email : {{Email}} <br />
        Tel : {{Tel}} <br />
        Age : {{Age}} <br />
        Antecedents : {{Antecedents}} <br />
        Feedback du programme (douleur/10): {{FeedBack}} <br />
        Feedback des exercices (douleur/10): {{FeedBackexo}}
        
<!--        retour de toutes les informations présentes dans les différents scopes -->
        <button><a href="programmes.php">Ajouter un programme</a></button>
    </div>
</body>

</html>
