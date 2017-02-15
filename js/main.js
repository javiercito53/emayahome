/*jQuery(window).resize(function() {
  if (jQuery(this).width() >= 1200) {
    alert("large");
  }
  else if (jQuery(this).width() < 1200 && jQuery(this).width()>= 992) {
    alert("md");
  }
  else if (jQuery(this).width() < 992 && jQuery(this).width()>= 768) {
  	 alert("sm");
  }
  else if (jQuery(this).width() < 768) {
  	 alert("xs");
  }

});*/

jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll <10) {
        jQuery(".pageHead").removeClass("navbar-fixed-top");
        jQuery("#siteLogo").removeClass("col-sm-offset-2 col-sm-8");
        jQuery("#siteLogo").addClass("col-sm-12");
  	 }
    if (scroll >= 50) {
        jQuery(".pageHead").addClass("navbar-fixed-top");
        jQuery("#siteLogo").removeClass("col-sm-12");
        jQuery("#siteLogo").addClass("col-sm-offset-2 col-sm-8");
    }
}); 
