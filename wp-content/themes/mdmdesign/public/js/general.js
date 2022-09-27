//padding function
function addPadding(){
	var headerH = jQuery('.site-header').outerHeight(true);
	jQuery('.page-wrapper').css('padding-top', headerH);
}

function stickyHeader(){
	if(jQuery(window).scrollTop() > 0){
		jQuery('.site-header').addClass('fixed-header');
	}
	else{
		jQuery('.site-header').removeClass('fixed-header');	
	}
}

function footerAdj() {
    var footerH = jQuery(".site-footer").outerHeight();
    jQuery(".site-footer").css({ "margin-top": -footerH });
    jQuery(".site-wrapper").css({ "padding-bottom": footerH });
}

var flag = true;
function mobile_menu() {
    if (jQuery(window).width() <= 1199) {
        if (flag) {
        	jQuery('.site-header .header-wrapper .contact-wrapper li').addClass('contact-us').detach().appendTo('.site-header .header-wrapper .main-navigation ul.menu');            
            flag = false;
        }
        jQuery('.hamburger').unbind('click').click(function(e) {
            e.stopPropagation();
            jQuery('html,body').toggleClass('mobile-menu');
        });
    } else {
        if (!flag) {
        	jQuery('.site-header .header-wrapper .main-navigation ul.menu li.contact-us').detach().appendTo('.site-header .header-wrapper .contact-wrapper');
            flag = true;
        }
        jQuery('html,body').removeClass('mobile-menu');
    }
}

var footer_flag = true;
function footer_menu() {
    if (jQuery(window).width() <= 830) {
        if (footer_flag) {
            jQuery('.site-footer .footer-bottom-wrapper .footer-bottom-left').detach().appendTo('.site-footer .footer-top-wrapper .logo-block');            
            footer_flag = false;
        }
    } else {
        if (!footer_flag) {
            jQuery('.site-footer .footer-top-wrapper .logo-block .footer-bottom-left').detach().prependTo('.site-footer .footer-bottom-wrapper');
            footer_flag = true;
        }
    }
}


/*for equal height*/
function equalHeight() {
    jQuery.fn.extend({
        equalHeight: function() {
            var top = 0;
            var row = [];
            var classname = ('equalHeight' + Math.random()).replace('.', '');
            jQuery(this).each(function() {
                var thistop = jQuery(this).offset().top;
                if (thistop > top) {
                    jQuery('.' + classname).removeClass(classname);
                    top = thistop;
                }
                jQuery(this).addClass(classname);
                jQuery(this).height('auto');
                var h = (Math.max.apply(null, jQuery('.' + classname).map(function() {
                    return jQuery(this).outerHeight();
                }).get()));
                jQuery('.' + classname).height(h);
            }).removeClass(classname);
        }
    });
   jQuery('.about-directors .directors-grid-wrapper .grid-item p').equalHeight();
}

// our partner slider
var partner_flag = false;
function our_partner_slider() {
    if (jQuery(window).innerWidth() <= 767) {
        if (!partner_flag) {
            jQuery('.product-description-section .our-partners ul').slick({
                arrows: false,
                infinite: true,
                variableWidth:true,
                slidesToScroll: 1,
                touchThreshold: 10,
                dots: false,
                responsive: [{
                    breakpoint: 999999,
                    settings: "unslick"
                },
                {
                    breakpoint: 768,
                    settings: {
                        variableWidth:true,
                        slidesToScroll: 1,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 1000,
                        
                    }
                },
              
                ]
            });
            
            partner_flag = true;
        }
    } else {
        partner_flag = false;
    }
}

// home counter
function number_count() {
    if(jQuery('.counter-wrap').length) {
        jQuery('.counter-text').each(function () {
                if(jQuery(this).hasClass('aos-animate')) {
                    if(parseFloat(jQuery(this).find('em').text()) % 1 != 0) {
                        jQuery(this).addClass('float-number');
                    }
                    jQuery(this).prop('Counter', 0).animate({
                        Counter: jQuery(this).find('em').text()
                    }, {
                        duration: 3000,
                    step: function (now) {
                        if(jQuery(this).hasClass('float-number')) {
                            jQuery(this).find('em').text(now.toFixed(1))
                        }
                        else {
                            jQuery(this).find('em').text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));;
                        }
                    }
                }); {
                    jQuery(this).removeClass('counter-text');
                };
             }
        });
    }
}

var project_info_flag = true;
function project_info_block() {
    if(jQuery('.project-detail-page').length) {
        if(jQuery(window).width()>767 && jQuery(window).width()<1200 && project_info_flag) {
            jQuery('.project-detail-page .project-info-block .project-name').addClass('content-item').detach().prependTo('.project-detail-page .project-info-block .project-detail-block .project-detail-content');
            project_info_flag = false;
        }
        else {
            if((jQuery(window).width()<=767 || jQuery(window).width()>=1200) && !project_info_flag) {
                jQuery('.project-detail-page .project-info-block .project-name').removeClass('content-item').detach().prependTo('.project-detail-page .project-info-block');
                project_info_flag = true;
            
            }
        }
    }
}

