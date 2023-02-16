<?php
include ("Includes/connection.php");
?>
<html>
	<head>
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


    .tableclass {
    border-collapse: collapse;
    width: 100%;
    }
    .tableclass tbody th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    }

    .tableclass tbody tr:hover {
		background-color: orange;
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
					echo "
	<br/>
		<label id='CSScookie' > <u> Welcome Librarian: " .$_COOKIE['User']. " </u> </label>
		<br/>				
		<!-- The navigation menu -->
		<div class='navbar'>
			<a href='Librarian.php'>Home</a>
			<a href='AddInfoHome.php'> Add Book Information </a>
			<a href='Update.php''> Update </a>
			<a href='View.php'> View </a>
			<a href='Delete.php'> Delete </a>
			<a href='Logout.php'> Logout </a>
		</div>


		<div class='container my-5'>
			<h2>list of books</h2>
			<br>
			<table class='tableclass'>
				<thead>
					<tr>
						<td>Name</td>
                        <td>Author</td>
                        <td>Publisher</td>
                        <td>Year</td>
                        <td>Status</td>
					</tr>
				</thead>
				<tbody>";
						
						$sql = "select * from Books_Information";
						$result=mysqli_query($con, $sql) or die (mysqli_error());

						while($row = $result->fetch_assoc())
						{
							echo "
							<tr>
								<td>$row[BTitle]</td>
                                <td>$row[Author]</td>
                                <td>$row[Publisher]</td>
                                <td>$row[Year]</td>
                                <td>$row[BsID]</td>
							</tr>
							";
						}
					echo "
				</tbody>
			</table>
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