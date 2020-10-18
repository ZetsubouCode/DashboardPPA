<?php
	include "../config/config.php";
		$sql="UPDATE `t_penggajian` SET
		`tanggal_penggajian` = CURDATE(),
		`bulan` = '$_POST[bulan]',
		`tahun` = '$_POST[tahun]',
		`kontribusi_gereja` = '$_POST[kontribusi]',
		`kontribusi_yci` = '$_POST[yci]' WHERE `no_penggajian` =
		'$_POST[no_gaji]';";
	mysql_query($sql) or die("Gagal Memperbaharui");
	header ("location:../index.php?p=data_jabatanstaflainlain");
?>