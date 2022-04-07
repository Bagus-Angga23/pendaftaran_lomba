<?php 
	header("Content-type: application/json; charset=ISO-8859-1");
	include_once "koneksi.php";

	$sql = "select * from jenis_lomba";
	$query = mysqli_query($koneksi, $sql);

	$arrLomba = array();
	while ($row = mysqli_fetch_array($query)){
		$arrLomba[] = $row;
	}
	echo json_encode($arrLomba );
	mysqli_close($koneksi);
 ?>