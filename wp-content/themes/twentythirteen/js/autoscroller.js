$(function() {
	setScroll();
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