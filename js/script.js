$(function () {
	$("surname_error_message").hide();
	$("phonenumber_error_message").hide();
	$("email_error_message").hide();
	$("ParentsFullName_error_message").hide();


	var error_surname = false;
	var error_phonenumber = false;
	var error_email = false; 
	var error_ParentsFullName = false;

	$("#form_surname").focusout(function() {
		check_surname();
	});

	$("#form_phonenumber").focusout(function() {
	check_phonenumber();
	});

	$("#form_email").focusout(function() {
	check_email();
	});

	$("#ParentsFullName").focusout(function() {
	check_ParentsFullName();
	});

	function check_surname() {
		var surname_length = $("#form_surname").val().length;

		if (surname_length < 1) {
			$("#form_surname").css("border-color", "#b71818");
			$("#surname_error_message").html("We actually need your surname");
			$("#surname_error_message").show();
			// $("#form_surname").css("background-color", "yellow"); 
			// $("#surname_error_message").show();
			error_surname = true;
		} else {
		$("#form_surname").css("border-color", "#8cc152");
		$("#surname_error_message").html("Surname ");
		$("#surname_error_message").show(); 
		}
		// <i class='material-icons' style='font-size:14px;color:#1da1f2;line-height: 1.2; word-wrap: break-word;'>check_circle</i>
	}

	function check_phonenumber() {
	var phone_length = $("#form_phonenumber").val().length;

	if (phone_length < 10) {
		$("#form_phonenumber").css("border-color", "#b71818");
		$("#phonenumber_error_message").html("Come on,you know the phone number has to be 10 digits");
		$("#phonenumber_error_message").show();
		error_phonenumber = true;
	} else {
		$("#form_phonenumber").css("border-color", "#8cc152");
		$("#phonenumber_error_message").html("Phone number <i class='material-icons' style='font-size:14px;color:#1da1f2;line-height: 1.2; word-wrap: break-word;'>check_circle</i>");
		$("#phonenumber_error_message").show();
		error_phonenumber = false; 
	}
}

	
	function check_email() {
	var pattern = new RegExp(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);

	if (pattern.test($("#form_email").val())) {
		$("#form_email").css("border-color", "#8cc152");
		$("#email_error_message").html("Email <i class='material-icons' style='font-size:14px;color:#1da1f2;line-height: 1.2; word-wrap: break-word;'>check_circle</i>");
		$("#email_error_message").show(); 

	} else {
		$("#form_email").css("border-color", "#b71818");
		$("#email_error_message").html("Looks like you entered an invalid email");
		$("#email_error_message").show();
		email_error = true;
	}
}
	
		function check_ParentsFullName() {
		var ParentsFullName_length = $("#ParentsFullName").val().length;

		if (ParentsFullName_length < 1) {
			$("#ParentsFullName").css("border-color", "#b71818");
			$("#ParentsFullName_error_message").html("We actually need your parent/guardian's surname");
			$("#ParentsFullName_error_message").show();
			error_ParentsFullName = true;
		} else {
			$("#ParentsFullName").css("border-color", "#8cc152");
			$("#ParentsFullName_error_message").html("Parent/Guardians' name");
			$("#ParentsFullName_error_message").show();
		}
	}


	$("#registration_form").submit(function() {
		error_surname = false;
		error_phonenumber = false;
		error_email = false;
		error_ParentsFullName = false;

		check_surname();
		check_phonenumber();
		check_email();
		if (error_surname == false && error_phonenumber == false && error_email == false && error_ParentsFullName == false) {
			return true;
		} else {
			return false;
			swal('', 'Please Fill the required Fields ', 'error' ,);
			// alert("The fields in red are required! Please them with appropriate data");
			document.registrationform.Surname.focus();
			
		}
	});
});
