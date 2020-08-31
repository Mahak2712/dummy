<?php
ob_start();
session_start();
 include("connection.php");
 include("loginDetail.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Voting System || Login</title>
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
	<div class="login">
		<div style="padding-bottom:20px;text-align:center;">If you don't have an account <a href="registration.php" style="color:#000000;font-weight:bold;"> Click Here</a></div>
		<form method="post">
			<table cellpadding="2px">
				<tr>
					<td>Phone</td>
					<td><input type="text" name="txtPhone" class="text" placeholder="Phone Number"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="txtPassword" class="text" placeholder="Password"/></td>
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
					<td>&nbsp;</td>
					<td><input type="submit" name="btnSubmit" value="Login" class="btn" /> </td>
				</tr>
				<tr>
					<td colspan="2"><?php if(isset($msg)) echo $msg;?></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
