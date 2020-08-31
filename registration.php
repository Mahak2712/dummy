<?php
ob_start();
session_start();
 include("connection.php");
 include("registrationDetail.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Voting System || Registration</title>
<style>
.dropdown
{
float:left;
width:300px;
height:30px;
padding:2px;
box-sizing-border-box;
}

.text
{
float:left;
width:293px;
height:25px;
padding:2px;
box-sizing-border-box;
}

.btn
{
  background-color:#000000;
  color: white;
  padding-left:20px;
  padding-right:20px;
  padding-top:7px;
  margin-left:75px;
  padding-bottom:7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.btn:hover
{
font-weight:bold;
}

</style>
</head>

<body>
	<div class="header" style="text-align:center">
		<a href="index.php" style="text-decoration:none;color:#FFFFFF">Online Voting System</a>
	</div>
	<div class="register">
		<form method="post" enctype="multipart/form-data">
			<table cellpadding="2px">
				<tr>
					<td>Name</td>
					<td><input type="text" name="txtName" class="text" placeholder="Name"/></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="txtPhone" class="text" placeholder="Phone Number"/></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="txtCity" class="text" placeholder="City"/></td>
				</tr>
				<tr>
					<td>State</td>
					<td><input type="text" name="txtState" class="text" placeholder="State"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="txtPassword" class="text" placeholder="Password"/></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="text" name="txtDOB" class="text" placeholder="e.g. 2020-06-7"/></td>
				</tr>
				<tr>
					<td>Addresss</td>
					<td><textarea name="txtAddress" rows="2" cols="40">Enter Addresss here....</textarea></td>
				</tr>
				
				<tr>
					<td>Belongs To</td>
					<td><select name="ddlBelongs" class="dropdown">
							<option value="Voter">Voter</option>
							<option value="Group">Group</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td><input type="file" name="fu_Img" class="text" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="btnSubmit" value="Submit" class="btn" /> </td>
				</tr>
				<tr>
					<td colspan="2"><?php if(isset($msg)) echo $msg;?></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
