// Description: Alterna, Retina Responsive Theme V7.0
"use strict";

jQuery(document).ready(function($) {

/* ----------------------------------------------------
	Functions
---------------------------------------------------- */

// ---------------------------------------
//	init menu
// ---------------------------------------
function menuInit(){
	//add arrow
	$('ul.alterna-nav-menu > li > ul').each(function() {
		$(this).parent().children('a').append('<i class="fa fa-angle-down"></i>');
		$(this).find('ul').each(function() {
			$(this).parent().children('a').append('<i class="fa fa-angle-right"></i>');
		});
	});
	
	//mobile menu
	$('#alterna-drop-nav ul.navbar-nav li ul').each(function() {
		$(this).parent().children('a').append('<span class="child-btn"><i class="fa fa-caret-down"></i></span>');
	});
	
	$('#alterna-drop-nav ul.navbar-nav .child-btn').click(function() {
		if ($(this).parent().parent().children('ul').hasClass('is-show')) {
			$(this).parent().parent().children('ul').removeClass('is-show');
			$(this).parent().parent().children('ul').slideUp();
		}else{
			$(this).parent().parent().children('ul').addClass('is-show');
			$(this).parent().parent().children('ul').slideDown();
		}
		
		return false;
	});
	
	//header style 4
	if($('.header-style-4 .alterna-nav-form-icon').length > 0){
		$('.header-style-4 .alterna-nav-form-icon').click(function() {
            if($(this).find('i').hasClass('fa fa-search')){
				$(this).find('i').removeClass('fa fa-search');
				$(this).find('i').addClass('fa fa-times');
				$('.header-style-4 .menu').addClass('opacity');
				$('.alterna-nav-form-content').addClass('show');
			}else{
				$(this).find('i').removeClass('fa fa-times');
				$(this).find('i').addClass('fa fa-search');
				$('.alterna-nav-form-content').removeClass('show');
				$('.header-style-4 .menu').removeClass('opacity');
			}
        });
	}
	
	//header style 6
	if($('.header-style-6 .alterna-nav-form-icon').length > 0){
		$('.header-style-6 .alterna-nav-form-icon').click(function() {
            if($(this).find('i').hasClass('fa fa-search')){
				$(this).find('i').removeClass('fa fa-search');
				$(this).find('i').addClass('fa fa-times');
				$('.header-style-6 .menu').addClass('opacity');
				$('.header-style-6 .right-content').addClass('opacity');
				$('.alterna-nav-form-content').addClass('show');
			}else{
				$(this).find('i').removeClass('fa fa-times');
				$(this).find('i').addClass('fa fa-search');
				$('.alterna-nav-form-content').removeClass('show');
				$('.header-style-6 .menu').removeClass('opacity');
				$('.header-style-6 .right-content').removeClass('opacity');
			}
        });
	}
}

// ---------------------------------------
//	title line menu
// ---------------------------------------
function titleLineInit(){
	$('.line').each(function() {
		if( $(this).children('.left-line').length === 0 ) {
			$(this).append('<span class="left-line"></span>');
		}
		if( $(this).children('.right-line').length === 0 ) {
			$(this).append('<span class="right-line"></span>');
		}
	});
}

// ---------------------------------------
//	custom title
// ---------------------------------------
function alternaAlertTitleInit() {
	$('.widget_tag_cloud a').tooltip();
	$('.widget_product_tag_cloud a').tooltip();
	$('.header-social a').tooltip();
	$('.show-tooltip').tooltip();
}

// ---------------------------------------
//	run animation elements
// ---------------------------------------	
function animationRun(){
	var current_width = $(window).width();
	// check all single animate element
	$('.animate').each(function(){
		if($(this).hasClass('animated')){
			return false;
		}
		if (checkPosition(this)) {
			$(this).removeClass('animate');
			exAnimate(this);
		}
	});
	
	// check all animate list element
	$('.animate-list').each(function() {
		var items = $(this).find('.animate-item');
		var count = 0;			
		for(var i=0;i<items.length;i++){
			if($(items[i]).hasClass('animating') || $(items[i]).hasClass('animated')){
				if(!$(items[i]).hasClass('animated')){
					count++;
				}else{
					$(items[i]).removeClass('animating');
					$(items[i]).removeClass('animate-item');
				}
				continue;
			}
			if (checkPosition(items[i])) {
				listItemDelayEx(items[i],count);
				count++;
			}
		}			
	});
	
	// list item delay time and execute
	function listItemDelayEx(element,count){
		$(element).addClass('animating').delay(300*count).queue(function(){exAnimate(this);});
	}
	
	// check element position
	function checkPosition(element){
		if(current_width <= 768){
			return true;
		}
		var imagePos = $(element).offset().top;
		var topOfWindow = $(window).scrollTop();
		var heightOfWindow = $(window).height();
		if (imagePos < topOfWindow+heightOfWindow - 50) {
			return true;
		}
		return false;
	}
	
	// add class for element run animation
	function exAnimate(element){
		var effect = 'fadeIn';
		if($(element).attr('data-effect') && $(element).attr('data-effect') !== ""){
			effect = $(element).attr('data-effect');
		}
		$(element).addClass('animated '+effect);
	}
}

// ---------------------------------------
//	single post comment placeholder
// ---------------------------------------
function postCommentPlaceholderInit(){
	//all input files
	$('.placeholding-input input').each(function() {
		$(this).keydown(function() {
			refreshText(this,$(this).attr('value'));
		});
		$(this).focusout(function() {
			refreshText(this,$(this).attr('value'));
		});
	});
	
	$('.placeholding-input textarea').each(function() {
		$(this).keydown(function() {
			refreshText(this,$(this).attr('value'));
		});
		$(this).focusout(function() {
			refreshText(this,$(this).attr('value'));
		});
	});
	
	function refreshText(item,text){
		if(text.length > 0){
			$(item).parent().addClass('have-some');
		}else{
			$(item).parent().removeClass('have-some');
		}
	}
}
// ---------------------------------------
//	one page Navigation
// ---------------------------------------
function onepageNavInit(){
	checkElement(".alterna-pagenav", pageNavCheck);
	
	function pageNavCheck(params){
		var items = $(params).find('a');
		if( $(params).hasClass('right')){
			$(params).find('a').tooltip({placement:'left'});
			$(params).css({ 'margin-top': -($(params).outerHeight()/2) });
		}else if( $(params).hasClass('left')){
			$(params).find('a').tooltip({placement:'right'});
			$(params).css({ 'margin-top': -($(params).outerHeight()/2) });
		}else{
			$(params).find('a').tooltip({placement:'top'});
			$(params).css({ 'margin-right': -($(params).outerWidth()/2) });
		}
		
		$(items).click(function() {
			if($(this).hasClass('current')){ return false; }
			
			if($(this).attr('href') == '#home'){
				
				$('body,html').animate({
					scrollTop: 0
				}, 800 , '', refreshPageNav);
			}else if($($(this).attr('href')).length > 0){
				var pos = $($(this).attr('href')).offset().top;
				var target_position = pos -100;
				$('body,html').animate({
					scrollTop: target_position
				}, 800 , '', refreshPageNav);
			}
			return false;
		});
	}
	
	//add one page scroll
	$('.alterna-nav-menu > li > a').each(function() {
		menuItemClick(this);
	});
	
	$('#alterna-nav-menu-select nav > li > a').each(function() {
		menuItemClick(this);
	});
	
	function menuItemClick(element){
		var str = $(element).attr('href');
		if(str !== "" && String(str).substring(0,1) == "#" && ($(element).attr('href') == "#home" || $($(element).attr('href')).length > 0)){
			$(element).click(function() {
				if($(element).attr('href') == "#home"){
					$('body,html').animate({
						scrollTop: 0
					}, 800 , '', refreshPageNav);
				}else{
					var pos = $($(element).attr('href')).offset().top;
					var target_position = pos -100;
					$('body,html').animate({
						scrollTop: target_position
					}, 800 , '', refreshPageNav);
				}
				return false;
			});
		}
	}
	
	refreshPageNav();
}
function refreshPageNav(){
	var navitems = $('.alterna-pagenav');
	var topOfWindow = $(window).scrollTop();
	for(var i=0; i<navitems.length; i++){
		var index = 0;
		var items = $(navitems[i]).find('a');
		for(var j=0;j<items.length;j++){
			if($($(items[j]).attr('href')).length > 0 && $($(items[j]).attr('href')).offset().top -100 <= topOfWindow){
				index = j;
			}
		}
		$(items).removeClass('current');
		$(items[index]).addClass('current');
	}
}
// ---------------------------------------
//	Tabs & SideTabs
// ---------------------------------------
function tabsInit(){
		
	/* tabs */
	checkElement(".tabs",tabsBack);
	
	/* side tabs */
	checkElement(".sidetabs",sideTabsBack);
	
	/* back fun */
	function tabsBack(params){
		openTabs(params,".tabs-nav li",".tabs-content");
	}
	
	function sideTabsBack(params){
		openTabs(params,".sidetabs-nav li",".sidetabs-content");
	}
	
	function openTabs(params,pname1,pname2){
		var ot_items = $(params).find(pname1);
		var citems = $(params).find(pname2);
		var ot_s1 = 0;
		var ot_sm = ot_items.length;
		var ot_new;
		
		$(ot_items).click(function() {
			if(ot_s1 === $(this).index()) {
				return false;
			}
			
			$(citems[ot_s1]).stop(true,true);
			$(citems[ot_s1]).css("opacity",1);
			
			ot_new = $(this).index();
			
			$(ot_items[ot_s1]).removeClass("current");
			$(ot_items[ot_new]).addClass("current");
			
			if($(citems[ot_s1]) !== null) {
				$(citems[ot_s1]).fadeOut("fast","",runNewTabs);
			}
		});
		
		function runNewTabs(){
			ot_s1 = ot_new;
			showElement(ot_s1,citems);
		}
		
		for(var k=0; k<ot_sm;k++) {
			if(ot_s1 === k){
				if($(ot_items[k]).hasClass("current") === false) {
					$(ot_items[k]).addClass("current");
				}
				showElement(k,citems);
			}else{
				if($(ot_items[k]).hasClass("current") === true)	{
					$(ot_items[k]).removeClass("current");
				}
				hideElement(k,citems);
			}
		}
	}
	
	function showElement(k,citems){
		if($(citems[k]) !== null)	{
			$(citems[k]).fadeIn("fast");
		}
	}
	
	function hideElement(k,citems){
		if($(citems[k]) !== null)	{
			$(citems[k]).fadeOut("fast");
		}
	}
}/* end tabs */

// ---------------------------------------
//	client
// ---------------------------------------
function clientsInit(){
	$('.clients').each(function() {
		var client =  $(this);
		var max_screen_width = $(this).width();
		var items = $(this).find('.client-element');
		var item_width;
		var count = 5;
		var index = 0;
		
		if($(window).width() > 900){
			count = 5;
		}else if($(window).width() > 700){
			count = 4;
		}else if($(window).width() > 400){
			count = 2;
		}else{
			count = 1;
		}
		
		item_width = max_screen_width/count;
		refreshItem(client, items, item_width);
		refreshArrowEvent(client, index, count, items.length);
		
		$(this).find('.client-arrow-left').click(function() {
			index--;
			moveClientItems(client, index, item_width);
			refreshArrowEvent(client, index, count, items.length);
		});
		
		$(this).find('.client-arrow-right').click(function() {
			index++;
			moveClientItems(client, index, item_width);
			refreshArrowEvent(client, index, count, items.length);
		});
		
		$(window).resize(function() {
			refreshClients(client, items);
		});
		
		$(client).find('img').load(function() {
			refreshClients(client, items);
		});
		
	});
	
	function refreshClients(client, items){
		var count = 5;
		if($(window).width() > 900){
			count = 5;
		}else if($(window).width() > 700){
			count = 4;
		}else if($(window).width() > 400){
			count = 2;
		}else{
			count = 1;
		}
		var item_width = $(client).width()/count;
		refreshItem(client, items, item_width);
		moveClientItems(client, 0, item_width);
		refreshArrowEvent(client, 0, count, items.length);
	}
	
	//refresh item width, height 
	function refreshItem(element,items, width){
		var max_height = 10;
		$(items).css('width',width);
		$(element).find('.clients-elements').css('width',width * items.length + 40);
		for(var i=0;i<items.length;i++){
			if($(items[i]).height() > max_height){
				max_height = $(items[i]).height();
			}
		}
		$(element).css('height',max_height);
	}
	
	//refresh items
	function moveClientItems(element, index, width){
		$(element).find('.clients-elements').animate({'margin-left':-index*width});
	}
	
	// change arrow
	function refreshArrowEvent(element, index,count, length){
		if(index <= 0){
			$(element).find('.client-arrow-left').hide();
		}else{
			$(element).find('.client-arrow-left').show();
		}
		if(index+count > length-1){
			$(element).find('.client-arrow-right').hide();
		}else if(index + length > count){
			$(element).find('.client-arrow-right').show();
		}
	}
	
}
	
// ---------------------------------------
//	client testimonials
// ---------------------------------------
function testimonialsInit(){
	
	checkElement(".testimonials",openFeedback);

	function openFeedback(params){
		
		var cfb_items = $(params).find(".testimonials-item");
		var cfb_id = 0;
		var cfb_max = cfb_items.length;
		var run = false;
		var intervalObj = null;
		var auto = false;
		var delay = 5000;
		
		$(cfb_items).each(function(index, element) {
			$(element).css("display","none");
		});
		
		function showPrevElement(){
			if(run)	{
				return false;
			}
			run = true;
			closeInterval();
			
			hideElement($(cfb_items[cfb_id]),prevElement);
		}
		
		function showNextElement(){
			if(run) {
				return false;
			}
			run = true;
			closeInterval();
			
			hideElement($(cfb_items[cfb_id]),nextElement);
		}
		
		function prevElement(){
			cfb_id--;
			if(cfb_id < 0)	{
				cfb_id = cfb_max-1;
			}
			showElement($(cfb_items[cfb_id]));
		}
		
		function nextElement(){
			cfb_id++;
			if(cfb_id >= cfb_max)	{
				cfb_id = 0;
			}
			showElement($(cfb_items[cfb_id]));
		}
		
		if(cfb_max <= 1){
			$(params).find(".testimonials-prev").css('display','none');
			$(params).find(".testimonials-next").css('display','none');
		}else{
			$(params).find(".testimonials-prev").click(function() {
				showPrevElement();
			});
			$(params).find(".testimonials-next").click(function() {
				showNextElement();
			});
			// auto play
			if( $(params).hasClass('testimonials-auto') ){
				auto = true;
				delay = parseInt($(params).attr('data-delay'),0);
				if(delay === 0){	delay = 5000;}
			}
		}
		
		showElement($(cfb_items[cfb_id]));
		
		function showElement(params){
			if($(params).css("display") !== "block"){
				$(params).fadeIn("fast");
			}
			run = false;
			if(auto) { startInterval(); }
		}
		
		//hide text slider elements effect
		function hideElement(params,nextElement){
			if($(params).css("display") === "block"){
				$(params).fadeOut("fast","",nextElement);
			}
		}
		
		function startInterval(){
			intervalObj = setInterval(showNextElement , delay);
		}
		
		function closeInterval(){
			if(intervalObj !== null) { clearInterval(intervalObj); }
			intervalObj = null;
		}
	}
	
}

// ---------------------------------------
//	accordion
// ---------------------------------------
function accordionInit(){
	$('.alterna-accordion .accordion-toggle').click(function() {
		if($(this).hasClass('collapsed')){
			$(this).parent().parent().prevAll().find('.accordion-toggle').addClass('collapsed');
			$(this).parent().parent().nextAll().find('.accordion-toggle').addClass('collapsed');
		}
	});
}
// ---------------------------------------
//	Scroll & Resize Window -----------
// ---------------------------------------
function scrollResizeInit(){
		$("body").append("<a id='back-top' href='#top' ></a>");
		
		$(window).resize(function() {
			if($('.header-fixed-enabled').length > 0)	{
				fixedHeader();
			}
			serviceResize();
			animationRun();
		});
		
		$(window).scroll(function() {
			if($('.header-fixed-enabled').length > 0)	{fixedHeader();}
			if($(window).scrollTop() > 200){
				$("#back-top").fadeIn("slow");
			}else{
				$("#back-top").fadeOut("slow");
			}
			if($('.alterna-pagenav').length > 0){
				refreshPageNav();
			}
			animationRun();
			skillsAnimationRun();
		});
		
		// scroll body to 0px on click
		$('#back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
		function fixedHeader(){
			//fixed header 
			if($(window).width() > 979 && $(window).scrollTop() > ($('.header-wrap').outerHeight())) {
				if($('#alterna-nav').length > 0) {
					if(!$('#alterna-nav').hasClass('header-fixed')) {
						$('#alterna-nav').addClass('header-fixed');
						if($('#wpadminbar').length > 0){
							$('#alterna-nav').stop().animate({'top':$('#wpadminbar').height()},500);
						}else{
							$('#alterna-nav').stop().css('top','-100px').animate({'top':'0px'},500);
						}
					}
				}else{
					if(!$('.header-wrap header').hasClass('header-fixed')) {
						$('.header-wrap header').addClass('header-fixed');
						if($('#wpadminbar').length > 0){
							$('.header-wrap header').stop().css('top','-100px').animate({'top':$('#wpadminbar').height()},500);
						}else{
							$('.header-wrap header').stop().css('top','-100px').animate({'top':'0px'},500);
						}
					}
				}
				
			}else{
				if($('#alterna-nav').length > 0) {
					if($('#alterna-nav').hasClass('header-fixed')) {
						$('#alterna-nav').removeClass('header-fixed');
						$('#alterna-nav').stop().css('top','0px');
					}
				}else{
					if($('.header-wrap header').hasClass('header-fixed')) {
						$('.header-wrap header').removeClass('header-fixed');
						$('.header-wrap header').stop().css('top','0px');
					}
				}
				
			}
		}
} 
// ---------------------------------------
//	Touch Hover Effect -----------
// ---------------------------------------
function touchHoverSolve(){
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		$(".portfolio-element").each(function() {
			if( $(this).find('.post-tip').length > 0 ){
				if($(this).find('.post-tip .left-link').length >0 ){
					
					var portfolio_link = $($(this).find('.post-tip .left-link').parent()).attr('href');
					if(!portfolio_link) { portfolio_link = $(this).find('.post-tip .left-link a').attr('href'); }
					
					$(this).find('.portfolio-img').wrap('<a style="float:left;" href="'+ portfolio_link +'"></a>');
				}
				$(this).find('.post-tip').remove();
			}
        });
		
		$(".post-img").each(function() {
			if( $(this).find('.post-tip').length > 0  && $(this).find('.no-bg').length === 0 ){
				if($(this).find('.post-tip .left-link').length > 0 ){
					$(this).wrap('<a style="float:left;" href="'+ $($(this).find('.post-tip .left-link').parent()).attr('href') +'"></a>');
				} else if($(this).find('.post-tip .center-link').length > 0 ){
					$(this).wrap('<a style="float:left;" href="'+ $($(this).find('.post-tip .center-link').parent()).attr('href') +'"></a>');
				}
				$(this).find('.post-tip').remove();
			}else if( $(this).find('.post-cover').length >0 ){
				$(this).find('.post-cover').remove();
				$(this).find('h5').remove();
			}
        });
		
		$('.alterna-fl').addClass('touch');
		
		$('#header-topbar-right-content .wpml').click(function() {
            if($(this).hasClass('touch')){
				$(this).removeClass('touch');
			}else{
				$(this).addClass('touch');
			}
        });
	}
}

// ---------------------------------------
//	Service Resize
// ---------------------------------------
function serviceResize(){
	$('.alterna-service.left').each(function() {
        if($(this).width() <= 220){
			$(this).removeClass('left');
			$(this).addClass('center backleft');
		}
    });
	$('.alterna-service.backleft').each(function() {
        if($(this).width() > 220){
			$(this).removeClass('backleft');
			$(this).removeClass('center');
			$(this).addClass('left');
		}
    });
}
// ---------------------------------------
//	Header Banner v4.0
// ---------------------------------------
function headerBannerInit(){
	if(navigator.cookieEnabled){
		if($('#header-banner').length > 0){
			var cookie = getCookie("alterna-header-banner");
			//show header banner
			if(cookie === null || cookie !== $('#header-banner').attr('data-id') ){
				$('#header-banner').css({marginTop:-($('#header-banner').height() + 1), display:'block'});
				$('#header-banner').animate({marginTop:0},600);
				$('#header-banner .close-btn').click(function() {
					$('#header-banner').animate({marginTop:-($('#header-banner').height() + 1)},600,'',function(){ $('#header-banner').remove(); });
					addCookie("alterna-header-banner", $('#header-banner').attr('data-id') , 24);
					return false;
				});
			}else{
				$('#header-banner').remove();
			}
		}
	}
}
// ---------------------------------------
//	Footer Banner v5.2
// ---------------------------------------
function footerBannerInit(){
	if(navigator.cookieEnabled){
		if($('#footer-banner').length > 0){
			var cookie = getCookie("alterna-footer-banner");
			//show header banner
			if(cookie === null || cookie !== $('#footer-banner').attr('data-id') ){
				$('#footer-banner').css({marginBottom:-($('#footer-banner').height() + 1), display:'block'});
				$('#footer-banner').animate({marginBottom:0},600);
				$('#footer-banner .close-btn').click(function() {
					$('#footer-banner').animate({marginBottom:-($('#footer-banner').height() + 1)},600,'',function(){ $('#footer-banner').remove(); });
					addCookie("alterna-footer-banner", $('#footer-banner').attr('data-id') , 24);
					return false;
				});
			}else{
				$('#footer-banner').remove();
			}
		}
	}
}
// ---------------------------------------
//	skills animation
// ---------------------------------------
function skillsAnimationRun(){
	$(".skills").each(function() {
		if($(this).hasClass('skill-animation-complete')){
			return;
		}
		if($(this).find('.skill-element').length == $(this).find('.skill-animation-run').length){
			$(this).addClass('skill-animation-complete');
			$(this).find('.skill-animation-run').removeClass('skill-animation-run');
			return;
		}
		
		var items = $(this).find('.skill-element');
		var count = 0;
		for(var i=0;i<items.length;i++){
			if($(items[i]).find('.skill-bg').hasClass('.skill-animation-run')){
				continue;
			}
			var pos = $(this).offset().top;
			var topOfWindow = $(window).scrollTop();
			var heightOfWindow = $(window).height();
			if (pos < topOfWindow+heightOfWindow - 60) {
				$(items[i]).find('.skill-bg').addClass('skill-animation-run').animate({width:$(items[i]).find('.skill-bg').attr('data-percent')},{duration:(400*count + 500)});
			}
			count++;
		}
	});
}
// ---------------------------------------
//	POST COMMENT CHECK
// ---------------------------------------
function postCommentCheck(){
	checkElement("#comments", postCommentFieldCheck);
	
	function postCommentFieldCheck(params){
		if($(params).find('#comment-alert-error').length > 0){
			$(params).find('#submit').click(function() {
				$(params).find('#comment-alert-error').removeClass('show');
				$(params).find('#comment-alert-error span').removeClass('show');
						
				if($(params).find('.comment-alert-error-name').length > 0){
					if($(params).find('#author').attr('value').length === 0){
						$(params).find('#comment-alert-error').addClass('show');
						$(params).find('.comment-alert-error-name').addClass('show');
						return false;
					}
				}
				if($(params).find('.comment-alert-error-email').length > 0){
					if($(params).find('#email').attr('value').length === 0){
						$(params).find('#comment-alert-error').addClass('show');
						$(params).find('.comment-alert-error-email').addClass('show');
						return false;
					}
					var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
					
					if(!reg.test($(params).find('#email').attr('value'))){
						$(params).find('#comment-alert-error').addClass('show');
						$(params).find('.comment-alert-error-email').addClass('show');
						return false;
					}
				}
				if($(params).find('.comment-alert-error-message').length > 0){
					if($(params).find('#comment').attr('value').length === 0){
						$(params).find('#comment-alert-error').addClass('show');
						$(params).find('.comment-alert-error-message').addClass('show');
						return false;
					}
				}
				return true;
            });
		}
	}
}
// ---------------------------------------
//	ajax get posts
// ---------------------------------------
function ajaxGetPostsInit(){
	// check all ajax module
	$('.ajax-main-area').each(function() {
		
		if($(this).children('.ajax-isotope').length === 0){
			return;
		}
		
		var layout_mode = "masonry";
		var iso = $(this).children('.ajax-isotope');
		
		if($(this).children('.portfolio-ajax-type').length > 0){
			var layoutMode = iso.attr('data-layoutmode');
			if(!layoutMode || layoutMode === ""){
				layout_mode = 'fitRows';
			}else{
				layout_mode = layoutMode;
			}
		}
		
		iso.isotope({
			itemSelector: '.post-ajax-element',
			layoutMode : layout_mode ,
			transitionDuration : '0.8s',
		});

		iso.find('img').load(function() {
			iso.isotope('layout');
		});
		 
		// have no more posts
		if($(this).find('.ajax-load-content').length === 0){
			return false;
		}

		var ajax_main = $(this);
		var ajax_load_content = $(ajax_main).find('.ajax-load-content');
		var ajax_paged = parseInt(ajax_load_content.attr('data-page'),0);
		var ajax_max_paged = parseInt(ajax_load_content.attr('data-max'),0);
		var ajax_next_link = ajax_load_content.attr('data-link');
		var ajax_loading	= false;
		
		// auto load posts
		if($(ajax_main).find('.post-ajax-load-btn').length === 0){
			$(window).scroll(function() {
				if(ajax_loading || ajax_paged > ajax_max_paged) {return false;}
				var imagePos = $(ajax_main).find('.ajax-load-btn-container').offset().top;
				var topOfWindow = $(window).scrollTop();
				var heightOfWindow = $(window).height();
				if (imagePos < topOfWindow+heightOfWindow - 50) {
					loadPostsContent();
				}
			});
		}
		
		// load post content
		function loadPostsContent(){
			ajax_loading = true;
			
			$(ajax_main).find('.post-ajax-load-btn').hide();
			$(ajax_main).find('.post-ajax-scroll-load').hide();
			$(ajax_main).find('.post-ajax-loading').show();
			
			ajax_load_content.load(ajax_next_link + ' .post-ajax-element' , function(responseText, textStatus, XMLHttpRequest){
				
				if ( textStatus == "error" ) {
					$(ajax_main).find('.post-ajax-loading').hide();
					$(ajax_main).find('.post-ajax-load-btn').show();
					$(ajax_main).find('.post-ajax-scroll-load').show();

					ajax_loading = false;
					return false;
				}
				
				var new_elements = $($(ajax_load_content).html());
				
				ajax_load_content.html('');
				
				new_elements.find('.alterna-fl').flexslider({slideshow:false,
					start: function(){
						iso.isotope( 'layout' );
					}
				});

				new_elements.find('img').load(function() { iso.isotope('layout');	});
				
				iso.append(new_elements).isotope( 'appended',new_elements);
				
				ajax_paged++;
				
				if(ajax_paged <= ajax_max_paged) {
					ajax_next_link = ajax_next_link.replace(/\/page\/[0-9]*/, '/page/'+ ajax_paged);
					ajax_next_link = ajax_next_link.replace(/paged=[0-9]*/, 'paged='+ ajax_paged);
					$(ajax_main).find('.post-ajax-loading').hide();
					$(ajax_main).find('.post-ajax-load-btn').show();
					$(ajax_main).find('.post-ajax-scroll-load').show();
					ajax_loading = false;
				}else{
					$(ajax_main).find('.ajax-load-btn-container').remove();
				}
			
			});
		}
		
		// button click load posts
		$(ajax_main).find('.post-ajax-load-btn').click(function() {
			if(ajax_loading || ajax_paged > ajax_max_paged) {return false;}
			loadPostsContent();
		});
	});
}

// ---------------------------------------
//	COMMON -----------  check element and ex fun
// ---------------------------------------
function checkElement(params,fun){
	var list = $(params);

	if(list.length <= 0) {return false;}
	
	for (var w=0; w<list.length; w++)	{
		fun(list[w]);
	}
}

// ---------------------------------------
//	Cookie ----------- save ,delete ,get cookie
// ---------------------------------------
function addCookie(name,value,hours){
	var str = name + "=" + value; 
	if(hours > 0){
		var date = new Date();
		var ms = hours*3600*1000;
		date.setTime(date.getTime() + ms);
		str += "; expires=" + date.toGMTString();
	}
	document.cookie = str;
}
function getCookie(name){
	var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
	if(arr !== null) {
		return arr[2]; 
	}
	return null;
}


/* ----------------------------------------------------
	Execute
---------------------------------------------------- */

	menuInit();
	titleLineInit();
	alternaAlertTitleInit();
	postCommentPlaceholderInit();
	tabsInit();
	clientsInit();
	testimonialsInit();
	accordionInit();
	scrollResizeInit();
	touchHoverSolve();
	serviceResize();
	headerBannerInit();
	footerBannerInit();
	postCommentCheck();
	ajaxGetPostsInit();
	animationRun();
	onepageNavInit();
	skillsAnimationRun();
	
	// flexslide
	$('.alterna-fl').each(function() {
        if($(this).attr('data-delay')){
			$(this).flexslider({slideshow: true , slideshowSpeed:$(this).attr('data-delay') });
		}else{
			$(this).flexslider({slideshow: false });
		}
    });
	
	//carousel auto play v2.5
	$('.carousel-autoplay').each(function() {
        $(this).carousel({interval: $(this).attr('data-delay')});
    });
	
	//woocommerce
	$('.widget_product_search #searchsubmit').attr('value','');
	
	//fancybox
	if($.fn.fancybox !== null)	{
		$("a[class^='fancyBox']").fancybox();
		$("a[class^='fancybox-thumb']").fancybox({helpers: {title: {type: 'outside'},thumbs: {width: 50,height	: 50}}});
	}
	
	// isotope filters
	$('.portfolio-main-area').each(function() {
		var portfolio = $(this);
		if($(this).find('.portfolio-isotope').length > 0){
			$(portfolio).find('.portfolio-filters-cate a').click(function() {
				if($(this).hasClass('active'))	{return false;}
				$(this).addClass('active');
				$(this).parent().prevAll().find('a').removeClass('active');
				$(this).parent().nextAll().find('a').removeClass('active');
				var filters = $(this).attr('data-filters');
				$(portfolio).find('.portfolio-isotope').isotope({ filter: filters });
			});
		}else if($(this).find('.ajax-isotope').length > 0){
			$(portfolio).find('.portfolio-filters-cate a').click(function() {
				if($(this).hasClass('active'))	{return false;}
				$(this).addClass('active');
				$(this).parent().prevAll().find('a').removeClass('active');
				$(this).parent().nextAll().find('a').removeClass('active');
				var filters = $(this).attr('data-filters');
				$(portfolio).find('.ajax-isotope').isotope({ filter: filters });
			});
		}
	});

	$('.portfolio-isotope').each(function() {
		var layoutMode = $(this).attr('data-layoutmode');
		if(!layoutMode || layoutMode === ""){
			layoutMode = 'fitRows';
		}
        $(this).isotope({
			itemSelector: '.portfolio-element',
			layoutMode : layoutMode,
			transitionDuration : '0.8s'
		});
    });
	
	$('.portfolio-isotope').find('img').load(function() {
        refreshIsotope();
    });
	
	//service link
	$('.alterna-service-link').click(function() {
        if($(this).attr('data-link') && $(this).attr('data-link') != ''){
			window.location = $(this).attr('data-link');
		}
		
		return false;
    });
	
});

jQuery(window).on("load", function() {
	refreshIsotope();
});

function refreshIsotope(){
	jQuery('.portfolio-isotope').isotope( 'layout' );
	jQuery('.ajax-isotope').isotope( 'layout' );
}