(function($){
    "use strict";

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        // Top info close
        $('.top-info__close').on('click',function(e){
            e.preventDefault();
            $('.top-info').slideUp();
        });
        // menu bar dropdown toggle
        $('.menu-bar__item > a').on('click', function(e){
            e.preventDefault();
            $(this)
            .parent()
            .toggleClass('active')
            .siblings().removeClass('active');
        });
    });
})(jQuery);