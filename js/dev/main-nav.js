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
                  search_form_icon: $('.search-logo-desktop'),
                  search_form: $('.form-search'),
                  last_scroll_top: 0,
                  animation_speed: 300,
                  last_item_id: '',
                  window_offset_top: 100,
                  searchbar_offset: 60
              },
              methods: {
                  _on_hamburger_click: function() {
                      $(this).toggleClass('active');
                      window.main_nav.elements.main_header.toggleClass('header--active');
                      window.main_nav.elements.main_header.toggleClass('header--gradient');
                    },
                  _on_menu_item_click: function() {
                      var id = $(this)[0].id;
                      if (window.main_nav.elements.last_item_id !== id) {
                        //     window.main_nav.elements.main_nav_item.removeClass('open-active').animate({
                        //         height: 75
                        //     }, 300);
                        //     $(this).addClass('open-active').animate({
                        //     height: 200
                        // }, 300);
                        window.main_nav.elements.main_nav_item.removeClass('open-active');
                        $(this).addClass('open-active');
                        window.main_nav.elements.last_item_id = id;
                      } else {
                        window.main_nav.elements.main_nav_item.removeClass('open-active');
                        window.main_nav.elements.last_item_id = undefined;
                      }
                    },
                    _on_window_scroll: function() {
                        var scrollTop = $(this).scrollTop();
                      
                      if ( scrollTop  > window.main_nav.elements.last_scroll_top ) {
                          // scrolled down
                          if ( window.main_nav.elements.last_scroll_top > window.main_nav.elements.window_offset_top) {
                              window.main_nav.elements.main_header.addClass('header--black');
                          }
                      } else {
                         // scrolled up 
                         if ( window.main_nav.elements.last_scroll_top < window.main_nav.elements.window_offset_top) {
                          window.main_nav.elements.main_header.removeClass('header--black');
                      }
                      }
                      window.main_nav.elements.last_scroll_top = scrollTop;
                    }
              }
          }

          $( window ).scroll(window.main_nav.methods._on_window_scroll);

          window.main_nav.elements.nav_hamburger.on('click', window.main_nav.methods._on_hamburger_click);
          window.main_nav.elements.main_nav_item.on('click', window.main_nav.methods._on_menu_item_click);
          window.main_nav.elements.search_form_icon.on('click', function(){
              var menu_width = $('.menu-nav').width() + window.main_nav.elements.searchbar_offset;
              window.main_nav.elements.search_form.toggleClass('show-form');
              window.main_nav.elements.search_form.hasClass('show-form') ? window.main_nav.elements.search_form.animate({
                width: menu_width
              }, window.main_nav.elements.animation_speed) : window.main_nav.elements.search_form.removeAttr('style');
          });

          window.main_nav.elements.main_nav_item.mouseover(function(){
              console.log('mouse over');
            window.main_nav.elements.main_nav_item.removeClass('open-active');
            $(this).addClass('open-active');
          }).mouseout(function(){
            window.main_nav.elements.main_nav_item.removeClass('open-active');
          });
		
	});
	
})(jQuery, this);
