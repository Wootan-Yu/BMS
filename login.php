<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<style>
		* {
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}
		body {
			background: url("pics/illustback_2.jpg") no-repeat;
			background-size: cover;
		}
		.login-form {
			width: 350px;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			position: absolute;
			color: #fff;
		}
		
		.head {
			width: 350px;
			top: 20%;
			left: 44%;
			transform: translate(-50%, -50%);
			position: absolute;
			color: #fff;
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin: 40px 0;
			white-space: nowrap;
			display: inline-block;
		}
		
		.login-form input[type=text] {
			font-size: 16px;
			width: 100%;
			padding: 15px 10px;
			border: 3;
			outline: none;
			border-radius: 7px;
			margin: 5px 10px;
			
		}
		
		.login-form input[type=password] {
			font-size: 16px;
			width: 100%;
			padding: 15px 10px;
			border: 3;
			outline: none;
			border-radius: 7px;
			margin: 5px 10px;
			
		}
		
		.radb {
			display: flex;
			flex-direction: row;
			position:relative; 
			left:80px; 
			top:2px;
		}
		
		
		.login-form button {
			font-size: 18px;
			font-weight: bold;
			width: 110%;
			padding: 10px 10px;
			margin: 20px 0;
			border-radius: 5px;
			border: 0;
			text-align: center;
		}
		.login-form button:hover {
			background-color: lightgray;
		}
		
	</style>
	</head>
	<body>
	<div class="head">
		<tr><td colspan="2"><center><b>LIBRARY MANAGEMENT SYSTEM</b></center><br></td></tr>
	</div>
		<div class="login-form">
			<div class="table"><center><table>
				<form name="LoginForm" action="subLogin.php" method="POST">
					
					<tr><td>Username: </td><td> <input type="text" placeholder="Enter Username" name="User" size="20"></td></tr>
					<tr><td>Password: </td><td> <input type="password" placeholder="Enter Password" name="Password" size="20"></td></tr>
					<tr><td colspan="2"><center>
						<br>
						<div class="radb">
							<input id="ST" type="radio" name="Occupation" value="Student" class="radb_stu" style="text-align:center;margin-right:10px;">
							<label id="Student" for="ST" style="margin-right:30px; margin-top: 1px;">Student</label>
							<input id="LB" type="radio" name="Occupation" value="Librarian" class="radb_lib" style="text-align:center;margin-right:10px;">
							<label id="Library" for="LB" style="margin-top: 1px;">Librarian</label>
						</div>
						<button type="submit" name="submit" value="Login">Login</button>
						<button type="reset" name="reset">Cancel</button>
					<tr><td colspan="2"><br><center>Not registered? <a href="register.php" style="color:green">Sign up now!</a></center></td></tr>
					</center></td></tr>
				</form>
			</table></center></div>
		</div>
	</body>
</html>
