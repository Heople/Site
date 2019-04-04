var app=angular.module('myapp',[]);
app.controller('rdvcontroller', function($scope){
  Cookies.get('id');
   console.log(Cookies.get('id'));
   var Idpatient = Cookies.get('id');
   console.log(Idpatient);

   $scope.Nom = "";
   $scope.Id ="";


   $.ajax({
       url: "php/rdvphp.php",
      dataType:'json',
       data: {
         Idpatient : Idpatient },

       type: 'post',
       success: function(result) {
         console.log(result);
         console.log($scope.result);
         // console.log(result[1]);
         // console.log(result[2]);
         $('.echo').append(result);
        console.log("trucdetamère");
       $scope.rdv = result;
       // $scope.feedbackprog = result[1];
       // $scope.feedbackexo = result[2];


      // console.log(JSON.stringify(result));
     // console.log($scope.donneespatient);

     $scope.$digest();
     // angular.forEach($scope.rdv, function(item){
     //               $scope.Date = item.Date;
     //               $scope.Heure = item.Heure;
     //
     //
     // $scope.$digest();
     //
     //       });


     // console.log($scope.Nom);

    // var change = result.replace(/^\"|\"$/g, '')
     // var json = JSON.parse(change);

}
});

});
