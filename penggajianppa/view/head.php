<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2015 11:45:37 GMT -->
<head>
	<meta charset="utf-8" />
	<title>penggajian</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/funcy/jquery.fancybox.css" media="screen" />
    <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style_nyunyu.min.css" rel="stylesheet" />
    <link href="assets/css/style-responsive_nyunyu.min.css" rel="stylesheet" />
    <link href="assets/css/theme/default_nyunyu.css" rel="stylesheet" id="theme" />
    <link href="assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
    <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" />
    <link href="assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="assets/css/prettify/prettify.js"></script>
    <script src="assets/plugins/parsley/dist/parsley.js"></script>
    <link href="assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
    <link href="assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
    <script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="assets/plugins/parsley/dist/parsley.js"></script>
    
    <script src="assets/plugins/morris/raphael.min.js"></script>
    <script src="assets/plugins/bootbox/bootbox.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="assets/js/calendar.demo.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/masked-input/masked-input.min.js"></script>
    <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
    <script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="assets/js/form-plugins.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    function setUID(uid){
      
        document.getElementById("hiddenUID").value = uid;
        <?php
        $_SESSION['UIDisset']=true;
        ?>
    }
    </script>
    <script>
    function delz(){
    var uid = document.getElementById("hiddenUID").value.toString();
    var host = window.location.toString();
    var act = "<?php echo $_SESSION['action'];?>";
    var n = host.indexOf("index");
    var realhost= host.substring(0,n);
    
    $.ajax({
                type: "POST",
                url: realhost+'/'+act ,
                data: { "uid": uid },
                success : function() { 

                    location.reload();

                }
            });
    }
    </script>

    <script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
            Calendar.init();
        });
    </script>

  
  <script type="text/javascript">
  
    $(document).ready(
        function(){
           
            //Memanggil data dari json_pegawai untuk menampilkan data pegawai
            $("#nip").change(function(){
                   
                    var nip=$("#nip").val();
                    var bulan=$("#bulan").val();
                    var tahun=$("#tahun").val();
                   
                    $.ajax({
                    type:"POST",
                    data:{"nip": nip,"bulan": bulan,"tahun": tahun},
                    url :"json_pegawai.php",
                    
                    success:function(data){
                        $("#nama_pegawai").val(data.nama_pegawai);
                        $("#nama_jabatan").val(data.nama_jabatan);
                        $("#gaji_kontribusi").val(data.gaji_kontribusi);
                        $("#gaji_yci").val(data.gaji_yci);
                        $("#gaji_bersih").val((parseInt(data.gaji_yci)+parseInt(data.gaji_kontribusi)));
                        console.log(data);
                    }
                    });
                }
            );
        }
     ); 
  </script>

<script type="text/javascript">
  
  $(document).ready(
      function(){
        
          //Memanggil data dari json_mentor untuk menampilkan data mentor
          $("#jabatan").change(function(){
                  
                  var jab=$("#jabatan").val();
                  var bulan=$("#bulan").val();
                  var tahun=$("#tahun").val();
               
                  $.ajax({
                  type:"POST",
                  data:{"jab": jab,"bulan": bulan,"tahun": tahun},
                  url :"json_mentor.php",
                  
                  success:function(data){
                      $("#nama").val(data.nama);
                      $("#tarif_mentoring").val(data.mentoring);
                      $("#tarif_kehadiran").val(data.kehadiran);
                      $("#tarif_kunjungan").val(data.kunjungan);
                      $("#tarif_tutorial").val(data.tutorial);
                      $("#tarif_lesson").val(data.lesson);
                      $("#evaluasi").val(data.eva);
                      $("#inskeh").val(data.inskeh);
                      $("#insfile").val(data.insfile);
                  }
                  });
              }
          );
      }
   ); 
</script>
</head>
<body>

	<div id="page-loader" class="fade in">
        <span class="spinner"></span>
    </div>
</body>
</html>