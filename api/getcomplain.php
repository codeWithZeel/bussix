<?php
	include '../admin/connection.php';

	$result = mysqli_query($conn,"select * from tbl_complaint");
	$response=array();
	while($row=mysqli_fetch_assoc($result))
	{
		$response[]=$row;
	}
	echo json_encode($response);
?>