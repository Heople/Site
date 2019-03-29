var app=angular.module('myapp',[]);
    app.controller('programmecontroller',function ($scope) {
$i=0;
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
    $scope.Id ="";



     $scope.Truc = function(val) {

        angular.forEach($scope.exercices, function(item){

          if (item.Nom == val) {
              console.log(item.Description);
              $scope.Nom = item.Nom;
              console.log("blblb");
              $scope.Description = item.Description;
              $scope.id_exe = item.id_exe;
              console.log($scope.id_exe);
          }

        });


     }

$('.add-programme').click(function() {
    // var titre1= $('.titre-prog').val();
    console.log(titre1);
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
$idtab = new Array();
$('.add-exercice').click(function() {
  var titre1= $('.titre-prog').val();
    $i= $i+1;
    var ajout="<p> Exercice "+$i+" : "+$scope.Nom+"</p>";
    $('.affichage').append(ajout);
    var exo1 = $scope.id_exe;
    $idtab.push(exo1);
    console.log($idtab);

      $.ajax({

              url: "php/titre.php",
              data:{
                idtab : $idtab, titre : titre1
              },
              type: 'post',
              success: function(data) {
                console.log(data);

              }
          });




  });
 });
