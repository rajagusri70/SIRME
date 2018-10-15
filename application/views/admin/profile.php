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
                    <?php foreach ($admin as $a) {

                          ?>
                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                          <img src="<?php echo base_url('images/') ?>admin/<?php echo $a->foto ?>" alt="Avatar">
                        </div>

                        <!-- Cropping modal -->
                        
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                    <h3><?php echo $a->nama; ?></h3>

                    <script type="text/javascript">
                      function bukaForm(){
                       
                        document.getElementById('nama').removeAttribute('readonly');
                        document.getElementById('jenis_kelamin').removeAttribute('disabled');
                        document.getElementById('alamat').removeAttribute('readonly');
                        document.getElementById('kota').removeAttribute('readonly');
                        document.getElementById('no_hp').removeAttribute('readonly');
                        document.getElementById('email').removeAttribute('readonly');
                        document.getElementById('password').removeAttribute('readonly');
                        <?php if($a->tipe_admin == "Dokter"){?>
                        document.getElementById('spesialis').removeAttribute('disabled');
                        document.getElementById('no_sip').removeAttribute('readonly');
                        <?php }else{ ?>
                        document.getElementById('jabatan').removeAttribute('disabled');
                        <?php } ?>
                        document.getElementById('username').removeAttribute('readonly');
                        document.getElementById('tombol_submit1').removeAttribute('disabled');
                        document.getElementById('tombol_submit2').removeAttribute('disabled');
                        document.getElementById('tombol_submit_jabatan').removeAttribute('disabled');
                      }
                    </script>

                    <button class="btn btn-success" id="buka_form" onclick="bukaForm()" ><i class="fa fa-edit m-right-xs"></i>&nbsp; Buka Form Edit</buttton>
                    <br />


                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_data_diri" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Diri</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_jabatan" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Jabatan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_akun" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Akun</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_data_diri" aria-labelledby="home-tab">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/profile/').$a->user_id  ?>" method="post" enctype="multipart/form-data" >
                            
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No. ID 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                               <a class="btn btn-primary"><b><?php echo $a->user_id; ?></b></a>
                              </div>
                            </div>                            
                            <span class="section"></span>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama" class="form-control" name="input_nama"  required="required" type="text" value="<?php echo $a->nama; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Jenis Kelamin 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="jenis_kelamin" name="input_jenis_kelamin" class="normal-form-long" disabled >
                                  <?php
                                  $jk = $a->jenis_kelamin;
                                  ?>
                                  <option value="Laki - Laki" <?php if($jk=="Laki - Laki"){ echo "selected"; } ?> >Laki - Laki</option>
                                  <option value="Perempuan"    <?php if ($jk=="Perempuan") { echo "selected";} ?> >Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Alamat 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="alamat" class="form-control" name="input_alamat"  required="required" type="text" value="<?php echo $a->alamat; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Kota 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="kota" class="form-control" name="input_kota"  required="required" type="text" value="<?php echo $a->kota; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">No. HP 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_hp" class="form-control" name="input_no_hp"  required="required" type="text" value="<?php echo $a->no_hp; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Email 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control" name="input_email"  required="required" type="text" value="<?php echo $a->email; ?>" readonly >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <input id="tombol_submit1" type="submit" name="tombol_submit1" class="btn btn-success" value="Ubah Data" disabled >
                              </div>
                            </div>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_jabatan" aria-labelledby="profile-tab">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/profile/').$a->user_id  ?>" method="post" enctype="multipart/form-data" >
                            <span class="section"></span>
                            
                            <?php
                            if ($tipe_admin == 'Dokter') {?>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nomor SIP 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="no_sip" class="form-control" name="input_no_sip"  required="required" type="text" value="<?php echo $a->no_sip; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Spesialis 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="spesialis" name="input_spesialis" class="normal-form-long" disabled >
                                  <?php
                                  foreach ($poliklinik as $poli) {
                                    $ns = $a->spesialis;
                                  ?>
                                  <option value="<?php echo $poli->nama_poli ?>" <?php if($ns==$poli->nama_poli){ echo "selected"; } ?> ><?php echo $poli->nama_poli ?></option>
                                   <?php } ?>
                                </select>
                              </div>
                            </div>
                            <!-- <div class="form-group">
                              <label class="col-md-3 col-sm-3 col-xs-12 control-label">Hari praktek
                              </label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php $hari //= $a->jadwal_praktek ?>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Senin" <?php //if (strstr($hari, 'Senin')) { echo "checked";}  ?> > Senin
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Selasa" <?php //if (strstr($hari, 'Selasa')) { echo "checked";}  ?> > Selasa
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Rabu" <?php //if (strstr($hari, 'Rabu')) { echo "checked";}  ?> > Rabu
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Kamis" <?php //if (strstr($hari, 'Kamis')) { echo "checked";}  ?> > Kamis
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Jum'at" <?php //if (strstr($hari, "Jum'at")) { echo "checked";}  ?> > Jum'at
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Sabtu" <?php //if (strstr($hari, 'Sabtu')) { echo "checked";}  ?> > Sabtu
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="Praktek[]" value="Minggu" <?php //if (strstr($hari, 'Minggu')) { echo "checked";}  ?> > Minggu
                                  </label>
                                </div>
                              </div>
                            </div> -->
                            
                            <?php }else{?>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Jabatan 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="jabatan" name="input_jabatan" class="normal-form-long" disabled >
                                  <?php
                                  foreach ($jabatan as $jb) {
                                    $nj = $a->tipe_admin;
                                  ?>
                                  <option <?php if($jb->nama_jabatan=="Dokter"){ echo "hidden"; } ?> value="<?php echo $jb->nama_jabatan ?>" <?php if($nj==$jb->nama_jabatan){ echo "selected"; } ?> ><?php echo $jb->nama_jabatan; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                            <?php } ?>
                            <br>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <input id="tombol_submit_jabatan" type="submit" name="tombol_submit_jabatan" class="btn btn-success" value="Ubah Data" disabled >
                              </div>
                            </div>
                          </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_akun" aria-labelledby="profile-tab">

                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/profile/').$a->user_id  ?>" method="post" enctype="multipart/form-data" >
                            <span class="section"></span>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Username
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="username" class="form-control" name="input_username"  required="required" type="text" value="<?php echo $a->username; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Password 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password" class="form-control" name="input_password"  required="required" type="password" value="<?php echo $a->password; ?>" readonly >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <input id="tombol_submit2" type="submit" name="tombol_submit2" class="btn btn-success" value="Ubah Data" disabled >
                              </div>
                            </div>
                          </form>
                          <?php } ?>
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
