<?php
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$LgID = $_POST['UID']; //UID = LgID
		$Username = $_POST['Usname'];
		$Password = $_POST['passw'];
		$ConfirmPassword = $_POST['confpassw'];
		$LastName = $_POST['Lname'];
		$FirstName = $_POST['Fname'];
		$MiddleName = $_POST['Mname'];
		$UserDesc = $_POST['Occupation'];
	
		if($LgID == "" || $Username == "" || $Password == "" || $ConfirmPassword == "" || $LastName == "" || $FirstName == "" || $MiddleName == "" || $UserDesc == "")
		{
			echo "Missing Items. Please Fill it up.";
		}
		else if($Password != $ConfirmPassword)
		{
			echo "Password doesn't match";
		}
		else
		{
			//login (LgID, Password, StID, UID, Username)
			//Librarian (LFname, LID, LLname, LMname ,RID(pk))
			//Students (LvlID, RID(pk), SectID, SFname, SID, SLname, SMname, StrID, SyID, TrID)
			//a.RID = a.LgID
			$tracklib="select a.* ,b.* from login a, librarian b where a.LgID='".$LgID."' or a.Username='".$Username."' and a.LgID=b.LID"; 
			$rslib=mysqli_query($con, $tracklib) or die (mysqli_error($con));
			$trackstu="select a.*,b.* from login a, students b where a.LgID='".$LgID."' or a.Username='".$Username."' and a.LgID=b.SID";
			$rsstu=mysqli_query($con, $trackstu) or die (mysqli_error($con));
			if(mysqli_num_rows($rslib)>0)
			{
				while($rec=mysqli_fetch_array($rslib))
				{
					echo "Username Already Exist!";
				}
			}
			else if(mysqli_num_rows($rsstu)>0)
			{
				while($rec=mysqli_fetch_array($rsstu))
				{
					echo "Username Already Exist!";
				}
			}
			else
			{
				if($UserDesc == "Librarian")
				{
					$Usercode = "Librarian";  //(login)UID int(8) = UID varchar(20)
					$tblLogin = "insert into login(LgID, Username, Password, UID) values('".$LgID."','".$Username."','".$Password."','".$Usercode."')";
					$LogR = mysqli_query($con, $tblLogin) or die(mysqli_error($con));
					$tblLib = "insert into librarian(LFname, LMname, LLname) values('".$FirstName."','".$MiddleName."','".$LastName."')";
					$Libr = mysqli_query($con, $tblLib) or die(mysqli_error($con));
					
					$tbluser = "INSERT INTO user(Occupation) VALUES ('$Usercode')";
					$LogR = mysqli_query($con, $tbluser) or die(mysqli_error());
					echo ", user(Librarian)";

					//note: might be a html code
					echo "You are now Registered as Librarian";
					
				}
				else
				{
					$Usercode = "Student";  //(login)UID int(8) = UID varchar(20)
					$tblLogin = "insert into login(LgID, Username, Password, UID) values('".$LgID."','".$Username."','".$Password."','".$Usercode."')";
					$LogR = mysqli_query($con, $tblLogin) or die(mysqli_error($con));
					$tblStu = "insert into students(SFname,SMname, SLname) values('".$FirstName."','".$MiddleName."','".$LastName."')";
					$Stur = mysqli_query($con, $tblStu) or die(mysqli_error($con));

					$tbluser = "INSERT INTO user(Occupation) VALUES ('$Usercode')";
					$LogR = mysqli_query($con, $tbluser) or die(mysqli_error());
					echo ", user(student)";

					//note: might be a html code
					echo "You are now Registered as Student";
					
				}
			}
		}
	}
	else
	{
		echo "Cannot add new record";
	}
?>