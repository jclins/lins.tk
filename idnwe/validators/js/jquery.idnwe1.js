/**
 * jQuery Captcha Basic
 *
 * @fileoverview  Plugin object
 * @link          https://github.com/pemre/jquery-captcha-basic/
 * @author        Emre Piskin (http://rencs.com/)
 * @requires      jQuery 1.12.4+
 */

(function($) {
    "use strict";

   /** $.fn.captcha = function(param) {

                // Don't breake jQuery chain!
        return this;
    }
	 */
	$.fn.isEmail = function(param) {
		//function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	
})(jQuery);
