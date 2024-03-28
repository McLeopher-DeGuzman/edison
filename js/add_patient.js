$(document).ready(function(){
	$("#save_patient").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();
		var fullName = $("#fullName").val();
		$.ajax({
			type: "POST",
			url: "add_patient_user.php",
			data: {
				email: email,
				password: password,
				fullName: fullName
				
			},
			success: function(msg){
				$("#a").html(msg);
				$("#a").fadeIn();
				$("#a").fadeOut(2000);
				$("#form_patient input").val("");
				setTimeout(function(){
					$("#add").slideUp(2000);
					window.location = "patient_user.php";
				}, 1000);
			},
			error: function(){
				aler("Error!");
			}
		});
	});
});