
jQuery(document).ready(function($) {
    'use strict';

    // ==============================================================
    // Sidebar scrollnavigation
    // ==============================================================

    if ($(".sidebar-nav-fixed a").length) {
        $('.sidebar-nav-fixed a')
            // Remove links that don't actually link to anything

            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 90
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                };
                $('.sidebar-nav-fixed a').each(function() {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
            });

    }

    // ============================================================== 
    // tooltip
    // ============================================================== 
    if ($('[data-toggle="tooltip"]').length) {
            
        $('[data-toggle="tooltip"]').tooltip()

    }

     // ============================================================== 
    // popover
    // ============================================================== 
       if ($('[data-toggle="popover"]').length) {
            $('[data-toggle="popover"]').popover()

        }


    if ($("[data-table='dataTable']").length) {
        $("[data-table='dataTable']").DataTable({
            order: false
        });
    }

    if ($('select').length) {
        $('select').selectpicker();
    }


    $('table').each(function () {
        var table = $(this);
        table.find('thead input.checkall').click(function () {
            table.find('tbody input[name="item"]').prop('checked', this.checked);
        });
    });


    $('.action_form').submit(function (e) {
        e.preventDefault();
        var val = $(this).find('select[name="action"]').val(),
            resultForm = $('.result_form');

        if(resultForm.find('input[name="item"]:checked').length < 1) {
            swal({
                title: "No item selected",
                text: "Please select some items from the list.",
                closeOnClickOutside: false,
                closeOnEsc: false
            });
            return;
        }

        if(val) {
            resultForm.find('input[name="action"]').val(val);
            resultForm.submit();
        } else {
            swal({
                title: "Please select an action",
                closeOnClickOutside: false,
                closeOnEsc: false
            });
        }
    });

}); // AND OF JQUERY