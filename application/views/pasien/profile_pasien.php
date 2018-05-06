<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">


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
                  <h2>User Report <small>Activity report</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <?php foreach ($pasien as $p) {

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
                    <h3>Samuel Doe</h3>

                    <script type="text/javascript">
                      function bukaForm(){
                        document.getElementById('no_ktp').removeAttribute('readonly');
                        document.getElementById('no_kk').removeAttribute('readonly');
                        document.getElementById('nama').removeAttribute('readonly');
                        document.getElementById('jenis_kelamin').removeAttribute('disabled');
                        document.getElementById('tanggal_lahir').removeAttribute('readonly');
                        document.getElementById('tempat_lahir').removeAttribute('readonly');
                        document.getElementById('umur').removeAttribute('readonly');
                        document.getElementById('alamat').removeAttribute('readonly');
                        document.getElementById('pekerjaan').removeAttribute('readonly');
                        document.getElementById('pendidikan').removeAttribute('readonly');
                        document.getElementById('golongan_darah').removeAttribute('disabled');
                        document.getElementById('status_pernikahan').removeAttribute('disabled');
                        document.getElementById('nama_orangtua').removeAttribute('readonly');
                        document.getElementById('pekerjaan_orangtua').removeAttribute('readonly');
                        document.getElementById('nama_suamistri').removeAttribute('readonly');
                        document.getElementById('agama').removeAttribute('readonly');
                        document.getElementById('no_telpon').removeAttribute('readonly');
                        document.getElementById('tombol_submit').removeAttribute('disabled');
                        document.getElementById('buka_form').setAttribute('disabled');
                      }
                    </script>

                    <button class="btn btn-success" id="buka_form" onclick="bukaForm()" ><i class="fa fa-edit m-right-xs"></i>&nbsp; Buka Form Edit</buttton>
                    <br />


                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <!-- start of user-activity-graph -->
                    
                    <!-- end of user-activity-graph -->

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        
                        <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Data Diri</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="profile-tab">
                          
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('pasien/update/').$p->no_pasien  ?>" method="post" enctype="multipart/form-data" >
                            
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No KTP <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_ktp" class="form-control" name="input_no_ktp"  required="required" type="text" value="<?php echo $p->no_ktp; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No KK <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_kk" class="form-control" name="input_no_kk"  required="required" type="text" value="<?php echo $p->no_kk; ?>" readonly >
                              </div>
                            </div>
                            <span class="section"></span>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama" class="form-control" name="input_nama"  required="required" type="text" value="<?php echo $p->nama; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Jenis Kelamin <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="jenis_kelamin" name="input_jenis_kelamin" class="normal-form-long" disabled >
                                  <?php
                                  $jk = $p->jenis_kelamin;
                                  ?>
                                  <option value="Laki - Laki" <?php if($jk=="Laki - Laki"){ echo "selected"; } ?> >Laki - Laki</option>
                                  <option value="Perempuan"    <?php if ($jk=="Perempuan") { echo "selected";} ?> >Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Tanggal Lahir <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tanggal_lahir" class="form-control" name="input_tanggal_lahir"  required="required" type="text" value="<?php echo $p->tanggal_lahir; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Tempat Lahir <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tempat_lahir" class="form-control" name="input_tempat_lahir"  required="required" type="text" value="<?php echo $p->tempat_lahir; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Umur <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="umur" class="form-control" name="input_umur" required="required" type="text" value="<?php echo $p->umur; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Alamat <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="alamat" class="form-control" name="input_alamat"  required="required" type="text" value="<?php echo $p->alamat; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Pekerjaan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="pekerjaan" class="form-control" name="input_pekerjaan"  required="required" type="text" value="<?php echo $p->pekerjaan; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Pendidikan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="pendidikan" class="form-control" name="input_pendidikan"  required="required" type="text" value="<?php echo $p->pendidikan; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Golongan Darah <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php 
                                $goldar = $p->golongan_darah;
                                ?>
                                <select id="golongan_darah" name="input_golongan_darah" class="normal-form" disabled >
                                  <option value="A" <?php if($goldar == "A"){echo "selected";} ?> >A</option>
                                  <option value="B" <?php if($goldar == "B"){echo "selected";} ?> >B</option>
                                  <option value="AB" <?php if($goldar == "AB"){echo "selected";} ?> >AB</option>
                                  <option value="O" <?php if($goldar == "O"){echo "selected";} ?> >O</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Status Pernikahan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php 
                                $sp = $p->status_pernikahan;
                                ?>
                                <select id="status_pernikahan" name="input_status_pernikahan" class="normal-form-long" disabled >
                                  <option value="Belum Nikah" <?php if($sp == "Belum Nikah"){echo "selected";} ?> >Belum Nikah</option>
                                  <option value="Sudah Nikah" <?php if($sp == "Sudah Nikah"){echo "selected";} ?> >Sudah Nikah</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama Orangtua <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_orangtua" class="form-control" name="input_nama_orangtua"  required="required" type="text" value="<?php echo $p->nama_orangtua; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Pekerjaan Orangtua <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="pekerjaan_orangtua" class="form-control" name="input_pekerjaan_orangtua"  required="required" type="text" value="<?php echo $p->pekerjaan_orangtua; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama Suami/Istri <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_suamistri" class="form-control" name="input_nama_suamistri"  required="required" type="text" value="<?php echo $p->nama_suamistri; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Agama <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="agama" class="form-control" name="input_agama"  required="required" type="text" value="<?php echo $p->agama; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No Telpon <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_telpon" class="form-control" name="input_no_telpon"  required="required" type="text" value="<?php echo $p->no_telpon; ?>" readonly >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <input id="tombol_submit" type="submit" name="" class="btn btn-success" value="Ubah Data" disabled >
                              </div>
                            </div>
                          </form>
                          <?php } ?>
                        </div>
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
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
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

  <!-- pace -->
  <script src="<?php echo base_url(); ?>/assets/js/pace/pace.min.js"></script>
  <!-- datepicker -->
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
</body>

</html>
