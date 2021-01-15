<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./bootstrap/btsp/bootstrap.min.css">
	<link rel="stylesheet" href="cont.css">
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
			<form action="login.php" method="post" id="khung">
		<div  id="hinh1">
			<div class="d-flex">
				<div>
					<img src="img/logo1.png" alt="logo1" id="logo1">
				</div>
			<h3 id="cap2"><b>Congratulation!</b></h3>	
			<div id="y-member">
				<small>You have successfully change password.</small>			
			</div>
			<div id="y-member">
			<small>Please use the new password when loging in</small>	
			</div>
			<div id="ip4">
				<button type="submit" class="btn-login" id="btnsb"><a href="login.php">Login Now</a></button>
			 </div>
			</div>
 		</div>
     </form>
				
			</div>
		</div>
	</div>
	<script  type="text/javascript" src="js/app.js"></script>
	<script src="./jquery/jquery.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
</body>

</html>