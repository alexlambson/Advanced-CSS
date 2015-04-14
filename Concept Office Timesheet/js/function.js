// JavaScript Document
function toggleDiv(divID){
	$("#" + divID).slideToggle('slow');
};
function clearNavBar(){
	var navHeight = $(".navbar").css("height");
	$("#clearNavBar").css("margin-top", navHeight);	
};
function toggleEmployeeInfo(elt /*This must be a row */){
	var divToExpand = elt;
	var expanded = divToExpand.attr("expanded");
	var timer = divToExpand.find(".timer");
	var expandArrow = elt.find(".expandArrow img");
	expandArrow.toggleClass("expandArrowLeft");
	
	if(expanded == "true"){
		timer.addClass("timerHide");
		divToExpand.css("height", "50px");
		divToExpand.attr("expanded", "false");
	} else {
		divToExpand.css("height", "200px");
		divToExpand.attr("expanded", "true");
		timer.removeClass("timerHide");
	}
}
function isXs(){
	return $(".mobile-nav").is(":visible");	
}
function randomTimeForClock(){
	var totalHours = 12;
	var degrees = 360;
	var degreesPerHour = degrees / totalHours;
	var randomTime = Math.floor(Math.random() * totalHours) + 1;
	return randomTime * degreesPerHour;
}
function randomHour(){
	hour =  Math.floor(Math.random() * 12) + 1;
	if(hour < 10){
		hour = "0" + hour;	
	}
	return hour;
}
function randomMinute(){
	m = Math.floor(Math.random() * 59) + 1;
	if(m < 10){
		hour = "0" + m;	
	}
	return m;
}
jQuery.fn.rotate = function(degrees) {
    $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
    return $(this);
};
jQuery.fn.rotateCText = function(degrees) {
    $(this).css({'-webkit-transform' : 'translate(-50%, -50%) rotate('+ degrees +'deg)',
                 '-moz-transform' : 'translate(-50%, -50%) rotate('+ degrees +'deg)',
                 '-ms-transform' : 'translate(-50%, -50%) rotate('+ degrees +'deg)',
                 'transform' : 'translate(-50%, -50%) rotate('+ degrees +'deg)'});
    return $(this);
};
$(document).ready(function(e) {
	//Moved to be handled by CSS
    //clearNavBar();
	
	$(".availabilitySliderCircle").click(function(){
		if(!isXs()){
			var returningDiv = $($(this).parents().get(1)).next().find("span");
			returningDiv.toggle("fast", "linear");
		}
		$(this).toggleClass("notAvailable");
	});
	$(".availabilityName").click(function(){
		var parentEmployeeRow = $($(this).parents().get(1));
		//must pass in a row!
		toggleEmployeeInfo(parentEmployeeRow);
	});
	$(".expandArrow img").click(function(){
		var parentEmployeeRow = $($(this).parents().get(1));
		toggleEmployeeInfo(parentEmployeeRow);
	});
	$('.dropdown-toggle').dropdown()
	
	//randomize for display
	$(".timer").each(function(index, element) {
        randomTime = randomTimeForClock();
		tText = $(this).find(".timerText");
		$(this).rotate(randomTime);
		tText.rotateCText(-randomTime);
		spans = tText.children("span");
		hour = $(spans.get(0));
		minute = $(spans.get(1));
		hour.html(randomHour() + "H");
		minute.html(randomMinute() + "M");
    });
	
});