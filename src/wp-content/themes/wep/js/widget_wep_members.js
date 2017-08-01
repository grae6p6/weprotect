/**
 * Widget members - Toggle member groups
 */

(function($) {
    $(document).ready(function(){
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
            var group = $('.btn[data-group].active').data('group');
            wml.find('.members .entry:not(.' + group + ')').hide();

            // Render map
            if( typeof ( map = $('#jqvmap') ) !== 'undefined' ) {

                // Countries list for map highlighting
                var countries = [];
                wml.find('[data-type="country"]').each(function(){
                    countries[ $(this).data('value') ] = 1;
                });

                //var locale = $('html').attr('lang');
                map.vectorMap({
                    map: 'world_en',// + locale.split('-')[0],
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#d2c3d7',
                    borderColor: '#2A0634',
                    enableZoom: true,
                    showTooltip: true,
                    scaleColors: ['#8e699b','#ffffff'],
                    values: countries,
                    normalizeFunction: 'polynomial',
                    onRegionClick: function(element, code, region) {
                        var obj = $('.entry.country [data-value="' + code + '"]');
                        if( obj.length ) {
                            //$('#memberModal').relatedTarget = $($('.entry.country [data-value="' + code + '"]').parent());
                            //console.log($('#memberModal').relatedTarget);
                            //$('#memberModal').modal('show');
                        }

                        //jqvmap-label
                    }
                });
            }

            // Member display change
            wml.find('.btn[data-display]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('.btn[data-display]').removeClass('active');
                src.addClass('active');

                var display = src.data('display');
                wml.find('.members').addClass('hide');
                wml.find('.members.' + display).removeClass('hide');

                // Show map
                //if( display === 'map' ) {

                //}
            });

            // Member group change
            wml.find('.btn[data-group]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('.btn[data-group]').removeClass('active');
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
    });
})(jQuery);