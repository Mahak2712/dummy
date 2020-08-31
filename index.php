<?php include("connection.php");
if(isset($_SESSION["Phone"]))
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Voting System || Home</title>
<style>
.button	a:link, a:visited {
  background-color:#000000;
  color: white;
  padding-left:20px;
  padding-right:20px;
  padding-top:7px;
  padding-bottom:7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.button a:hover
{
	background-color:#FFFFFF;
	color:#000000;
	font-weight:bold;
	text-decoration:underline;
}

</style>
</head>

<body>
	<div class="header" style="text-align:center">
		<a href="index.php" style="text-decoration:none;color:#FFFFFF">Online Voting System</a>
	</div>
	<div class="data">
			<div>
				<img src="img/bjp1.jpeg" class="icon" />
				<h2>BJP</h2>
				<?php
				$qry="Select * from tbl_catergory where CId=3";
				$tbl=mysqli_query($con,$qry);
				if(mysqli_affected_rows($con)>0)
				{
				if($row = mysqli_fetch_assoc($tbl))
		{
	?>
				<h3>Vote : <?php echo $row["Vote"];?></h3><?php } }?>
			</div>
			<div>
				<img src="img/congress.png" class="icon" />
				<h2>Congress</h2>
				<?php
				$qry="Select * from tbl_catergory where CId=4";
				$tbl=mysqli_query($con,$qry);
				if(mysqli_affected_rows($con)>0)
				{
				if($row = mysqli_fetch_assoc($tbl))
		{
	?>
				<h3>Vote : <?php echo $row["Vote"];?></h3><?php } }?>
			</div>
			<div>
				<img src="img/others.png" class="icon" />
				<h2>Others</h2>
				<?php
				$qry="Select * from tbl_catergory where CId=5";
				$tbl=mysqli_query($con,$qry);
				if(mysqli_affected_rows($con)>0)
				{
				if($row = mysqli_fetch_assoc($tbl))
		{
	?>
				<h3>Vote : <?php echo $row["Vote"];?></h3><?php } }?>
			</div>
	</div>
	<div class="button">
		<a href="login.php">Login</a>
	</div>
</body>
</html>
