var app = angular.module('myapp', []); //définition du module angular utilisé
app.controller('programmecontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 
    $i = 0;

    Cookies.get('id');
    console.log(Cookies.get('id'));
    var Idpatient = Cookies.get('id');
    console.log(Idpatient);
    
    
    $(".search-bar-exos").click(function () { //quand on appuye dans la barre de recherche des exercices
        $.ajax({
            url: "php/plateforme.php",
            dataType: 'json', // cet appel ajax ne retourne que des données en json
            type: 'post',
            success: function (result) {


                $scope.exercices = result; //on récupère la liste des exercices en json 


            }
        });
    });





    $scope.Nom = "";
    $scope.Description = "";
    $scope.Id = "";



    $scope.Truc = function (val) { //fonction qui est lancée à chaque fois que le ng-model change

        angular.forEach($scope.exercices, function (item) { //parcourt tous les objets du tableau json retourné par le php

            if (item.Nom_exo == val) { //si la valeur transmise en paramètre est égale à la valeur d'un des objets transmis
                console.log(item.Description);
                $scope.Nom_exo = item.Nom_exo; // alors on redéfinit la variable

                $scope.Description = item.Description;
                $scope.id_exe = item.id_exe;
                console.log($scope.id_exe);
            }

        });


    }
    
    $idtab = new Array();
    $tabfreq = new Array();
    $tabrec = new Array();
    //création de 3 tableaux 
    
    $('.add-exercice').click(function () { //quand on appuye sur le bouton "ajouter l'exercice"
        var freq = $('#frequence').val(); //on récupère les valeurs de fréquence et de récurrence (Repetition & Duree)
        var rec = $('#recurrence').val();
        $tabfreq.push(freq);
        $tabrec.push(rec);
       //on remplit les tableaux avec les valeurs correspondants aux fréquences & récurrence 

       
        var exo1 = $scope.id_exe; // on récupère grâce au scope l'id de l'exercice
        var ajout = "<div class='bouton-remove '><p > Exercice  "+ $scope.Nom_exo +" </p><button id='" + $scope.id_exe + "' class='suppr'>Bouton</button></div>";
        //affichage de l'exercice séléctionné
        $('.affichage').append(ajout);

        $idtab.push(exo1); //remplissage du tableau contenant les id des différents exercices ajoutés
        
    });



    $('body').on('click', '.suppr', function () { //lorsqu'on clique sur le bouton affiché dynamiquement pour supprimer chaque exercice

        $(this).parent().detach(); //on supprime l'affichage de l'exercice
        $id_exo = $(this).attr('id'); // on récupère l'id de l'exo concerné

        $idtab = jQuery.grep($idtab, function (value) { //on le supprime du tableau contenant les id des exercices 
            return value != $id_exo;

        });
    });

    $('.add-programme').click(function () { //lorsqu'on clique sur le bouton "Ajouter le programme"
        var titre1 = $('.titre-prog').val(); //on récupère le titre du programme
        console.log(titre1);
        $.ajax({

            url: "php/add_programme.php",
            data: {
                titre: titre1,
                idtab: $idtab,
                tabfreq: $tabfreq,
                tabrec: $tabrec,
                idpatient: Idpatient //on passe les données dont on a besoin au fichier php
            },
            type: 'post',
            success: function (data) {
                console.log(data);

            }
        });
    });





});
