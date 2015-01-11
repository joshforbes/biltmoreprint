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
