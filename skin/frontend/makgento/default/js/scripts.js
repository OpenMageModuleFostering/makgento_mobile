jQuery.noConflict();
jQuery(function($) {
	$(document).ready(function() {
      $("#pagetwo").css("min-height",$(window).height());
	});
    $(".makgento-menu").click(function() { 
		if($(".makgento-menu-holder").width()!=0){
			$(".makgento-content").animate({ marginLeft: '0px', opacity: 1 }, 500);
			$(".makgento-menu-holder").css('width','0px');
			$(".makgento-menu-holder").toggle('slow');
		}
		else{
			$(".makgento-content").animate({ marginLeft: '200px', opacity: 1 }, 500);
			$(".makgento-menu-holder").css('width','200px');
			$(".makgento-menu-holder").toggle('slow');
		}
    });
    
    $("#des_btn").click(function() { $("#video").hide();$("#attr").hide();$("#snf").hide();$("#desc").toggle('fast');});
    $("#video_btn").click(function() { $("#desc").hide();$("#attr").hide();$("#snf").hide();$("#video").toggle('fast');});
    $("#attr_btn").click(function() { $("#video").hide();$("#desc").hide();$("#snf").hide();$("#attr").toggle('fast');});
    $("#snf_btn").click(function() { $("#video").hide();$("#desc").hide();$("#attr").hide();$("#snf").toggle('fast');});
    
});