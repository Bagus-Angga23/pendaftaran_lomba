<?php
	include_once "koneksi.php";
	$data = json_decode(file_get_contents('php://input'), true);
	$lomba_id=$data['lomba_id'];

	$sql = "delete from jenis_lomba where lomba_id='$lomba_id'";
	
	$info=array();
	$info['sql']=$sql;
	if (mysqli_query($koneksi, $sql)) {
		$info['success'] =1;
		$info['detail'] = 'success';
	} else {
		$info['success'] =0;
		$info['detail'] =mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
	echo json_encode($info);
?>