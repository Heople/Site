$(document).ready(function() {



    $.ajax({
            url: "php/plateforme.php",
            data:
                {
                },
            type: 'post',
            success: function(result) {
//          alert(result);//ce qui est fait quand php a répondu
            $("#carre").html(result);
						
            }
        });


});
