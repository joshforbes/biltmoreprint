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
