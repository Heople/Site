var app = angular.module('myapp', []); //définition du module angular utilisé
app.controller('prendrerdvcontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 

    Cookies.get('id');

    var Idpatient = Cookies.get('id');
    console.log(Idpatient);






    $.ajax({ //récupération des patients du kiné connecté
        url: "php/prendrerdvphp.php",
        dataType: 'json', // cet appel ajax ne retourne que des données en json

        type: 'post',
        success: function (result) {
            console.log(result);
            console.log($scope.result);
            $scope.patients = result;
            console.log($scope.patients);
            $scope.$digest(); //on refresh le scope




        }
    });

    $scope.Truc = function (val) { //fonction qui est lancée à chaque fois que le ng-model change

        angular.forEach($scope.patients, function (item) { //parcourt tous les objets du tableau json retourné par le php

            if (item.Nom + " " + item.Prenom == val) { //si la valeur transmise en paramètre est égale à la valeur d'un des objets transmis

                $scope.Nom = item.Nom; // alors on redéfinit la variable 
                $scope.Id = item.Id;
                console.log($scope.Id);

            }

        });


    }


    $(".add_rdv").click(function () { //quand on appuye sur le bouton "Ajouter un rdv"
       
        var patientrdv = $('#patientrdv').val();
        var daterdv = $('#daterdv').val();
        var heurerdv = $('#heurerdv').val();
        var descriptionseancepro = $('#descriptionseancepro').val(); //récupération des valeurs des input dans le html
        console.log(heurerdv);
        var id_patient = $scope.Id; //in récupère l'id du patient que l'on a choisi dans la datalist
        console.log(id_patient);
        $.ajax({
            url: "php/add_rdv.php",
            dataType: 'json', // cet appel ajax ne retourne que des données en json
            data: {
                daterdv: daterdv, //données transmises
                heurerdv: heurerdv,
                id_patient: id_patient
            },
            type: 'post',
            success: function (result) {
                $scope.rdv = result;
                console.log(result);

            }
        });
    });

});
