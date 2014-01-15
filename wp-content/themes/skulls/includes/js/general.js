/*-----------------------------------------------------------------------------------*/
/* GENERAL SCRIPTS */
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($) {
    //Flex Slider
    if($('.flexslider').length){
        $('.flexslider').flexslider({
            animation: "fade",
            animationLoop: true,
            controlNav: false
        });
    }
    
    jQuery('#index_slider').camera({ //here I declared some settings, the height and the presence of the thumbnails 
            height: '41%',
            pagination: true,
            thumbnails: false,
            pagination: false,
            playPause: false,
            loader: 'none',
            navigationHover: true,
            fx: 'simpleFade'
    });

    //Products animation
    $('.product').each(function(i) {
        $(this).delay((i++) * 100).fadeTo(1000, 1);
    });

    $('.feature_item').on('click', function() {
        var url = $(this).attr('data-href');
        window.location.href = url;
    });

    var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
    if (jQuery.browser.mobile || isiDevice) {
        $('#skulls-sidebar').show();
        $('.skulls-col-left .cat_parent').on('click', function(event) {
            event.preventDefault();
            $('.skulls-col-left ul li').toggle();
        });
        var pull        = $('#pull');  
            menu        = $('nav ul');  
            menuHeight  = menu.height();  

        $(pull).on('click', function(e) {  
            e.preventDefault();  
            menu.slideToggle();  
        });  

        $(window).resize(function(){  
            var w = $(window).width();  
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }  
        });
    } else {
        
        $('#skulls-sidebar').show();
        $('.skulls-col-left .cat_parent').on('click', function(event){
            event.preventDefault();

            $('.skulls-col-left ul li').toggle();

            
        });

        var pull        = $('#pull');  
            menu        = $('#menu_mobile ul');  
            menuHeight  = menu.height();  

        $(pull).on('click', function(e) {  
            e.preventDefault();  
            menu.slideToggle();  
        });  

        $(window).resize(function(){  
            var w = $(window).width();  
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }  
        });
        console.log("=)");
    }
    
    $('.zoom').append("<div class='zoom_img'></div>");
    $('#pa_size option:first').text('');
    $('#heart').on('click', function(){
       window.location.href = "http://www.skullsclothingcompany.com";
    });
    
    /* Menu Mobile */
    

    // Fix dropdowns in Android
    if (/Android/i.test(navigator.userAgent) && jQuery(window).width() > 769) {
        $('.nav li:has(ul)').doubleTapToGo();
    }

    // Table alt row styling
    jQuery('.entry table tr:odd').addClass('alt-table-row');

    // FitVids - Responsive Videos
    jQuery(".post, .widget, .panel").fitVids();

    // Add class to parent menu items with JS until WP does this natively
    jQuery("ul.sub-menu").parents('li').addClass('parent');


    // Responsive Navigation (switch top drop down for select)
    jQuery('ul#top-nav').mobileMenu({
        switchWidth: 767, //width (in px to switch at)
        topOptionText: 'Select a page', //first option text
        indentString: '&nbsp;&nbsp;&nbsp;'  //string for indenting nested items
    });



    // Show/hide the main navigation
    jQuery('.nav-toggle').click(function() {
        jQuery('#navigation').slideToggle('fast', function() {
            return false;
            // Animation complete.
        });
    });

    // Stop the navigation link moving to the anchor (Still need the anchor for semantic markup)
    jQuery('.nav-toggle a').click(function(e) {
        e.preventDefault();
    });

    // Add parent class to nav parents
    jQuery("ul.sub-menu, ul.children").parents().addClass('parent');

    //Mailchimp functions
    var fnames = new Array();
    var ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    fnames[1] = 'FNAME';
    ftypes[1] = 'text';
    fnames[2] = 'LNAME';
    ftypes[2] = 'text';
    try {
        var jqueryLoaded = jQuery;
        jqueryLoaded = true;
    } catch (err) {
        var jqueryLoaded = false;
    }
    var head = document.getElementsByTagName('head')[0];
    if (!jqueryLoaded) {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
        head.appendChild(script);
        if (script.readyState && script.onload !== null) {
            script.onreadystatechange = function() {
                if (this.readyState == 'complete')
                    mce_preload_check();
            }
        }
    }

    var err_style = '';
    try {
        err_style = mc_custom_error_style;
    } catch (e) {
        err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
    }
    var head = document.getElementsByTagName('head')[0];
    var style = document.createElement('style');
    style.type = 'text/css';
    if (style.styleSheet) {
        style.styleSheet.cssText = err_style;
    } else {
        style.appendChild(document.createTextNode(err_style));
    }
    head.appendChild(style);
    setTimeout('mce_preload_check();', 250);

    var mce_preload_checks = 0;
    function mce_preload_check() {
        if (mce_preload_checks > 40)
            return;
        mce_preload_checks++;
        try {
            var jqueryLoaded = jQuery;
        } catch (err) {
            setTimeout('mce_preload_check();', 250);
            return;
        }
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
        head.appendChild(script);
        try {
            var validatorLoaded = jQuery("#fake-form").validate({});
        } catch (err) {
            setTimeout('mce_preload_check();', 250);
            return;
        }
        mce_init_form();
    }
    function mce_init_form() {
        jQuery(document).ready(function($) {
            var options = {errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function() {
                }, onfocusout: function() {
                }, onblur: function() {
                }};
            var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
            $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
            options = {url: 'http://skullsclothingcompany.us3.list-manage.com/subscribe/post-json?u=b02f564708d0983ffc82e4e45&id=a9055657da&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                beforeSubmit: function() {
                    $('#mce_tmp_error_msg').remove();
                    $('.datefield', '#mc_embed_signup').each(
                            function() {
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                        function() {
                                            fields[i] = this;
                                            i++;
                                        });
                                $(':hidden', this).each(
                                        function() {
                                            var bday = false;
                                            if (fields.length == 2) {
                                                bday = true;
                                                fields[2] = {'value': 1970};//trick birthdays into having years
                                            }
                                            if (fields[0].value == 'MM' && fields[1].value == 'DD' && (fields[2].value == 'YYYY' || (bday && fields[2].value == 1970))) {
                                                this.value = '';
                                            } else if (fields[0].value == '' && fields[1].value == '' && (fields[2].value == '' || (bday && fields[2].value == 1970))) {
                                                this.value = '';
                                            } else {
                                                if (/\[day\]/.test(fields[0].name)) {
                                                    this.value = fields[1].value + '/' + fields[0].value + '/' + fields[2].value;
                                                } else {
                                                    this.value = fields[0].value + '/' + fields[1].value + '/' + fields[2].value;
                                                }
                                            }
                                        });
                            });
                    $('.phonefield-us', '#mc_embed_signup').each(
                            function() {
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                        function() {
                                            fields[i] = this;
                                            i++;
                                        });
                                $(':hidden', this).each(
                                        function() {
                                            if (fields[0].value.length != 3 || fields[1].value.length != 3 || fields[2].value.length != 4) {
                                                this.value = '';
                                            } else {
                                                this.value = 'filled';
                                            }
                                        });
                            });
                    return mce_validator.form();
                },
                success: mce_success_cb
            };
            $('#mc-embedded-subscribe-form').ajaxForm(options);


        });
    }
    function mce_success_cb(resp) {
        $('#mce-success-response').hide();
        $('#mce-error-response').hide();
        if (resp.result == "success") {
            $('#mce-' + resp.result + '-response').show();
            $('#mce-' + resp.result + '-response').html(resp.msg);
            $('#mc-embedded-subscribe-form').each(function() {
                this.reset();
            });
        } else {
            var index = -1;
            var msg;
            try {
                var parts = resp.msg.split(' - ', 2);
                if (parts[1] == undefined) {
                    msg = resp.msg;
                } else {
                    i = parseInt(parts[0]);
                    if (i.toString() == parts[0]) {
                        index = parts[0];
                        msg = parts[1];
                    } else {
                        index = -1;
                        msg = resp.msg;
                    }
                }
            } catch (e) {
                index = -1;
                msg = resp.msg;
            }
            try {
                if (index == -1) {
                    $('#mce-' + resp.result + '-response').show();
                    $('#mce-' + resp.result + '-response').html(msg);
                } else {
                    err_id = 'mce_tmp_error_msg';
                    html = '<div id="' + err_id + '" style="' + err_style + '"> ' + msg + '</div>';

                    var input_id = '#mc_embed_signup';
                    var f = $(input_id);
                    if (ftypes[index] == 'address') {
                        input_id = '#mce-' + fnames[index] + '-addr1';
                        f = $(input_id).parent().parent().get(0);
                    } else if (ftypes[index] == 'date') {
                        input_id = '#mce-' + fnames[index] + '-month';
                        f = $(input_id).parent().parent().get(0);
                    } else {
                        input_id = '#mce-' + fnames[index];
                        f = $().parent(input_id).get(0);
                    }
                    if (f) {
                        $(f).append(html);
                        $(input_id).focus();
                    } else {
                        $('#mce-' + resp.result + '-response').show();
                        $('#mce-' + resp.result + '-response').html(msg);
                    }
                }
            } catch (e) {
                $('#mce-' + resp.result + '-response').show();
                $('#mce-' + resp.result + '-response').html(msg);
            }
        }
    }

});