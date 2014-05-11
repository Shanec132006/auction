$(function(){
    // if browser not support transitions at all - we will display some warn message
    if (! flux.browser.supportsTransitions) 
	alert("This Internet Browser does not support 3D slide show");
	
	//function to manipulate the 3D slider
    window.mf = new flux.slider('#slider', {
        autoplay: true,
        pagination: true,
        delay: 5000,
    });

});