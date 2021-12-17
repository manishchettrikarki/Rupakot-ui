"use strict";
$(document).ready(function () {
    $(window).on('scroll', function () {
        $(".grid").isotope('layout');
    });

    $(".dropdown-menu").on('click', function (e) {
        e.stopPropagation();
    });
    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000
    });

    $('.dropdown-submenu').on("click", function () {
        $(".dropdown-submenu .drop1.open").not($(this).find('.drop1')).removeClass('open');
        $(this).find('.drop1').toggleClass('open');
    });
    $(".dropdown-toggle").on('click', function () {
        $(".dropdown-submenu .drop1").removeClass('open');
    });
    $('.dropdown-submenu').on("click", function () {
        $(".dropdown-submenu .drop2.open").not($(this).find('.drop2')).removeClass('open');
        $(this).find('.drop2').toggleClass('open');
    });
    $(".dropdown-toggle").on('click', function () {
        $(".dropdown-submenu .drop2").removeClass('open');
    });


    // $(".datepicker").flatpickr({

    // });


    // $( "#slider-range" ).slider({
    //     range: true,
    //     min: 0,
    //     max: 500,
    //     values: [ 100, 300 ],
    //     slide: function( event, ui ) {
    //         $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    //         $( "#amount1" ).val(ui.values[ 0 ]);
    //         $( "#amount2" ).val(ui.values[ 1 ]);
    //     }
    // });
    // $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    // $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
    // $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
    // $( "#time-range" ).slider({
    //     range: true,
    //     min: 1,
    //     max: 12,
    //     values: [ 2, 8 ],
    //     slide: function( event, ui ) {
    //         $( "#time" ).html( ui.values[ 0 ] + "AM - " + ui.values[ 1 ] + "AM" );
    //         $( "#amount1" ).val(ui.values[ 0 ]);
    //         $( "#amount2" ).val(ui.values[ 1 ]);
    //     }
    // });
    // $( "#time" ).html( $( "#time-range" ).slider( "values", 0 ) +
    //     "AM - " + $( "#time-range" ).slider( "values", 1 )  +  "AM" );

    // $( "#time1" ).val($( "#time-range" ).slider( "values", 0 ));
    // $( "#time2" ).val($( "#time-range" ).slider( "values", 1 ));
    // slick slider script
    $(".scroll-index3").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        autoplaySpeed: 1500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".scroll-text").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 2000,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".scrolling-elem").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        autoplay: false,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".scroll-image").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 2000,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".scroll-image-v2").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 2000,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".scrolling-index2").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        autoplaySpeed: 1500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".index-two-scroll").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 1500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });


    $(".slider-new").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 2500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 768,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(".index-twoS_bg").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 4,
        autoplaySpeed: 1500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });

    $(".slider_new_hotels").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        autoplaySpeed: 2000,
        autoplay: false,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });



    $(".slider_logo").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 6,
        autoplaySpeed: 1500,
        autoplay: true,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 992,
            settings: {
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });
    // wrapper-index
    var body = $('.wrapper-index');
    var backgrounds = [
        'url(assets/img/new-index-bg.jpg)',
        'url(assets/img/car-bg-v2.jpg)',
        'url(assets/img/plane-beach.jpg)'
    ];
    var current = 0;

    function nextBackground() {
        body.css(
            'background',
            backgrounds[current = ++current % backgrounds.length]);

        setTimeout(nextBackground, 3000);
    }
    setTimeout(nextBackground, 3000);
    body.css('background', backgrounds[0]);

    function fadeDivs() {
        $('.wrapper-index').fadeOut(100, function () {
            $(this).fadeIn(100);
        })
        i++;
    }

    // document.onreadystatechange = function () {
    //     var state = document.readyState
    //     if (state === 'complete') {
    //         setTimeout(function () {
    //             document.getElementById('loading').style.visibility = "hidden";
    //         }, 2000);
    //     }
    // };

});

jQuery(document).ready(function () {
    jQuery("#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents").keyup(function () {
        calcTotal();
    });
});

