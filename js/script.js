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
        
        $('.cart_quantity').on('change',function(){
            let quantity = parseInt($(this).val());
            let unit_price = parseFloat($(this).data('price'));
            let product_id = parseInt($(this).data('product'));
            let total = unit_price*quantity;
            total = total.toFixed(2);
            $('.cart_total[data-product=' + product_id + ']').html(total + ' <span class="currency">PLN</span>');
        });
        $('.cart-remove-product').on('click', function (e) { 
            e.preventDefault();
            $(this).parent().parent('tr').remove();
        });

    });
})(jQuery);