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
                <h2><?php echo $user->nama ?></h2>
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
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Check Up <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url().'p_umum/check_up/pasien_terdaftar' ?>">Pasien Terdaftar</a>
                    </li><!-- 
                    <li><a href="<?php //echo base_url().'p_umum/check_up/status_selesai' ?>">Status Selesai</a>
                    </li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('p_umum/pasien/cari') ?>">Cari Pasien</a>
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
                  <img src="images/img.jpg" alt="">
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
          <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count"><?php echo $antrian; ?></div>

                <h3>Antrian Pasien</h3>
                <p>Jumlah Antrian Pasien yang ada di Poli Umum hari ini</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i>
                </div>
                <div class="count"><?php echo $maksimum; ?></div>

                <h3>Pasien</h3>
                <p>Maksimum pasien yang dapat dilayani hari ini</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
                <div class="count"><?php echo $selesai; ?></div>

                <h3>Selesai</h3>
                <p>Jumlah Pasien yang telah selesai menjalani rawat jalan pada hari ini</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <div class="count"><?php echo $total; ?></div>

                <h3>Total Pasien</h3>
                <p>Jumlah Keselurahn Pasien yang telah menjalani rawat jalan </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Poliklinik Umum</h2>
                <div class="filter">
                  
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <div class="demo-container" style="height:160px">
                    <p>
                    <?php echo $deskripsi ?>
                  </p>
                  <!-- </div>
                  <div class="tiles">
                    <div class="col-md-4 tile">
                      <span>Jam Buka Layanan</span>
                      <h2><?php //echo $buka; ?> WIB</h2>
                    </div>
                    <div class="col-md-4 tile">
                      <span>Jam Tutup Layanan</span>
                      <h2><?php //echo $tutup; ?> WIB</h2>
                    </div>
                    <div class="col-md-4 tile">
                      <span>Hari Layanan</span>
                      <h2><?php //foreach ($hari as $ha) {
                        //echo $ha->hari.', ';
                      //} ?></h2>
                    </div> -->
                    
                  </div>

                </div>
                <!-- <div class="col-md-3 col-sm-12 col-xs-12">
                  <div>
                    <div class="x_title">
                      <h2>Atur</h2>
                      <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                      <li class="media event">
                        <div >
                          <a class="title" data-toggle="modal" data-target=".bs-example-modal-lg" style="font-size: 16px"><i class="fa fa-users"></i>&nbsp;Batas Pasien</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div> -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel"><b>Atur</b></h4>
                      </div>
                      <div class="modal-body">
                        <!-- <h4>Text in a modal</h4> -->
                        <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <h2>Atur Maksimum Penerimaan Pasien</h2>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" >
                                      <p>Silahkan masukan total maksimum pasien yang dapat dilayani pada hari ini</p>
                                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('p_umum/home'); ?>" method="post" enctype="multipart/form-data" >
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Maksimum <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="input_maksimum" id="maksimum" required="required" class="normal-form-long">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                          
                                          <input type="submit" name="submit_maksimum" id="submit_maksimum" class="btn btn-primary" value="Simpan" >
                                          
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

              </div>
            </div>
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

</body>

</html>