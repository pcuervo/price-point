var $=jQuery.noConflict();

(function($){

    "use strict";

    $(function(){

        $('.js-fact-sheets-form').submit( function(e){
            e.preventDefault();
            var data = $(this).serialize();
            console.log( data );
            sendPDF( data );
        });

    });

})(jQuery);

function sendPDF( data ){
    if( ! isFormValid() ) return;

    $('.js-loader').show();
    $.post(
        ajaxurl,
        data,
        function( response ){
            console.log( response );
            var status = $.parseJSON(response)
            if ( status.error == 1 ){

                if ( $('.js-form-success').length ){
                    $('.js-form-success').remove();
                }
                if ( $('.js-form-error').length ){
                    $('.js-form-error').remove();
                }
                $('.testimonial-form-container').after('<h5 class="[ text-center ][ color-primary ][ js-form-error ]">An error has occurred. <br /> Please try again later.</h5>');

            } else {
                if ( $('.js-form-success').length ){
                    $('.js-form-success').remove();
                }
                 if ( $('.js-form-error').length ){
                    $('.js-form-error').remove();
                 }
                $('.testimonial-form-container').after('<div class="[ text-center ][ color-secondary ][ margin-bottom ][ js-form-success ]"><h5>Thank you for your interest in our Fact Sheets.</h5><h5>You will receive our awesome content over email shortly. Get more business insights by following us at:</h5><div class="[ text-center ]"><p style="display: inline-block; margin-right: 20px; text-align: center;"><a href="http://www.facebook.com/thepricepoint" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></p><p style="display: inline-block; text-align: center;"><a href="https://twitter.com/pricepointpr" target="_blank" ><i class="fa fa-twitter fa-2x"></i></a></p></div></div>');

            }
        }
    );
}

function injectLoader(){
    $('.testimonial-form-container').after('<div class="[ loader js-loader ]"><img src="http://fwprnew.fwpr.com/wp-content/themes/pinnacle_premium/assets/img/ajax-loader-fw.gif" alt="loading…"></div>');
}

function isFormValid(){
    var position = $('#kt-feedback-post-position').val();
    if( position == '' || typeof position == 'undefined' ) return false;

    var company = $('#kt-feedback-post-company').val();
    if( company == '' || typeof company == 'undefined' ) return false;

    return true;
}