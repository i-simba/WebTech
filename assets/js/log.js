// JavaScript Document

var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');

function checkLogin(minLength, div, feedback) {
	var elMsg = document.getElementById(feedback);
	var el = document.getElementById(div);
	var ep = el.parentNode;
	
	// Input Validation
	if (el.value.length < minLength) {
		if (el.value.length == 0) {
			elMsg.innerHTML = div + ' cannot be empty';
		} else {
			elMsg.innerHTML = div + ' must be ' + minLength + ' characters or more';
		}
		ep.classList.remove('has-success');
		ep.classList.add('has-error');
	} else {
		elMsg.innerHTML = '&emsp;';
		ep.classList.remove('has-error');
		ep.classList.add('has-success');
	}
}

elUsername.addEventListener('blur', function() {
	checkLogin(6, 'username', 'unFeedback');
}, false);

elPassword.addEventListener('blur', function() {
	checkLogin(6, 'password', 'pwFeedback');
}, false);