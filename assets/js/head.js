
//Gestion du Cookie


function creerCookie(key,value,dayExp) {
	if (dayExp) {
		var date = new Date();
		date.setTime(date.getTime()+(dayExp*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = key+"="+value+expires+"; path=/";
}

function lireCookie(key) {
	var nameEQ = key + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function effacerCookie(key) {
	creerCookie(key,"",-1);
}