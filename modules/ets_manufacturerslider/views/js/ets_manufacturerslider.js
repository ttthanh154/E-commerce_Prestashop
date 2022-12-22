/**
 * 2007-2022 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2022 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

$(document).ready(function(){
    if ($('#ybc-mnf-block-ul').length > 0)
    {
        var nbImageSlide = $("#ybc-mnf-block-ul>li").length;
    	$("#ybc-mnf-block-ul").owlCarousel({ 
    	    responsive : {
                1199 : {
                    items : YBC_MF_PER_ROW_DESKTOP < nbImageSlide ? YBC_MF_PER_ROW_DESKTOP : nbImageSlide,
                    loop: YBC_MF_PER_ROW_DESKTOP < nbImageSlide ? true : false,
                },
                480 : {
                    items : YBC_MF_PER_ROW_TABLET < nbImageSlide ? YBC_MF_PER_ROW_TABLET : nbImageSlide,
                    loop:  YBC_MF_PER_ROW_TABLET < nbImageSlide ? true : false,
                },
    	        0 : {
                    items : YBC_MF_PER_ROW_MOBILE < nbImageSlide ? YBC_MF_PER_ROW_MOBILE : nbImageSlide,
                    loop: YBC_MF_PER_ROW_MOBILE < nbImageSlide ? true : false,
                }
    	    },
            items : YBC_MF_PER_ROW_DESKTOP < nbImageSlide ? YBC_MF_PER_ROW_DESKTOP : nbImageSlide,
            // Navigation
            nav: YBC_MF_SHOW_NAV,
            navText: '',
            margin: 30,
            autoplay: YBC_MF_AUTO_PLAY,
            autoplayHoverPause: YBC_MF_PAUSE,
            autoplayTimeout: YBC_MF_SPEED,
            loop: false,
        });
     }
});