	/*************************************************************
	FLICKR BLOG  - add your id - find it here - http://idgettr.com/
**************************************************************/
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=25869240@N07&lang=en-us&format=json&jsoncallback=?", function(data){
		$.each(data.items, function(i,item){
			if(i<=8){ // <’Äî change this number to display more or less images
				$("<img/>").attr("src", item.media.m.replace('_m', '_s')).appendTo(".FlickrImagesBlog ul")
				.wrap("<li><a href='" + item.link + "' target='_blank' title='Flickr'></a></li>");
			}
		});			
    });	

/*************************************************************
	FLICKR  ALT. HOME - add your id - find it here - http://idgettr.com/
**************************************************************/
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=25869240@N07&lang=en-us&format=json&jsoncallback=?", function(data){
		$.each(data.items, function(i,item){
			if(i<=14){ // <’Äî change this number to display more or less images
				$("<img/>").attr("src", item.media.m.replace('_m', '_s')).appendTo(".FlickrImages ul")
				.wrap("<li><a href='" + item.link + "' target='_blank' title='Flickr'></a></li>");
			}
		});			
    });	
/***************************************************
	IMAGE HOVER EFFECTS
***************************************************/
<!--general hover--> 
$(window).load(function(){
$('[data-zlname = hover]').mateHover({
	position: 'x+i',
	overlayStyle: 'rolling',
	overlayBg:'#15A085',
	overlayOpacity: 0.9,
	overlayEasing: 'easeOutCirc',
	rollingPosition: 'bottom'
});

$('[data-zlname = port_hover]').mateHover({
	position: 'x+i-reverse',
	overlayStyle: 'double',
	doublePosition: 'vertical',
	overlayOpacity: 1,
	overlayBg: '#15A085'
});
	});
	
	/***************************************************
	ANIMATIONS
***************************************************/
$(function() { 	
$('.welcome').show().addClass("animated fadeInDown");
$('.welcome_index').show().addClass("animated fadeInDown");
$('.pricing-table').show().addClass("animated fadeInUp");
$('.tile').show().addClass("animated fadeInUp");
}); 
	
