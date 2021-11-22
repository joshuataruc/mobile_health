var password = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
$('#submit-btn').attr('disabled', true);

$('#password, #con-password').on('focus', function(){
  document.getElementById("message").style.display = "block";
 })
$('#password, #con-password').on('blur', function(){
  document.getElementById("message").style.display = "none";
 })



// When the user starts to type something inside the password field
$('#password, #con-password').on('keyup', function(){
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(password.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
	$('#submit-btn').attr('disabled', true);
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(password.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
	$('#submit-btn').attr('disabled', true);
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(password.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
	$('#submit-btn').attr('disabled', true);
  }
  
  // Validate length
  if(password.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
	$('#submit-btn').attr('disabled', true);
	
  }

	// CONFIRM PASSWORD
		if ($('#con-password').val() == $('#password').val()) {
		$('#pass-message').html('✔ Password Match').css('color', '#007bff ');
		$('#submit-btn').attr('disabled', false);
	}
	else{
		$('#pass-message').html('✖ Password did not Match').css('color', '#dc3545  ');
		$('#submit-btn').attr('disabled', true);
	}
});


// $('#submit-btn').attr('disabled', true);
// $('#password, #con-password').on('keyup', function(){
// 	if ($('#con-password').val() == $('#password').val()) {
// 		$('#pass-message').html('✔ Password Match').css('color', '#007bff ');
// 		$('#submit-btn').attr('disabled', false);
// 	}
// 	else{
// 		$('#pass-message').html('✖ Password did not Match').css('color', '#dc3545  ');
// 		$('#submit-btn').attr('disabled', true);

// 	}
// });
// $('#password').on('keyup', function(){
// 	let password_val = $('#password').val();
// 	var password_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
// 	if($('#password').value.match(password_regex)){
// 		console.log(true)
// 	}
// 	else{
// 		console.log(false)
// 	}

// })


// $('#password, #con-password').on('keyup', function () {
//   if ($('#password').val() == $('#con-password').val()) {
//     $('#pass-message').html('Matching').css('color', 'green');
//   } else 
//     $('#pass-message').html('Not Matching').css('color', 'red');
// });