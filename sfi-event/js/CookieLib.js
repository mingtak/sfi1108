/**************************************************************************/
// Cookie Lib. js
/**************************************************************************/

function iSetCookie (name, value) {
	var argv = iSetCookie.arguments;
	var argc = iSetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;
	var path = (argc > 3) ? argv[3] : null;
	var domain = (argc > 4) ? argv[4] : null;
	var secure = (argc > 5) ? argv[5] : false;
	document.cookie = name + "=" + escape (value) +
	((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
	((path == null) ? "" : ("; path=" + path)) +
	((domain == null) ? "" : ("; domain=" + domain)) +
	((secure == true) ? "; secure" : "");
}

function iGetCookie(name) {
	var arg = name + "=";
	var alen = arg.length;
	var clen = document.cookie.length;
	var i = 0;
	while (i < clen) {
		var j = i + alen;
		if (document.cookie.substring(i, j) == arg) {
			offset=j;
			var endstr = document.cookie.indexOf (";", offset);
			if (endstr == -1) endstr = document.cookie.length;
			return unescape (document.cookie.substring(offset, endstr));
			}
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0) break;
	}
	return null;
}

function iDelCookie(name) {
	var expdate = new Date ();
	expdate.setTime (expdate.getTime()-1);
	iSetCookie (name, "", expdate)
}