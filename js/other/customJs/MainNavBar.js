$(document).ready(function(){
    $('.linkLocation').on('click',function(){
        $('#userLocation').val(($(this).text().split(" ")[0]).trim());
    });
    $('.wgServices').on('click',function(){
        $('#userServiceSelection').val($(this).text().trim());
    });

});


