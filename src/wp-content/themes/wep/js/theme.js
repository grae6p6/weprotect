// required for modal
require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $(document).ready(function(){

        // Mobile devices can double tab top level items to visit page
        $( '#menu-main li:has(ul)' ).doubleTapToGo();

        $('[data-url]').on('click',function(e){
            e.preventDefault();
            window.location = $(this).data('url');
        });

        // Font size scale
        $('a.text-size').on('click',function(){
            var body = $('body');
            if( body.hasClass('small') ) {
                body.removeClass('small');
            } else if( body.hasClass('large') ) {
                body.removeClass('large');
                body.addClass('small');
            } else {
                body.addClass('large');
            }
        });

        var body = $('body');

        // Dropdown hover show
        body.on('mouseenter mouseleave','.dropdown',function(e){
            var _d=$(e.target).closest('.dropdown');_d.addClass('show');
            _d.find('> a').attr('aria-expanded', 'true');
            setTimeout(function(){
                _d[_d.is(':hover')?'addClass':'removeClass']('show');
                _d.find('> a').attr('aria-expanded', _d.is(':hover')?'true':'false');
            },300);
        });

        // Model National Response
        if( body.hasClass( 'page-template-mnr' ) ) {

            // Display/hide and scroll features
            $(window).on('hashchange',function(){
                var section = window.location.hash.substr(1);
                var obj = $( window.location.hash );
                if( obj.length !== 0 ) {
                    $('.mnr .content section').hide();
                    obj.show();
                    $('html, body').animate({
                        scrollTop: obj.offset().top
                    }, 1000);
                }
            }).trigger('hashchange');

            // Toggle side menu sections
            $('.mnr .toggle').on('click',function(){
                var entry = $(this).parent().parent().parent().parent();
                entry.toggleClass( 'expanded' );
                entry.find( '.fa' ).toggleClass( 'fa-arrow-right fa-arrow-down' );
            });
        }
    });
})(jQuery);