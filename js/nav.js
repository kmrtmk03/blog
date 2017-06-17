var toggle = 0;
jQuery('.show-nav').on('click', function(){
    if(toggle == 0) {
        jQuery(this).html('<i class="fa fa-minus" aria-hidden="true"></i>');
        jQuery('.nav-menu').removeClass('nav-close').addClass('nav-open');
        toggle = 1;
    } else if(toggle == 1) {
        jQuery(this).html('<i class="fa fa-bars" aria-hidden="true"></i>');
        jQuery('.nav-menu').removeClass('nav-open').addClass('nav-close');
        toggle = 0;
    }
});
