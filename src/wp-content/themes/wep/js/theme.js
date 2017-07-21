//require("bootstrap/dist/js/bootstrap.min");

(function($) {
    $(document).ready(function(){
        $('[data-url]').on('click',function(e){
            e.preventDefault();
            window.location = $(this).data('url');
        });

        /**
         * Widget members - Toggle member groups
         */
        var wml;
        if( typeof ( wml = $('.widget_wep_widget_members_list') ) !== 'undefined' ) {
            var WepModal = {
                sug: []
            };

            WepModal.sug['ga'] = 'Global Alliance';
            WepModal.sug['wp'] = 'WePROTECT';
            WepModal.sug['wpga'] = 'WePROTECT Global Alliance';
            WepModal.sug['none'] = 'None';

            // Hide members not in default group.
            var group = $('button[data-group].active').data('group');
            wml.find('.members .entry:not(.' + group + ')').hide();

            /*$.ajax({
             url: '/wp-content/themes/wep/js/jquery.vmap.js',
             dataType: "script",
             success: function(){
             $.ajax({
             url: '/wp-content/themes/wep/js/maps/jquery.vmap.world.js',
             dataType: "script",
             success: function(){
             $('#jqvmap').vectorMap({
             map: 'world_en',
             backgroundColor: null,
             color: '#ffffff',
             hoverOpacity: 0.7,
             selectedColor: '#666666',
             enableZoom: true,
             showTooltip: true,
             scaleColors: ['#C8EEFF', '#006491'],
             normalizeFunction: 'polynomial'
             });
             }
             });
             }
             });*/

            if( typeof ( map = $('#jqvmap') ) !== 'undefined' ) {

                $.ajax({
                    url: '/wp-json/wp/v2/posts',
                    dataType: 'json'
                }).success(function(res){
                    console.log(res);
                });

                map.vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#d2c3d7',
                    borderColor: '#2A0634',
                    enableZoom: true,
                    showTooltip: true,
                    scaleColors: ['#8e699b','#ffffff'],
                    values: {
                        cn: 1,
                        ca: 1,
                        gb: 1,
                        ch: 1,
                        br: 1,
                        fr: 1,
                        de: 1
                    },
                    normalizeFunction: 'polynomial'
                });
            }


            // Member display change
            wml.find('button[data-display]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('button[data-display]').removeClass('active');
                src.addClass('active');

                var display = src.data('display');
                wml.find('.members').addClass('hide');
                wml.find('.members.' + display).removeClass('hide');

                // Show map
                //if( display === 'map' ) {

                //}
            });

            // Member group change
            wml.find('button[data-group]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('button[data-group]').removeClass('active');
                src.addClass('active');

                var group = src.data('group');
                wml.find('.members .entry').hide().each(function(){
                    if( $(this).hasClass( group ) ) {
                        $(this).show();
                    }
                });
            });
        }

        // Populate modal
        $('#memberModal').on('show.bs.modal', function (event) {
            var src = $(event.relatedTarget); // Button that triggered the modal
            var name = src.find('[data-type="name"]').html(); // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            //modal.find('.modal-title').text(name);

            /*var fields = [
             'minister',
             'criticality',
             'sign-up',
             'engagement',
             'action'
             ];

             var content;
             for( var i in fields ) {
             content = src.find('[data-type="' + fields[i] + '"]').html();
             if( !content ) {
             console.log( '[data-type="' + fields[i] + '"]' );
             }
             console.log(content);
             if( content.length > 0 ) {
             modal.find('.modal-body [' + fields[i] + ']').show().find('p').html( content );
             } else {
             modal.find('.modal-body [' + fields[i] + ']').hide();
             }
             }*/

            var name = src.find('[data-type="name"]').html();
            if( name.length > 4 ) {
                modal.find('.modal-body [data-name]').show().find('p').html(name);
            } else {
                modal.find('.modal-body [data-name]').hide();
            }

            var minister = src.find('[data-type="minister"]').html();
            if( minister.length > 4 ) {
                modal.find('.modal-body [data-minister]').show().find('p').html(minister);
            } else {
                modal.find('.modal-body [data-minister]').hide();
            }

            var criticality = modal.find('.modal-body [data-criticality]');
            criticality.find('p').html( src.find('[data-type="criticality"]').text() );

            /*var engagement = src.find('[data-type="engagement"]').html();
             console.log(engagement);
             if( engagement.length > 4 ) {
             modal.find('.modal-body [data-engagement]').show().find('p').html(engagement);
             } else {
             modal.find('.modal-body [data-engagement]').hide();
             }*/

            modal.find('.modal-body [data-sign-up]').find('p').html( WepModal.sug[ src.find('[data-type="sign-up"]').text() ] );

            /*var action = src.find('[data-type="action"]').html();
             if( action.length > 4 ) {
             modal.find('.modal-body [data-action]').show().find('p').html(action);
             } else {
             modal.find('.modal-body [data-action]').hide();
             }*/
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