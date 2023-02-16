<?php
	include ("Includes/connection.php");
	$id = "";
	$name = "";
	$author = "";
	$publisher = "";
	$year = "";
	$status = "";

	$errorMessage = "";
	$successMessage = "";

	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		

		if(!isset($_GET["BID"]))
		{
			header("location: Update.php");
			exit;
		}

		$id = $_GET["BID"];

		$sql = "select * from Books_Information where BID=$id";
		$result=mysqli_query($con, $sql) or die (mysqli_error());
		$row = $result->fetch_assoc();

		if(!$row)
		{
			header("location: Update.php");
			exit;
		} 
		

		$name = $row['BTitle'];
		$author = $row['Author'];
		$publisher = $row['Publisher'];
		$year = $row['Year'];
		$status = $row['BsID'];
	}
	else
	{
		$id = $_POST["id"];
		$name = $_POST['name'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$year = $_POST['year'];
		$status = $_POST['status'];

		do {
			if(empty($id) || empty($name) || empty($author) || empty($publisher) || empty($year) || empty($status))
			{
				$errorMessage = "all fields are required";
				break;
			}

			$sql = "update Books_Information set
			BTitle = '$name', Author = '$author', Publisher = '$publisher', Year = '$year', BsID = '$status'
			where BID='$id';
			";
			$result=mysqli_query($con, $sql) or die (mysqli_error());

			if(!$result)
			{
				$errorMessage = "invalid query";
				break;
			}

			$successMessage = "updated correctly";

			header("location: View.php");
			exit;
		} while (false);
	}
?>
<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>	
</head>
	<body>
		<div class="container my-5">
			<h2></h2>
			<?php
				if(!empty($errorMessage))
				{
					echo "
					<div class='alert alert-warning alert-dismissible fade show' role='alert'>
						<strong>$errorMessage</strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>
					";
				}
			?>
			
			
			<form method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Name</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Author</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="author" value="<?php echo $author;?>">
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Publisher</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="publisher" value="<?php echo $publisher;?>">
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Year</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="year" value="<?php echo $year;?>">
					</div>
				</div>

				
				
				
				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Status</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="status" value="<?php echo $status;?>">
					</div>
				</div>
				

				<?php
				if(!empty($successMessage))
				{
					echo "
					<div class='row mb-3'>
					<div class='offset-sm-3 col-sm-6'>
						<div class='alert alert-warning alert-dismissible fade show' role='alert'>
							<strong>$successMessage</strong>
							<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
						</div>
					</div>
				</div>
					";
				}
				?>
				

				<div class="row mb-3">
					<div class="offset-sm-3 col-sm-3 d-grid">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="col-sm-3 d-grid">
						<a class="btn btn-outline-primary" href="Update.php" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>