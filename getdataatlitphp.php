<?php 
	header("Content-type: application/json; charset=ISO-8859-1");
	include_once "koneksi.php";

	$sql = "select * from data_atlit";
	$query = mysqli_query($koneksi, $sql);

	$arrAtlit = array();
	while ($row = mysqli_fetch_array($query)){
		$arrAtlit[] = $row;
	}
	echo json_encode($arrAtlit );
	mysqli_close($koneksi);
 ?>