(function(){jQuery(document).ready(function(a){"use strict";var b,c,d;return b=a(".woocommerce form.login"),d=b.children(":not(.wc-social-login)"),c=b.find(".wc-social-login"),a("a.js-show-social-login").on("click",function(a){var e;return a.preventDefault(),b.is(":visible")?d.is(":visible")?(e=d.length,d.fadeOut(function(){return e--,0===e?c.fadeIn():void 0})):c.is(":visible")?b.slideUp():void 0:(c.is(":visible")||(d.hide(),c.show()),b.slideDown())}),a(document.body).off("click","a.showlogin"),a("a.showlogin").on("click",function(a){return a.preventDefault(),b.is(":visible")?c.is(":visible")?c.fadeOut(function(){return d.fadeIn()}):d.is(":visible")?b.slideUp():void 0:(d.is(":visible")||(d.show(),c.hide()),b.slideDown())}),a("a.js-show-available-providers").on("click",function(b){return b.preventDefault(),a(".wc-social-login-available-providers").show(),a(this).hide()})})}).call(this);