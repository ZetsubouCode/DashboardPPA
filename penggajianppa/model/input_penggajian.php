

<?php
	 include "../config/config.php";
	 $sql="SELECT *FROM t_penggajian where nip='$_POST[nip]' and bulan='$_POST[bulan]' and tahun='$_POST[tahun]'";
	 $cek=mysql_num_rows(mysql_query($sql));
	 if ($cek>0) {
	 	?>
	 	<script type="text/javascript">
	 	alert('Gji pada bulan ini telah di input!');
	 	window.location.href="../index.php?p=data_gaji";
	 	</script>
	 	<?php
	 }else{
		$sql="INSERT INTO `t_penggajian`(
		`tanggal_penggajian`,
		`bulan`,
		`tahun`,
		`nip`,
		`gaji_pokok`,
		`tunjangan_jabatan`,
		`gaji_kunjungan`,
		`gaji_tutorial`,
		`gaji_lesson`,
		`gaji_evaluasi`,
		`gaji_inskeh`,
		`gaji_insfile`,
		`gaji_kontribusi`,
		`gaji_yci`,
		`bonus`,
		`potongan`)
		VALUES (CURDATE(),'$_POST[bulan]','$_POST[tahun]','$_POST[nip]','$_POST[gaji_pokok]','$_POST[tunjangan_jabatan]','$_POST[gaji_kunjungan]','$_POST[gaji_tutorial]','$_POST[gaji_lesson]','$_POST[gaji_evaluasi]','$_POST[gaji_inskeh]','$_POST[gaji_insfile]','$_POST[gaji_kontribusi]','$_POST[gaji_yci]','$_POST[bonus]','$_POST[potongan]')";
		mysql_query($sql) or die("Gagal Menyimpan");
		header ("location:../index.php?p=data_gaji");
	 	
	 }
?>