<?php
	 include "../config/config.php";
	 $dataJson=json_decode($_POST['kode_jabatan']);
	
	
	$sql="INSERT INTO `t_penggajian`(
	
	`bulan`,
	`tahun`,
	`nip`,
	`jumlah_anak`,
	`kehadiran_anak`,
	`j_kehadirananak`,
	`j_kunjungan`,
	`j_pertemuan`,
	`lesson`,
	`id_gaji`
	)
	VALUES (
			
			`$_POST[bulan]`,
			`$_POST[tahun]`,
			`$_POST[nip]`,
			'$dataJson->id',
			'$_POST[anak]',
			'$_POST[kehadiran]',
			'$_POST[bonus]',
			'$_POST[kunjungan]',
			'$_POST[pertemuan]',
			'$_POST[lesson]',
			'$dataJson->nama')";
	print($dataJson->id." ".$dataJson->nama);
	
	(mysql_query($sql) ) or die("Gagal Menyimpan");

	header ("location:../index.php?p=data_mentoring");
?>