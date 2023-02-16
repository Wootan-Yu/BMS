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
	#place
	{
		border: none;
		border-bottom: 1.5px solid #993300;
		background: transparent;
		height: 20px;
		border-radius: 5px;
		outline: none;
		width: 80%;
		margin-bottom: 20px;
	}
	.container
	{
		POSITION:FIXED;
		font-family:Times new roman;
		font-size: 15px;
		position: middle;
		width: 450px;
		height: 480px;
		background-color:#C0C0C0;
		color: #000000;
		left:40%;
		top: 178px;
		position: absolute;
		border-color: #800000;
		border-style: solid;
		border-width: 5px;
		box-sizing: border-box;
		padding: 30px;
		border-radius: 20px;
	}
	fieldset
	{
		background: #C0C0C0;
		font-size: 20px;
		font-family: times new roman;
	}
	.Button
	{
		border: none;
		outline: none;
		height: 50px;
		background: #333;
		font-size: 15px;
		font-weight: bold;
		border-radius: 20px;
		color: white;
		width: 98%;
		margin-bottom: 20px;
		top: 500px;
	
	}
	.Button:hover
	{
		cursor: pointer;
		background: #FF6633;
		color: #800000;
		transition: 0.2s;
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

								<a href='Update.php''> Update </a>
								<a href='View.php'> View </a>
								<a href='Delete.php'> Delete </a>
								<a href='Logout.php'> Logout </a>
						</div>";
                        echo "
                        <br><div class='container'> 
                            <div class='row'>
                                <div class='col-lg-6'>
                                <div>
                                    <form  method= 'POST' action='AddInfo.php'>
                                        <fieldset>
                                            <!-- Book Title Form Name -->
                                            <center><legend> <b> Book Title </b></legend></center>
                                            <br>
                                            
                                            <!-- Book Title Text input-->
                                            <div >
                                                <center>
                                                    <input name='BookTitle' type='text' placeholder='Book Title'  required='' id='place'>
                                                </center>
                                            </div>
                                            
                                            <!-- Book Author Text input-->
                                            <div >
                                                <center>
                                                    <input name='BookAuthor' type='text' placeholder='Book Author'  required='' id='place'>
                                                </center>
                                            </div>
                                            
                                            
                                            <!-- Publisher Text input-->
                                            <div >
                                                <center>
                                                    <input name='Publisher' type='text' placeholder='Publisher'  required='' id='place'>
                                                </center>
                                            </div>
                                            
                                            
                                            <!-- Year Text input-->
                                            <div >
                                                <center>
                                                    <input name='Year' type='type' placeholder='Year'  required='' id='place'>
                                                </center>
                                            </div>
                                            
                                            <!-- Status Form Name -->
                                            <center><legend> <b> Status </b></legend></center>
                                            <br>
                                            
                                            <!-- Status Text input-->
                                            <div >
                                                <center>
                                                    <input name='Status' type='Radio' value='Available' > Available
                                                    <input name='Status' type='Radio' value='Not Available' > Not Available
                                                </center>
                                            </div>
								
								
				<!-- Button -->
				<br>
				<center>
				<div class='col-md-5'>
				<input type='Submit' name='Submit' value='Submit' class='Button'></input>
				</div>
				<center>
				</fieldset>
				</form>
				
		</div>";	
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