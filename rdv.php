<!-- rdv.php -->
<?php
session_start(); //démarrage de la session pour toujours avec accès aux variables de session

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-kiné - Mes rendez-vous</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<!--    appel des différents scripts qui seront utilisés-->


    <script type="text/javascript" src="controllers/rdvcontroller.js"></script>
<!--    on définit le controlleur (angular) que l'on va utiliser pour afficher les données-->
    <title>Mes prochains rdv</title>
</head>
<h1>Mes prochains rdv</h1>

<body>
    <nav>
        <ul class="navigation">
            <li class="menu-item"><a href="">Acceuil</a></li>
            <li class="menu-item"><a href="">Mes patients</a></li>
            <li class="menu-item"><a href="">Programmes</a></li>
            <li class="menu-item"><a href="">Mes RDV</a></li>
            <li class="menu-item"><a href="">Deconnexion</a></li>
<!--            menu-->
        </ul>
    </nav>
    <div class="container" ng-app="myapp">
<!--        ng-app correspond au module angular -->
        <center><input type="text" ng-model="task" /></center>
<!--        modèle utilisé pour récupéré les données -->
        <h3 align="center">Vos patients</h3>
        <div ng-controller="rdvcontroller">
<!--            le controlleur utilisé-->
            <table class="table table-bordered">
                <tr>
                    <th>Heure</th>
                    <th>Date</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                </tr>
<!--                définition des différentes colonnes à afficher-->
                <tr ng-repeat="x in rdv | filter: task">
<!--                    grâce au ng-repeat, on affiche les lignes une par une grâce aux données présentes dans le scope-->
                    <td>{{x.Heure}}</td>
                    <td>{{x.Date}}</td>
                    <td>{{x.Prenom}}</td>
                    <td>{{x.Nom}}</td>

                </tr>
            </table>


        </div>
    </div>

</body>

</html>
