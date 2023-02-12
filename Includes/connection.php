<?php
	// 000webhost database info
	//host: localhost
	//user: id19355043_root
	//pass: h9DT3Iti59rW#th4
	//db name: id19355043_book_monitoring
	$con = mysqli_connect("localhost", "root", "","Book_Monitoring") or die ("Cannot Find Host" . mysqli_connect_error());
	if($con)
	{
		//$db = "create database IF NOT EXISTS Book_Monitoring_2";
		//mysqli_query($con,$db) or die (mysqli_error($con));
		mysqli_select_db($con, "Book_Monitoring");
		$tbl1 = "create table IF NOT EXISTS Login(LgID varchar(20),Username varchar(20),Password varchar(20),UID varchar(20),StID int(8), PRIMARY KEY(LgID))"; //UID int(8) = UID varchar(20)
		mysqli_query($con, $tbl1) or die (mysqli_error($con));
		
		$tbl2  = "create table IF NOT EXISTS User(UID int(8) NOT NULL AUTO_INCREMENT, Occupation varchar(20), PRIMARY KEY(UID))";
		mysqli_query($con, $tbl2)or die (mysqli_error($con));
		
		$stbl = "create table IF NOT EXISTS Students(RID int(20) AUTO_INCREMENT, SFname varchar(20), SMname varchar(20), SLname varchar(20), SID varchar(20), LvlID varchar(8), SectID varchar(8), SyID varchar(8), TrID varchar(8), StrID varchar(8), PRIMARY KEY(RID))";
		mysqli_query($con, $stbl) or die (mysqli_error($con));
		
		//$ttbl = "create table IF NOT EXISTS Track(TrID int(8) AUTO_INCREMENT, TrackDesc varchar(20), PRIMARY KEY(TrID))";
		//mysqli_query($con, $ttbl) or die (mysqli_error($con));
		
		//$strtbl = "create table IF NOT EXISTS Strand(StrID varchar(8), StrandDesc varchar(20), TrID int(8), PRIMARY KEY(StrID))";
		//mysqli_query($con, $strtbl) or die (mysqli_error($con));
		
		//$semtbl = "create table IF NOT EXISTS Semester(SemID varchar(8), SemesterDesc varchar(20), PRIMARY KEY(SemID))";
		//mysqli_query($con, $semtbl) or die (mysqli_error($con));
		
		$lvltbl = "create table IF NOT EXISTS Level(LvlID varchar(8), LevelDesc varchar(20), PRIMARY KEY(LvlID))";
		mysqli_query($con, $lvltbl) or die (mysqli_error($con));
		
		$scttbl = "create table IF NOT EXISTS Section(SectID varchar(8), SectDesc varchar(20), PRIMARY KEY(SectID))";
		mysqli_query($con, $scttbl) or die (mysqli_error($con));
		
		$sytbl = "create table IF NOT EXISTS School_Year(SyID int(8) AUTO_INCREMENT, SYDesc varchar(20), PRIMARY KEY(SyID))";
		mysqli_query($con, $sytbl) or die (mysqli_error($con));
		
		$lbtbl = "create table IF NOT EXISTS Librarian(RID int(20) AUTO_INCREMENT, LFname varchar(20), LMname varchar(20), LLname varchar(20),LID varchar(20), PRIMARY KEY(RID))";
		mysqli_query($con, $lbtbl) or die (mysqli_error($con));
		
		//$stattbl = "create table IF NOT EXISTS Status(StID int(8) AUTO_INCREMENT, Status varchar(20), PRIMARY KEY(StID))";
		//mysqli_query($con, $stattbl) or die (mysqli_error($con));
		
		$btbl = "create table IF NOT EXISTS Books_Information(BID varchar(15), BTitle varchar(50), Author varchar(50), Publisher varchar(50), Year varchar(20), BsID int(8), PRIMARY KEY(BID))";
		mysqli_query($con, $btbl) or die (mysqli_error($con));
		
		$bsttbl = "create table IF NOT EXISTS Book_Status(BsID int(8) AUTO_INCREMENT, Availability varchar(20), Borrowed varchar(20), PRIMARY KEY(BsID))";
		mysqli_query($con, $bsttbl) or die (mysqli_error($con));
		
		$transtbl = "create table IF NOT EXISTS Transactions(TID varchar(10), Date_Borrowed varchar(20), SemID int(8), Due_Date varchar(20), SID int(8), BID varchar(10), PRIMARY KEY(TID))";
		mysqli_query($con, $transtbl) or die (mysqli_error($con));
		
		$reqtbl = "create table IF NOT EXISTS Requests(RqID varchar(10), SID int(8), BID varchar(10), Status varchar(20), Date_Requested varchar(20), SemID int(8), PRIMARY KEY(RqID))";
		mysqli_query($con, $reqtbl) or die (mysqli_error($con));
	}
	else
	{
		mysql_select_db($con, $db);
	}

?>