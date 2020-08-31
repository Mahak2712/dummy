<?php
if(isset($_REQUEST["btnSubmit"]))
	{
	$qry="Select * from tbl_Registration where Phone='".$_REQUEST["txtPhone"]."' and Password='".$_REQUEST["txtPassword"]."' and Member='".$_REQUEST["ddlBelongs"]."' ";
	$tbl=mysqli_query($con,$qry);
		if($tbl)
		{
			if(mysqli_affected_rows($con)>0)
			{
				$_SESSION["Phone"]=$_REQUEST["txtPhone"];
				header("Location:main.php");
			}
			else
			{
				$msg ="Wrong UserName and Password";
			}
		}
	}
?>