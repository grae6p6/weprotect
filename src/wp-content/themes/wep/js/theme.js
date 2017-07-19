require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $('[data-url]').on('click',function(e){
        e.preventDefault();
        window.location = $(this).data('url');
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        var src = $(event.relatedTarget) // Button that triggered the modal
        var name = src.data('name') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text(name)
        modal.find('.modal-body [data-name]').val(name)
    });
})(jQuery);