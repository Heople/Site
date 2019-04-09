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
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Nouveau rendez-vous </title>
</head>
<nav>
    <ul class="navigation">
        <li class="menu-item"><a href="">Acceuil</a></li>
        <li class="menu-item"><a href="">Mes patients</a></li>
        <li class="menu-item"><a href="">Programmes</a></li>
        <li class="menu-item"><a href="">Mes RDV</a></li>
        <li class="menu-item"><a href="">Deconnexion</a></li>
    </ul>
<!--    menu-->
</nav>

<body ng-app="myapp"> 
<!--   module utilisé -->
    <div ng-controller="prendrerdvcontroller" class="prog-container">
<!--        controlleur utilisé -->
        <h1>Informations patient</h1>
        Choisir le patient :
        <input class="choisirpatient" placeholder="Ex : Louise Bouque" list="listepatient" type="" ng-model="SelectPatient" ng-change="Truc(SelectPatient)" />
<!--        input permettant de chercher un patient; ng-change detecte quand la valeur de ng-model change-->
        <datalist id="listepatient">
            <option ng-repeat="patient in patients" value="{{patient.Nom}} {{patient.Prenom}}">
<!--                on affiche dans la liste déroulante le nom et le prénom du patient récupéré grâce au scope-->
        </datalist><br />
        
        Choisir la date (jj/mm/aaaa) : <input id='daterdv' required></input><br />
        Choisir l'heure : <input id='heurerdv' required></input></br>
        Description de la prochaine séance : <input id='descriptionseancepro'></input>
<!--        différents input à remplir -->
        <button class='add_rdv'>Ajouter le rdv</button>
        

    </div>
</body>

</html>
