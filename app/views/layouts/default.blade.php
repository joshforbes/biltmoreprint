<!doctype html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700|Ubuntu' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/iconfont.css') }}
    {{ HTML::style('css/main.css') }}
</head>
<body>

@include('layouts.partials.nav')

@yield('content')
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

    var navModule = (function() {
        var s;

        function disableTransition() {
            if (($(document).scrollTop()) > 0) {
                console.log(($(document).scrollTop()));
                s.navContainer.addClass('notransition');
            }
        }

        function shrinkNav() {
            console.log($(window).scrollTop());
            if (($(document).scrollTop()) > s.navShrinkThreshhold) {
                s.navContainer.addClass(s.navSmallClass);
            }
        }

        function menuSlideToggle() {
            s.mobileMenuNavigation.slideToggle('linear');
        }

        function bindUIactions() {
            $(window).scroll(shrinkNav);
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

    (function() {
            navModule.init();
            serviceModule.init();
        }());

</script>

</html>