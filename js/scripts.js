var _requestAnimationFrame = window.requestAnimationFrame       ||
                             window.webkitRequestAnimationFrame ||
                             window.mozRequestAnimationFrame    ||
                             polyfill;

// Get the modal
var overlay = document.querySelector('.overlay');
var content = document.querySelector('.content');
var links = document.querySelectorAll('.modalNav a');
var modalNav = document.querySelector('.modalNav');
var fixNav = document.querySelector('.fixedNav');

// Get the button that opens the modal
var menuButton = document.querySelector(".menuButton");
var menuButton2 = document.querySelector(".menuButton2");

// Get the <span> element that closes the modal
var exit = document.querySelector(".exit");


//add/remove nav on scroll
function fixedNav () {
	if (document.body.scrollTop < 200) {
		fixNav.classList.add('hidingNav'); 
	} 
	else if (fixNav.classList.contains('hidingNav')) {
		fixNav.classList.remove('hidingNav');
	}
}

function fadeIn (){
	document.body.style.overflow = "none";
	overlay.style.overflow = "scroll";
	
	overlay.style.opacity = "1";
	modalNav.style.margin = "3em";

	overlay.classList.remove('noClick');
}

function fadeOut (){
	overlay.style.overflow = "hidden";
	document.body.style.overflow = "auto";

	overlay.style.opacity = "0";
	modalNav.style.margin = "5em";

	overlay.classList.add('noClick');
}

//on scroll run fixedNav function with throttle
document.addEventListener('scroll', function () {
	_requestAnimationFrame(function () {
		fixedNav();
	});
});

// When the user clicks on the button, open the modal 
menuButton.onclick = function() {
	fadeIn();
}

menuButton2.onclick = function() {
	fadeIn();
}

// When the user clicks on (x), close the modal
exit.onclick = function() {
	fadeOut();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == overlay) {
    	fadeOut();
	}
}

//just give overlay pointer-clicks on and off
//then put everything inside a wrapper which gets the fade in and out logic


