require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $('[data-url]').on('click',function(e){
        e.preventDefault();
        window.location = $(this).data('url');
    });
})(jQuery);