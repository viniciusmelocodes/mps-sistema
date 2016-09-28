$(document).ready(function(){

	console.log("DOM ready");

	$(".top ul li a").click(function(e){
		e.preventDefault();
		console.log("clicked");
		var url = this.href;
        $(".content").load(url);
	});


	$("#btn_login").click(function(e){
		var data = $(".form").serialize();
		e.preventDefault();
		console.log(data);

		$.ajax({
			type:'POST',
			url:'login.php',
			data:data,
		    dataType: "html"

		}).done(function(resposta) {
		    if(resposta){
		    	$(".login-messages").html(resposta).show('slow');
		    }
		});


	});	

	

});
