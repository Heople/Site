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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="controllers/add_patientcontroller.js"></script>
    <title>Ajouter un patient</title>
</head>

<body ng-app="sa_display">
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
    <div ng-controller="add_patientcontroller" class="prog-container">
      <header>
        <h1>Ajouter un patient</h1>
        <a class="deco-button" href="">se deconnecter</a>
      </header>
      <div class="inputs-add-patient-general">
        <div class="info-add-patient1">
          <h3>État civil</h3>
          <div class="flex-add">
            <input placeholder="Nom" class="input-add-css" id='nompatient' required></input>
            <input placeholder="Prenom"class="input-add-css" id='prenompatient' required></input>
            <input placeholder="Date de naissance"class="input-add-css" id='naissancepatient' required></input>
            <input placeholder="Email"class="input-add-css" id='emailpatient' required></input>
            <input placeholder="Téléphone"class="input-add-css" id='telpatient' required></input>
            <input placeholder="Age"class="input-add-css" id='agepatient' required></input>
          </div>

        </div>
        <div class="info-add-patient2">
          <h3>Ancédédents</h3>
          <textarea id='antépatient' class="add-antecedent"required></textarea>
        </div>


        <button class="add-patient" id='add_patient'>Ajouter ce patient</button>
      </div>

    </div>
</body>

</html>
