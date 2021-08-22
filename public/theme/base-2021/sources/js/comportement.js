// JavaScript Document
var header = document.querySelector("nav");

function scrolled(){
	var windowHeight = document.body.clientHeight,
		currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
	nav.className = (currentScroll >= windowHeight - nav.offsetHeight) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);