$(document).ready(function() {
	if (screen.width < 768) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">');
	} else {
		$('head').append('<meta name="viewport" content="width=1024">');
	}
});