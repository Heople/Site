var app = angular.module("sa_display",[]);
app.controller('add_patientcontroller', function($scope){



console.log('ta mère le programme');

$("#add_patient").click(function() {
  var nompatient=$('#nompatient').val();
  var prenompatient=$('#prenompatient').val();
  var naissancepatient=$('#naissancepatient').val();
  var emailpatient=$('#emailpatient').val();
  var telpatient=$('#telpatient').val();
  var agepatient=$('#agepatient').val();
  var antépatient=$('#antépatient').val();
    $.ajax({
        url: "php/add_patientphp.php",
           // dataType:'json',
         data:{ nompatient : nompatient, prenompatient : prenompatient, naissancepatient : naissancepatient, emailpatient : emailpatient, telpatient: telpatient, antépatient : antépatient, agepatient : agepatient

         },
        type: 'post',
        success: function(result) {
        // console.log("trucdetamère");
        console.log(result);
        // $scope.noms = result;
        // $scope.$digest();

       // console.log(JSON.stringify(result));
      // console.log($scope.noms);

     // var change = result.replace(/^\"|\"$/g, '')
      // var json = JSON.parse(change);
     // $(".div-test").append(result);
                    }
                });
});



//
// $scope.noms = [
// {id: 1, name: "Louise", email:"louisebouque@gmail.com", age:21},
// {id: 2, name: "Samy", email:"samyouadhi@gmail.com", age:21}
// ]
   // $scope.display_data = function(){
   //      $http.get("display.php")
   //      .success(function(data){
   //           $scope.names = data;
   //      });
   // }


});
