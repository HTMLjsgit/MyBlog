$(function(){
    var change_id = 0;
    var scroll_image_change_box = $(".scroll-change-image-box");
    var scroll_image = $(".change-image");
    var scroll_image_change_box_count = scroll_image_change_box.length;
    var scroll_text_small_text = $(".scroll-text.small")[0];
    var scroll_text_small_text_count = scroll_text_small_text.length;
    var scroll_change = false;
    var fade_in_box = $('.fade_in_box');

    setTimeout(function(){
        $('.change-image')[0].classList.add("dis");
    }, 100)
    fade_in_box[0].classList.add("fadein");
    $(window).on('load scroll',function () {
        fade_in_box.each(function(e){
            var elementOffset = $(this).offset().top;
            var scrollPos = $(window).scrollTop();
            var wh = $(window).height();
            if (scrollPos > elementOffset - 600){
                $(this).addClass("fadein");
            }
        });


    });
    $('.move-link.animation.top').click(function(e){
        let speed = 500;
        let href = $(this).attr('href').replace("/", "");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top;
        $("html,body").animate({scrollTop: position}, speed, "swing");
    });
    $('.move-link.animation.scroll').click(function(e){
        let speed = 500;
        let href = $(this).attr('href');
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top;
        $("html,body").animate({scrollTop: position}, speed, "swing");

    });

    const text_smalls = ["CombninationMusic", "IdentWeb", "つながつ", "遊びサーチ", "GameTrigger", "EscapeGame", "RunAwayFromDinasaur", "SanbFight"]
    $('.content-scroll').flickity({
        wrapAround:true
    });
    scroll_image_change_box[0].classList.add("dis");
    setInterval(function(){
        if(scroll_image_change_box_count - 1 < change_id){
            change_id = 0;
        }
        //0
        if(change_id == 0){
            scroll_image_change_box[scroll_image_change_box_count - 1].classList.remove("dis");
            scroll_image_change_box[change_id].classList.add("dis");
            scroll_image[scroll_image_change_box_count - 1].classList.remove("dis");
            scroll_image[change_id].classList.add("dis");
        }else{
            scroll_image_change_box[change_id - 1].classList.remove("dis");
            scroll_image_change_box[change_id].classList.add("dis");
            scroll_image[change_id - 1].classList.remove("dis");
            scroll_image[change_id].classList.add("dis");
        }
        scroll_text_small_text.textContent = text_smalls[change_id];
        change_id++;
        //1
    }, 3000);

});