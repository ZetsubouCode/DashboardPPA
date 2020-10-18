<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
            <li><a href="<?php echo "http://".$_SERVER['SERVER_NAME'].substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-15);?>"> Home</a></li>
				<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI'];?>">Master</a></li>
				<li class="active">Data Mentoring</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Data Mentoring</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Tambah Data Mentoring</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="data_pengguna" action="./model/input_mentoring.php" method="POST">
								<div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" >Bulan/Tahun </label>
                                <div class="col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select  class="form-control" name="bulan" id="bulan">
                                                    <?php
                                                        $arr = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                                            foreach ($arr as $key) {
                                                                echo "<option value='$key'>$key";
                                                            }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="tahun" class="form-control" id="tahun">
                                                        <?php
                                                        for ($i = 2020; $i < 2050; $i++) {
                                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Pos Pelayanan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="kode_jabatan" data-live-search="true" data-style="btn-white" class="form-control selectpicker" >
                                             <option value="1">---- Pilih Pos Pelayanan ----</option>
                                             <?php
                                            include "config/config.php";
                                             $sql = mysql_query("SELECT * FROM tb_jabatan j join t_pegawai p on (j.kode=p.id_jabatan) where kategori_jabatan='Mentor' ORDER BY nama_jabatan ASC");
                                             if(mysql_num_rows($sql) != 0){
                                                 while($data = mysql_fetch_assoc($sql)){
                                                     echo '<option value={"id":"'.$data['kode'].'","nama":"'.$data['nama_jabatan'].'"}>'.$data['nama_jabatan'].'</option>';
                                                 }
                                             }
                                             ?>
                                                </select>
                                    </div>
								</div>
                                <input type="text" style="display:none" name="nip" value="<?php echo $data['nip']?>"/>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Jumlah Anak :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="anak" placeholder="Mentoring"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Persentase Kehadiran Anak :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="kehadiran" placeholder="Kehadiran" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Jumlah Kehadiran Anak &#60;80% :</label>
                                    <div class="col-md-6 col-sm-6">
                                    <select name="bonus" data-live-search="true" data-style="btn-white" class="form-control selectpicker" >
                                             <option value="x">---- Pilih ----</option>
                                             <option value="1">Ya</option>
                                             <option value="0">Tidak</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Jumlah Kunjungan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="kunjungan" placeholder="Kunjungan" />
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Jumlah Pertemuan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="pertemuan" placeholder="Pertemuan" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Lesson plan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="lesson" placeholder="Lesson" />
                                    </div>
                                </div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary btn-sm">Submit</button> <button type="reset" class="btn btn-danger btn-sm">Reset</button>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">List Komponen Gaji Mentor</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Periode Mentoring</th>
                                        <th>Jumlah Anak</th>
                                        <th>Kehadiran Anak</th>
                                        <th>Jumlah Kehadiran Anak &#60;80%</th>
                                        <th>Kunjungan</th>
                                        <th>Pertemuan</th>
                                        <th>Lesson Plan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        include "config/config.php";
                                        include "deleteModal.php";  
                                        $halaman = "index.php?p=data_mentoring";
                                        $action = "model/hapus_mentoring.php";
                                        $_SESSION['deleteTable']="t_penggajian";
                                        $_SESSION['deleteUID']="no_penggajian";
                                        $_SESSION['action']=$action;
                                        $i=0;
                                            $sql=mysql_query("select * from t_penggajian where id_gaji is not null");
                                            while($data=mysql_fetch_array($sql)){
                                                $i++;
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $data['id_gaji']; ?></td>
                                                <td><?php echo $data['bulan']." / ".$data['tahun']; ?></td>
                                                <td><?php echo number_format($data['jumlah_anak']); ?></td>
                                                <td><?php echo number_format($data['kehadiran_anak']); ?></td>
                                                <td><?php echo number_format($data['j_kehadirananak']); ?></td>
                                                <td><?php echo number_format($data['j_kunjungan']); ?></td>
                                                <td><?php echo number_format($data['j_pertemuan']); ?></td>
                                                <td><?php echo number_format($data['lesson']); ?></td>
                                                <td align="center">
                                                    <a class="btn btn-default btn-icon btn-sm" href="index.php?p=edit_mentoring&&id=<?php echo $data['no_penggajian']; ?>"><i class="fa fa-expand"></i></a>
                                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="modal" data-target="#deletemodal" onclick="setUID('<?php echo $data['no_penggajian'];?>')"><i class="fa fa-times"></i></a>
                                                    
                                                </td>
                                            </tr>
                                            <?php 
                                        }
                                    ?>
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
                       <?php 
        }else{
            ?>
            <script type="text/javascript">
                window.location.href="halaman_error.php";
            </script>
        <?php
        }
     ?>