function calcTotal() {
    var grade = 0;
    var donorTotal = Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g, ""));
    if (donorTotal) {
        donorTotal = parseFloat(donorTotal);
    } else {
        donorTotal = 0;
    }
    grade += getBonusDonorPoints(donorTotal);
    var acqAmount1 = Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g, ""));
    var acqAmount2 = Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g, ""));
    var acqTotal = 0;
    if (acqAmount1) {
        acqAmount1 = parseFloat(acqAmount1);
    } else {
        acqAmount1 = 0;
    }
    if (acqAmount2) {
        acqAmount2 = parseFloat(acqAmount2);
    } else {
        acqAmount2 = 0;
    }
    if (acqAmount1 > 0 && acqAmount2 > 0) {
        acqTotal = ((acqAmount2 - acqAmount1) / acqAmount1 * 100).toFixed(2);
    } else {
        acqTotal = 0;
    }
    jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal + '%');
    grade += getAcquisitionPoints(acqTotal);
    console.log(grade);
    var cultAmount1 = Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g, ""));
    var cultAmount2 = Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g, ""));
    var cultTotal = 0;
    if (cultAmount1) {
        cultAmount1 = parseFloat(cultAmount1);
    } else {
        cultAmount1 = 0;
    }
    if (cultAmount2) {
        cultAmount2 = parseFloat(cultAmount2);
    } else {
        cultAmount2 = 0;
    }
    if (cultAmount1 > 0 && cultAmount2 > 0) {
        cultTotal = ((cultAmount2 - cultAmount1) / cultAmount1 * 100).toFixed(2);
    } else {
        cultTotal = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal + '%');
    grade += getAcquisitionPoints(cultTotal);
    var cultAmount3 = Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g, ""));
    var cultAmount4 = Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g, ""));
    if (cultAmount3) {
        cultAmount3 = parseFloat(cultAmount3);
    } else {
        cultAmount3 = 0;
    }
    if (cultAmount4) {
        cultAmount4 = parseFloat(cultAmount4);
    } else {
        cultAmount4 = 0;
    }
    if (cultAmount3 > 0 && cultAmount4 > 0) {
        cultTotal2 = ((cultAmount4 - cultAmount3) / cultAmount3 * 100).toFixed(2);
    } else {
        cultTotal2 = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2 + '%');
    grade += getAcquisitionPoints(cultTotal2);
    var retAmount1 = Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g, ""));
    var retAmount2 = Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g, ""));
    var retTotal = 0;
    if (retAmount1) {
        retAmount1 = parseFloat(retAmount1);
    } else {
        retAmount1 = 0;
    }
    if (retAmount2) {
        retAmount2 = parseFloat(retAmount2);
    } else {
        retAmount2 = 0;
    }
    if (retAmount1 > 0 && retAmount2 > 0) {
        retTotal = (retAmount2 / retAmount1 * 100).toFixed(2);
    } else {
        retTotal = 0;
    }
    jQuery("#edit-submitted-retention-percent-change").val(retTotal + '%');
    grade += getAcquisitionPoints(retTotal);
    jQuery("#edit-submitted-final-grade-grade").val(grade + ' / 400');
}

function getAcquisitionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getCultivationGiftPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 4) {
        return 50;
    } else if (val >= 4 && val < 7) {
        return 60;
    } else if (val >= 7 && val < 10) {
        return 70;
    } else if (val >= 10 && val < 13) {
        return 75;
    } else if (val >= 13 && val < 16) {
        return 80;
    } else if (val >= 16 && val < 21) {
        return 85;
    } else if (val >= 21 && val < 26) {
        return 90;
    } else if (val >= 26 && val < 51) {
        return 95;
    } else if (val >= 51) {
        return 100;
    }
}

function getCultivationDonationPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getRetentionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 51) {
        return 50;
    } else if (val >= 51 && val < 56) {
        return 60;
    } else if (val >= 56 && val < 61) {
        return 70;
    } else if (val >= 61 && val < 66) {
        return 75;
    } else if (val >= 66 && val < 71) {
        return 80;
    } else if (val >= 71 && val < 76) {
        return 85;
    } else if (val >= 76 && val < 81) {
        return 90;
    } else if (val >= 81 && val < 91) {
        return 95;
    } else if (val >= 91) {
        return 100;
    }
}

function getBonusDonorPoints(val) {
    if (val < 10001) {
        return 0;
    } else if (val >= 10001 && val < 25001) {
        return 10;
    } else if (val >= 25001 && val < 50000) {
        return 15;
    } else if (val >= 50000) {
        return 20;
    }
}
var modules = {
    $window: $(window),
    $html: $('html'),
    $body: $('body'),
    $container: $('.container'),
    init: function () {
        $(function () {
            modules.modals.init();
        });
    },
    modals: {
        trigger: $('.explanation'),
        modal: $('.modal'),
        scrollTopPosition: null,
        init: function () {
            var self = this;
            if (self.trigger.length > 0 && self.modal.length > 0) {
                modules.$body.append('<div class="modal-overlay"></div>');
                self.triggers();
            }
        },
        triggers: function () {
            var self = this;
            self.trigger.on('click', function (e) {
                e.preventDefault();
                var $trigger = $(this);
                self.openModal($trigger, $trigger.data('modalId'));
            });
            $('.modal-overlay').on('click', function (e) {
                e.preventDefault();
                self.closeModal();
            });
            modules.$body.on('keydown', function (e) {
                if (e.keyCode === 27) {
                    self.closeModal();
                }
            });
            $('.modal-close').on('click', function (e) {
                e.preventDefault();
                self.closeModal();
            });
        },
        openModal: function (_trigger, _modalId) {
            var self = this,
                scrollTopPosition = modules.$window.scrollTop(),
                $targetModal = $('#' + _modalId);
            self.scrollTopPosition = scrollTopPosition;
            modules.$html.addClass('modal-show').attr('data-modal-effect', $targetModal.data('modal-effect'));
            $targetModal.addClass('modal-show');
            modules.$container.scrollTop(scrollTopPosition);
        },
        closeModal: function () {
            var self = this;
            $('.modal-show').removeClass('modal-show');
            modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');
            modules.$window.scrollTop(self.scrollTopPosition);
        }
    }
}
modules.init();
// multistep booking form close
