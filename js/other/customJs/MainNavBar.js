$(document).ready(function(){
    $('.linkLocation').on('click',function(){
        $('#userLocation').val(($(this).text().split(" ")[0]).trim());
        if($('#userLocation').val()!=''){
            $('#locationError').css("display","none");
        }
    });
    $('.wgServices').on('click',function(){
        $('#userServiceSelection').val($(this).text().trim());
        $('#userServiceSelection').trigger('input');
        if($('#userLocation').val()==''){
            $('#locationError').css("display","block");
        }else{
            $('#locationError').css("display","none");
        }
        if($('#userServiceSelection').val()!=''){
            $('#serviceError').css("display","none");
        }
    });
    $('.infoPopOver').popover({trigger: "hover", placement: "bottom"});  // hover

    $('#inputUserName').change(function(){
        validationName();
        $('#inputUserName').trigger('input');
    });
    $('#inputMobileNumber').change(function(){
        validationNumber();
        $('#inputMobileNumber').trigger('input');
    });
    $('#inputUserAddress').change(function(){
        validationAddress();
        $('#inputUserAddress').trigger('input');
    });
    $('#inputUserLandmark').change(function(){
        validationLandmark();
        $('#inputUserLandmark').trigger('input');
    });

    function validationAddress(){
        var alphaRegex = /^[a-zA-Z0-9 ]+$/g;
        var errorResultFlag = false;
        if(!alphaRegex.test($('#inputUserAddress').val().trim())){
            $('#errAddress').html("Please enter a valid address.")
            errorResultFlag = true;
        }
        if(errorResultFlag){
            $('#inputUserAddress').focus();
            //alert("validation failed");
            if($('#errAddress').hasClass("ng-hide")){
                $('#errAddress').removeClass("ng-hide");
            }
        }else{
            if(!$('#errAddress').hasClass("ng-hide")){
                $('#errAddress').addClass("ng-hide");
            }

        }
        return !errorResultFlag;
    }
    function validationLandmark(){
        var alphaRegex = /^[a-zA-Z0-9 ]+$/g;
        var errorResultFlag = false;
        if(!alphaRegex.test($('#inputUserLandmark').val().trim())){
            $('#errLandmark').html("Please enter a valid Landmark.")
            errorResultFlag = true;
        }

        if(errorResultFlag){
            $('#inputUserLandmark').focus();
            //alert("validation failed");
            if($('#errLandmark').hasClass("ng-hide")){
                $('#errLandmark').removeClass("ng-hide");
            }
        }else{
            if(!$('#errLandMark').hasClass("ng-hide")){
                $('#errLandMark').addClass("ng-hide");
            }

        }
        return !errorResultFlag;
    }


    function validationName(){
        var alphaRegex = /^[a-zA-Z ]+$/g;
        var errorResultFlag = false;
        if(!alphaRegex.test($('#inputUserName').val().trim())){
            $('#errName').html("Only Alphabets allowed.")
            errorResultFlag = true;
        }
        if(!$('#inputUserName').val().length>50){
            $('#errName').html("Maximum of 50 Characters allowed.");
            errorResultFlag = true;
        }

        if(errorResultFlag){
            $('#inputUserName').focus();
            //alert("validation failed");
            if($('#errName').hasClass("ng-hide")){
                $('#errName').removeClass("ng-hide");
            }
        }else{
            if(!$('#errName').hasClass("ng-hide")){
                $('#errName').addClass("ng-hide");
            }

        }
        return !errorResultFlag;
    }

    function validationNumber(){
        var numFixedLengthRegex = /^[0-9]{10}$/g;
        var errorResultFlag = false;
        if(!numFixedLengthRegex.test($('#inputMobileNumber').val())){
            $('#errMobile').html("Enter 10 digit Mobile Number.")
            errorResultFlag = true;
        }

        if(errorResultFlag){
            $('#inputMobileNumber').focus();
            //alert("validation failed");
            if($('#errMobile').hasClass("ng-hide")){
                $('#errMobile').removeClass("ng-hide");
            }
        }else{
            if(!$('#errMobile').hasClass("ng-hide")){
                $('#errMobile').addClass("ng-hide");
            }

        }
        return !errorResultFlag;
    }
    function finalizeValidationPlaceOrder(){
        if(validationName() && validationNumber() && validationAddress() && validationLandmark()){
            alert("Now can make the order call");
        }else{
            alert("Validation Failed order call cannot be commenced");
        }
    }
    $('#bookAction').on('click',function(){
        finalizeValidationPlaceOrder();
    });
});


