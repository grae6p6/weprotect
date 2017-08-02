/**
 * Widget members - Toggle member groups
 */

(function($) {
    $(document).ready(function(){
        var wml;
        if( typeof ( wml = $('.widget_wep_widget_members_list') ) !== 'undefined' ) {
            var WepWidgetMembers = {
                sug: [],
                display: '',
                code: '',
                map: '',
                group: '',
                values: [],
                init: function(){
                    if( typeof ( WepWidgetMembers.map = $('#jqvmap') ) !== 'undefined' ) {
                        //var locale = $('html').attr('lang');
                        WepWidgetMembers.map.empty();
                        WepWidgetMembers.map.vectorMap({
                            map: 'world_en',// + locale.split('-')[0],
                            backgroundColor: null,
                            color: '#ffffff',
                            hoverOpacity: 0.7,
                            selectedColor: '#d2c3d7',
                            borderColor: '#2A0634',
                            enableZoom: true,
                            showTooltip: true,
                            scaleColors: ['#8e699b','#ffffff'],
                            values: WepWidgetMembers.values,
                            normalizeFunction: 'polynomial',
                            onRegionClick: function(element, code, region) {
                                var obj = $('.entry.' + WepWidgetMembers.group + '[data-code="' + code + '"]');
                                if( obj.length ) {
                                    WepWidgetMembers.code = code;
                                    $('#memberModal').modal('show');
                                }
                            }/*,
                            onLabelShow: function(event, label, code) {
                                console.log(event);
                                label.html('<i class="fa fa-info-circle" aria-hidden="true"></i> ' + label);
                            }*/
                        });
                        //console.log('init map');
                    }
                }
            };

            WepWidgetMembers.sug['ga'] = 'Global Alliance';
            WepWidgetMembers.sug['wp'] = 'WePROTECT';
            WepWidgetMembers.sug['wpga'] = 'WePROTECT Global Alliance';
            WepWidgetMembers.sug['none'] = '-';

            // Hide members not in default group.
            WepWidgetMembers.group = $('.btn[data-group].active').data('group');

            // Set map values for current group type
            WepWidgetMembers.values = [];
            wml.find('.members .entry').hide().each(function(){
                if( $(this).hasClass( WepWidgetMembers.group ) ) {
                    $(this).show();
                    WepWidgetMembers.values[ $(this).data('code') ] = 1;
                }
            });

            WepWidgetMembers.init();

            // Member display change
            wml.find('.btn[data-display]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('.btn[data-display]').removeClass('active');
                src.addClass('active');

                WepWidgetMembers.display = src.data('display');
                wml.find('.members').addClass('hide');
                wml.find('.members.' + WepWidgetMembers.display).removeClass('hide');

                // Render
                if( WepWidgetMembers.display === 'map' ) {
                    WepWidgetMembers.init();
                }
            });

            // Member group change
            wml.find('.btn[data-group]').on('click',function(){
                var src = $(this);
                if( src.hasClass('active') ) {
                    return true;
                }
                wml.find('.btn[data-group]').removeClass('active');
                src.addClass('active');

                WepWidgetMembers.values = [];
                WepWidgetMembers.group = src.data('group');

                // Process entries
                wml.find('.members .entry').hide().each(function(){
                    if( $(this).hasClass( WepWidgetMembers.group ) ) {
                        $(this).show();
                        WepWidgetMembers.values[ $(this).data('code') ] = 1;
                    }
                });
                
                // Render
                WepWidgetMembers.init();
            });
        }

        // Populate modal
        $('#memberModal').on('show.bs.modal', function (event) {
            var src;
            if( typeof event.relatedTarget !== 'undefined' ) {
                src = $($(event.relatedTarget).parent());
                WepWidgetMembers.code = src.data('code');
            } else {
                src = $('.entry.' + WepWidgetMembers.group + '[data-code="' + WepWidgetMembers.code + '"]');
            }
            //console.log(WepWidgetMembers.code);
            /*if( typeof src === 'undefined' ) {
                event.preventDefault();
                return false;
            }*/
            var modal = $(this);

            // Set name(s)
            var names = [];
            src.each(function(){
                names.push($(this).find('[data-type="name"]').html());
            });
            modal.find('.modal-body [data-name]').show().find('p').html(names.join('<br>'));
            
            if( WepWidgetMembers.group === 'country' ) {
                var minister = src.find('[data-type="minister"]').html();
                if( minister.length > 4 ) {
                    modal.find('.modal-body [data-minister]').show().find('p').html(minister.trim());
                } else {
                    modal.find('.modal-body [data-minister]').hide();
                }
                //console.log(src.find('[data-type="sign-up"]').text().trim());
                modal.find('.modal-body [data-sign-up]').find('p').html( WepWidgetMembers.sug[ src.find('[data-type="sign-up"]').text().trim() ] );
            } else {
                modal.find('.modal-body [data-minister]').hide();
                modal.find('.modal-body [data-sign-up]').hide();
            }

            //var name = src.find('[data-type="name"]').html();
            

            

            /*var name = src.find('[data-type="name"]').html();
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
            criticality.find('p').html( src.find('[data-type="criticality"]').text() );*/

            /*var engagement = src.find('[data-type="engagement"]').html();
             console.log(engagement);
             if( engagement.length > 4 ) {
             modal.find('.modal-body [data-engagement]').show().find('p').html(engagement);
             } else {
             modal.find('.modal-body [data-engagement]').hide();
             }*/

            //modal.find('.modal-body [data-sign-up]').find('p').html( WepWidgetMembers.sug[ src.find('[data-type="sign-up"]').text() ] );

            /*var action = src.find('[data-type="action"]').html();
             if( action.length > 4 ) {
             modal.find('.modal-body [data-action]').show().find('p').html(action);
             } else {
             modal.find('.modal-body [data-action]').hide();
             }*/




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
        });
    });
})(jQuery);