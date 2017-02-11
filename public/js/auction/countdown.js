$( document ).ready(function() {
	var servertime = $("#time-server").val();
	var servertime = JSON.parse(servertime);
	for(var i in servertime){
		var nextYear = moment.tz(servertime[i], "Asia/Bangkok");
		$('.clock'+[i]).countdown(nextYear.toDate(), function(event) {
			$(this).html(event.strftime('%D:%H:%M:%S'));
		}).on('finish.countdown', function(event) {
			location.reload();
		});
	}
	$(".category-select").on("click",function(){
		var id = $(this).attr('id').slice(9);
		changeCat(id);
	});

	function changeCat(cat){
		$(".cat-all").hide();
		$(".noaucs").hide();
		$(".cat-"+cat).show();
		if ($(".cat-"+cat).length < 1) {
		   $(".noaucs").show();
		}
	};
});