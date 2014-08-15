var navModule = (function() {
   var s;

    function shrinkNav() {
        if ($(document).scrollTop() > s.navShrinkThreshhold) {
            $(s.navContainer).addClass(s.navSmallClass);
        }
    }

    function menuSlideIn(event) {
        event.preventDefault();
        this.slideToggle('linear');
    }

    function menuSlideOut() {
        this.slideToggle('linear');
    }

    function bindUIactions() {
        $(window).scroll(shrinkNav());
        this.mobileMenuButton.on('click', menuSlideIn(event));
        this.mobileMenuNavigation.on('click', menuSlideOut());
    }

    return {
        settings: {
            navContainer: $('header'),
            navSmallClass: 'nav-small',
            navShrinkThreshhold: 90,

            mobileMenuButton: $('.mobile-menu-button'),
            mobileMenuNavigation: $('mobile-menu-navigation')
        },

        init: function() {
            s = this.setting;
            bindUIactions();
        }
    }
})();
