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
    <script type="text/javascript" src="controllers/authcontroller.js"></script>
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Mon patient</title>
</head>
<body ng-app="myapp" class="auth-bg">
<div class="auth-container">


  <img src="img/logo.png" alt="Logo e-Kiné" class="logo-auth">
  <h1 class="auth-titre">PLATEFORME KINÉSITHÉRAPEUTHE</h1>
<!--    module utilisé -->
    <div ng-controller="authcontroller" class="">
<!--        controlleur utilisé-->
            <form class="form-auth" action="php/verifauth.php" method=POST>
                <img class="icones-auth" src="img/icones/Identifiant.svg" alt="Icone de connexion"> <input id="input-identifiant" Type=Test Name="Login" placeholder="Identifiant" required>
                <img class="icones-auth" src="img/icones/MotDePasse.svg" alt="Icone de connexion"><input id="input-password" Type=Test Name="Mot de passe" placeholder="Password" required>
                <input class="button-auth" Type=SUBMIT Value="Log !">
            </form>
    </div>

    <div class="bottom">
    </div>


  </div>
</body>

</html>
