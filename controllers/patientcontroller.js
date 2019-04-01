
var app = angular.module("sa_display",[]);
app.controller('patientcontroller', function($scope){
console.log("ça marche pas");

    $.ajax({
        url: "php/patients.php",
         // dataType:'json',
        type: 'post',
        success: function(result) {
        console.log(result);//ce qui est fait quand php a répondu
        // console.log("trucdetamère");
                    $scope.noms=result;
                    // console.log(JSON.stringify(result));
                      console.log($scope.noms);


     // var change = result.replace(/^\"|\"$/g, '')
      // var json = JSON.parse(change);
     $(".div-test").append(result);
                    }
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
