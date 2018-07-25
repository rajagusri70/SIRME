<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIRME | Pasien</title>

  <!-- Bootstrap core CSS -->


  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <style type="text/css">
    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#0C9;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }

    .my-float{
      margin-top:22px;
    }
  </style>
  


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-user-md"></i> <span>SIRME</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <?php foreach ($users as $user) { ?>
              <img src="<?php echo base_url('images/') ?>admin/<?php echo $user->foto ?>" alt="..." class="img-circle profile_img">
              <?php } ?>
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <?php foreach ($users as $user) { ?>
                <h2>Dr. <?php echo $user->nama ?></h2>
              <?php } ?>
            </div>
          </div>
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3><?php foreach ($users as $user) { ?>
                <?php echo $user->tipe_admin ?> <?php echo $user->spesialis ?>
              <?php } ?></h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('resepsionis/home') ?>">Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('resepsionis/pasien/') ?>">Cari Pasien</a>
                    </li>
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>" >Pendaftaran Pasien Baru</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Rawat Jalan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('resepsionis/pasien/pasien_lama') ?>">Pendaftaran Pasien Lama</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-money"></i> Kasir <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('resepsionis/kasir/transaksi') ?>">Transaksi Diterima</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Dr. 
                  <?php foreach ($users as $user) {
                    echo $user->nama;
                  } ?>
                  <span class=" fa fa-angle-down"></span>
                  
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?php echo base_url('admin/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                Pendaftaran Pasien Baru
              </h3>
            </div>

            <div class="title_right">
              
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('resepsionis/pasien/daftar'); ?>" method="post" enctype="multipart/form-data" >
            <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                
                <div class="x_content">
                  <br />
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="input_nama" id="nama" required="required" class="normal-form-long"  >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="input_jenis_kelamin" value="Laki-laki" > &nbsp; Laki-laki &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="input_jenis_kelamin" value="Perempuan" checked=""> Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tgl. Lahir<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="input_tanggal_lahir" id="tanggal_lahir" required="required" class="normal-form-long" onchange="cekData()" >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tempat_lahir" name="input_tempat_lahir" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor KTP<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="nomor_ktp" name="input_no_ktp" required="required" class="normal-form-long" onchange="cekKtp()" >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor KK<span></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="input_no_kk" id="input_no_kk" class="normal-form-long">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gol. Darah<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label><input type="radio" class="flat" name="input_golongan_darah" id="" value="A" /> A</label>
                        <labek><input type="radio" class="flat" name="input_golongan_darah" id="" value="B" /> B</labek>
                        <label><input type="radio" class="flat" name="input_golongan_darah" id="" value="AB" /> AB</label>
                        <label><input type="radio" class="flat" name="input_golongan_darah" id="" value="O" /> O</label>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_alamat" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="foto" class="btn btn-primary" name="input_foto" class="">
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-xs-12">

              <div class="x_panel">
              
                <div class="x_content">
                  <br />
                  

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_pekerjaan" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_pendidikan" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pernikahan</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="normal-form-long" name="input_status_pernikahan">
                          <option value="Belum Nikah">Belum Nikah</option>
                          <option value="Sudah Nikah">Sudah Nikah</option>
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Orangtua<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_nama_orangtua" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Orangtua
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_pekerjaan_orangtua" class="normal-form-long"  type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Suami/Istri
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_nama_suamistri" class="normal-form-long" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_agama" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" name="input_no_telpon" class="normal-form-long" required="required" type="number">
                      </div>
                    </div>
                    <!-- ============== -->
                </div>
              </div>
            </div>
              <input id="tombol_submit" type="submit" name="submit" class="btn float" value="Daftar" style="font-weight: bold; font-size: 12px" >
            
            </form>


          </div>
        </br></br>
        </div>


        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Sistem Informasi Rekam Medis Elektronik - <a href="<?php echo(base_url()) ?>">SIRME</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>/assets/js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url(); ?>/assets/js/pace/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
  <!-- form validation -->
  <script src="<?php echo base_url(); ?>/assets/js/validator/validator.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datepicker/locales/bootstrap-datepicker.id.min.js">
  </script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>

   
  
  <script type="text/javascript">
    function cekData(){
      var nama_value = $("input[name=input_nama]").val();
      var tanggal_lahir_value = $("input[name=input_tanggal_lahir]").val();
        $.ajax({
          url: "<?php echo base_url().'resepsionis/pasien/cek_id' ?>",
          type: 'POST',
          data: {jenis_cek: 'nama', nama: nama_value, tanggal_lahir: tanggal_lahir_value},
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "Nama telah terdaftar.!!!",
              text: "Nama yang dimasukan mungkin telah terdaftar. Untuk memastikan, silahkan gunakan fitur Cari Pasien untuk mencari nama yang bersangkutan",
              icon: "warning",
              button: "Oke",
            });
          },
          error: function(data) {
            
          }
        });
    }
  </script>
  
  <script type="text/javascript">
    function cekKtp(){
      var nomor_ktp_value = $("input[name=input_no_ktp]").val();
        $.ajax({
          url: "<?php echo base_url().'resepsionis/pasien/cek_id' ?>",
          type: 'POST',
          data: {jenis_cek: 'no_ktp', no_ktp: nomor_ktp_value},
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "No KTP Telah Terdaftar.!",
              text: "No. KTP yang dimasukkan telah terdaftar. Pendaftaran tidak dapat dilanjutkan. Silahkan gunakan fitur Cari Pasien untuk mencari pasien dengan No. KTP tersebut.",
              icon: "warning",
              button: "Oke",
            });
            $("#tombol_submit").prop('disabled', true);
          },
          error: function(data) {
            $("#tombol_submit").prop('disabled', false);
          }
        });
    }
  </script>
  <script type="text/javascript">
    $('#tanggal_lahir').datepicker({
      language: 'id',
      format: 'dd - MM - yyyy',
    });
  </script>
  
</body>

</html>