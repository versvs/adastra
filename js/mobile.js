var WIDTH = 320;
var doc_width = WIDTH;
var METHOD = 0;
var Scale = 1;
var rotateDelay = 1000;

var windowInnerWidth			= window.innerWidth;
var windowInnerHeight		= window.innerHeight;
var windowOuterWidth			= window.outerWidth;
var windowOuterHeight		= window.outerHeight;
var screenWidth				= screen.width;
var screenHeight				= screen.height;
var windowDevicePixelRatio	= window.devicePixelRatio;

var ua = navigator.userAgent.toLowerCase();
var isMobile = ua.indexOf("mobile") > -1; //&& ua.indexOf("mobile");
var isiPad = ua.indexOf("iPad") > -1;
if (typeof(navigator.vendor)!='undefined'){
	var isAndroid = navigator.vendor.toLowerCase().indexOf("google") > -1; //&& ua.indexOf("mobile");
}else{
	var isAndroid = false;
}


jQuery(document).ready(function (){
	doc_width = jQuery('body').width();

	windowInnerWidth			= window.innerWidth;
	windowInnerHeight			= window.innerHeight;
	windowDevicePixelRatio	= window.devicePixelRatio;

	if(isAndroid && isMobile ) {
			changeViewport();
		jQuery(window).bind('orientationchange',function (e){

			setTimeout(function (){
				changeViewport();
			},rotateDelay);

		});
	}
});


function changeViewport(){
	windowOuterWidth			= window.outerWidth;
	windowOuterHeight			= window.outerHeight;

	if (window.orientation==0 || window.orientation==180){
		Scale = Math.min(windowOuterWidth,windowOuterHeight)/doc_width;
	}else{
		Scale = Math.max(windowOuterWidth,windowOuterHeight)/doc_width;
	}
	if (METHOD==0){
		var newViewport = jQuery('meta[name=viewport]').clone();
		var scale = Scale;
		newViewport.attr('content','target-densitydpi=device-dpi,minimum-scale='+scale+',maximum-scale='+scale+',initial-scale='+scale);
		jQuery('meta[name=viewport]').replaceWith(newViewport);
	}else{
		jQuery('html').css({
			zoom: Scale/windowDevicePixelRatio
		});
	}

}

function scale(val){
	if (typeof(Scale)!='undefined' && typeof(windowDevicePixelRatio)!='undefined' && typeof(METHOD)!='undefined' && METHOD==1){
		return val*windowDevicePixelRatio/Scale;
	}
	return val;
}