<?php
	include ("Includes/connection.php");
	if(isset($_POST['Submit']))
	{

		$Book = $_POST['BookTitle'];
		$BookAuthor = $_POST['BookAuthor'];
		$Publisher = $_POST['Publisher'];
		$Year = $_POST['Year'];
		$Status = $_POST['Status'];
		
			$sql = "INSERT INTO Books_Information(BTitle, Author, Publisher , Year, BsID ) VALUES ('".$Book."', '".$BookAuthor."', '".$Publisher."', '".$Year."', '".$Status."')";
			$result=mysqli_query($con, $sql) or die (mysqli_error());
				echo '<script type="text/javascript">
							alert("Book Information Added!");
							location="AddInfoHome.php";
						</script>';
	}
	else
	{
		echo 'not inserted';
	}
?>
