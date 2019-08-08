



var isDisableKey=true;

function disableKey(){
	if(navigator.appName == "Microsoft Internet Explorer") {
		if (window.event.ctrlKey){
			alert("Please Don't Use Hot Key!");
			return;
		}
	} else if(navigator.appName == "Netscape") {
		if (arguments[0].ctrlKey){
			alert("Please Don't Use Hot Key!");
			arguments[0].stopPropagation();
			arguments[0].preventDefault();
		}
	}
}

if (isDisableKey) {
	if(navigator.appName == "Microsoft Internet Explorer") {
	        document.attachEvent("onkeydown", disableKey);
	} else if(navigator.appName == "Netscape") {
	        document.addEventListener("keydown", disableKey,false);
	}
}