/* codekit-prepend '../lib/jquery-3.3.1.slim.min.js */

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
        // DOM ready, take it away
          window.main_nav = {
              elements: {
                  nav_hamburger: $('.header__hamburger'),
                  main_header: $('.header--main'),
                  main_nav_item: $('.menu-nav > li.menu-item-has-children'),
                  last_scroll_top: 0
              },
              methods: {
                  _on_hamburger_click: function() {
                      $(this).toggleClass('active');
                      window.main_nav.elements.main_header.toggleClass('header--active');
                      window.main_nav.elements.main_header.toggleClass('header--gradient');
                  }
              }
          }

          window.main_nav.elements.nav_hamburger.on('click', window.main_nav.methods._on_hamburger_click);
          window.main_nav.elements.main_nav_item.on('click', function(){
              $(this).toggleClass('open-active');
          });

          $( window ).scroll(function() {
              var scrollTop = $(this).scrollTop();
            
            if ( scrollTop  > window.main_nav.elements.last_scroll_top ) {
                // scrolled down
                console.log('scroll happened down');
                if ( window.main_nav.elements.last_scroll_top > 100) {
                    window.main_nav.elements.main_header.addClass('header--black');
                }
            } else {
               // scrolled up 
               console.log('scroll happened up');

               if ( window.main_nav.elements.last_scroll_top < 100) {
                window.main_nav.elements.main_header.removeClass('header--black');
            }
            }
            window.main_nav.elements.last_scroll_top = scrollTop;
            console.log('scroll happened', window.main_nav.elements.last_scroll_top);
          });
		
	});
	
})(jQuery, this);
