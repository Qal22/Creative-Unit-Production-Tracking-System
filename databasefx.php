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

function addmilestone($data)
{
	global $dbc;

	$actionItemMR = "Manuscript Readiness";
	$startDateMR = $data["MRStartDate"];
	$targetDateMR = $data["MRTargetDate"];
	$actualDateMR = $data["MRActualDate"];
	$statusMR = $data["MRStatus"];

	$actionItemCD = "Concept Development";
	$startDateCD = $data["CDStartDate"];
	$targetDateCD = $data["CDTargetDate"];
	$actualDateCD = $data["CDActualDate"];
	$statusCD = $data["CDStatus"];

	$actionItemIT = "Illustration (Text)";
	$startDateIT = $data["ITStartDate"];
	$targetDateIT = $data["ITTargetDate"];
	$actualDateIT = $data["ITActualDate"];
	$statusIT = $data["ITStatus"];

	$actionItemIC = "Illustration (Cover)";
	$startDateIC = $data["ICStartDate"];
	$targetDateIC = $data["ICTargetDate"];
	$actualDateIC = $data["ICActualDate"];
	$statusIC = $data["ICStatus"];

	$actionItemGLT = "Graphic Layout (Text)";
	$startDateGLT = $data["GLTStartDate"];
	$targetDateGLT = $data["GLTTargetDate"];
	$actualDateGLT = $data["GLTActualDate"];
	$statusGLT = $data["GLTStatus"];

	$actionItemGLC = "Graphic Layout (Cover)";
	$startDateGLC = $data["GLCStartDate"];
	$targetDateGLC = $data["GLCTargetDate"];
	$actualDateGLC = $data["GLCActualDate"];
	$statusGLC = $data["GLCStatus"];

	$actionItemPC = "Proofing & Correction";
	$startDatePC = $data["PCStartDate"];
	$targetDatePC = $data["PCTargetDate"];
	$actualDatePC = $data["PCActualDate"];
	$statusPC = $data["PCStatus"];

	$actionItemPDP = "PDP & ISBN Application";
	$startDatePDP = $data["PDPStartDate"];
	$targetDatePDP = $data["PDPTargetDate"];
	$actualDatePDP = $data["PDPActualDate"];
	$statusPDP = $data["PDPStatus"];

	$query = "INSERT INTO dl_milestones VALUES
			('','$actionItemMR','$startDateMR','$targetDateMR','$actualDateMR','$statusMR'),
			('','$actionItemCD','$startDateCD','$targetDateCD','$actualDateCD','$statusCD'),
            ('','$actionItemIT','$startDateIT','$targetDateIT','$actualDateIT','$statusIT'),
            ('','$actionItemIC','$startDateIC','$targetDateIC','$actualDateIC','$statusIC'),
            ('','$actionItemGLT','$startDateGLT','$targetDateGLT','$actualDateGLT','$statusGLT'),
            ('','$actionItemGLC','$startDateGLC','$targetDateGLC','$actualDateGLC','$statusGLC'),
            ('','$actionItemPC','$startDatePC','$targetDatePC','$actualDatePC','$statusPC'),
            ('','$actionItemPDP','$startDatePDP','$targetDatePDP','$actualDatePDP','$statusPDP')";
	
	mysqli_query($dbc, $query);
	
	return mysqli_affected_rows($dbc);
}

?>