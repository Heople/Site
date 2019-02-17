var app=angular.module('myapp',[]);
    app.controller('programmecontroller',function ($scope) {

      //REQUETE RECUPERATION BDD
      //CONVERSION EN JSON

    $scope.exercices=[
        {nom: "Triple salto du bras gauche", description:"Faire tournoyer son bras gauche dans le sens antéchronologique des aiguilles d'une montre"},
        {nom: "Triple salto du bras droit", description:"Faire tournoyer son bras droit dans le sens antéchronologique des aiguilles d'une montre"},
        {nom: "Contraction de la fesse droite arrière", description:"Contracter la fesse droite arrière"},
        {nom: "Contraction de la fesse gauche arrière", description:"Contracter la fesse gauche arrière"},
    ]


    $scope.nom = "";
    $scope.description ="";

    $scope.Truc = function(val) {
        angular.forEach($scope.exercices, function(item){
          if (item.nom == val) {
              console.log(item.description);
              $scope.nom = item.nom;
              $scope.description = item.description;
          }

        });


    }
});
