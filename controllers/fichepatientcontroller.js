var app=angular.module('myapp',[]);
app.controller('fichepatientcontroller', function($scope){
  Cookies.get('id');
   console.log(Cookies.get('id'));
   var Idpatient = Cookies.get('id');
   console.log(Idpatient);

   $scope.Nom = "";
   $scope.Id ="";


   $.ajax({
       url: "php/fichepatientphp.php",
       dataType:'json',
       data: {
         Idpatient : Idpatient },

       type: 'post',
       success: function(result) {
         console.log(result[0]);
         console.log(result[1]);
         console.log(result[2]);
         $('.echo').append(result);
        console.log("trucdetamère");
       $scope.donneespatient = result[0];
       $scope.feedbackprog = result[1];
       $scope.feedbackexo = result[2];


      // console.log(JSON.stringify(result));
     console.log($scope.donneespatient);

     $scope.$digest();
     angular.forEach($scope.donneespatient, function(item){
                   $scope.Id = item.Id;
                   $scope.Nom = item.Nom;
                   $scope.Prenom = item.Prenom;
                   $scope.Email = item.Email;
                   $scope.Tel = item.Tel;
                   $scope.Age = item.Age;
                   $scope.Antecedents = item.Antecedents;
     $scope.$digest();

           });
           angular.forEach($scope.feedbackprog, function(item){
                         $scope.FeedBack = item.FeedBack;
           $scope.$digest();

                 });
          angular.forEach($scope.feedbackexo, function(item){
              $scope.FeedBackexo = item.FeedBackexo;
         $scope.$digest();
  });

     // console.log($scope.Nom);

    // var change = result.replace(/^\"|\"$/g, '')
     // var json = JSON.parse(change);

}
});

});
