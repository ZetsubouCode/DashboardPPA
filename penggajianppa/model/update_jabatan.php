<?php
	include "../config/config.php";
		$sql="UPDATE `t_tarif_mentor` SET
		`id_gaji` = '$_POST[id_gaji]',
		`gaji` = '$_POST[gapok]',
		`bonus` = '$_POST[tunjangan]',
		`kunjungan` = '$_POST[kunjungan]',
		`tutorial` = '$_POST[tutorial]',
		`lesson` = '$_POST[lesson]'
		WHERE `id_gaji` ='$_POST[id_gaji_lama]';";
	mysql_query($sql) or die("Gagal Memperbaharui");
	header ("location:../index.php?p=data_jabatan");
?>