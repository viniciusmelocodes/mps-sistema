$(document).ready(function(){

	console.log("DOM ready");

	$(".top ul li a").click(function(e){
		e.preventDefault();
		console.log("clicked");
		var url = this.href;
        $(".content").load(url);
	});


});
