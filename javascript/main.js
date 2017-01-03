/**
 * Menu
*/

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var menu = function() {
    function clickMenu() {
        var largeScreen = matchMedia('only screen and (min-width: 992px)').matches;
        if (largeScreen) {
            if ($().sticky) {
                $('header.header-sticky').sticky();
            }
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() > 200) {
                $('header').addClass('float-header');
            } else {
                $('header').removeClass('float-header');
            }
        });

        $('.mainnav ul > li > a').on('click', function() {
            var anchor = $(this).attr('href').split('#')[1];
            $(this).addClass('active').parent().siblings().children().removeClass('active');

            if (anchor) {
                if ($('#' + anchor).length > 0) {
                    var headerHeight = 0;
                    if ($('.header-sticky').length > 0 && largeScreen) {
                        headerHeight = $('#header').outerHeight();
                    }
                    var target = $('#' + anchor).offset().top - headerHeight;
                    $('html,body').animate({
                        scrollTop: target
                    }, 1000, 'easeInOutExpo');
                }
            }
            return false;
        }); // click on one-page menu
    }

    clickMenu();
}

var animation = function() {
  $('.ewm-animation').each( function() {
  var $this = $(this),
     orAnimationClass = $this.data('animation'),
     orAnimationDelay = $this.data('animation-delay'),
     orAnimationOffset = $this.data('animation-offset');

     $this.css({
        '-webkit-animation-delay':  orAnimationDelay,
        '-moz-animation-delay':     orAnimationDelay,
        'animation-delay':          orAnimationDelay
     });
    
     $this.waypoint(function() {
        $this.addClass('animated').addClass(orAnimationClass);
        },{
           triggerOnce: true,
           offset: orAnimationOffset
     });
  });
};

var slider = function() {
    $(document).ready(function() {
        $('.tp-banner').show().revolution({
            dottedOverlay:"none",
            delay:6000,
            startwidth:1170,
            startheight: 700,
            hideThumbs:200,

            thumbWidth:100,
        thumbHeight:50,
        thumbAmount:5,

        navigationType:"off",
        navigationArrows:"solo",
        navigationStyle:"square",

        touchenabled:"on",
        onHoverStop:"on",

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        parallax:"mouse",
        parallaxBgFreeze:"on",
        parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

        keyboardNavigation:"off",

        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:20,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,

        shadow:0,
        fullWidth:"on",
        fullScreen:"off",

        spinner:"spinner4",

        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,

        shuffle:"off",

        autoHeight:"off",                       
        forceFullWidth:"off",                       

        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,                      
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,

        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        startWithSlide:0,
        fullScreenOffsetContainer: "",

        disableProgressBar: "on"
        });
    });
}

var goTop = function() {
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 800 ) {
            $('#bttop').addClass('show');
        } else {
            $('#bttop').removeClass('show');
        }
    }); 

    $('#bttop').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
        return false;
    });
};

var animate = function () {
    $('.ewm-animation').each( function() {
        if( !isMobile.any() ) {
            var orElement = $(this),
            orAnimationClass = orElement.data('animation'),
            orAnimationDelay = orElement.data('animation-delay'),
            orAnimationOffset = orElement.data('animation-offset'),
            effect = orElement.data('portfolio-effect');

            orElement.css({
                '-webkit-animation-delay':  orAnimationDelay,
                '-moz-animation-delay':     orAnimationDelay,
                'animation-delay':          orAnimationDelay
            });

            orElement.waypoint(function () {
            orElement.addClass('animated ' + effect ).addClass(orAnimationClass);
            },{
               triggerOnce: true,
               offset: orAnimationOffset
            });
        } else {
            $('.ewm-animation').addClass('animated');
        }
    });
};

var ResponsiveMenu = {

  menuType: 'desktop',

  initial: function(winWidth) {
     ResponsiveMenu.menuWidthDetect(winWidth);
     ResponsiveMenu.menuBtnClick();
     ResponsiveMenu.parentMenuClick();
  },

  menuWidthDetect: function(winWidth) {
     var currMenuType = 'desktop';

     if (matchMedia('only screen and (max-width: 978px)').matches) {
        currMenuType = 'mobile';
     } // change menu type

     if ( currMenuType !== ResponsiveMenu.menuType ) {
        ResponsiveMenu.menuType = currMenuType;

        if ( currMenuType === 'mobile' ) {
           var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
           $('#header').find('.header-wrap').after($mobileMenu);
           var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');
           hasChildMenu.children('ul').hide();
           hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
           $('.btn-menu').removeClass('active');
         } 
         else {
           var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
           $desktopMenu.find('.sub-menu').removeAttr('style');
           $('#header').find('.col-md-10').after($desktopMenu);
           $('.btn-submenu').remove();
         }
     } // clone and insert menu
  },

  menuBtnClick: function() {
     $('.btn-menu').on('click', function () {
        $('#mainnav-mobi').slideToggle(300);
        $(this).toggleClass('active');
        return false;
     });
  }, // click on moblie button

  parentMenuClick: function() {
     $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
        if ( $(this).has('ul') ) {
           e.stopImmediatePropagation()
           $(this).next('ul').slideToggle(300);
           $(this).toggleClass('active');
        }
        return false;
     });
  } // click on sub-menu button
};

$(document).ready(function() {
    menu();
    animation();
    slider();
    goTop();
    animate();
    ResponsiveMenu.initial($(window).width());
    $(window).resize(function() {
        ResponsiveMenu.menuWidthDetect($(this).width());
    });
});