var app=angular.module('myapp',[]);
    app.controller('programmecontroller',function ($scope) {

      //REQUETE RECUPERATION BDD
      //CONVERSION EN JSON
$(".search-bar-exos").click(function() {
          $.ajax({
                  url: "php/plateforme.php",
                  dataType:'json',
                  type: 'post',
                  success: function(result) {
      //          alert(result);//ce qui est fait quand php a répondu

                  $scope.exercices=result;
                  // console.log(JSON.stringify(result));
                  // console.log($scope.exercices);

                  }
              });
});


// $scope.exercices=
//         {Nom: "Triple salto du bras gauche", Description:"Faire tournoyer son bras gauche dans le sens antéchronologique des aiguilles d'une montre"},
//         {Nom: "Triple salto du bras droit", Description:"Faire tournoyer son bras droit dans le sens antéchronologique des aiguilles d'une montre"},
//         {Nom: "Contraction de la fesse droite arrière", Description:"Contracter la fesse droite arrière"},
//         {Nom: "Contraction de la fesse gauche arrière", Description:"Contracter la fesse gauche arrière"},
//     ]
console.log("lblbl1");

    $scope.Nom = "";
    $scope.Description ="";



     $scope.Truc = function(val) {

        angular.forEach($scope.exercices, function(item){

          if (item.Nom == val) {
              console.log(item.Description);
              $scope.Nom = item.Nom;
              console.log("blblb");
              $scope.Description = item.Description;
          }

        });


     }

$('.titre-prog').change(function() {
    var titre1= $('.titre-prog').val();
    console.log($('.titre-prog').val());
               $.ajax({

                       url: "php/titre.php",
                       data:{
                         titre : titre1
                       },
                       type: 'post',
                       success: function(data) {
                         console.log(data);

                       }
                   });
     });
 });
