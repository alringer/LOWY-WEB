!function($,e,n){$(function(){"use strict";window.main_nav={elements:{nav_hamburger:$(".header__hamburger"),main_header:$(".header--main"),main_nav_item:$(".menu-nav > li.menu-item-has-children"),search_form_icon:$(".search-logo-desktop"),search_form:$(".form-search"),last_scroll_top:0,animation_speed:300,last_item_id:"",window_offset_top:100,searchbar_offset:60},methods:{_on_hamburger_click:function(){$(this).toggleClass("active"),window.main_nav.elements.main_header.toggleClass("header--active"),window.main_nav.elements.main_header.toggleClass("header--gradient")},_on_menu_item_click:function(){var e=$(this)[0].id;window.main_nav.elements.last_item_id!==e?(window.main_nav.elements.main_nav_item.removeClass("open-active"),$(this).addClass("open-active"),window.main_nav.elements.last_item_id=e):(window.main_nav.elements.main_nav_item.removeClass("open-active"),window.main_nav.elements.last_item_id=void 0)},_on_window_scroll:function(){var e=$(this).scrollTop();e>window.main_nav.elements.last_scroll_top?window.main_nav.elements.last_scroll_top>window.main_nav.elements.window_offset_top&&window.main_nav.elements.main_header.addClass("header--black"):window.main_nav.elements.last_scroll_top<window.main_nav.elements.window_offset_top&&window.main_nav.elements.main_header.removeClass("header--black"),window.main_nav.elements.last_scroll_top=e}}},$(window).scroll(window.main_nav.methods._on_window_scroll),window.main_nav.elements.nav_hamburger.on("click",window.main_nav.methods._on_hamburger_click),window.main_nav.elements.main_nav_item.on("click",window.main_nav.methods._on_menu_item_click),window.main_nav.elements.search_form_icon.on("click",function(){var e=$(".menu-nav").width()+window.main_nav.elements.searchbar_offset;window.main_nav.elements.search_form.toggleClass("show-form"),window.main_nav.elements.search_form.hasClass("show-form")?window.main_nav.elements.search_form.animate({width:e},window.main_nav.elements.animation_speed):window.main_nav.elements.search_form.removeAttr("style")}),window.main_nav.elements.main_nav_item.mouseover(function(){console.log("mouse over"),window.main_nav.elements.main_nav_item.removeClass("open-active"),$(this).addClass("open-active")}).mouseout(function(){window.main_nav.elements.main_nav_item.removeClass("open-active")})})}(jQuery,this);