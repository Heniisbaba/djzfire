function updateBorderimage(){

    if ( jQuery===undefined ) return;

    var accent_color1 = jQuery('.gradient_bd').css("border-left-color");
    var accent_color2 = jQuery('.gradient_bd').css("border-right-color");

    //jQuery('.gradient_bd').css({/*+*/
    //    borderImage: "linear-gradient(21deg, "+accent_color1+" 35%, "+accent_color2+" 65%) 1;" }).css({
    //    borderImage: "-moz-linear-gradient("+accent_color1+", "+accent_color2+") 1 100%;"}).css({
    //    borderImage: "-webkit-linear-gradient("+accent_color1+", "+accent_color2+") 1 100%;"}).css({
    //    borderImage: "-webkit-gradient(linear, 0 0, 0 100%, from("+accent_color1+"), to("+accent_color2+")) 1 100%;"
    //});

    jQuery('.gradient_bd').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.widget_nav_menu  .current-menu-item a').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.sc_events_style_events-1 .sc_events_title + .sc_events_subtitle + .slides + .sc_slider_controls_wrap').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.sc_events_style_events-1 .sc_events_subtitle + .slides + .sc_slider_controls_wrap').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.woocommerce ul.products li.product .add_to_cart_button, .woocommerce-page ul.products li.product .add_to_cart_button').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.woocommerce #respond input#submit').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.woocommerce div.product form.cart .button').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.woocommerce-cart .wc-proceed-to-checkout a.checkout-button').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });

    jQuery('.woocommerce-page.woocommerce-checkout #payment #place_order').each(function(){
        jQuery(this).css({ borderImage: "linear-gradient(21deg, "+accent_color1+" 38%, "+accent_color2+" 65%) 1" });
    });
}

setTimeout(updateBorderimage,0);