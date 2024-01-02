( function($) {
	
	$.fn.wpBookletExtended = function(settings) {
		
		$(this).each( function(i,v) {
			
			new wpbookletExtended(jQuery(v),settings); 
			
		});
		
	}
	
	function wpbookletExtended(container,opts) {
		
		var settings = opts;
		var booklet = container.find(".wp-booklet");
		var bookletThumbsContainer = container.find(".wp-booklet-thumbs");
		
		function _construct() {
			
			prepareSettings();
			setUpBooklet();
			setUpCarousel();
			resizeBooklet();
			initializePopups();
			
		}
		
		function prepareSettings() {
			
			var defaults = {
				width:600,
				height:400,
				speed:1000,
				delay:5000,
				arrowsEnabled:false,
				pageNumbersEnabled:true,
				coverBehavior:'open',
				padding:10,
				thumbnailsEnabled:false,
				popupsEnabled:false,
				bookletMargin:45,
				direction:'LTR',
				thumbnailsContainerMargin:11
			}
			
			settings = $.extend(defaults,settings);
		
			settings.bookletWidth = settings.width + ( 4 * settings.padding);
			settings.bookletHeight = settings.height + ( 2 * settings.padding);
			settings.containerWidth = settings.bookletWidth + settings.bookletMargin * 2;
			settings.bookletThumbsContainerWidth = settings.bookletWidth - settings.thumbnailsContainerMargin * 2;
		
			
		}
		
		function setUpBooklet() {
			
		var bookletSettings = {
			width:settings.bookletWidth,
			height:settings.bookletHeight,
			speed:settings.speed,
			create: function(event, data) {
				
				if ( settings.thumbnailsEnabled ) {
					bookletThumbsContainer.find(' .wp-booklet-carousel li:eq(0) a').addClass('selected');
				}
				
			},
			direction:settings.direction,
			arrows: settings.arrowsEnabled,
			pageNumbers: settings.pageNumbersEnabled,
			start: function(event, data) { 
				
				if ( settings.thumbnailsEnabled ) {

					var index = data.index;
					
					if ( settings.coverBehavior != 'open' ) {
						index--;
					}
					
					if ( index < 0 ) {
						index = 0;
					}
					
					var carouselPage = booklet.find(".page").eq(index).attr("data-page");
					
					bookletThumbsContainer.find(' .wp-booklet-carousel li a').removeClass('selected');
					bookletThumbsContainer.find(' .wp-booklet-carousel li:eq('+carouselPage+') a').addClass('selected');
					bookletThumbsContainer.find(" .wp-booklet-carousel").wpbookletcarousel('scroll', carouselPage);
					
				}
				
			},
			pagePadding:settings.padding
		};
		
		if ( settings.delay > 0 ) {
			bookletSettings.auto = true;
			bookletSettings.delay =  settings.delay;
		}
		
		if ( settings.coverBehavior == 'center-closed' ) {
			bookletSettings.autoCenter = true;
		}
		
		if ( settings.coverBehavior != 'open' ) {
			bookletSettings.closed = true;
		}
		else {
			bookletSettings.closed = ( ( settings.coverBehavior == 'center-closed' || settings.coverBehavior == 'closed' ) ? true : false );
		}
		
		booklet.wpbooklet(bookletSettings);
		
		booklet.find(".page").css("padding",settings.padding);
		
		booklet.find(".page img").each( function(i,v) {
			var img = jQuery(v);
			var src = img.attr("src");
			var preloader = jQuery("<div class='wp-booklet-image-loader' data-src='"+src+"'></div>");
			img.after(preloader);
			img.remove();
		});
		
		loadImages([
			booklet.find(".b-p0 .wp-booklet-image-loader"),
			booklet.find(".b-p1 .wp-booklet-image-loader"),
			booklet.find(".b-p2 .wp-booklet-image-loader")
		]);
		booklet.bind('bookletchange', function(event,data) {
			var pages = [
							booklet.find(".wp-booklet-image-loader").eq(data.index-1),
							booklet.find(".wp-booklet-image-loader").eq(data.index),
							booklet.find(".wp-booklet-image-loader").eq((data.index+1))
						];
			loadImages(pages);
		});
			
		}
		
		function setUpCarousel() {
			
			if ( settings.thumbnailsEnabled ) {
				bookletThumbsContainer.find('.wp-booklet-carousel').wpbookletcarousel({
					rtl: ( settings.direction=='LTR' ? false : true )
				});
				bookletThumbsContainer.find('.wp-booklet-carousel-prev').wpbookletcarouselControl({ target: '-=1' });
				bookletThumbsContainer.find('.wp-booklet-carousel-next').wpbookletcarouselControl({ target: '+=1' }); 
				jQuery('.wp-booklet-carousel-next, .wp-booklet-carousel-prev').on('wpbookletcarouselcontrol:active', function(e) {
					jQuery(e.currentTarget).removeClass('inactive');
				});
				jQuery('.wp-booklet-carousel-next, .wp-booklet-carousel-prev').on('wpbookletcarouselcontrol:inactive', function(e) {
					jQuery(e.currentTarget).addClass('inactive');
				});
				bookletThumbsContainer.find('.wp-booklet-carousel a').on('click', function(e) {
					bookletThumbsContainer.find(' .wp-booklet-carousel li a').removeClass('selected');
					jQuery(e.currentTarget).addClass('selected');
					
					if ( settings.coverBehavior == 'open' ) {
						var index = jQuery(e.currentTarget).parent().parent().find("li").index( jQuery(e.currentTarget).parent() );
						if ( index == 0 ) { index = 'start' }
					}
					else {
						var index = jQuery(e.currentTarget).parent().parent().find("li").index( jQuery(e.currentTarget).parent() ) + 1;
						if ( index == 1 ) { index = 'start' }
					}
					booklet.wpbooklet('gotopage',index);
				});

				
			}
			
		}
		 
		function resizeBooklet() {
			 
			resizeBooklet();
			jQuery(window).resize(resizeBooklet);
			function resizeBooklet() {
			
				jQuery(booklet).each( function(i,v) {
					var allowedWidth = jQuery(v).parent().parent().width();
				
					jQuery(v).wpbooklet("option","width",allowedWidth - settings.bookletMargin * 2);
					jQuery(v).wpbooklet("option","height",((allowedWidth - settings.bookletMargin * 2) / 2) * settings.height / settings.width);
					jQuery(v).parent().find(".wp-booklet-thumbs-light").width( allowedWidth - settings.bookletMargin * 2 );
				});
			}
			
		}
		 
		function initializePopups() {
			 
			 if ( settings.popupsEnabled ) {
			
			booklet.find(".wp-booklet-popup-trigger").wpbookletImagePopup({
				overlayClass:'wpbooklet-image-popup-overlay-light',
				beforeOpen: function(popup, link) {
					
					booklet.wpbooklet( "option", "auto", false );
					
					if ( typeof link.attr("data-link") !== "undefined" ) {
					
						popup.find("img").wrap("<a>");
						popup.find("a").attr("href", link.attr("data-link"));
					
					}					
						
				},
				afterClose: function(popup, link) {
					
					if ( settings.delay ) {
						booklet.wpbooklet( "option", "auto", true );
					}
					else {
						booklet.wpbooklet( "option", "auto", false );
					}
					
				}
			});
			
		}
			
		}
		
		function loadImages(pages) {
			jQuery.each(pages, function(i,v) {
				var imageLoader = v;
				var src = imageLoader.attr("data-src");
				var img = jQuery("<img/>");
				
				if ( imageLoader.siblings("img").length == 0 ) {
					img.attr("src",src);
					img.one("load", function(e) {
						if ( imageLoader.is(":visible") ) {
							imageLoader.after(jQuery(e.currentTarget));
							imageLoader.hide();
						}	
					}).each( function(i,v) {
						if(jQuery(v).complete) {
							jQuery(v).load();
						}
					});
				}
				
			});
			
		}
		
		_construct();
		
	}

})(jQuery);