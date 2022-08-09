var pageID = jQuery('.getPageID').val();
var tabletLogoOffset = jQuery('.getTabletLogoOffset').val();
var repeaterNonce = jQuery('.getRepeaterNonce').val();
var adminAjaxURL = ajax_posts.ajaxurl;
var repeaterMore = true;
function client_logo_repeater_show_more() {
   jQuery('.loader-wrapper').css('display','block');
   jQuery('body').addClass('loader-display');
   jQuery.post(
      adminAjaxURL, {
         'action': 'client_logo_repeater_show_more',
         'post_id': pageID,
         'offset': tabletLogoOffset,
         'nonce': repeaterNonce
      },
      function (json) {
         jQuery('#client-tablet-logo').append(json['content']);
         jQuery('html, body').animate({
            scrollTop: jQuery("#tablet-view-more").offset().top - 134
         }, 2000);
         jQuery('.loader-wrapper').css('display','none');
         jQuery('body').removeClass('loader-display');

         tabletLogoOffset = json['offset'];
         if (!json['more']) {
            jQuery('#tablet-view-more').css('display', 'none');
         }
      },'json'
   );
}

var mobileLogoOffset = jQuery('.getMobileLogoOffset').val();
function mobile_client_logo_repeater_show_more() {
   jQuery('.loader-wrapper').css('display','block');
   jQuery('body').addClass('loader-display');
   jQuery.post(
      adminAjaxURL, {
         'action': 'mobile_client_logo_repeater_show_more',
         'post_id': pageID,
         'mobile_offset': mobileLogoOffset,
         'nonce': repeaterNonce
      },
      function (json) {
         jQuery('#client-mobile-logo').append(json['content']); 
         jQuery('html, body').animate({
            scrollTop: jQuery("#mobile-view-more").offset().top - 134
         }, 2000);
         jQuery('.loader-wrapper').css('display','none');
         jQuery('body').removeClass('loader-display'); 
         mobileLogoOffset = json['mobile_offset'];
         if (!json['more']) {
            jQuery('#mobile-view-more').css('display', 'none'); 
         }
      },'json'
   );
}

jQuery("#mobile-view-more").click(function(){
    mobile_client_logo_repeater_show_more();
});

jQuery("#tablet-view-more").click(function(){
    client_logo_repeater_show_more();
});


jQuery(document).ready(function() {
    function get_project_list(numberOfCProjectsAfterLoadMore,categoryVal,offset,device) {
        var totalPost = jQuery('.total_post').val();
        var str = 'offset=' + offset + '&ppp=' + numberOfCProjectsAfterLoadMore + '&action=get_project_list' + '&categoryVal=' + categoryVal;
        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function (data) {
                var $data = jQuery(data);
                if ($data.length) {
                    var AppendClass = ".add-"+device+"-peoject-" + categoryVal;
                    offset = parseInt(offset) + parseInt(numberOfCProjectsAfterLoadMore);
                    jQuery(AppendClass).append($data);
                    jQuery('.view-more-'+device+'-'+ categoryVal + ' .view-more-'+device+'-project').attr('data-offset-attr', offset);
                    jQuery('.loader-wrapper').hide();
                    jQuery('body').removeClass('loader-display');

                    if(totalPost <= offset) {
                        jQuery('.after-result-'+device+'-'+ categoryVal).show();
                        jQuery('.view-more-'+device+'-'+ categoryVal).hide();
                        jQuery('html, body').animate({
                            scrollTop: jQuery('.after-result-'+device+'-'+ categoryVal).offset().top - 134
                        }, 2000);
                    } else {
                        jQuery('.view-more-'+device+'-'+ categoryVal).show();
                        jQuery('html, body').animate({
                            scrollTop: jQuery('.view-more-'+device+'-'+ categoryVal).offset().top - 134
                        }, 2000);
                    }
                } else {
                    jQuery('.view-more-'+device+'-'+ categoryVal).hide();
                    jQuery('.loader-wrapper').hide();
                    jQuery('body').removeClass('loader-display');
                }
            },
            error: function () {
                alert('There was some error performing the AJAX call!');
            }
        });
        return false;
    }

    jQuery( "body" ).delegate( ".view-more-tablet-project", "click", function() {
        var numberOfCProjectsAfterLoadMore = jQuery('.get_number_of_project_per_page_after_load_more').val();
        var offset = jQuery(this).attr('data-offset-attr');
        var categoryVal = jQuery(this).closest('.tablet-view').find('.get_category_project').val();
        jQuery('.view-more-tablet-'+ categoryVal).hide();
        jQuery('.loader-wrapper').show();
        jQuery('body').addClass('loader-display');
        var device = 'tablet';
        get_project_list( numberOfCProjectsAfterLoadMore,categoryVal,offset,device);
    });

    jQuery( "body" ).delegate( ".view-more-mobile-project", "click", function() {
        var numberOfCProjectsAfterLoadMore = jQuery('.get_number_of_project_per_page_after_load_more_mobile').val();
        var offset = jQuery(this).attr('data-offset-attr');
        var categoryVal = jQuery(this).closest('.mobile-view').find('.get_category_project').val();
        jQuery('.view-more-mobile-'+ categoryVal).hide();
        jQuery('.loader-wrapper').show();
        jQuery('body').addClass('loader-display');
        var device = 'mobile';
        get_project_list( numberOfCProjectsAfterLoadMore,categoryVal,offset,device);
    });
});




