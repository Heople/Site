<?php
header('Access-Control-Allow-Origin: http://ekine.iut-velizy.uvsq.fr', true);
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>e-kiné - Ajouter un programme à un patient</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js"></script>
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="controllers/programmecontroller.js"></script>
    <script type="text/javascript" src="js/louise.js"></script>
    <!-- <script type="text/javascript" src="js/js.js"></script> -->
<!--    appel des différents scripts qui seront utilisés-->

</head>

<body ng-app="myapp">
<!--    module utilisé-->
    <nav>
        <ul class="navigation">
            <li class="menu-item"><a href="">Acceuil</a></li>
            <li class="menu-item"><a href="">Mes patients</a></li>
            <li class="menu-item"><a href="">Programmes</a></li>
            <li class="menu-item"><a href="">Mes RDV</a></li>
            <li class="menu-item"><a href="">Deconnexion</a></li>
        </ul>
<!--        menu-->
    </nav>
    <div class="main-programme">
        <div class="choice-container">
            <div class="overlay"></div>
            <img src="img/body.png" alt="">
        </div>
        <div ng-controller="programmecontroller" class="prog-container"> 
<!--            choix du controlleur qu'on utilise pour afficher les données dans la vue -->
            <h1>Entrez le nom du programme</h1>
            <div>
                <input class="titre-prog" placeholder="Ex : Titre du programme" type="" ng-model="TitreProgramme" />
<!--                ng-model sert à passer les données du modèle vers la vue eet s'assure que les données présentes dans la vue et le modèle sont les mêmes-->
            </div>
            <h1>Entrez le nom d'un exercice</h1>
            <div>
                <input class="search-bar-exos" placeholder="Ex : triple salto du bras droit." list="listeExercice" type="" ng-model="SelectExercice" ng-change="Truc(SelectExercice)" />
<!--                barre de recherche permettant de chercher les exercices; ng-change detecte quand la valeur de ng-model change-->
                
                <datalist id="listeExercice">
                    <option ng-repeat="exercice in exercices" value="{{exercice.Nom_exo}}">
<!--                        liste déroulante où tous les exercices récupérés par la requête sont affichés grâce à ng-repeat; la valeur de chaque exercice est récupéree grâce au scope-->
                </datalist>
            </div>
            <br />
            <br />
            Répétition : <input id=frequence></input> Durée : <input id=recurrence></input>

            <h3>Titre : {{Nom_exo}}</h3>
    
            <p>Description</p>
            <p class="description" style="width: 500px;">{{Description}}</p>
<!--    nom de l'exercice et description récupéré grâce au scope-->

            <button class="add-exercice" ng-model="SelectExercice" ng-click="AddExercice">Ajouter cet exercice</button>
            <button class="add-programme" ng-model="AddtExercice" ng-click="AddProgramme">Ajouter ce programme</button>
<!--    ng-click définit les directives à effectuer lorsqu'on appuye sur un des boutons-->
        </div>
        <div class="affichage">
        </div>
    </div>




</body>

</html>
