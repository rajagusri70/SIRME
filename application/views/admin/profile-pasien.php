<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Profile</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">

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


<body class="">

  <div class="container body">


    <div class="">

      

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?php foreach ($users as $user) {
                    echo $user->nama;
                  } ?>
                </a>
                
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data User </h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <?php foreach ($pasien as $p){

                          ?>
                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                          <img src="<?php echo base_url('images/') ?>pasien/<?php echo $p->foto ?>" alt="Avatar">
                        </div>

                        <!-- Cropping modal -->
                        
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                    <h3><?php echo $p->nama; ?></h3>

                    <script type="text/javascript">
                      function bukaForm(){
                        document.getElementById('no_ktp').removeAttribute('readonly');
                        document.getElementById('nama').removeAttribute('readonly');
                        document.getElementById('kecamatan').removeAttribute('readonly');
                        document.getElementById('tempat_lahir').removeAttribute('readonly');
                        document.getElementById('jenis_kelamin').removeAttribute('disabled');
                        document.getElementById('status_kawin').removeAttribute('disabled');
                        document.getElementById('alamat').removeAttribute('readonly');
                        document.getElementById('kota').removeAttribute('readonly');
                        document.getElementById('no_hp').removeAttribute('readonly');
                        document.getElementById('email').removeAttribute('readonly');
                        document.getElementById('tombol_submit1').removeAttribute('disabled');
                        document.getElementById('tombol_submit2').removeAttribute('disabled');
                       
                      }
                    </script>

                    <button class="btn btn-success" id="buka_form" onclick="bukaForm()" ><i class="fa fa-edit m-right-xs"></i>&nbsp; Buka Form Edit</buttton>
                    <br />

                  <?php } ?>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <!-- <li role="presentation" class="active"><a href="#tab_data_diri" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Pasien</a>
                        </li>
                        <li role="presentation" class=""><a href="#hub_pasien" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Hub. Pasien</a>
                        </li> -->
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/pasien_info/').$p->no_pasien  ?>" method="post" enctype="multipart/form-data" >

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_data_diri" aria-labelledby="home-tab">
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No. Pasien 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                               <a class="btn btn-primary"><b><?php echo $p->no_pasien; ?></b></a>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No.KTP 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_ktp" class="form-control" name="input_no_ktp"  required="required" type="text" value="<?php echo $p->no_ktp; ?>" readonly >
                              </div>
                            </div>                            
                            <span class="section"></span>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama" class="form-control" name="input_nama"  required="required" type="text" value="<?php echo $p->nama; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tgl. Lahir<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input readonly type="text" name="input_tanggal_lahir" id="tanggal_lahir" required="required" class="normal-form-long" value="<?php echo $p->tanggal_lahir; ?>"  >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Tempat Lahir 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tempat_lahir" class="form-control" name="input_tempat_lahir"  required="required" type="text" value="<?php echo $p->tempat_lahir; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Jenis Kelamin 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="jenis_kelamin" name="input_jenis_kelamin" class="normal-form-long" disabled >
                                  <?php
                                  $jk = $p->jenis_kelamin;
                                  ?>
                                  <option value="Laki-laki" <?php if($jk=="Laki-laki"){ echo "selected"; } ?> >Laki-laki</option>
                                  <option value="Perempuan"    <?php if ($jk=="Perempuan") { echo "selected";} ?> >Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Alamat 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="alamat" class="form-control" name="input_alamat"  required="required" type="text" value="<?php echo $p->alamat; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Kecamatan 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="kecamatan" class="form-control" name="input_kecamatan"  required="required" type="text" value="<?php echo $p->kecamatan; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Kota 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="kota" class="form-control" name="input_kota"  required="required" type="text" value="<?php echo $p->kota; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Status Kawin 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="status_kawin" name="input_status_kawin" class="normal-form-long" disabled >
                                  <?php
                                  $sk = $p->status_pernikahan;
                                  ?>
                                  <option value="Belum Kawin" <?php if($sk=="Belum Kawin"){ echo "selected"; } ?> >Belum Kawin</option>
                                  <option value="Kawin"    <?php if ($jk=="Kawin") { echo "selected";} ?> >Kawin</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No. HP 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_hp" class="form-control" name="input_no_hp"  required="required" type="text" value="<?php echo $p->no_telpon; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Email 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control" name="input_email"  required="required" type="text" value="<?php echo $p->email; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama Org. Tua
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_orangtua" class="form-control" name="input_nama_orangtua"  required="required" type="text" value="<?php echo $p->nama_orangtua; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No. Tlp. Org. Tua
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_telpon_orangtua" class="form-control" name="input_no_telpon_orangtua"  required="required" type="text" value="<?php echo $p->no_telpon_orangtua; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Hub. 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php $hub = $p->hubungan; ?>
                                <select class="normal-form-long" name="input_hubungan">
                                  <option value="Lainya" <?php if($hub=='Lainya'){echo "selected";} ?> >Lainya</option>
                                  <option value="Wali" <?php if($hub=='Wali'){echo "selected";} ?> >Wali</option>
                                  <option value="Anak" <?php if($hub=='Anak'){echo "selected";} ?> >Anak</option>
                                  <option value="Saudara Kandung" <?php if($hub=='Saudara Kandung'){echo "selected";} ?> >Saudara Kandung</option>
                                  <option value="Pasangan" <?php if($hub=='Pasangan'){echo "selected";} ?> >Pasangan</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" name="input_nama_kerabat" class="normal-form-long" required="required" type="text" value="<?php echo $p->nama_kerabat; ?>">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="input_no_telpon_" name="input_no_telpon_kerabat" class="normal-form-long" required="required" type="number" value="<?php echo $p->no_telpon_kerabat; ?>">
                              </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <input id="tombol_submit1" type="submit" name="tombol_submit" class="btn btn-success" value="Ubah Data" disabled >
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Sistem Informasi Rekam Medis Elektronik - <a href="">SIRME</a>  
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

  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

  <!-- image cropping -->
  <script src="<?php echo base_url(); ?>/assets/js/cropping/cropper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/cropping/main.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/datepicker/daterangepicker.js"></script>

  <!-- chart js -->
  <script src="<?php echo base_url(); ?>/assets/js/chartjs/chart.min.js"></script>

  <!-- moris js -->
  <script src="<?php echo base_url(); ?>/assets/js/moris/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/moris/morris.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>

  <!-- pace -->
  <script src="<?php echo base_url(); ?>/assets/js/pace/pace.min.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>/assets/js/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datepicker/locales/bootstrap-datepicker.id.min.js">
  </script>
  <script type="text/javascript">
    function enableForm(){
     document.getElementById("tombol_poli").disabled = true;
    }
  </script>
  <!-- <script type="text/javascript">
    window.onunload = function(){
      window.opener.document.location.reload();
    };
  </script> -->
  <!-- /datepicker -->
  <script type="text/javascript">
    $('#tanggal_lahir').datepicker({
      language: 'id',
      format: 'dd - MM - yyyy',
    });
    
  </script>
</body>

</html>
