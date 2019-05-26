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
            // summary
            let products_total = 0;
            $.each($('.cart-table tbody tr'), function (indexInArray, valueOfElement) { 
                let unit_price = parseFloat($('.unit_price', this).html());
                let quantity = parseInt($('.cart_quantity', this).val());
                let total = unit_price*quantity;
                total = total.toFixed(2);
                $('.cart_total', this).html(total);
                products_total += unit_price*quantity;
            });
            products_total = products_total.toFixed(2)
            $('.products_summary').html(products_total);

            // tax
            let tax = products_total * 0.23;
            tax = tax.toFixed(2);
            $('.tax_summary').html(tax);

            // total
            let total = parseFloat(products_total+20.00);
            total = total.toFixed(2);
            $('.total').html(total);
        });
        $('.cart-remove-product').on('click', function (e) { 
            e.preventDefault();
            $(this).parent().parent('tr').remove();
        });

        //shipping-address
        $('.shipping-address').on('click', function () {
            $(this)
            .toggleClass('active')
            .siblings().removeClass('active');
        });

        $('.shipping-another-address').on('click', function () {
            $('.shipping-additional-address').slideDown();
            $(this).fadeOut()
            .siblings('hr').fadeOut();
        });
        $('.filter-color').on('click', function () {
            $(this).toggleClass('active');
            triggerFakeLoading();
        });
        $('.form-check-input').on('change', function () {
            triggerFakeLoading();
        });

        function triggerFakeLoading() {
            $('.loading').addClass('active');
            setTimeout(function(){
                $('.loading').removeClass('active');
            }, 1000);
        }
    });
})(jQuery);