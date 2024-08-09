// JavaScript Document

var today = new Date();
var hourNow = today.getHours();
var greeting;

// HW8 requirements
var grtDiv = document.getElementById("greeting");

// HW8 extra
var grtP = document.getElementById("greeting2");

if (hourNow > 18) {
	greeting = 'Good evening!';
} else if (hourNow > 12) {
	greeting = 'Good afternoon!';
} else if (hourNow > 0) {
	greeting = 'Good morning!';
} else {
	greeting = 'Welcome to my Website!';
}

// HW8 requirements
grtDiv.innerHTML = '<h1>' + greeting + '</h1>';

// HW8 extra
grtP.innerHTML += '<i>' + greeting + '</i>';