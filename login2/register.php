<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./bootstrap/btsp/bootstrap.min.css">
	<link rel="stylesheet" href="./bootstrap/btsp/bootstrap-socaial.css">
	<link rel="stylesheet" href="cont.css">
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.css" />
</head>

<body>
	<div class="header"><img src="./img/logo.png" alt=""></div>
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="hidden-after">
					<img src="./img/bs.png" alt="" id="hinhleft">
				</div>
			</div>
			<div class="col-md-6" id="rps">
				<div class="row">
					<form action="login.php" method="post" id="khung">
						<div id="hinh2">
							<a href="login.php"><i class="fa fa-arrow-left" id="back"></i></a>
							<div class="d-flex">
								<h3 id="cap"><b>Welcome to Wogomin</b></h3>
								<div class="input-icons">
									
									<select id="country-codes" class="regis" onmousedown="if(this.options.length>10){this.size=10;}"  onchange='this.size=0;' onblur="this.size=0;">
									<option>+84</option>
									</select>
									
									<input class="input-field-phone" type="text" name="phone" placeholder="Phone number">
								</div>
								<small id="phoneE"></small>
								<div class="input-icons">
									<input class="input-field" type="password" name="pass" id="password" placeholder="Password">
									<i class="fa fa-eye" id="togglePassword"> </i>
								</div>
								<small id="passE"></small>
								<div class="input-icons">
									<input class="input-field" type="password" name="cfpass" id="cfpassword" placeholder=" Confirm Password">
									<i class="fa fa-eye" id="togglecfPassword"> </i>
								</div>
								<small id="cfpass"></small>
								<div id="ip2">
									<button type="submit" class="btn-login" id="buttonsubmit"><a href="info1.php">Next</a></button>
								</div>
							</div>
							<div class="form-check1">
								<div id="create">
									<button type="submit" class="btn-create"><a href="login.php">Login</a></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="./public/vendor/jquery/jquery.min.js"></script>
	<script src="./public/vendor/bootstrap/js/popper.js"></script>
	<script src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="./public/vendor/select2/select2.min.js"></script>
	<script src="./public/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="./public/js/user/md5.min.js"></script>
	<script  type="text/javascript" src="./js/app2.js"></script>
	<script src="./jquery/jquery.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script><script  type="text/javascript" src="js/app.js"></script>
	<script>
		$.ajax({
		        type: "GET",
		        url: "./public/data/country-codes.json",
		        dataType: "text",
		        success: function(data) {
		        	var data = JSON.parse(data);
		        	for (var i = data.length - 1; i >= 0; i--) {
		        		// console.log(data[i].dial_code);

		        		var node = document.createElement("option");
						var textnode = document.createTextNode(data[i].dial_code);
						node.appendChild(textnode);
						document.getElementById("country-codes").appendChild(node);
		        	}
		        },
		        error: function (e) {
		        	console.log(e);
		        }
		     });


		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
		});
		const togglecfPassword = document.querySelector('#togglecfPassword');
		const cfpassword = document.querySelector('#cfpassword');
		togglecfPassword.addEventListener('click', function(e) {
			const type = cfpassword.getAttribute('type') === 'password' ? 'text' : 'password';
			cfpassword.setAttribute('type', type);
			this.classList.toggle('fa-eye-slash');
		});

		function isPhone(phone) {
			return /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/.test(phone);
		}

		function isPass(pass) {
			return /"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"/.test(pass);
		}

		function iscfPass(cfpass) {
			return /"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"/.test(cfpass);
		}
		$('#buttonsubmit').click(function() {
			var phoneValue = $('input[name=phone]').val();
			var passValue = $('input[name=pass]').val();
			var cfpassValue = $('input[name=cfpass]').val();
			if (phoneValue == '') {
				$("#phoneE").text("Please fill in this field");
				return false;
			} else {
				if (!isPhone(phoneValue)) {
					$("#phoneE").text("Enter the phone number in the correct format");
					return false;
				} else {
					$("#phoneE").text("");
				}
			}

			if (passValue == '') {
				$("#passE").text("Password required");
				return false;
			} else {
				if (!isPass(passValue)) {
					$("#passE").text("Wrong password");
					return false;
				} else {
					$("#passE").text("");
				}
			}
			if (passValue == '') {
				$("#cfpass").text("Confirm Password required");
				return false;
			} else {
				if (!iscfPass(passValue)) {
					$("#cfpass").text("Wrong with password");
					return false;
				} else {
					$("#cfpass").text("");
				}
			}
			if (phoneValue != "" && passValue != "" && cfpassValue != "") {
				var form_data = new FormData();
				form_data.append('phone', phoneValue);
				form_data.append('pass', passValue);
				form_data.append('cfpass', cfpassValue);
			}
		});
	</script>
</body>

</html>