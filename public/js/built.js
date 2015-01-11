var navModule = (function() {
    var s;

    function disableTransition() {
        if (($(document).scrollTop()) > 0) {
            s.navContainer.addClass('notransition');
        }
    }

    function shrinkNavOnScroll() {
        if (($(document).scrollTop()) > s.navShrinkThreshhold) {
            s.navContainer.addClass(s.navSmallClass);
        }
    }

    function menuSlideToggle() {
        s.mobileMenuNavigation.slideToggle('linear');
    }

    function bindUIactions() {
        $(window).scroll(shrinkNavOnScroll);
        s.mobileMenuButton.on('click', function(event) {
            event.preventDefault();
            menuSlideToggle();
        });
        s.mobileMenuNavigation.on('click', function() {
            menuSlideToggle();
        });
    }

    return {
        settings: {
            navContainer: $('header'),
            navSmallClass: 'nav-small',
            navShrinkThreshhold: 90,

            mobileMenuButton: $('.mobile-menu-button'),
            mobileMenuNavigation: $('.mobile-menu-navigation')
        },

        init: function() {
            s = this.settings;
            disableTransition();
            bindUIactions();
        }
    }
})();

var serviceModule = (function() {
    var s;

    function serviceShow() {
        s.serviceContainer.show(1);
        s.serviceBelt.css('left', '-100%');
    }

    function serviceHide() {
        s.serviceBelt.css('left', '0%');
        s.serviceContainer.hide(2000);
    }

    function scrollToTop() {
        $('html, body').animate({
            scrollTop: s.serviceSection.offset().top
        }, s.scrollToTopSpeed);
    }

    function loadService(target) {
        var target = $(target).attr('href');
        s.serviceContainer.load(target);
    }

    function bindUIactions() {
        s.serviceLink.on('click', function(event) {
            event.preventDefault();
            loadService(event.target);
            serviceShow();
            scrollToTop();
        });
        s.serviceContainer.on('click', function() {
            serviceHide();
        });
    }

    return {
        settings: {
            serviceSection: $('.service'),
            serviceContainer: $('.service-container'),
            serviceBelt: $('.service-belt'),
            serviceLink: $('.service-link'),
            serviceClose: $('.service-close'),
            scrollToTopSpeed: 10
        },

        init: function() {
            s = this.settings;
            bindUIactions();
        }
    }
})();
var flashMessageModule = (function() {
    var s;

    function flashClose() {
        s.flashMessage.hide();
    }

    function bindUIactions() {
        s.flashClose.on('click', function() {
            flashClose();
        });
    }

    return {
        settings: {
            flashMessage: $('.flash'),
            flashClose: $('.flash-close'),
        },

        init: function() {
            s = this.settings;
            bindUIactions();
        }
    }
})();

(function() {
    navModule.init();
    serviceModule.init();
    flashMessageModule.init();
}());