// required for modal
require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $(document).ready(function(){
        $('[data-url]').on('click',function(e){
            e.preventDefault();
            window.location = $(this).data('url');
        });

        var body = $('body');

        // Dropdown hover show
        body.on('mouseenter mouseleave','.dropdown',function(e){
            var _d=$(e.target).closest('.dropdown');_d.addClass('show');
            setTimeout(function(){
                _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },300);
        });

        // Model national Response
        if( body.hasClass( 'page-template-mnr' ) ) {
            $(window).on('hashchange',function(){
                var section = window.location.hash.substr(1);
                var obj = $( window.location.hash );
                if( obj.length !== 0 ) {
                    $('.mnr .content section').hide();
                    obj.show();
                    $('html, body').animate({
                        scrollTop: obj.offset().top
                    }, 2000);
                }
            });
        }
    });
})(jQuery);