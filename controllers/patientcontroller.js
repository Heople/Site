var app = angular.module("sa_display", []); //définition du module angular utilisé
app.controller('patientcontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 


    $.ajax({ //retourne la liste des patients 
        url: "php/patientphp.php",
        dataType: 'json', // cet appel ajax ne retourne que des données en json
        type: 'post',
        success: function (result) {
            
            console.log(result);
            $scope.noms = result;
            $scope.$digest();
            console.log($scope.noms);
            
        }
    });


    $('body').on('click', '.profil', function () { //quand on clique sur voir le profil, on récupère l'id du patient sur lequel on a cliqué
        var id = $(this).attr('id');
        Cookies.set('id', id);
        

    });

    


});
