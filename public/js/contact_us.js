$(function() {
	$('#contactForm').validate({
		rules: {
			name: "required",
			email: {
				required : true,
				email: true
			},
			phone : "required",
			message: "required"
		},
		messages: {
			name: "Please enter your name!",
			email: {
				required: "Please enter your email!",
				email: "Invalid email, please type again!"
			},
			phone: "Please enter your phone!",
			message: "Please enter your message!"
		}, 
		submitHandler: function(form){
			$.ajax({
				url: './app/contact_sender.php',
				type: 'POST',
				data: $(form).serialize(),
				success: function(response) {
					console.log(response);
					if(response == true){
						$('#success').html("<div class='alert alert-success'>");
			          	$('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
			            .append("</button>");
			          	$('#success > .alert-success')
			            .append("<strong>Your message has been sent. </strong>");
			          	$('#success > .alert-success')
			            .append('</div>');
			          	//clear all fields
			          	$('#contactForm').trigger("reset");
					}else{
						// Fail message
			          	$('#success').html("<div class='alert alert-danger'>");
			          	$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
			            .append("</button>");
			          	$('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
			          	$('#success > .alert-danger').append('</div>');
					}
				}
			});
		},

		errorElement: "p",
		errorPlacement: function(error, element){
			// Add the 'help-block' class to the error element
			error.addClass("help-bloack text-danger");
			if(element.prop("type") === "checkbox"){
				error.insertAfter(element.parent("label"));
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function(element, errorClass, validClass){
			$(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
		},
		unhighlight: function(element, errorClass, validClass){
			$(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
		}
	});

});
