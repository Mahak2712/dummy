<?php 
ob_start();
session_start();
include("connection.php");
if(!isset($_SESSION["Phone"]))
{
	header("Location:Login.php");
	$msg = "Data Not Send";
}

if(isset($_REQUEST["id"]))
{
	$sql="Update tbl_registration set Status=1 where Phone='".$_SESSION["Phone"]."'";
	mysqli_query($con,$sql);
	
	$sql="Update tbl_catergory set Vote=Vote+1 where CId=".$_REQUEST["id"];
	mysqli_query($con,$sql);
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Voting System</title>
<style>
.btn
{
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

.btn:hover
{
font-weight:bold;
}
 
a:hover
{
opacity:50%;
}
</style>
</head>

<body>
	<div class="header">
		<div style="float:left;padding-left:370px;">Online Voting System</div>
		<div style="float:left"><a href="index.php"><img src="img/l.png" width="30px" height="30px" style="margin-left:20px;margin-top:20px;" /></a></div>
	</div>
	<div class="main">
		<div class="main1">
			<form method="post">
			<?php 
			$qry="Select * from tbl_registration where Phone='".$_SESSION["Phone"]."'";
			$tbl=mysqli_query($con,$qry);
			if(mysqli_affected_rows($con)>0)
			{
			$i=1;
				while($row = mysqli_fetch_assoc($tbl))
				{
			?>
				<table cellpadding="5px">
					<tr>
						<td colspan="2" align="center" style="padding-bottom:20px"><?php  echo  $row["Name"];?></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-bottom:20px"><img src="<?php  echo  $row["ImgUrl"];?>" width="70px" height="70px" style="border-radius:10%;padding-left:80px;"/></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php  echo  $row["Name"];?></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><?php  echo  $row["Phone"];?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php  echo  $row["City"];?></td>
					</tr>
					<tr>
						<td>State</td>
						<td><?php  echo  $row["State"];?></td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<td><?php  echo  $row["DOB"];?></td>
					</tr>
					<tr>
						<td>Addresss</td>
						<td><?php  echo  $row["Address"];?></td>
					</tr>
					
					<tr>
						<td>Status</td>
						<td style="color:red"><?php  if ($row["Status"] == 1) { echo " Voted "; }?>
						</td>
					</tr>
					
					
					
				</table>
				<?php }} ?>
			</form>
		</div>
		
		<div class="main2">
			<table cellpadding="2px" cellspacing="10px" style="width:100%">
				<tr>
					<td style="width:25%">S.No</td>
					<td style="width:25%">Category</td>
					<td style="width:25%">Sign</td>
					<td style="width:25%">Action</td>
				</tr>
				<?php
				$sql="SELECT * FROM tbl_catergory";
				$tbl=mysqli_query($con,$sql);
				$i=1;
				while($row=mysqli_fetch_assoc($tbl))
				{	
				?>
				
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $row["CName"]; ?></td>
					<td><img src="<?php echo $row["Photo"]; ?>" width="70px" height="70px"/></td>
					<td><a href="main.php?id=<?php echo $row["CId"]; ?>" class="btn">Vote</a></td>
				</tr>
				<?php
					}  	 	 
				?>	
			</table>
		</div>
	</div>
</body>
</html>
