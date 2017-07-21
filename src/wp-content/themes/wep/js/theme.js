//require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $(document).ready(function(){
        $('[data-url]').on('click',function(e){
            e.preventDefault();
            window.location = $(this).data('url');
        });

        // Dropdown hover show
        $('body').on('mouseenter mouseleave','.dropdown',function(e){
            var _d=$(e.target).closest('.dropdown');_d.addClass('show');
            setTimeout(function(){
                _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },300);
        });
    });
})(jQuery);