import '../../public/js/jquery.pjax.js';

(function($){

    var original_title = document.title;

    var Witkey = {
        init: function(){
            var self = this;
            $(document).pjax('a:not(a[target="_blank"], a[class="dropdown-toggle"])', 'body');
            $(document).on('pjax:start', function() {
                NProgress.start();
            });
            $(document).on('pjax:end', function() {
                NProgress.done();
                self.siteBootUp();
            });
            $(document).on('pjax:complete', function() {
                original_title = document.title;
                NProgress.done();
                //self._resetTitle();
            });

            self.siteBootUp();
        },

        /*
        * Things to be execute when normal page load
        * and pjax page load.
        */
        siteBootUp: function(){
            var self = this;
        },
    }
    window.Witkey = Witkey;
})(jQuery);

$(document).ready(function()
{
    Witkey.init();
});