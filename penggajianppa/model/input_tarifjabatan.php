<?php
	 include "../config/config.php";
	$sql="UPDATE `t_penggajian`
	SET
	`tanggal_penggajian` = CURDATE(),
	`Evaluasi`=	$_POST[evaluasi],
	`inkeh`=$_POST[inskeh],
	`insfile`=$_POST[insfile],
	`id_pk`=$_POST[kodeID]
	WHERE bulan=$_POST[bulan] and tahun=$_POST[tahun]
	";

	mysql_query($sql) or die("Gagal Menyimpan");
	header ("location:../index.php?p=data_tarifjabatan");
?>