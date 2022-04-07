<?php
	include_once "koneksi.php";
	$data = json_decode(file_get_contents('php://input'), true);
	$lomba_id=$data['lomba_id'];
	$kategori_lomba=$data['kategori_lomba'];
	$cabang_olahraga=$data['cabang_olahraga'];

	$sql = "update jenis_lomba set kategori_lomba='$kategori_lomba', cabang_olahraga='$cabang_olahraga',where lomba_id='$lomba_id'";
	
	
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