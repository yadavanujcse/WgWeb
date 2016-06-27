$(document).ready(function(){
    $.ajax({url: "getServiceMeta", success: function(result){
        window.serviceMeta = JSON.parse(result);
        console.log(window.serviceMeta);
    }});
});

$('#buyPackageModal').on('shown.bs.modal', function () {
    var vTop = $("#step1").offset().top - $("#rowNext").offset().top + $("#step1").height()/2;
    $('#progressBarBuyPack').css('top',Math.ceil(vTop));
    var vLeft = $("#step1").offset().left - $('#buyButtonConatiner').offset().left + $("#step1").width()/2;
    $('#progressBarBuyPack').css('left',Math.ceil(vLeft));
    var vRight =  $("#step4").offset().left - $('#buyButtonConatiner').offset().left + $("#step4").width()/2
    $('#progressBarBuyPack').css('width',Math.ceil(vRight-vLeft));
    $('#progressBarBuyPack').css('display','block');
    $('#progressBarBuyPack').css('position','relative');
    $('#progressBarBuyPack').css('top','48px');

});

$('#step1').on('click',function(){
   $('#progressBarBuyPack').attr('value',0);

});
$('#step2').on('click',function(){
   $('#progressBarBuyPack').attr('value',33);
});
$('#step3').on('click',function(){
   $('#progressBarBuyPack').attr('value',66);
});
$('#step4').on('click',function(){
   $('#progressBarBuyPack').attr('value',100);
});
