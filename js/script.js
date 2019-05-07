(function($){
    "use strict";

    $(document).ready(function(){
        // Top info close
        $('.top-info__close').on('click',function(e){
            e.preventDefault();
            $('.top-info').slideUp();
        });
        // menu bar dropdown toggle
        $('.menu-bar__item').on('click', function(e){
            e.preventDefault();
            $(this)
            .toggleClass('active')
            .siblings().removeClass('active');
        });
    });
})(jQuery);