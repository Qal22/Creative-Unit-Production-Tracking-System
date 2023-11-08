<?php
	
	$xtitle=$_POST['projectTitle'];
	$xsiri=$_POST['projectSiri'];
	$xcategory=$_POST['typeofCategory'];
	$xsize=$_POST['projectSize'];
	$xpages=$_POST['totalPages'];
    $xdesign=$_POST['typeDesign'];
    $xfinishing=$_POST['finishing'];

		$dbc=mysqli_connect("localhost","root","","Creative-Unit-Production-Tracking-System");

	if (mysqli_connect_errno()) 
	{
		echo "Failed to open the database".mysqli_error();
	}

	$sqlin= "INSERT INTO `project` (`projectID`, `Title`, `Siri`, `Category`, `typeOfDesign` , `typeOfFinishing` , `ProjectSize` , `TotalPages`) VALUES ('$xtitle', '$xsiri', '$xcategory', '$xdesign', '$xfinishing','$xsize','$xpages');";
	$chkerr=mysqli_query($dbc,$sqlin);

	if (false==$chkerr) 
	{
		// to display error...
		echo mysqli_error($dbc);
	}
	if ($chkerr) 
	{
		print "<script>alert('One Record Been Added')</script>";
		print '<script>window.location.assign("addnewproject.php");</script>';
	}
	else
	{
		print "<script>alert('Warning : No Record Been Added')</script>";
	}

?>