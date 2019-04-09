var app = angular.module("sa_display", []); // définition du module angular utilisé
app.controller('add_patientcontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 




   

    $("#add_patient").click(function () { //ajouter un patient 
        var nompatient = $('#nompatient').val(); //récupération des valeurs 
        var prenompatient = $('#prenompatient').val();
        var naissancepatient = $('#naissancepatient').val();
        var emailpatient = $('#emailpatient').val();
        var telpatient = $('#telpatient').val();
        var agepatient = $('#agepatient').val();
        var antépatient = $('#antépatient').val();
        $.ajax({
            url: "php/add_patientphp.php",
            data: {
                nompatient: nompatient, //transmission des valeurs au php
                prenompatient: prenompatient,
                naissancepatient: naissancepatient,
                emailpatient: emailpatient,
                telpatient: telpatient,
                antépatient: antépatient,
                agepatient: agepatient

            },
            type: 'post',
            success: function (result) {
                console.log(result);

            }
        });
    });

});
