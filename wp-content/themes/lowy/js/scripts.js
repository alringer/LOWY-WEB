!function($,e,n){$(function(){"use strict";window.main_nav={elements:{nav_hamburger:$(".header__hamburger"),main_header:$(".header--main"),main_nav_item:$(".menu-nav > li.menu-item-has-children"),search_form_icon:$(".search-logo-desktop"),search_form:$(".form-search"),window_width:$(window).width(),last_scroll_top:0,animation_speed:300,last_item_id:"",window_offset_top:100,searchbar_offset:40,desktop_size:1023},methods:{_on_hamburger_click:function(){$(this).toggleClass("active"),window.main_nav.elements.main_header.toggleClass("header--active"),window.main_nav.elements.main_header.toggleClass("header--gradient")},_on_menu_item_click:function(){var e=$(this)[0].id;window.main_nav.elements.last_item_id!==e?(window.main_nav.elements.main_nav_item.removeClass("open-active"),$(this).addClass("open-active"),window.main_nav.elements.last_item_id=e):(window.main_nav.elements.main_nav_item.removeClass("open-active"),window.main_nav.elements.last_item_id=void 0)},_on_search_icon_click:function(){var e=$(".menu-nav").width()+window.main_nav.elements.searchbar_offset;window.main_nav.elements.search_form.toggleClass("show-form"),window.main_nav.elements.search_form.hasClass("show-form")?window.main_nav.elements.search_form.animate({width:e},window.main_nav.elements.animation_speed):window.main_nav.elements.search_form.removeAttr("style")},_on_mouse_over_nav_item_has_children:function(){window.main_nav.elements.main_nav_item.removeClass("open-active"),$(this).addClass("open-active")},_on_mouse_leave_nav_item_has_children:function(){window.main_nav.elements.main_nav_item.removeClass("open-active")},_on_window_scroll:function(){var e=$(this).scrollTop();e>window.main_nav.elements.last_scroll_top?window.main_nav.elements.last_scroll_top>window.main_nav.elements.window_offset_top&&window.main_nav.elements.main_header.addClass("header--black"):window.main_nav.elements.last_scroll_top<window.main_nav.elements.window_offset_top&&window.main_nav.elements.main_header.removeClass("header--black"),window.main_nav.elements.last_scroll_top=e}}},$(window).scroll(window.main_nav.methods._on_window_scroll),window.main_nav.elements.nav_hamburger.on("click",window.main_nav.methods._on_hamburger_click),window.main_nav.elements.main_nav_item.on("click",window.main_nav.methods._on_menu_item_click),window.main_nav.elements.search_form_icon.on("click",window.main_nav.methods._on_search_icon_click),$(window).width()>window.main_nav.elements.desktop_size&&(window.main_nav.elements.main_nav_item.mouseover(window.main_nav.methods._on_mouse_over_nav_item_has_children).mouseout(window.main_nav.methods._on_mouse_leave_nav_item_has_children),console.log($(this).scrollTop())),$(this).scrollTop()>window.main_nav.elements.searchbar_offset?window.main_nav.elements.main_header.addClass("header--black"):window.main_nav.elements.main_header.removeClass("header--black"),$(window).resize(function(){$(window).width()>window.main_nav.elements.desktop_size?(window.main_nav.elements.main_header.removeClass("header--active").addClass("header--gradient"),window.main_nav.elements.nav_hamburger.removeClass("active"),window.main_nav.elements.main_nav_item.mouseover(window.main_nav.methods._on_mouse_over_nav_item_has_children).mouseout(window.main_nav.methods._on_mouse_leave_nav_item_has_children)):window.main_nav.elements.main_header.addClass("header--xs")})})}(jQuery,this);