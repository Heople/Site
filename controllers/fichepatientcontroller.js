var app = angular.module('myapp', []); // définition du module angular utilisé
app.controller('fichepatientcontroller', function ($scope) { //controller utilisé pour récupérer les données et en paramètre la variable $scope qui va relier les données du controller à la vue 

    Cookies.get('id');
    console.log(Cookies.get('id'));
    var Idpatient = Cookies.get('id');
    console.log(Idpatient);

    $scope.Nom = "";
    $scope.Id = "";


    $.ajax({ 
        url: "php/fichepatientphp.php",
        dataType: 'json',
        data: {
            Idpatient: Idpatient
        },

        type: 'post',
        success: function (result) {
            console.log(result[0]); //résultat de la première requête
            console.log(result[1]); //résultat de la deuxième requête
            console.log(result[2]); //résultat de la troisième requête
            $('.echo').append(result);
            
            $scope.donneespatient = result[0]; //on stocke les résultats des 3 requêtes dans 3 scopes différents 
            $scope.feedbackprog = result[1];
            $scope.feedbackexo = result[2];


            
            console.log($scope.donneespatient);

            $scope.$digest();
            angular.forEach($scope.donneespatient, function (item) { //parcourt tous les objets du tableau json retourné par le php
                $scope.Id = item.Id; //redéfinition des variables 
                $scope.Nom = item.Nom;
                $scope.Prenom = item.Prenom;
                $scope.Email = item.Email;
                $scope.Tel = item.Tel;
                $scope.Age = item.Age;
                $scope.Antecedents = item.Antecedents;
                $scope.$digest(); //on refresh le scope

            });
            angular.forEach($scope.feedbackprog, function (item) { //parcourt tous les objets du tableau json retourné par le php
                $scope.FeedBack = item.FeedBack;//redéfinition des variables 
                $scope.$digest(); //on refresh le scope

            });
            angular.forEach($scope.feedbackexo, function (item) { //parcourt tous les objets du tableau json retourné par le php
                $scope.FeedBackexo = item.FeedBackexo; //redéfinition des variables 
                $scope.$digest(); //on refresh le scope
            });

        }
    });

});
