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
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="controllers/patientcontroller.js"></script>
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Mes patients</title>
</head>



<body>
<!-- menu -->
  <nav>
    <img src="img/logo.png" alt="Logo e-Kiné">
      <ul class="navigation">
          <!-- <li class="menu-item"><a href=""><div class="nav-item">Acceuil</div></a></li> -->
          <li class="menu-item"><a href=""><div class="nav-item nav-active">Mes patients</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Mes RDV</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Programmes</div></a></li>
      </ul>

  </nav>


    <div class="container-patient" ng-app="sa_display">
      <header>
        <h1>Mes patients</h1>
        <a class="deco-button" href="">se deconnecter</a>
      </header>
      <div class="information-container">
      <div class="search-patient-container">
        <!--  module utilisé -->
        <input placeholder="RECHERCHER UN PATIENT..." class="search-patient" type="text" ng-model="task" />
        <!--  modèle utilisé pour récupéré les données -->
        <button class='add_patient'><a href="add_patient.php"><i class="fas fa-plus"></i>Ajouter un patient</a></button>

      </div>

        <div ng-controller="patientcontroller">
            <table class="table-patients">
                <tr class="table-head">
                    <!-- <th class="">Id</th> -->
                    <th class="table-nom-titre">Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>
                    <th>Téléhpone</th>
                    <th class="table-nom-email">Email</th>
                    <th></th>

<!--                    nom des colonnes -->
                </tr>
                <tr class="table-infos">
                <!-- <tr ng-repeat="x in noms | filter: caractere"> -->
                    <!--                    grâce au ng-repeat, on affiche les lignes une par une grâce aux données présentes dans le scope-->

                    <!-- <td>{{x.Id}}</td>
                    <td class="table-nom-patient">{{x.Nom}}</td>
                    <td>{{x.Email}}</td>
                    <td>{{x.Age}}</td> -->

                    <!-- <td>582</td> -->
                    <td class="table-nom-patient">Ouadhi</td>
                    <td class="table-prenom-patient">Samy</td>
                    <td>21</td>
                    <td>07 81 93 14 33</td>
                    <td>samyouadhi@gmail.com</td>
                    <td><a class='profil' id="{{x.Id}}" href="fichepatient.php">Voir le profil</a></td>
                </tr>
                <tr class="table-infos">
                <!-- <tr ng-repeat="x in noms | filter: caractere"> -->
                    <!--                    grâce au ng-repeat, on affiche les lignes une par une grâce aux données présentes dans le scope-->

                    <!-- <td>{{x.Id}}</td>
                    <td class="table-nom-patient">{{x.Nom}}</td>
                    <td>{{x.Email}}</td>
                    <td>{{x.Age}}</td> -->

                    <!-- <td>582</td> -->
                    <td class="table-nom-patient">Ouadhi</td>
                    <td class="table-prenom-patient">Samy</td>
                    <td>21</td>
                    <td>07 81 93 14 33</td>
                    <td>samyouadhi@gmail.com</td>
                    <td><a class='profil' id="{{x.Id}}" href="fichepatient.php">Voir le profil</a></td>
                </tr>
            </table>

        </div>

    </div>
</div>
</body>

</html>
