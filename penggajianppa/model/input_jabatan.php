<?php
	 include "../config/config.php";
	$sql="INSERT INTO `t_tarif_mentor`(
	`id_gaji`,
	`gaji`,
	`bonus`,
	`kunjungan`,
	`tutorial`,
	`lesson`
	
	)
	VALUES ('$_POST[id_gaji]',
			'$_POST[gapok]',
			'$_POST[bonus]',
			'$_POST[kunjungan]',
			'$_POST[tutorial]',
			'$_POST[lesson]')";
	mysql_query($sql) or die("Gagal Menyimpan");
	header ("location:../index.php?p=data_jabatan");
?>