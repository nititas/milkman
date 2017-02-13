<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	

</head>
<body>	
		<div class="box-bg">
			<div class="box-login">
				<div class="box-log">
					<h2>Sign in to MILK MAN ! </h2>

					<form action="login_api.php"  method="POST">

						<input class="form-control" type="text" name="username"  placeholder="N A M E"><br>
						<input class="form-control" type="password" name="password"  placeholder="P A S S W O R D"><br>
						
						<input class="form-control-login-1" type="submit" value="เข้าสู่ระบบ" name="submit">
						
						<input type="button" class="form-control-login-2" value="สมัครสมาชิก" onclick="window.location.href='register.php'">

						
						
				</form>

				


				</div>
				<div class="box-img"></div>
				
			</div>
			

		</div>


</body>
</html>