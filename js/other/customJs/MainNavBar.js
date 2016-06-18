$(document).ready(function(){
    $('.linkLocation').on('click',function(){
        $('#userLocation').val(($(this).text().split(" ")[0]).trim());
    });
    $('.wgServices').on('click',function(){
        $('#userServiceSelection').val($(this).text().trim());
    });
    $('#receiver').on('mouseenter mouseleave click', function(e) {
        if($('#selectUserLocation').attr('aria-expanded') && $('#selectUserLocation').parent().hasClass("open")){
            $('#selectUserLocation').attr('aria-expanded','false');
            $('#selectUserLocation').parent().removeClass('open');
        }
        $('#initiator').trigger(e.type);



        if(e.type=="mouseleave"){
            $('#receiver').blur();
        }

    });


    $('#receiver').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $('#userLocation').on('mouseenter click', function(e) {
        e.preventDefault();

        if(!($('#selectUserLocation').attr('aria-expanded') && $('#selectUserLocation').parent().hasClass("open"))){

            $('#selectUserLocation').trigger('click');
        }
    });

    $('#selectUserLocation').on('mouseenter', function(e) {
        e.preventDefault();
        if(!($('#selectUserLocation').attr('aria-expanded') && $('#selectUserLocation').parent().hasClass("open"))){
            e.preventDefault();
            $('#selectUserLocation').trigger('click');
        }


    });

    $('wgdummy').on('click',function(){
        e.preventDefault();
    });
});


