$(document).ready(function () {
	window.setTimeout(function () {
		$(".alert").fadeTo(1000, 500).slideUp(1000, function () {
			$(this).remove();
		});
	}, 5000);
	// fancybox
	$('.iframe-btn').fancybox({
		width: '80%',
		height: '60%',
		type: 'iframe',
		autoScale: false,
		fitToView   : false,
		autoSize    : false
	});
	$('input.number').number( true, 0 );
});

function printContent(divID) {
	var divElements = document.getElementById(divID).innerHTML;
	var pageHtml = document.body.innerHTML;
	document.body.innerHTML = "<html><head><title></title><style type='text/css' media='print'>a:link:after, a:visited:after {content: normal;}</style></head><body>" + divElements + "</body>";
	window.print();
	document.body.innerHTML = pageHtml;
}
