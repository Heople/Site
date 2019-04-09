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
    <script type="text/javascript" src="controllers/patientcontroller.js"></script>
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Mes patients</title>
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

<body>
    <br>
    <br>

    <br>
    <br>
    <div class="container" ng-app="sa_display">
<!--        module utilisé -->
        <center><input type="text" ng-model="task" /></center>
<!--                modèle utilisé pour récupéré les données -->

        <h3 align="center">Vos patients</h3>
        <div ng-controller="patientcontroller">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Age</th>
<!--                    nom des colonnes -->
                </tr>
                <tr ng-repeat="x in noms | filter: caractere">
                    <!--                    grâce au ng-repeat, on affiche les lignes une par une grâce aux données présentes dans le scope-->

                    <td>{{x.Id}}</td>
                    <td>{{x.Nom}}</td>
                    <td>{{x.Email}}</td>
                    <td>{{x.Age}}</td>
                    <td><a class='profil' id="{{x.Id}}" href="fichepatient.php">Voir le profil</a></td>

                </tr>
            </table>

        </div>
    </div>
    <button class='add_patient'><a href="add_patient.php">Ajouter un patient</a></button>
</body>

</html>
