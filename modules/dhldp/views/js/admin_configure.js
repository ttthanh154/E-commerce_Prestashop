/**
 * DHL Deutschepost
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2022 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de>
 * @version   1.0.14
 * @link      http://www.silbersaiten.de
 */

var dhldp_admin_configure = {
    init: function() {
        var self = this;


        $('select.select2').select2({});

        if ($('#dhl_mode_live').is(':checked'))
            self.showAuthdataLive();

        if ($('#dhl_mode_sbx').is(':checked'))
            self.showAuthdataSbx();

        $('#dhl_mode_live').click(function(e){
            self.showAuthdataLive();
        });
        $('#dhl_mode_sbx').click(function(e){
            self.showAuthdataSbx();
        });

        $('select[name="DHLDP_DHL_SHIPPER_TYPE"]').on('change', function() {
            if ($('select[name="DHLDP_DHL_SHIPPER_TYPE"]').val() != 0) {
                $('.dhl_shipper_by_address').hide();
                $('.dhl_shipper_by_reference').show();
            } else {
                $('.dhl_shipper_by_address').show();
                $('.dhl_shipper_by_reference').hide();
            }
        });

        if ($('select[name="DHLDP_DHL_SHIPPER_TYPE"]').val() != 0) {
            $('.dhl_shipper_by_address').hide();
            $('.dhl_shipper_by_reference').show();
        } else {
            $('.dhl_shipper_by_address').show();
            $('.dhl_shipper_by_reference').hide();
        }

        if ($('input[id="DHLDP_DHL_RETURNS_EXTEND_on"]:checked').length) {
            $('.dhldp_dhl_ra').removeClass('hide');
        } else {
            $('.dhldp_dhl_ra').addClass('hide');
        }


        $('input[name="DHLDP_DHL_RETURNS_EXTEND"]').on('click change', function(e){
            if ($('#DHLDP_DHL_RETURNS_EXTEND_on').is(':checked')) {
                $('.dhldp_dhl_ra').removeClass('hide');
            } else {
                $('.dhldp_dhl_ra').addClass('hide');
            }
        });

        //self.validateForm();

        // init dhl products
        $.each(defined_dhl_products, function(key, value) {
            $('#dhl-product-name')
                .append($('<option>', { value : value.code })
                    .text(value.name));
        });
        //init go green
        $.each(dhl_gogreen_options, function(key, value) {
            $('#dhl-product-gogreen')
                .append($('<option>', { value : value.code })
                    .text(value.name));
        });
        $.each(defined_dhl_products, function(key, value) {
            if (value.code == $('#dhl-product-name').val()){
                if (value.gogreen == true) {
                    $('#dhl-product-gogreen').removeAttr("disabled", "disabled");
                }
                else {
                    $('#dhl-product-gogreen option').first().attr("selected", "selected");
                    $('#dhl-product-gogreen').attr("disabled", "disabled");
                }
            }
        });

        $('#dhl-product-name').change(function(e) {
            $.each(defined_dhl_products, function(key, value) {
                if (value.code == $('#dhl-product-name').val()){
                    if (value.gogreen == true) {
                        $('#dhl-product-gogreen').removeAttr("disabled", "disabled");
                    }
                    else {
                        $('#dhl-product-gogreen option').first().attr("selected", "selected");
                        $('#dhl-product-gogreen').attr("disabled", "disabled");
                    }
                }
            });
        });

        $('#dhl-product-participation').keyup(function(e) {
            value = $(this).val().replace(/[^A-Z0-9]/g, "");
            if (value.length > 2)
                return false;
            $(this).val(value);
        }).blur(function(e) {
            value = $(this).val();
            if (value.length == 0)
                $(this).val('01');
            if (value.length == 1)
                $(this).val('0' +  value);
        });

        $('.dhl-products').on('click', '#removeDhlProduct', function(e) {
            e.preventDefault();
            parent = $(this).parent().parent();
            parent.fadeOut('slow', function() { $(this).remove();});
            self.removeCarrierProducts(parent.find('.added_dhl_products').val());
        });

        $('.dhl-list-carriers').on('click', '.dhlc', function(e) {
            if (!$(this).is(':checked')) {
                $(".dhl-list-carriers #dhlcp_" + $(this).attr('id').split('_')[1] + " option[value='']").attr('selected', 'selected');
            }
        })

        $('#addDhlProduct').click(function(e) {
            e.preventDefault();
            p_n = '';
            error = false;
            $.each(defined_dhl_products, function(key, value) {
                if (value.code == $('#dhl-product-name').val()){
                    p_n = value.name;
                }
            });
            $('#dhl-product-participation').trigger('blur');

            $('.dhl-products .added_dhl_products').each(function () {
                s = $(this).val().split(':')

                if (s[0] == $('#dhl-product-name').val() && s[1] == $('#dhl-product-participation').val())
                {
                    alert(dhl_translation.ExistsParticipation);
                    error = true;
                }

                if ($(this).val() == $('#dhl-product-name').val()+
                    ':'+$('#dhl-product-participation').val()+
                    ':'+$('#dhl-product-gogreen').val())
                {
                    alert(dhl_translation.Exists);
                    error = true;
                }
            });

            if (error == false) {
                var item_value = $('#dhl-product-name').val()+ ':'+$('#dhl-product-participation').val()+ ':'+$('#dhl-product-gogreen').val();
                var item_name = p_n + ' ' + $('#dhl-product-participation').val() + ' ' + $('#dhl-product-gogreen').val();
                elem =  $('<tr>' +
                    '<td><input type="hidden" class="added_dhl_products" name="added_dhl_products[]" value="'+item_value+'">'+p_n+'</td>' +
                    '<td>'+$('#dhl-product-participation').val()+'</td>' +
                    '<td>'+$('#dhl-product-gogreen').val()+'</td>' +
                    '<td><input type="button" name="removeDhlProduct" id="removeDhlProduct" class="button btn btn-default" value="'+dhl_translation.Remove+'"/></td>' +
                    '</tr>');
                elem.hide();
                $('.dhl-products table').append(elem);
                elem.fadeIn().css("display","");
                console.log('add');
                self.addCarrierProducts(item_value, item_name);
            }
        });
        self.initFirstStep();
    },
    addCarrierProducts: function(item_value, item_name) {
        $('.dhl-list-carriers .dhlcp').each(function(index) {
            var found = false;
            $(this).find('option').each(function(key, value) {
                if (typeof value.value != 'undefined' && value.value == item_value) {
                    found = true;
                    return false;
                }
            });
            if (found === false) {
                $(this).append($('<option>', { value : item_value }).text(item_name));
            }
        });
    },
    removeCarrierProducts: function(value) {
        $(".dhl-list-carriers .dhlcp option[value='"+value+"']").remove();
    },
    initFirstStep: function() {
        $('#DHL_COUNTRY').change(function(e) {
            var sel = $('#DHL_API_VERSION').val();
            $('#DHL_API_VERSION option').remove();
            $.each(defined_dhl_api_versions[$('#DHL_COUNTRY').val()]['api_versions'], function(key, value) {
                $('#DHL_API_VERSION')
                    .append($('<option>', { value : value })
                        .text(value));
            });
            $('#DHL_API_VERSION').val(sel).change();
        });
    },
    showAuthdataLive: function() {
        $('#resetLiveAccount').show();
        if ($('.dhl_authdata_live').length > 0) {
            $('.dhl_authdata_live').show();
            $('.dhl_authdata_sbx').hide();
        } else {
            $('input[name=DHL_LIVE_USER]').parent().show();
            $('input[name=DHL_LIVE_SIGN]').parent().show();
            $('input[name=DHL_LIVE_EKP]').parent().show();
            $('input[name=DHL_LIVE_USER]').parent().prev('label').show();
            $('input[name=DHL_LIVE_SIGN]').parent().prev('label').show();
            $('input[name=DHL_LIVE_EKP]').parent().prev('label').show();
        }
    },
    showAuthdataSbx: function() {
        $('#resetLiveAccount').hide();
        if ($('.dhl_authdata_live').length > 0) {
            $('.dhl_authdata_sbx').slideDown('slow');
            $('.dhl_authdata_live').hide();
        } else {
            $('input[name=DHL_LIVE_USER]').parent().hide();
            $('input[name=DHL_LIVE_SIGN]').parent().hide();
            $('input[name=DHL_LIVE_EKP]').parent().hide();
            $('input[name=DHL_LIVE_USER]').parent().prev('label').hide();
            $('input[name=DHL_LIVE_SIGN]').parent().prev('label').hide();
            $('input[name=DHL_LIVE_EKP]').parent().prev('label').hide();
        }
    },
    validateForm: function() {
        $("#dhl_global_settings").validate({
            rules: {
                /*
                "DHL_SBX_CIGUSER":{
                    "required": {
                        depends: function(element) {
                            return $("#dhl_mode_sbx").is(":checked");
                        }
                    }
                },
                "DHL_SBX_CIGPASS": {
                    "required": {
                        depends: function(element) {
                            return $("#dhl_mode_sbx").is(":checked");
                        }
                    }
                }
                */
            },
            submitHandler: function(form) {
                //doAjaxLogin($('#redirect').val());
                form.submit();
            },
            // override jquery validate plugin defaults for bootstrap 3
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if(element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });
    }
}

$(function(){
    dhldp_admin_configure.init();
})