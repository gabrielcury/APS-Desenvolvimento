	
/* -------------------------------------------------------------------------*
 * 						STYLE SWITCHER
 * -------------------------------------------------------------------------*/
 
			jQuery(document).ready(function($){

				jQuery("#bg-img").attr('class', "deco-fruits-1");

				
				jQuery('.switcher p').click(function() {
					var title = jQuery(this).children().attr("id");

					jQuery(".switcher p").removeClass("fru-active");
					jQuery(".switcher p").removeClass("veg-active");
					jQuery(".switcher p").removeClass("smo-active");
					jQuery(".switcher p").removeClass("cor-active");
					jQuery(".switcher p").removeClass("ran-active");
				
					var actClass = jQuery(this).attr('class');
					jQuery(this).addClass(actClass+"-active");
					if ( title != "random" ) { 
						jQuery("#bg-img").attr('class', "deco-"+title+"-1");
					} else {
						var img = ['fruits', 'veggies', 'healthy-drinks', 'corn-flakes'];
						img = img.sort(function() { return 0.5 - Math.random();});
						jQuery("#bg-img").attr('class', "deco-"+img[1]+"-1");
					}
					

			
			});
			});
			
/* -------------------------------------------------------------------------*
 * 						FANCYBOX SETTINGS				
 * -------------------------------------------------------------------------*/
			
			jQuery(document).ready(function($){
				$("a.fancy").fancybox();
			});
			jQuery(document).ready(function($){
				$("a[rel=group]").fancybox({
					'transitionIn'		: 'none',
					'transitionOut'		: 'none',
					'titlePosition' 	: 'over',
					'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
						return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '<\/span>';
					}
				});
			});	
			