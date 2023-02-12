<!DOCTYPE html>
<html>
	<head>
		<title>
		
		</title>
		<style>
			body {
				background: url(pics/illustback_4.jpg);
			}
			.ring {
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				width:150px;
				height:150px;
				background:transparent;
				border:3px solid #3c3c3c;
				border-radius:50%;
				text-align:center;
				line-height:150px;
				font-family:sans-serif;
				font-size:20px;
				color:#ffffff;
				letter-spacing:4px;
				text-transform:uppercase;
				text-shadow:0 0 10px #b34242;
				box-shadow:0 0 20px rgba(0,0,0,.5);
			}
			.ring:before {
				content:'';
				position:absolute;
				top:-3px;
				left:-3px;
				width:100%;
				height:100%;
				border:3px solid transparent;
				border-top:3px solid #ff0000;
				border-right:3px solid #ff0000;
				border-radius:50%;
				animation:animateC 2s linear infinite;
			}
			span {
				display:block;
				position:absolute;
				top:calc(50% - 2px);
				left:50%;
				width:50%;
				height:4px;
				background:transparent;
				transform-origin:left;
				animation:animate 2s linear infinite;
			}
			span:before {
				content:'';
				position:absolute;
				width:16px;
				height:16px;
				border-radius:50%;
				background:#ff0000;
				top:-6px;
				right:-8px;
				box-shadow:0 0 20px #ff0000;
			}
			@keyframes animateC {
				0% {
					transform:rotate(0deg);
				}
				100% {
					transform:rotate(360deg);
				}
			}
			@keyframes animate {
				0% {
					transform:rotate(45deg);
				}
				100% {
					transform:rotate(405deg);
				}
			}

		</style>
	</head>
	
	<body>
<?php	
	setcookie("User",$_POST['User'],time()+3600);
	include("Includes/connection.php");
	
	if(isset($_POST ["submit"]))
	{
		$user=mysqli_real_escape_string($con, $_POST['User']);
		$pwd=mysqli_real_escape_string($con, $_POST['Password']);
		$occ=mysqli_real_escape_string($con, $_POST['Occupation']);
		
		$log="select a.*, b.* from login a, User b where a.Username='".$user."' and a.Password='".$pwd."' and b.Occupation='".$occ."' and a.UID=b.Occupation";
		$rs=mysqli_query($con, $log) or die (mysqli_error($con));
		
		if($occ=="Librarian")
		{
			if(mysqli_num_rows($rs)>0)
			{
				while($rec=mysqli_fetch_array($rs))
				{
					
					?> <script src="scripts/lib.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
				}
			}
			else
			{
				echo 'Error: Wrong credentials. Please try again.';
				?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
			}
		}
		else if($occ=="Student")
		{
			if(mysqli_num_rows($rs)>0)
			{
				while($rec=mysqli_fetch_array($rs))
				{
					?> <script src="scripts/stu.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
				}
			}
			else
			{
				echo 'Error: Wrong credentials. Please try again.';
				?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
			}
		}
		else
		{
			echo 'Error: Wrong credentials. Please try again.';
			?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
						<body onload='setInterval("initRedirect0()",2000)'></body>
					<?php
		}
	}
?>

<div class="ring">Loading
  <span></span>
</div>
</body>
</html>