jQuery(document).ready(function() {
	
	stickyHeader();
	mobile_menu();
    footer_menu();
    footerAdj();
    our_partner_slider();
   
    project_info_block();
    setTimeout(function() {
        equalHeight();
        addPadding();
    },500);

    jQuery(document).click(function (e) {
        e.stopPropagation();
       if(!(jQuery(e.target).hasClass('main-navigation') || jQuery(e.target).parents().hasClass('main-navigation'))){
        jQuery('html,body').removeClass('mobile-menu');
       }
    });

   
    // client logo slider
    if(jQuery('.brand-logo-slider').length){
        jQuery('.brand-logo-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1000,
            slidesToScroll: 1,
            variableWidth: true,
        });
    }

    // modal video
    var videoSrc;
    jQuery('.video-link').click(function () {
        videoSrc = jQuery(this).data( "src" );
        jQuery("body,html").addClass('modal-open');
        var _this = jQuery(this).attr('data-link');
        var currentModal = jQuery("[data-target='" + _this + "']");
        currentModal.fadeIn(300);
        currentModal.addClass("visible");
        currentModal.find(".video").attr('src',videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1"); 
    });

    jQuery('.modal-backdrop,.modal-close').click(function () {        
        var _this = jQuery(this);
        _this.closest(".custom-modal").removeClass("visible").fadeOut(300, function() {
            jQuery("body,html").removeClass('modal-open');
            jQuery("body,html").removeClass('mobile-modal-open');
            _this.closest(".custom-modal").find(".video").attr('src','');
            if(_this.closest('.custom-modal').hasClass('framework-popup')) {
                _this.closest('.custom-modal').find('.image-block img').attr('src','');
            }
        });
    });

    jQuery('.custom-tabbing-wrapper .tab-heading ul li a').click(function(e){
        e.preventDefault();
        var _this = jQuery(this);
        var _this_link =  jQuery(this).attr('data-link');
        jQuery(this).closest('li').addClass('active').siblings().removeClass('active');
        jQuery(this).closest('.custom-tabbing-wrapper').find('.tab-content-inner[data-target="'+_this_link+'"]').siblings().fadeOut(500);
        setTimeout(function(){
            _this.closest('.custom-tabbing-wrapper').find('.tab-content-inner[data-target="'+_this_link+'"]').siblings().removeClass('active');
            _this.closest('.custom-tabbing-wrapper').find('.tab-content-inner[data-target="'+_this_link+'"]').fadeIn(500);

        },500)
        setTimeout(function(){
            _this.closest('.custom-tabbing-wrapper').find('.tab-content-inner[data-target="'+_this_link+'"]').addClass('active');
        },1000);
        if(jQuery('html,body').hasClass('mobile-modal-open')) {
            jQuery('html,body').removeClass('mobile-modal-open');
            jQuery(".custom-modal").removeClass("visible").fadeOut(300);
        }
    })

    jQuery('.modal-link').click(function () {
        videoSrc = jQuery(this).data( "src" );
        jQuery("body,html").addClass('modal-open');
        var _this = jQuery(this).attr('data-link');
        var currentModal = jQuery("[data-target='" + _this + "']");
        currentModal.fadeIn(300);
        currentModal.addClass("visible");
        currentModal.find(".image-wrapper img").attr('src',videoSrc); 
    });

    jQuery('.mobile-popup-link').click(function () {
        jQuery("body,html").addClass('mobile-modal-open');
        var _this = jQuery(this).attr('data-link');
        var _this_img_src = jQuery(this).attr('data-image');
        var currentModal = jQuery("[data-target='" + _this + "']");
        currentModal.fadeIn(300);
        currentModal.addClass("visible");
        if(currentModal.hasClass('framework-popup')) {
            currentModal.find('.image-block img').attr('src',_this_img_src);
        }
    });


  
    // product
    jQuery('.product-description-section .product-list-wrap h4').click(function(){
        if(jQuery(window).width()<768) {
            jQuery(this).closest('.product-list-wrap').find('.product-list-content').stop(true,true).slideToggle();
        }
    });
    jQuery('.project-detail-page .project-info-block .project-detail-block .project-detail-title').click(function(){
        if(jQuery(window).width()<768) {
            jQuery(this).closest('.project-detail-block').find('.project-detail-content').stop(true,true).slideToggle();
        }
    });

});

jQuery(window).load(function(){
      AOS.init({
        once: true,
    });
    number_count();

})
jQuery(window).resize(function(){
    mobile_menu();
    footer_menu();
    setTimeout(function() {
        equalHeight();
        footerAdj();
        our_partner_slider();
        project_info_block();
        addPadding();	
    },700);
});
jQuery(window).on('scroll',function(){
	stickyHeader();
    number_count();
    
});

