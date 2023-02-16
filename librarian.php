<?php 
	//connection
	include("Includes/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Librarian Page </title>
	</head>
	
	<style>
	#CSScookie
	{
	position: fixed;
	font-size: 18px;
	font-family: times new roman;
	top: 10px;
	right:20px;
	}

	/* The navigation menu */
	.navbar {
		overflow: hidden;
		background-color: #333;
		font-family:times new roman;
	}

	/* Navigation links */
	.navbar a {
		float: left;
		font-size: 16px;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-family:times new roman;
	}


	/* Add a red background color to navigation links on hover */
	navbar a:hover, .subnav:hover .subnavbtn {
	background-color: #800000;
	}
	</style>
	
	<body>
		<?php
			$date = date('M/d/Y');
			//username of the librarian
			if (isset($_COOKIE['User']))
			{
				
				$view = "select Username, Password from login where Username='". $_COOKIE['User'] ."' ";
				$viewGO = mysqli_query($con,$view) or die (mysqli_error());
				if (mysqli_num_rows($viewGO)>0)
				{
					echo "<br/><h4 align='right' ><?php".$date.";?></h4>
							<label id='CSScookie' > <u> Welcome Librarian: " .$_COOKIE['User']. " </u> </label>
							
							<!-- The navigation menu -->
						<div class='navbar'>
							<a href='Librarian.php'>Home</a>
		
								<a href='AddInfoHome.php'> Add Book Information </a>
								<!--<a href='#'> Request </a>-->
								<a href='Update.php'> Update </a>
								<a href='View.php'> View </a>
								<a href='Delete.php'> Delete </a>
								<a href='logout.php'> Logout </a>
						</div>
						
						";	
				}
			}
			
			else
			{
				echo "<table width=1000 border=1 cellspacing=2 cellpadding=2 align=center>
					<tr><td align=center><strong><span class= style10>Restricted Page! You are not a Valid User....</span><strong></td></tr>
				  </table>";
			
				?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
				<body onload='setInterval("initRedirect0()",2000)'></body>
				<?php
			}
				?>
				
				
	</body>
	
</html>