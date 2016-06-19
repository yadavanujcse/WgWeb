$(document).ready(function(){
    $('.linkLocation').on('click',function(){
        $('#userLocation').val(($(this).text().split(" ")[0]).trim());
        if($('#userLocation').val()!=''){
            $('#locationError').css("display","none");
        }
    });
    $('.wgServices').on('click',function(){
        $('#userServiceSelection').val($(this).text().trim());
        if($('#userLocation').val()==''){
            $('#locationError').css("display","block");
        }else{
            $('#locationError').css("display","none");
        }
        if($('#userServiceSelection').val()!=''){
            $('#serviceError').css("display","none");
        }
    });

    $('#BookNow').on('click', function () {
        if($('#userLocation').val()==''){
            $('#locationError').css("display","block");
        }else{
            $('#locationError').css("display","none");
        }
        if($('#userServiceSelection').val()==''){
            $('#serviceError').css("display","block");
        }else{
            $('#serviceError').css("display","none");
        }

    });

});


