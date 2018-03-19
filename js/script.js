$(document).ready(function () {



	$('#register_botton').click(function() {

		$('#box3').css("display", "none");
		$('#signin_form').css("display", "none");
		$('#box2').css("display", "flex");
		$('#register_form').css("display", "flex");
		$('#box2').css("justify-content", "center");					
	});


	$('#signin_botton').click(function() {	

		$('#box2').css("display", "none");
		$('#register_form').css("display", "none");
		$('#box3').css("display", "flex");
		$('#signin_form').css("display", "flex");		
		$('#box3').css("justify-content", "center");					
	});


    
});
