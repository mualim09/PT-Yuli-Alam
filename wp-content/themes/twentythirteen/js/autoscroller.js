$(function() {
	$('.japanese').hide();
	$('.japanesetitle').hide();
	$('.switchalert').hide();
	$('.extrafooter').fadeOut('fast');
	setScroll();
	$('a').click(function(){
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top	- 40
		}, {
			duration: 500
		});
		document.getElementById('burger').click();
		return false;
	});
	
	$('.nav a').on('click', function(){
	    $('.btn-navbar').click(); //bootstrap 2.x
	    $('.navbar-toggle').click() //bootstrap 3.x by Richard
	});
	
	function hideAlert(){
		$('.switchalert').fadeOut('slow');
	}
	
	$('#switchjap2').click(function(){
		$('.english').hide();
		$('.englishtitle').hide();
		$('.japanese').show();
		$('.japanesetitle').show();
		$('.switchalert').html('<h3 style="text-align: center; ">Site language is changed to: Japanese</h3>');
		$('.switchalert').fadeIn('slow');
		document.getElementById('burger').click();
		setTimeout(hideAlert, 3000);
	});
	
	$('#switcheng2').click(function(){
		$('.english').show();
		$('.englishtitle').show();
		$('.japanese').hide();
		$('.japanesetitle').hide();
		$('.switchalert').html('<h3 style="text-align: center; ">Site language is changed to: English</h3>');
		$('.switchalert').fadeIn('slow');
		document.getElementById('burger').click();
		setTimeout(hideAlert, 3000);
	});
	
	$('#switchjap').click(function(){
		$('.english').hide();
		$('.englishtitle').hide();
		$('.japanese').show();
		$('.japanesetitle').show();
		$('.switchalert').html('<h3 style="text-align: center; ">Site language is changed to: Japanese</h3>');
		$('.switchalert').fadeIn('slow');
		document.getElementById('burger').click();
		setTimeout(hideAlert, 3000);
	});
	
	$('#switcheng').click(function(){
		$('.english').show();
		$('.englishtitle').show();
		$('.japanese').hide();
		$('.japanesetitle').hide();
		$('.switchalert').html('<h3 style="text-align: center; ">Site language is changed to: English</h3>');
		$('.switchalert').fadeIn('slow');
		document.getElementById('burger').click();
		setTimeout(hideAlert, 3000);
	});
	
	$('.footerbtn').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, {
			duration: 500
		});
		return false;
	});
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 0){
			$('.extrafooter').fadeIn('slow');
		}
		else{
			$('.extrafooter').fadeOut('slow');
		}
	});
});

function setScroll(){
	var scroller = $('.scroll');
	var content = scroller.children('ul');
	content.children().clone().appendTo(content);
	var curX = 0;
	content.children().each(function() {
		var $this = $(this);
		$this.css('left', curX);
		curX += $this.outerWidth(true);
	});
	var fullW = curX / 2;
	var viewportW = scroller.width();
	var fullW = curX / 2;
	var viewportW = scroller.width();

	// Scrolling speed management
	var controller = {
		curSpeed : 0,
		fullSpeed : 2
	};
	var $controller = $(controller);
	var tweenToNewSpeed = function(newSpeed, duration) {
		if (duration === undefined)
			duration = 600;
		$controller.stop(true).animate({
			curSpeed : newSpeed
		}, duration);
	};

	// Pause on hover
	scroller.hover(function() {
		tweenToNewSpeed(0);
	}, function() {
		tweenToNewSpeed(controller.fullSpeed);
	});

	// Scrolling management; start the automatical scrolling
	var doScroll = function() {
		var curX = scroller.scrollLeft();
		var newX = curX + controller.curSpeed;
		if (newX > fullW * 2 - viewportW)
			newX -= fullW;
		scroller.scrollLeft(newX);
	};
	setInterval(doScroll, 20);
	tweenToNewSpeed(controller.fullSpeed);
}