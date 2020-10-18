<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
            <li><a href="<?php echo "http://".$_SERVER['SERVER_NAME'].substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-19);?>">Home</a></li>
				<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI'];?>">Admin</a></li>
				<li class="active">Edit Komponen Gaji Staff </li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Komponen Gaji Staff</h1>
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
                            <h4 class="panel-title">Edit  Komponen Gaji Staf</h4>
                        </div>
                        <div class="panel-body panel-form">
                   <?php 
                      include "config/config.php";
                      $sql="select pg.bulan,pg.tahun,pg.nip,p.nama_pegawai,j.nama_jabatan,j.kategori_jabatan,pg.kontribusi_gereja,pg.kontribusi_yci from t_penggajian pg join t_pegawai p on (pg.nip=p.nip) join tb_jabatan j on (p.id_jabatan=j.kode) where pg.no_penggajian='$_GET[id_gaji]'";
                      $tampil=mysql_query($sql);
                      while($data=mysql_fetch_array($tampil)){
                     ?>
                            <form class="form-horizontal form-bordered" data-parsley-validate="true"  action="./model/update_jabatanstaf.php" method="POST">
                            <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" >Bulan/Tahun </label>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select  class="form-control" name="bulan" id="bulan">
                                                    <?php
                                                        $arr = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                                        echo '<option value="' . $data['bulan'] . '">' .  $data['bulan']. '</option>';
                                                            foreach ($arr as $key) {
                                                                echo "<option value='$key'>$key";
                                                            }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="tahun" class="form-control" id="tahun">
                                                        <?php
                                                         echo '<option value="' . $data['tahun'] . '">' .  $data['tahun']. '</option>';
                                                        for ($i = 2020; $i < 2050; $i++) {
                                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <?php 
                                 
                                 ?>
                            <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">NIP :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="nip" value="<?php echo $data['nip'];?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Nama :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="nama" value="<?php echo $data['nama_pegawai'];?>" readonly />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Pos Pelayanan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="nama_jabatan" value="<?php echo $data['nama_jabatan'];?>" readonly />
                                    </div>
                                </div>
                           
                            <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Gaji Dari Gereja :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="kontribusi" value="<?php echo $data['kontribusi_gereja'];?>" />
                                    </div>
                                </div>

                            <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Gaji Dari YCI :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="number" name="yci" value="<?php echo $data['kontribusi_yci'];?>" />
                                        <input type="text" style="display:none" name="no_gaji" value="<?php echo $_GET['id_gaji']?>"/>
                                    </div>
                                  
                                </div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary btn-sm">Update</button>
									</div>
								</div>
                            </form>
                      <?php
                  }
                  ?>
                        </div>
                    </div>
                </div>
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