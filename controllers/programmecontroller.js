var app=angular.module('myapp',[]);
    app.controller('programmecontroller',function ($scope) {
$i=0;
      //REQUETE RECUPERATION BDD
      //CONVERSION EN JSON
      Cookies.get('id');
       console.log(Cookies.get('id'));
       var Idpatient = Cookies.get('id');
       console.log(Idpatient);
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
     $idtab = new Array();
     $tabfreq = new Array();
     $tabrec = new Array();
     $('.add-exercice').click(function() {
       var freq = $('#frequence').val();
      var rec = $('#recurrence').val();
      $tabfreq.push(freq);
      $tabrec.push(rec);
      console.log($tabfreq);
      console.log($tabrec);

         $i= $i+1;
         var exo1 = $scope.id_exe;
         var ajout="<div class='bouton-remove '><p > Exercice "+$i+" : "+$scope.Nom+"</p><button id='"+$scope.id_exe+"' class='test'>Bouton</button></div>";
         $('.affichage').append(ajout);

         $idtab.push(exo1);
         console.log($idtab);
});



$('body').on('click', '.test', function(){
  // var temp = $(this).attr('class');
  // console.log(temp);
  // var temp1 = $(this).parent(temp);
  // console.log(temp1);
  $(this).parent().detach();
  $id_exo = $(this).attr('id');
  console.log("dfbfber");
  $idtab = jQuery.grep($idtab, function(value) {
   return value != $id_exo;

 });
});


           // $.ajax({
           //
           //         url: "php/add_exercice.php",
           //         data:{
           //           idtab : $idtab
           //         },
           //         type: 'post',
           //         success: function(data) {
           //           console.log(data);
           //
           //         }
           //     });


$('.add-programme').click(function() {
     var titre1= $('.titre-prog').val();
    console.log(titre1);
               $.ajax({

                       url: "php/add_programme.php",
                       data:{
                         titre : titre1, idtab : $idtab, tabfreq : $tabfreq, tabrec : $tabrec, idpatient : Idpatient
                       },
                       type: 'post',
                       success: function(data) {
                         console.log(data);

                       }
                   });
     });





  });
