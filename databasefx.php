<?php

$dbc=mysqli_connect("localhost", "root", "", "cup tracking");
if(mysqli_connect_errno())
{
    echo"Database Connection Error" .mysqli_connect_error($dbc);
}

function query($query)
{
	global $dbc;
	
	$result  = mysqli_query($dbc,$query);
	
	$rows = [];
	
	while ($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	
	return $rows;
}

function addproject($data)
{
	global $dbc;
	
	$title = $data["projectTitle"];
	$siri = $data["projectSiri"];
	$category = $data["typeOfCategory"];
	$size = $data["projectSize"];
	$pages = $data["totalPages"];
	$design = $data["typeDesign"];
	$finishing = $data["finishing"];
	$dummy = "1";
	
	$query = "INSERT INTO project VALUES ('','$title','$siri','$category','$design','$finishing','$size','$pages','$dummy','$dummy','$dummy','$dummy')";
	
	mysqli_query($dbc, $query);
	
	return mysqli_affected_rows($dbc);
}

?>