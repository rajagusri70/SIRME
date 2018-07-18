<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIRME | Dokter</title>

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
              <h3>&nbsp;</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('resepsionis/home') ?>">Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Manajemen User <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>" >Tambah Dokter</a>
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
                Penambahan Dokter
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
                <div class="x_title">
                  <h2>Data Pribadi</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dokter<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="input_nama" id="nama" required="required" class="normal-form-long">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="input_jenis_kelamin" value="Laki-laki" checked="" > &nbsp; Laki-laki &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="input_jenis_kelamin" value="Perempuan" > Perempuan
                          </label>
                        </div>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="kota" name="input_kota" class="normal-form-long" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">No. HP<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="no_hp" name="input_no_hp" class="normal-form-long" required="required" type="number">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="email" name="input_email" class="normal-form-long" required="required" type="number">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="foto" class="btn btn-primary" name="input_foto" class="">
                      </div>
                    </div>
                  </br></br></br>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Spesialisasi</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Spesialis</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="normal-form-long" name="input_spesialis">
                          <option value="none">- pilih spesialis -</option>
                          <?php foreach ($poliklinik as $poli) {?>
                          <option value="<?php echo $poli->nama_poli ?>"><?php echo $poli->nama_poli ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>
                    <!-- ============== -->
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Informasi Akun</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">User ID<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="user_id" name="input_user_id" class="normal-form-long" required="required" type="">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" name="input_password" class="normal-form-long" required="required" type="password">
                      </div>
                    </div>
                </div>
              </div>
            </div>

              <input type="submit" name="submit" class="btn float" value="Daftar" style="font-weight: bold; font-size: 12px" >
            
            </form>


          </div>
          <div class="row">
            
          </div>
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
  
  <script type="text/javascript">
    $('#tanggal_lahir').datepicker({
      language: 'id',
      format: 'dd - MM - yyyy',
    });
  </script>
  <script type="text/javascript">
    function tambahDokter(){
      var no_pasien_value = <?php echo $no_pasien; ?>;
      var kode_icd10_value = $("#rm2_icd10").val();
      var nama_value = $('input[name=input_nama]').val();
      var jenis_kelamin_value = $('input[name=input_jenis_kelamin]:checked').val();
      var no_ktp_value = $('input[name=RM1A22]').val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpanRiwayatPenyakit' ?>",
          type: 'POST',
          data: {no_pasien: no_pasien_value, kode_icd10: kode_icd10_value, diagnosa: diagnosa_value, keterangan: keterangan_penyakit_value},
          dataType: "JSON",
          success: function(data) {
            tampilRiwayatPenyakit();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm2_icd10").val('');
            $("#rm2_diagnosa").val('');
            $("#rm2_keterangan_penyakit").val('')
          },
          error: function(data) {
            new PNotify({
              title: 'Gagal Menyimpan Data!',
              text: 'Terjadi gagal saat menyimpan data. Dikarenakan error di server atau database',
              type: 'error'
            });
          }
        });
    }
  </script>
  
</body>

</html>