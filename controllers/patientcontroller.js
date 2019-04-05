
var app = angular.module("sa_display",[]);
app.controller('patientcontroller', function($scope){



console.log('ta mère le programme');


    $.ajax({
        url: "php/patientphp.php",
         dataType:'json',
        type: 'post',
        success: function(result) {
        // console.log("trucdetamère");
        console.log(result);
        $scope.noms = result;
        $scope.$digest();

       // console.log(JSON.stringify(result));
      console.log($scope.noms);

     // var change = result.replace(/^\"|\"$/g, '')
      // var json = JSON.parse(change);
     $(".div-test").append(result);
                    }
                });


$('body').on('click', '.profil', function() {
  console.log("ta mère la salope de bouton");
    var id= $(this).attr('id');
    Cookies.set('id', id);
    // console.log(Cookies.set('id', id));

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
