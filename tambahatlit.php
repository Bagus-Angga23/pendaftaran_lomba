<?php
	include_once "koneksi.php";
	$data = json_decode(file_get_contents('php://input'), true);
	$atlit_id=$data['atlit_id'];
	$atlit_nama=$data['atlit_nama'];
	$tanggal_lahir=$data['tanggal_lahir'];
	$tempat_lahir=$data['tempat_lahir'];
	$alamat=$data['alamat'];


	$sql = "insert into data_atlit(atlit_id, atlit_nama, tanggal_lahir,  tempat_lahir, alamat) values('$atlit_id', '$atlit_nama', '$tanggal_lahir',  '$tempat_lahir', '$alamat')";
	
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