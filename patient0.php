<?php
session_start();
// echo $_SESSION['Idkine'];

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
  <title>Mes patients</title>
</head>
<body>
  <br>
              <br>

              <br>
              <br>
             <div class="container" ng-app="sa_display">
                <center><input type="text" ng-model="task" /></center>
                  <h3 align="center">Vos patients</h3>
                  <div ng-controller="patientcontroller">
                       <table class="table table-bordered">
                            <tr>
                                 <th>Id</th>
                                 <th>Nom</th>
                                 <th>Email</th>
                                 <th>Age</th>
                            </tr>
                            <tr ng-repeat="x in noms | filter: task">
                              	<td>{{x.Id}}</td>
                                <td>{{x.Nom}}</td>
                                <td>{{x.Email}}</td>
                                <td>{{x.Age}}</td>
                                <td><a class='profil' id="{{x.Id}}" href="fichepatient.php">Voir le profil</a></td>
 <!-- $_SESSION['idpatient'] = '{{x.Id}}';
 echo $_SESSION['idpatient'] ;  -->
                            </tr>
                       </table>
                       <div class=div-test></div>
                  </div>
             </div>
<button class='add_patient'><a href="add_patient.php">Ajouter un patient</a></button>
</body>
</html>
