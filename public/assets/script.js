let resizeTimer;
window.addEventListener("resize", () => {
	document.body.classList.add("resize-animation-stopper");
	clearTimeout(resizeTimer);
	resizeTimer = setTimeout(() => {
		document.body.classList.remove("resize-animation-stopper");
	}, 400);
});

function display_c() {
	var refresh = 1000;
	time = setTimeout('display_ct()', refresh);
}

function pad_with_zeroes(number, length) {
    var my_string = '' + number;
    while (my_string.length < length) {
        my_string = '0' + my_string;
    }
    return my_string;
}

function display_ct() {
	var x = new Date()
	document.getElementById('datetime1').innerHTML = pad_with_zeroes(x.getHours(), 2) + ":" +  pad_with_zeroes(x.getMinutes(), 2) + ":" +  pad_with_zeroes(x.getSeconds(), 2);
	display_c();
}

function dropdown1() {
	const div = document.getElementById("dropdowncontent1");
	div.style.minWidth = document.getElementById("dropdownbutton1").offsetWidth + "px";
	div.style.top = document.getElementById("dropdownbutton1").getBoundingClientRect().bottom + "px";
	div.style.left = document.getElementById("dropdownbutton1").getBoundingClientRect().left + "px";
	div.classList.toggle("show");
}

function dropdown2() {
	const div = document.getElementById("dropdowncontent2");
	div.style.minWidth = document.getElementById("dropdownbutton2").offsetWidth + "px";
	div.style.top = document.getElementById("dropdownbutton2").getBoundingClientRect().bottom + "px";
	div.style.left = document.getElementById("dropdownbutton2").getBoundingClientRect().left + "px";
	div.classList.toggle("show");
}

window.onclick = function(event) {
	if (!event.target.matches("#dropdownbutton1")) {
		const div = document.getElementById("dropdowncontent1");
		if (div.classList.contains('show')) {
			div.classList.remove('show');
		}
	}

	if (!event.target.matches("#dropdownbutton2")) {
		const div = document.getElementById("dropdowncontent2");
		if (div.classList.contains('show')) {
			div.classList.remove('show');
		}
	}
}

