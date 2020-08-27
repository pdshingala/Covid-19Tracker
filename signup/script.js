$(document).ready(function() {

		// form autocomplete off		
		$(":input").attr('autocomplete', 'off');

		// remove box shadow from all text input
		$(":input").css('box-shadow', 'none');



		// save button click function
		$("#signupbtn").click(function() {

			// calling validate function
			var response =  validateForm();

			// if form validation fails			
			if(response == 0) {
				return;
			}


			// getting all form data
			var email     =   $("#email").val();
			var password  =   $("#password").val();
			var location  =   $("#location").val();


			// sending ajax request
			$.ajax({

				url: './process.php',
				type: 'post',
				data: { 
					     'email': email,
					     'password' : password,
					     'location' : location,
					     'save' : 1
					},

				// before ajax request
				beforeSend: function() {
					$("#result").html("<p class='text-success'> Please wait.. </p>");
				},	

				// on success response
				success:function(response) {
					$("#result").html(response);

					// reset form fields
					$("#regForm")[0].reset();
				},

				// error response
				error:function(e) {
					$("#result").html("Some error encountered.");
				}

			});
		});




	// ------------- form validation -----------------

		function validateForm() {

			// removing span text before message
			$("#error").remove();


			// validating input if empty

			if($("#email").val() == "") {
				$("#email").after("<span id='error' class='text-danger'> Enter your email </span>");
				return 0;
			}

			if($("#password").val() == "") {
				$("#password").after("<span id='error' class='text-danger'> Enter your password </span>");
				return 0;
			}

			if($("#c_password").val() == "") {
				$("#c_password").after("<span id='error' class='text-danger'> Re-enter your password </span>");
				return 0;
			}

			if($("#password").val() !== $("#c_password").val()) {
				$("#c_password").after("<span id='error' class='text-danger'> Password not confirmed </span>");
				return 0;
			}

			if($("#location").val() == "") {
				$("#location").after("<span id='error' class='text-danger'> Select country </span>");
				return 0;
			}

			return 1;

		}


	// ------------------- [ Email blur function ] -----------------

		$("#email").blur(function() {

			var email  		= 		$('#email').val();

			// if email is empty then return
			if(email == "") {
				return;
			}


			// send ajax request if email is not empty
			$.ajax({
					url: 'process.php',
					type: 'post',
					data: {
						'email':email,
						'email_check':1,
				},

				success:function(response) {	

					// clear span before error message
					$("#email_error").remove();

					// adding span after email textbox with error message
					$("#email").after("<span id='email_error' class='text-danger'>"+response+"</span>");
				},

				error:function(e) {
					$("#result").html("Something went wrong");
				}

			});
		});


	// -----------[ Clear span after clicking on inputs] -----------


	$("#email").keyup(function() {
		$("#error").remove();
		$("span").remove();
	});

	$("#password").keyup(function() {
		$("#error").remove();
	});

	$("#c_password").keyup(function() {
		$("#error").remove();
	});

	$("#location").keyup(function() {
		$("#error").remove();
	});
	

});