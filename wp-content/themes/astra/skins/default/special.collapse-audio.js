function UpdateAudio(){
    jQuery(".mejs-playpause-button").each(function () {
        //console.log(jQuery(this));
        if (jQuery(this).hasClass("mejs-play")){
            jQuery(this).closest(".sc_audio_player.need_collapse").addClass("collapse");
        }
    });
}

jQuery(document.body).ready(function() {
    setTimeout( UpdateAudio, 500);
});


jQuery(function() {
    jQuery(document.body).ready(function(){
        jQuery(".mejs-playpause-button").ready(function(){
            jQuery(".mejs-playpause-button").click(function()
            {
                if ( jQuery(this).hasClass("mejs-pause")){          //Pause
                    jQuery("div.sc_audio_player.need_collapse").addClass("collapse");
                } else if (jQuery(this).hasClass("mejs-play")){     //Play
                    jQuery("div.sc_audio_player.need_collapse").addClass("collapse");
                    jQuery(this).closest("div.sc_audio_player.need_collapse").removeClass("collapse");
                }
                return(false);
            });
        });
    });
});