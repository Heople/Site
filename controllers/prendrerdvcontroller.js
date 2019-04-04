var app=angular.module('myapp',[]);
app.controller('prendrerdvcontroller', function($scope){
  Cookies.get('id');
   // console.log(Cookies.get('id'));
   var Idpatient = Cookies.get('id');
    console.log(Idpatient);


  var patientrdv= $('#patientrdv').val();
  var daterdv= $('#daterdv').val();
  var heurerdv= $('#heurerdv').val();
  var descriptionseancepro=$('#descriptionseancepro').val();


   $.ajax({
       url: "php/prendrerdvphp.php",
       dataType:'json',

       type: 'post',
       success: function(result) {
         console.log(result);
         console.log($scope.result);
         // console.log(result[1]);
         // console.log(result[2]);
         $('.echo').append(result);
        console.log("trucdetamère");

       $scope.patients = result;
       console.log($scope.patients);

       // $scope.feedbackprog = result[1];
       // $scope.feedbackexo = result[2];


      // console.log(JSON.stringify(result));
     // console.log($scope.donneespatient);

     $scope.$digest();

     // console.log($scope.Nom);

    // var change = result.replace(/^\"|\"$/g, '')
     // var json = JSON.parse(change);

}
});

$scope.Truc = function(val) {

   angular.forEach($scope.patients, function(item){

     if (item.Nom == val) {

         $scope.Nom = item.Nom;
         $scope.Id=item.Id;
         console.log($scope.Id);
     }

   });


}


$(".add_rdv").click(function() {
          $.ajax({
                  url: "php/plateforme.php",
                  dataType:'json',
                  data : {
                    patientrdv : patientrdv, daterdv : daterdv, heurerdv : heurerdv,
                  },
                  type: 'post',
                  success: function(result) {
      //          alert(result);//ce qui est fait quand php a répondu

                  $scope.exercices=result;
                  // console.log(JSON.stringify(result));
                  // console.log($scope.exercices);

                  }
              });
});

});
