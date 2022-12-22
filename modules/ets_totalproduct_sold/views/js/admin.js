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
   $(document).on('click','.checkbox_all input',function(){
        if($(this).is(':checked'))
        {
            $(this).closest('.form-group').find('input').prop('checked',true);
        }
        else
        {
            $(this).closest('.form-group').find('input').prop('checked',false);
        }
        if($('input.display_hook').length)
            ets_pr_rule.displayPromoteRule();
    });
    $(document).on('click','.checkbox input',function(){
        if($(this).is(':checked'))
        {
            if($(this).closest('.form-group').find('input:checked').length==$(this).closest('.form-group').find('input').length-1)
                 $(this).closest('.form-group').find('.checkbox_all input').prop('checked',true);
        }
        else
        {
            $(this).closest('.form-group').find('.checkbox_all input').prop('checked',false);
        } 
    }); 
    if($('input[name="ets_tps_use_specific"]').length)
    {
        if($('input[name="ets_tps_use_specific"]:checked').val()==1)
            $('.row.tps_use_specific').show();
        else
            $('.row.tps_use_specific').hide();
        $(document).on('click','input[name="ets_tps_use_specific"]',function(){
            if($(this).val()==1)
                $('.row.tps_use_specific').show();
            else
                $('.row.tps_use_specific').hide();
        });
    }
});