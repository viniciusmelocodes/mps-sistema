$(document).ready(function(){

	$(".top nav a").on('click',function(e){
		e.preventDefault();
		var url = this.href;
        $(".content").load(url);
        $("nav ul li").each(function(){
        	$(this).removeClass("selected");
        });
        $(this > "li").addClass("selected");
	});

	$("#btn_login").on('click',function(e){
		$(".login-messages").empty().hide();
		var data = $(".form").serialize();
		e.preventDefault();

		$.ajax({
			type:'POST',
			url:'login.php',
			data:data,
		    dataType: "html"

		}).done(function(resposta) {
		    if(resposta == "ok"){
	    		window.location = 'sistema.php';
	    	} else {
		    	$(".login-messages").html(resposta).show('fast');
		    }
		});

	});	


	$(".drop-down-menu-link").on('click',function(e){
		e.preventDefault();
		$(".drop-down-menu").toggle("fast");
	});

});
