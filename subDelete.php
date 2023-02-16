<?php
include ("Includes/connection.php");


if(isset($_GET["BID"]))
{
    $id = $_GET["BID"];

    $sql = "delete from Books_Information where BID='$id';
			";
	$con->query($sql);
    echo '<script type="text/javascript">
							alert("Book Deleted");
						</script>';
}

header("location: Delete.php");
exit;
?>