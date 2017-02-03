$(document).ready(function() {
	$(".fancybox[rel=gallery]").fancybox({
	    helpers:  {
	    	title: null
	    }
	});
	var servertime = $("#time-server").val();
	var nextYear = moment.tz(servertime, "Asia/Bangkok");
	$('.clock').countdown(nextYear.toDate(), function(event) {
		$(this).html(event.strftime('%D:%H:%M:%S'));
	}).on('finish.countdown', function(event) {
		location.reload();
	});
});