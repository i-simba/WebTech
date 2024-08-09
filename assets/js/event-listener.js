// JavaScript Document

var elFirstname = document.getElementById('firstname');
var elLastname = document.getElementById('lastname');
var elEmail = document.getElementById('email');
var elPhone = document.getElementById('phonenumber');
var elComment = document.getElementById('comment');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');

function checkName(minLength, div, feedback) {
	var alphaRegex = /^[A-Za-z'-]+$/;
	var alMsg = document.getElementById(feedback);
	var al = document.getElementById(div);
	var ap = al.parentNode;
	
	// Input Validation
	if (al.value.length < minLength || !(alphaRegex.test(al.value))) {
		if (al.value.length == 0) {
			alMsg.innerHTML = div + ' cannot be empty';
		} else if (al.value.length < minLength) {
			alMsg.innerHTML = div + ' must be ' + minLength + ' characters or more';
		} else {
			alMsg.innerHTML = div + ' can only contain letters, -, and \'';
		}
		ap.classList.remove('has-success');
		ap.classList.add('has-error');
	} else {
		alMsg.innerHTML = '&emsp;';
		ap.classList.remove('has-error');
		ap.classList.add('has-success');
	}
}

function checkEmail(div, feedback) {
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var mlMsg = document.getElementById(feedback);
	var ml = document.getElementById(div);
	var mp = ml.parentNode;
	
	// Input Validation
	if (ml.value.length == 0 || !(validRegex.test(ml.value))) {
		if (ml.value.length == 0) {
			mlMsg.innerHTML = div + ' cannot be empty';
		} else {
			mlMsg.innerHTML = 'Please enter a valid ' + div;
		}
		mp.classList.remove('has-success');
		mp.classList.add('has-error');
	} else {
		mlMsg.innerHTML = '&emsp;';
		mp.classList.remove('has-error');
		mp.classList.add('has-success');
	}
}

function checkPhone(max, div, feedback) {
	var numRegex = /^[0-9]*$/;
	var plMsg = document.getElementById(feedback);
	var pl = document.getElementById(div);
	var pp = pl.parentNode;
	
	// Input Validation
	if (pl.value.length < max || !(numRegex.test(pl.value)) || pl.value.length > max) {
		if (pl.value.length == 0) {
			plMsg.innerHTML = div + ' cannot be empty';
		} else if (pl.value.length > max) {
			plMsg.innerHTML = div + ' cannot be more than ' + max + ' digits';
			if (!(numRegex.test(pl.value))) {
				plMsg.innerHTML += ' and cannot contain letters or symbols'
			}
		} else if (!(numRegex.test(pl.value))) {
			plMsg.innerHTML = div + ' can only contain numbers'
		} else {
			plMsg.innerHTML = 'Please enter a valid ' + div + ' (exactly 10 digits)';
		}
		pp.classList.remove('has-success');
		pp.classList.add('has-error');
	} else {
		plMsg.innerHTML = '&emsp;';
		pp.classList.remove('has-error');
		pp.classList.add('has-success');
	}
}

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

function checkComment(div, feedback) {
	var clMsg = document.getElementById(feedback);
	var cl = document.getElementById(div);
	var cp = cl.parentNode;
	
	// Input Validation
	if (cl.value.length == 0) {
		clMsg.innerHTML = div + ' cannot be empty';
		cp.classList.remove('has-success');
		cp.classList.add('has-error');
	} else {
		clMsg.innerHTML = '&emsp;';
		cp.classList.remove('has-error');
		cp.classList.add('has-success');
	}
}

elFirstname.addEventListener('blur', function() {
	checkName(2, 'firstname', 'fnFeedback');
}, false);

elLastname.addEventListener('blur', function() {
	checkName(2, 'lastname', 'lnFeedback');
}, false);

elEmail.addEventListener('blur', function() {
	checkEmail('email', 'emFeedback');
}, false);

elPhone.addEventListener('blur', function() {
	checkPhone(10, 'phonenumber', 'pnFeedback');
}, false);

elUsername.addEventListener('blur', function() {
	checkLogin(6, 'username', 'unFeedback');
}, false);

elPassword.addEventListener('blur', function() {
	checkLogin(6, 'password', 'pwFeedback');
}, false);

elComment.addEventListener('blur', function() {
	checkComment('comment', 'cmFeedback');
}, false);