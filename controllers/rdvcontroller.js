var app = angular.module('myapp', []); //définition du module angular utilisé
app.controller('rdvcontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 
    Cookies.get('id'); //récupération de l'id du patient sur lequel on travaille grâve à des cookies
    console.log(Cookies.get('id'));
    var Idpatient = Cookies.get('id');
    console.log(Idpatient);

    $scope.Nom = "";
    $scope.Id = "";
    
    $.ajax({
        url: "php/rdvphp.php", //url où se trouve le php renvoyant la requete
        dataType: 'json', // cet appel ajax ne retourne que des données en json
        data: {
            Idpatient: Idpatient
        },

        type: 'post',
        success: function (result) { //lorsque un résultat est retourné :
            console.log(result);
            console.log($scope.result);
            $scope.rdv = result; //on place le résultat de la requête dans $scope.rdv
            $scope.$digest(); //on refresh le scope
            

        }
    });

});
