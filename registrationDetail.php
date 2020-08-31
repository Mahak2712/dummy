<?php  
	if(isset($_REQUEST["btnSubmit"]))
	{
	$qry="Select * from tbl_Registration where Phone='".$_REQUEST["txtPhone"]."'";
	$tbl=mysqli_query($con,$qry);
			if($tbl)
			{
				if(mysqli_affected_rows($con)>0)
				{
					$msg="User Already Registered";	
				}
				else
				{					
					
						$qry="Insert Into tbl_Registration(Name,Phone,Address,City,State,Password,DOB,Member,Status) Values('".$_REQUEST["txtName"]."','".$_REQUEST["txtPhone"]."','".$_REQUEST["txtAddress"]."','".$_REQUEST["txtCity"]."','".$_REQUEST["txtState"]."','".$_REQUEST["txtPassword"]."','".$_REQUEST["txtDOB"]."','".$_REQUEST["ddlBelongs"]."',0)";
						//echo $qry;
						mysqli_query($con,$qry);
						$_SESSION["Phone"]=$_REQUEST["txtPhone"];
						
						$sql="SELECT MAX(RId) as Id FROM tbl_Registration ";
						$tbl=mysqli_query($con,$sql);
						
						if($row=mysqli_fetch_array($tbl))
						{
							$id= $row["Id"];
							
							$fn=$_FILES['fu_Img']['name'];
							$spath=$_FILES['fu_Img']['tmp_name'];
							
							$ext=pathinfo($fn, PATHINFO_EXTENSION);
							
							
							$dpath="img/uploadImg/" .$id. "." .$ext; 
														
							move_uploaded_file($spath,$dpath);
							
							$sql="Update tbl_Registration Set ImgUrl='".$dpath."' where RId=".$id;
							mysqli_query($con,$sql);
						}
						else
						{
						echo $dpath."Format is wrong";
						}	
												
						if (isset($_SESSION["Phone"]))
						{
						header("Location:main.php");
						}
						$_REQUEST["txtName"]="";
						$_REQUEST["txtPhone"]="";
						$_REQUEST["txtAddress"]="";
						$_REQUEST["txtCity"]="";
						$_REQUEST["txtState"]="";
						$_REQUEST["txtPassword"]="";
						$_REQUEST["txtDOB"]="";
				}
			}
}