function expandLogin() {
	const div = {
		loginDivision: document.getElementById("loginDivision"),
		signupDivision: document.getElementById("signupDivision"),
		loginBox: document.getElementById("loginBox"),
		signupBox: document.getElementById("signupBox"),
		loginHeader: document.getElementById("loginHeader"),
		signupHeader: document.getElementById("signupHeader"),
		loginButton: document.getElementById("loginButton"),
		signupButton: document.getElementById("signupButton"),
		loginTable: document.getElementById("loginTable"),
		loginBack: document.getElementById("loginBack")
	};

	div.loginDivision.animate([
		{width: "52.5vw"},
		{width: "105vw"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginBack.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginBox.animate([
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2)"},
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2 + 25vw)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginHeader.animate([
		{marginTop: "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)"},
		{marginTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginButton.animate([
		{marginTop: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)"},
		{marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginTable.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	Object.assign(div.loginDivision.style, {
		zIndex: 10,
		backgroundColor: "#090909",
		width: "105vw"
	});
	Object.assign(div.loginBack.style, {
		opacity: "100%",
		display: "inline-block"
	});
	div.signupDivision.style.zIndex = 9;
	div.loginBack.onclick = function() {expandLoginReverse();};
	div.loginButton.onclick = null;
	div.signupButton.onclick = null;

	setTimeout(function() {
		div.loginButton.setAttribute('form', 'loginForm');
		div.loginButton.setAttribute('type', 'submit');
	}, 2000);

	Object.assign(div.loginTable.style, {
		display: "block",
		opacity: "100%"
	});
	div.loginBox.style.marginLeft = "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2 + 25vw)";
	div.loginHeader.style.marginTop = "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)";
	div.loginButton.style.marginTop = "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)";
}

function expandLoginReverse() {
	const div = {
		loginDivision: document.getElementById("loginDivision"),
		signupDivision: document.getElementById("signupDivision"),
		loginBox: document.getElementById("loginBox"),
		signupBox: document.getElementById("signupBox"),
		loginHeader: document.getElementById("loginHeader"),
		signupHeader: document.getElementById("signupHeader"),
		loginButton: document.getElementById("loginButton"),
		signupButton: document.getElementById("signupButton"),
		loginTable: document.getElementById("loginTable"),
		loginBack: document.getElementById("loginBack")
	};

	div.loginDivision.animate([
		{width: "105vw"},
		{width: "52.5vw"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginBack.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginBox.animate([
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2 + 25vw)"},
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginHeader.animate([
		{marginTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"},
		{marginTop: "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginButton.animate([
		{marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)"},
		{marginTop: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.loginTable.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	Object.assign(div.loginDivision.style, {
		backgroundColor: "",
		width: "52.5vw"
	});

	div.loginBack.onclick = null;
	div.loginButton.onclick = function() {expandLogin();};
	div.signupButton.onclick = function() {expandSignup();};
	div.loginButton.removeAttribute('form');
	div.loginButton.removeAttribute('type');

	setTimeout(function() {
		Object.assign(div.loginBack.style, {
			opacity: "0%",
			display: "none"
		});
	}, 2000);
	div.loginBox.style.marginLeft = "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)) / 2)";
	div.loginHeader.style.marginTop = "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)";
	div.loginButton.style.marginTop = "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)";
	setTimeout(function() {
		Object.assign(div.loginTable.style, {
			opacity: "0%",
			display: "none"
		});
	}, 2000);
}

function expandSignup() {
	const div = {
		loginDivision: document.getElementById("loginDivision"),
		signupDivision: document.getElementById("signupDivision"),
		loginBox: document.getElementById("loginBox"),
		signupBox: document.getElementById("signupBox"),
		loginHeader: document.getElementById("loginHeader"),
		signupHeader: document.getElementById("signupHeader"),
		loginButton: document.getElementById("loginButton"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupDivision.animate([
		{width: "52.5vw"},
		{width: "105vw"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupBack.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupBox.animate([
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2)"},
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2 + 25vw)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupHeader.animate([
		{marginTop: "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)"},
		{marginTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupButton.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupComSelect.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupProSelect.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	div.loginDivision.style.zIndex = 9;
	Object.assign(div.signupDivision.style, {
		backgroundColor: "#090909",
		zIndex: 10,
		width: "105vw"
	});
	Object.assign(div.signupBack.style, {
		opacity: "100%",
		display: "inline-block"
	});

	div.loginButton.onclick = null;
	div.signupButton.onclick = null;
	div.signupBack.onclick = function() {expandSignupReverse();};
	div.signupComSelect.onclick = function() {expandSignupCom();};
	div.signupProSelect.onclick = function() {expandSignupPro();};

	Object.assign(div.signupButton.style, {
		zIndex: 10,
		opacity: "0%"
	});
	Object.assign(div.signupComSelect.style, {
		zIndex: 11,
		opacity: "100%",
		display: "inline-block"
	});
	Object.assign(div.signupProSelect.style, {
		zIndex: 11,
		opacity: "100%",
		display: "inline-block"
	});
	div.signupBox.style.marginLeft = "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2 + 25vw)";
	div.signupHeader.style.marginTop = "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)";
	setTimeout(function() {
		Object.assign(div.signupButton.style, {
			marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
			display: "none"
		});
	}, 1000);
}

function expandSignupReverse() {
	const div = {
		loginDivision: document.getElementById("loginDivision"),
		signupDivision: document.getElementById("signupDivision"),
		loginBox: document.getElementById("loginBox"),
		signupBox: document.getElementById("signupBox"),
		loginHeader: document.getElementById("loginHeader"),
		signupHeader: document.getElementById("signupHeader"),
		loginButton: document.getElementById("loginButton"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupDivision.animate([
		{width: "105vw"},
		{width: "52.5vw"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupBack.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupBox.animate([
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2 + 25vw)"},
		{marginLeft: "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupHeader.animate([
		{marginTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"},
		{marginTop: "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupButton.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupComSelect.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupProSelect.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	Object.assign(div.signupDivision.style, {
		backgroundColor: "",
		width: "52.5vw"
	});
	setTimeout(function() {
		Object.assign(div.signupBack.style, {
			opacity: "0%",
			display: "none"
		});
	}, 2000);

	div.signupBack.onclick = null;
	div.loginButton.onclick = function() {expandLogin();};
	div.signupButton.onclick = function() {expandSignup();};

	Object.assign(div.signupButton.style, {
		display: "inline-block",
		marginTop: "",
		opacity: "100%"
	});
	div.signupBox.style.marginLeft = "calc((50vw - min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4) + 5vw) / 2)";
	div.signupHeader.style.marginTop = "min(10vw, 0.9 * (100vh - 5.5vw) * 3 / 16)";
	setTimeout(function() {
		Object.assign(div.signupComSelect.style, {
			opacity: "0%",
			display: "none"
		});
		Object.assign(div.signupProSelect.style, {
			opacity: "0%",
			display: "none"
		});
	}, 1000);
}

function expandSignupCom() {
	const div = {
		signupDivision: document.getElementById("signupDivision"),
		signupBox: document.getElementById("signupBox"),
		signupHeader: document.getElementById("signupHeader"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupComTable: document.getElementById("signupComTable"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupComSelect.animate([
		{
			marginTop: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
			marginRight: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
			height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
			paddingTop: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)",
			paddingBottom: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)"
		},
		{
			marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
			marginRight: "0",
			height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
			paddingTop: "0",
			paddingBottom: "0"
		}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupProSelect.animate([
		{opacity: div.signupProSelect.style.opacity},
		{opacity: "0%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupComTable.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	div.signupComSelect.onclick = null;
	div.signupProSelect.onclick = null;
	div.signupBack.onclick = function() {expandSignupComReverse();};

	setTimeout(function() {
		div.signupComSelect.setAttribute('form', 'signupComForm');
		div.signupComSelect.setAttribute('type', 'submit');
	}, 2000);

	Object.assign(div.signupComSelect.style, {
		marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
		marginRight: "0",
		height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
		paddingTop: "0",
		paddingBottom: "0"
	});
	Object.assign(div.signupComTable.style, {
		display: "block",
		opacity: "100%"
	});
	setTimeout(function() {
		Object.assign(div.signupProSelect.style, {
			display: "none",
			opacity: "0%"
		});
	}, 1000);
}

function expandSignupComReverse() {
	const div = {
		signupDivision: document.getElementById("signupDivision"),
		signupBox: document.getElementById("signupBox"),
		signupHeader: document.getElementById("signupHeader"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupComTable: document.getElementById("signupComTable"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupComSelect.animate([
		{
			marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
			marginRight: "0",
			height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
			paddingTop: "0",
			paddingBottom: "0"
		},
		{
			marginTop: "min(15vw, 0.45 * (100vh - 5.5vw) * 9 / 16)",
			marginRight: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
			height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
			paddingTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)",
			paddingBottom: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"
		}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupProSelect.animate([
		{opacity: div.signupProSelect.style.opacity},
		{opacity: "100%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupComTable.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 1000,
		easing: "ease"
	});

	div.signupComSelect.onclick = function() {expandSignupCom();};
	div.signupProSelect.onclick = function() {expandSignupPro();};
	div.signupBack.onclick = function() {expandSignupReverse();};

	div.signupComSelect.removeAttribute('form');
	div.signupComSelect.removeAttribute('type');

	Object.assign(div.signupComSelect.style, {
		marginTop: "min(15vw, 0.45 * (100vh - 5.5vw) * 9 / 16)",
		marginRight: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
		height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
		paddingTop: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)",
		paddingBottom: "min(5vw, 0.45 * (100vh - 5.5vw) * 3 / 16)"
	});
	Object.assign(div.signupProSelect.style, {
		display: "block",
		opacity: "100%"
	});
	setTimeout(function() {
		Object.assign(div.signupComTable.style, {
			display: "none",
			opacity: "0%"
		});
	}, 1000);
}

function expandSignupPro() {
	const div = {
		signupDivision: document.getElementById("signupDivision"),
		signupBox: document.getElementById("signupBox"),
		signupHeader: document.getElementById("signupHeader"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupProTable: document.getElementById("signupProTable"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupProSelect.animate([
		{
			marginTop: "min(15vw, 0.45 * (100vh - 5.5vw) * 9 / 16)",
			marginLeft: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
			height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
			paddingTop: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)",
			paddingBottom: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)"
		},
		{
			marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
			marginLeft: "0",
			height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
			paddingTop: "0",
			paddingBottom: "0"
		}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupComSelect.animate([
		{opacity: div.signupComSelect.style.opacity},
		{opacity: "0%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupProTable.animate([
		{opacity: "0%"},
		{opacity: "100%"}
	], {
		duration: 2000,
		easing: "ease"
	});

	div.signupComSelect.onclick = null;
	div.signupProSelect.onclick = null;
	// div.signupProSelect.onclick = function() {window.location.href = "./signupPro.php";};
	div.signupBack.onclick = function() {expandSignupProReverse();};

	setTimeout(function() {
		div.signupProSelect.setAttribute('form', 'signupProForm');
		div.signupProSelect.setAttribute('type', 'submit');
	}, 2000);

	Object.assign(div.signupProSelect.style, {
		marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
		marginLeft: "0",
		height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
		paddingTop: "0",
		paddingBottom: "0"
	});
	Object.assign(div.signupProTable.style, {
		display: "block",
		opacity: "100%"
	});
	setTimeout(function() {
		Object.assign(div.signupComSelect.style, {
			display: "none",
			opacity: "0%"
		});
	}, 1000);
}

function expandSignupProReverse() {
	const div = {
		signupDivision: document.getElementById("signupDivision"),
		signupBox: document.getElementById("signupBox"),
		signupHeader: document.getElementById("signupHeader"),
		signupButton: document.getElementById("signupButton"),
		signupComSelect: document.getElementById("signupComSelect"),
		signupProSelect: document.getElementById("signupProSelect"),
		signupProTable: document.getElementById("signupProTable"),
		signupBack: document.getElementById("signupBack")
	};

	div.signupProSelect.animate([
		{
			marginTop: "min(40vw, 0.9 * (100vh - 5.5vw) * 3 / 4)",
			marginLeft: "0",
			height: "min(5vw, 0.9 * (100vh - 5.5vw) * 3 / 32)",
			paddingTop: "0",
			paddingBottom: "0"
		},
		{
			marginTop: "min(15vw, 0.45 * (100vh - 5.5vw) * 9 / 16)",
			marginLeft: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
			height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
			paddingTop: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)",
			paddingBottom: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)"
		}
	], {
		duration: 2000,
		easing: "ease"
	});
	div.signupComSelect.animate([
		{opacity: div.signupComSelect.style.opacity},
		{opacity: "100%"}
	], {
		duration: 1000,
		easing: "ease"
	});
	div.signupProTable.animate([
		{opacity: "100%"},
		{opacity: "0%"}
	], {
		duration: 1000,
		easing: "ease"
	});

	div.signupComSelect.onclick = function() {expandSignupCom();};
	div.signupProSelect.onclick = function() {expandSignupPro();};
	div.signupBack.onclick = function() {expandSignupReverse();};

	div.signupProSelect.removeAttribute('form');
	div.signupProSelect.removeAttribute('type');

	Object.assign(div.signupProSelect.style, {
		marginTop: "min(15vw, 0.45 * (100vh - 5.5vw) * 9 / 16)",
		marginLeft: "min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8)",
		height: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15)",
		paddingTop: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)",
		paddingBottom: "calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 5)"
	});
	Object.assign(div.signupComSelect.style, {
		display: "block",
		opacity: "100%"
	});
	setTimeout(function() {
		Object.assign(div.signupProTable.style, {
			display: "none",
			opacity: "0%"
		});
	}, 1000);
}

function expandExpandable(n) {
	document.getElementById("carrot" + n).classList.toggle('expand');
	const content = document.getElementById("expandable" + n);
    if (content.style.maxHeight) {
    	content.style.maxHeight = null;
    } else {
    	content.style.maxHeight = content.scrollHeight + "px";
    } 
	content.classList.toggle('expand');
}