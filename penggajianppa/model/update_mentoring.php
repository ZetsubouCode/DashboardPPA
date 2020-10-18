<?php
	include "../config/config.php";
		$sql="UPDATE `t_penggajian` SET
		`bulan` = '$_POST[bulan]',
		`tahun` = '$_POST[tahun]',
		`jumlah_anak` = '$_POST[anak]',
		`kehadiran_anak` = '$_POST[kehadiran]',
		`j_kehadirananak` = '$_POST[bonus]',
		`j_kunjungan` = '$_POST[kunjungan]',
		`j_pertemuan` = '$_POST[pertemuan]',
		`lesson` = '$_POST[lesson]'
		
		WHERE `no_penggajian` ='$_POST[id_gaji_lama]';";
	mysql_query($sql) or die("Gagal Memperbaharui");
	header ("location:../index.php?p=data_mentoring");
?>