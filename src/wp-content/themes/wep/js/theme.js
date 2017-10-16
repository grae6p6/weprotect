// required for modal
require("bootstrap/dist/js/bootstrap.min");

(function ($) {
	$(document).ready(function () {

		// Retina/high DPI device?
        if (window.matchMedia("(-webkit-device-pixel-ratio: 2)").matches) {
            var $images = $("img[data-2x]");
            console.log($images);
            $.each($images, function() {
                var $this = $(this);
                $this.attr('src', $this.data('2x'));
            });

            var $divs = $("div[data-2x]");
            $.each($divs, function() {
                var $this = $(this);
				$this.css('background-image', 'url("' + $this.data('2x') + '")');
            });
        }

		// Create hyperlinks with a data-url prop
		$('[data-url]').on('click', function (e) {
			e.preventDefault();
			window.location = $(this).data('url');
		});

		// Toggle responsive menu via burger... bun.
		$('header.body .menu').on('click',function () {
			var menu = $('#menu-main');
            menu.toggleClass('showing');
		});

		// Create listener for tallest sibling ".block" within ".has-blocks" parent
		$('.has-blocks').each(function (i) {
			var parent = $(this);
			var elTallest = 0;
			var elLongest = 0;
			var elTarget;
			$(this).find('.block').each(function () {
				var height = parseInt($(this).outerHeight());
				var length = $(this).text().length;

				// Check rendered height AND computed text length
				if (height >= elTallest && length > elLongest) {
					elTallest = height;
					elLongest = length;
					elTarget = $(this);
				}
			});

			// Add ID to tallest block for ref
			var elId = elTarget.attr('id');
			//console.log('Listen: ' + elId);

			// Resize sensor for the tallest block amongst siblings
			new resizeSensor.create(document.getElementById(elId), function () {
				var height = $('#' + elId).height();
				parent.find('.block:not(#' + elId + ')').each(function () {
					//console.log('Height: ' + height);
					//console.log('Setting: ' + $(this).attr('id'));
					$(this).height(height + 'px');
				});
			});
		});

		// Font size scale
		$('a.text-size').on('click', function () {
			var body = $('body');
			if (body.hasClass('small')) {
				body.removeClass('small');
			} else if (body.hasClass('large')) {
				body.removeClass('large');
				body.addClass('small');
			} else {
				body.addClass('large');
			}
		});

		var body = $('body');

		// Dropdown hover show
		body.on('mouseenter mouseleave', '.dropdown', function (e) {
			var _d = $(e.target).closest('.dropdown');
			_d.addClass('show');
			_d.find('> a').attr('aria-expanded', 'true');
			setTimeout(function () {
				_d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
				_d.find('> a').attr('aria-expanded', _d.is(':hover') ? 'true' : 'false');
			}, 300);
		});

		// Model National Response
		if (body.hasClass('page-template-mnr')) {

			// Display/hide and scroll features
			$(window).on('hashchange', function () {
				var section = window.location.hash.substr(1);
				var obj = $(window.location.hash);
				if (obj.length !== 0) {
					$('.mnr .content section').hide();
					obj.show();
					$('html, body').animate({
						scrollTop: obj.offset().top
					}, 1000);
				}
			}).trigger('hashchange');

			// Toggle side menu sections
			$('.mnr .toggle').on('click', function () {
				var entry = $(this).parent().parent().parent().parent();
				entry.toggleClass('expanded');
				entry.find('.fa').toggleClass('fa-arrow-right fa-arrow-down');
			});
		}
	});
})(jQuery);