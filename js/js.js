$(document).ready(function() {


//REQUETE RECUPERATION BDD
//CONVERSION EN JSON

var json = [
    {nom: "Ouadhi", prenom:"samy", age: 20},
    {nom: "Bouque", prenom:"louise", age: 21},
    {nom: "Triple salto du bras droit", prenom:"ADRIEN MONTEL", age: 20}
]

let data = [];

$.each(json, function(i, obj){
  data.push(obj.nom);
  console.log(data);
});

if(document.createElement("datalist").options) {



$("#search").on("input", function(e) {

var val = $(this).val();
if(val === "") return;
//You could use this to limit results
// if(val.length < 3) return;
console.log(val);
$.each(json, function(i, obj){
  if (obj.nom == val) {
    console.log("ok");
    $('.description').html(obj.prenom);
    liste+=obj;
  }
});

var dataList = $("#searchresults");
dataList.empty();

data.forEach(d => {
  dataList.append('<option>'+d+'</option>');
});




});
}


})
