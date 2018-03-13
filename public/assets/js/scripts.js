/**
 * 1. Slider Images
 * 2. Portfolio
 * 3. Map
 * 4. Menu Mobile
 */

'use strict';

(function ($) {

	$.fn.baonhiIsotope = function (opts) {
		var $self = $(this),
			defaults = {
				filter         : '*',
				itemSelector   : '.grid-item',
				percentPosition: true,
				masonry        : {
					columnWidth: '.grid-sizer'
				}
			},
			options = $.extend(defaults, $self.data(), opts),
			$controls = $('.controls', $self),
			$grid = $('.grids', $self),
			$images = $('img', $self),
			count = 0,
			total = $images.length;

		$.each($images, function () {
			var image = new Image();

			image.src = $(this).attr('src');

			image.onload = function () {

				count++;

				if (count === total) {
					$('.grid-item', $grid).addClass('ready');
					$grid.isotope(options);
					$grid.data('isIsotope', true);
				}
			}
		});

		$grid.on('arrangeComplete', function () {
			var $items = $('.grid-item:not(.ready)', $grid);

			if ($items.length) {
				$items.addClass('ready');
				setTimeout(function () {
					$('.kd-hidden', $grid).addClass('kd-show');
				}, 300);
			}
		});

		$('a', $controls).on('click', function (event) {

			event.preventDefault();

			var $this = $(this),
				filter = $this.data('filter');

			if (!$this.hasClass('active')) {
				$('.active', $controls).removeClass('active');
				$this.addClass('active');

				$grid.isotope({
					filter: filter
				});
			}
		});
		if ($self.hasClass('gallery')) {
			$self.baonhiMagnificPopup();
		}

	};
	$.fn.baonhiMagnificPopup = function (opts) {

		var $self = $(this),
			options = $.extend({
				delegate   : '.media',
				type       : 'image',
				tLoading   : '<div class="dots">\
							<div class="dot active"></div>\
							<div class="dot active"></div>\
							<div class="dot active"></div>\
							<div class="dot active"></div>\
						</div>',
				mainClass  : 'mfp-img-mobile',
				gallery    : {
					enabled           : true,
					navigateByImgClick: true,
					preload           : [0, 3] // Will preload 0 - before current, and 1 after the current image
				},
				image      : {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
				},
				closeMarkup: '<button title="%title%" type="button" class="mfp-close"></button>',
				callbacks  : {
					markupParse      : function (item) {
					},
					imageLoadComplete: function () {
						var $container = $('.mfp-container');

						$container.addClass('load-done');
						setTimeout(function () {
							$container.addClass('load-transition');
						}, 50);
					},
					change           : function () {
						var $container = $('.mfp-container');
						$container.removeClass('load-done load-transition');
					}

				}
			}, $self.data(), opts);
		$('.media', $self).each( function () {
			var href = $(this).data('url');

			if (href && href !== '') {
				$(this).attr('href', href);
			}

		});
		$self.magnificPopup(options);
	};

	$(document).ready(function () {

		/* 1. Slider Images */
		var $sliderSection = $('#slider-section');

		if ($sliderSection.length) {
			$('.owl-carousel', $sliderSection).owlCarousel({
				items    : 1,
				nav      : true,
				dots     : true,
				navText  : ['', ''],
				loop     : true,
				mouseDrag: false,
				onInitialized: function(e, ui) {
					var wh = $(window).height(),
						offsetTop = $sliderSection.offset().top;

					$('.item', $sliderSection).height((wh - offsetTop));
				},
				onResize: function () {
					var wh = $(window).height(),
						offsetTop = $sliderSection.offset().top;

					$('.item', $sliderSection).height((wh - offsetTop));
				}
			});
		}

		/* 2. Portfolio */
		// Isotope
		var $portfolio = $('.portfolio');

		if ($portfolio.length) {

			$portfolio.each(function () {
				$(this).baonhiIsotope();
			})
		}
		// Sticky project details
		var $projectDetails = $('.detail-content');

		if ($projectDetails.length) {
			var $imagesProject = $('.images-project'),
				height = $imagesProject.outerHeight(),
				options = {
					marginTop    : 100,
					limit        : $imagesProject.offset().top + height - $projectDetails.height() - 70,
					removeOffsets: true
				};

			if ($('body').hasClass('admin-bar')) {
				options.marginTop += 32;
				options.limit -= 32;
			}
			$projectDetails.scrollToFixed(options);
		}

		/* 3. Map */
		// Maps Google
		var $maps = $('.maps');

		if ($maps.length) {
			var lat = $maps.data('lat') ? $maps.data('lat') : '21.036671',
				long = $maps.data('long') ? $maps.data('long') : '105.835090',
				zoom = $maps.data('zoom') ? $maps.data('zoom') : 15,
				dataMap = {
					zoom                 : zoom,
					center               : new google.maps.LatLng(lat, long),
					mapTypeId            : google.maps.MapTypeId.ROADMAP,
					mapTypeControlOptions: {
						mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
							'styled_map']
					},
					scrollwheel          : false,
					styles               : [{
						"featureType": "water",
						"stylers"    : [{"saturation": 43}, {"lightness": -11}, {"hue": "#0088ff"}]
					}, {
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers"    : [{"hue": "#ff0000"}, {"saturation": -100}, {"lightness": 99}]
					}, {
						"featureType": "road",
						"elementType": "geometry.stroke",
						"stylers"    : [{"color": "#808080"}, {"lightness": 54}]
					}, {
						"featureType": "landscape.man_made",
						"elementType": "geometry.fill",
						"stylers"    : [{"color": "#ece2d9"}]
					}, {
						"featureType": "poi.park",
						"elementType": "geometry.fill",
						"stylers"    : [{"color": "#ccdca1"}]
					}, {
						"featureType": "road",
						"elementType": "labels.text.fill",
						"stylers"    : [{"color": "#767676"}]
					}, {
						"featureType": "road",
						"elementType": "labels.text.stroke",
						"stylers"    : [{"color": "#ffffff"}]
					}, {"featureType": "poi", "stylers": [{"visibility": "off"}]}, {
						"featureType": "landscape.natural",
						"elementType": "geometry.fill",
						"stylers"    : [{"visibility": "on"}, {"color": "#b8cb93"}]
					}, {
						"featureType": "poi.park",
						"stylers"    : [{"visibility": "on"}]
					}, {
						"featureType": "poi.sports_complex",
						"stylers"    : [{"visibility": "on"}]
					}, {
						"featureType": "poi.medical",
						"stylers"    : [{"visibility": "on"}]
					}, {"featureType": "poi.business", "stylers": [{"visibility": "simplified"}]}]
				},
				map = new google.maps.Map($maps[0], dataMap),
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(lat, long),
					map     : map,
					icon    : 'images/marker.png'
				});
		}

		// 6. Project Details
		var $imageProject = $('.images-project');

		if ($imageProject.length) {
			$imageProject.baonhiMagnificPopup({
				delegate: 'a'
			});
		}

		/* Menu Mobile */

		var $btnMenu = $('.menu-mobile');

		if ($btnMenu.length) {
			var $header = $('#header'),
				$mainMenu = $('.menu-list', $header);
			$btnMenu.on('click', function () {
				$header.toggleClass('active');
				$btnMenu.toggleClass('active');
				if ($header.hasClass('active')) {
					$mainMenu.slideDown(400);
				}
				else {
					$mainMenu.slideUp(400);
				}
			});

			$('.menu-item-has-children > a', $mainMenu).on('click', function (event) {
				var ww = $(window).width();

				if (ww <= 991) {
					event.preventDefault();

					var $target = $(event.target).closest('.menu-item-has-children').children('a'),
						$subMenu = $target.next('ul');

					$target.toggleClass('active');

					if ($target.hasClass('active')) {
						$subMenu.slideDown(400);
					}
					else {
						$subMenu.slideUp(400);
					}
				}
			});
		}

		// Twitter

		var $twitter = $('.kd-twitter .widget-content');

		if ($twitter.length) {
			$twitter.owlCarousel({
				items     : 1,
				nav       : false,
				autoHeight: true
			})
		}

		var $preloader = $('.preloader');

		if ($preloader.length) {
			$(window).on('load', function () {
				$preloader.fadeOut(400);
			});
		}
	});

	var $wrapGrids = $('#portfolio, .projects-related');

	$wrapGrids.on('click', '.grid-item', function (event) {
		var ww = $(window).width(),
			$item = $(event.target).hasClass('grid-item') ? $(event.target) : $(event.target).closest('.grid-item');

		if (ww <= 600) {
			$('.item-hover').removeClass('item-hover');
			$item.toggleClass('item-hover');
		}
	});
	$wrapGrids.on('click', '.title, .cat', function (event) {
		var ww = $(window).width();
		if (ww <= 600) {
			event.stopPropagation();
		}
	});

})(jQuery);