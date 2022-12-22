/*
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
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*/

$(document).ready(function () {
    $(document).on('click', '.js-btn-ph-sbt-run-sort', function () {
        if($(this).hasClass('loading')){
            return false;
        }
        var $this = $(this);
        $.ajax({
            url: PH_SBT_LINK_AJAX_BO,
            type: 'POST',
            dataType: 'json',
            data: {
                phSbtRunSort: 1
            },
            beforeSend: function () {
                $this.addClass('loading');
                $this.prop('disabled', true);
            },
            success: function (res) {
                console.log(res);
                if(res.success){
                    showSuccessMessage(res.message);
                }
                else{
                    showErrorMessage(res.message);
                }
            },
            complete: function () {
                $this.removeClass('loading');
                $this.prop('disabled', false);
            }
        });

        return false;
    });
});
