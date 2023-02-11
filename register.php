<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<style>
		* {
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}
		
		body {
			background: url("pics/illustback_4.jpg") no-repeat;
			background-size: cover;
			color: #fff;
		}
		
		.registration-form {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
		}
		
		.head {
			font-size: 30px;
			text-align: center;
			text-transform: uppercase;
			margin: 40px 0;
		}
		
		.LogInfo {
			text-align: center;
			height: 60px;
		}
		
		.PersInfo {
			text-align: center;
			height: 60px;
		}
		
		.registration-form input[type=text] {
			font-size: 16px;
			padding: 15px 10px;
			width: 100%;
			border: 0;
			border-radius: 5px;
			outline: none;
			text-align: center;
		}
		
		.registration-form input[type=password] {
			font-size: 16px;
			padding: 15px 10px;
			width: 100%;
			border: 0;
			border-radius: 5px;
			outline: none;
			text-align: center;
		}
		
		.registration-form input[type=radio] {
			font-size: 16px;
			padding: 15px 10px;
			width: 100%;
			border: 0;
			border-radius: 5px;
			outline: none;
			text-align: center;
		}
		
		.clicks {
			display: flex;
		}
		
		.radb {
			display: flex;
			flex-direction: row;
			position:relative; 
			left:80px; 
			top:2px;
			text-align: center;
		}
		
		.registration-form input[type=submit] {
			font-size: 18px;
			font-weight: bold;
			width: 110%;
			padding: 10px 10px;
			margin: 20px 0;
			margin-left: 10px;
			border-radius: 5px;
			border: 0;
			text-align: center;
			flex: 50%;
		}
		
		.registration-form input[type=reset] {
			font-size: 18px;
			font-weight: bold;
			width: 110%;
			padding: 10px 10px;
			margin: 20px 0;
			margin-left: 10px;
			border-radius: 5px;
			border: 0;
			text-align: center;
			flex: 50%;
		}
		
		.registration-form input[type=submit]:hover {
			background-color: lightgray;
		}
		
		.registration-form input[type=reset]:hover {
			background-color: lightgray;
		}
		
		</style>
	</head>
	<body>
		<div class="registration-form">
		<center><table>
			<form name="RegistrationForm" action="Includes/subRegister.php" method="POST">
			
			<tr class="head"><td colspan="2" ><h2>Registration Form</h2></td></tr>
			<tr class="LogInfo"><td colspan="1"><h3>LOGIN INFO</h3></td></tr>
			<tr><td>User ID:</td></tr> <tr><td><input type="text" placeholder="Enter UID" name="UID" size="20"></td></tr>
			<tr><td>Username:</td></tr> <tr><td><input type="text" placeholder="Enter Username" name="Usname" size="20"></td></tr>
			<tr><td>Password:</td></tr> <tr><td><input type="password" placeholder="Enter Password" name="passw" size="20"></td></tr>
			<tr><td>Confirm Password:</td></tr> <tr><td><input type="password" placeholder="Confirm Password" name="confpassw" size="20"></td></tr>
			<tr class="PersInfo"><td colspan="2"><h3>PERSONAL INFO</h3></td></tr>
			<tr><td>Last Name:</td></tr> <tr><td><input type="text" placeholder="Enter Last Name" name="Lname" size="20"></td></tr>
			<tr><td>First Name:</td></tr> <tr><td><input type="text" placeholder="Enter First Name" name="Fname" size="20"></td></tr>
			<tr><td>Middle Name:</td></tr> <tr><td><input type="text" placeholder="Enter Middle Name" name="Mname" size="20"></td></tr>
			<tr><td>
				<div class="radb" style="padding-right: 50px;">
							<input id="ST" type="radio" name="Occupation" value="Student" class="radb_occ" style="text-align:center;height:60px;margin-right:10px;margin-top:10px;">
                            <label id="Student" for="ST" style="margin-top:30px;">Student</label>
							<input id="LB" type="radio" name="Occupation" value="Librarian" class="radb_occ" style="text-align:center;height:60px;margin-left:80px;margin-right:10px;margin-top:10px;">
                            <label id="Librarian" for="LB" style="margin-top:30px; padding-right: 70px;">Librarian</label>
				</div>
			</td></tr>
			<tr><td colspan="2">
			<div class="clicks">
				<input type="submit" name="submit" value="Login">
				<input type="reset" name="reset" value="Cancel">
			</td></tr>
			</form>
		</table></center>
		</div>
	</body>
</html>