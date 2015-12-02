/**
 * Created by Jeep on 02/12/2015.
 */
$(document).ready(function(){
    $('#navPrincipale').hide();
    $('#contentNav,#navLegale').hide();
    $('#hamburger a').click(function(e){
        e.preventDefault();
        $('#navPrincipale').animate({width: "toggle"} , 500, function(){
            $('#contentNav,#navLegale').slideDown();
        });
        $('#contentNav,#navLegale').hide();
    });
});