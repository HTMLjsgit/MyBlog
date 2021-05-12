$(function(){
    var smart_phone_button_mode = true;
    $('.smartphone-view').click(function(){
        if(smart_phone_button_mode){
            $('.smartphone-nav').addClass("dis");
            $('.smart-phone-button').addClass("dis");
            smart_phone_button_mode = false;
        }else{
            $('.smartphone-nav').removeClass("dis");
            $('.smart-phone-button').removeClass("dis");
            smart_phone_button_mode = true;
        }
    });
});