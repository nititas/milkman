<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style_register.css">
	
	<script type="text/javascript">
		function checkForm(form){
			check = false;
			if (form.cus_username.value != "" && form.cus_email.value != "" && form.cus_phone.value != "" && form.cont_detail.value != "") {
				check = true;
				alert("ส่งข้อมูลเรียบร้อย ขอบคุณครับ");
			}else{
				check = false;
			}
			return check;
		}
	</script>

</head>
<body>	
		<div class="box-bg">
			<div class="box-login">
				<div class="box-log">
					<h2>Register in to MILK MAN ! </h2>

					<form action="register_api.php" method="POST">

						<input class="form-control" type="text" name="username"  placeholder="N A M E"><br>
						<input class="form-control" type="text" name="email"  placeholder="E M I L"><br>
						<input class="form-control" type="text" name="phone"  placeholder="P H O N E"><br>
						<input class="form-control" type="password" name="password"  placeholder="P A S S W O R D"><br>
						
						
							
						<input class="form-control-login-2" type="submit" value="สมัครสมาชิก" name="submit">
						
				</form>
				


				</div>
				<div class="box-img"></div>
				
			</div>
			

		</div>


</body>
</html>