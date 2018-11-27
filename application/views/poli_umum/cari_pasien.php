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
                    <li><a href="<?php echo base_url().'p_umum/home' ?>">Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Check Up <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url().'p_umum/check_up/pasien_terdaftar' ?>">Pasien Terdaftar</a>
                    </li>
                    <li><a href="<?php echo base_url().'p_umum/check_up/status_selesai' ?>">Status Selesai</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Cari Pasien</a>
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
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Pencarian Data Pasien
                </h3>
            </div>

            <div class="title_right">
              
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pencarian Menggunakan Kata Kunci <!-- <small>sub title</small> --></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('p_umum/pasien/cari'); ?>" method="post" enctype="multipart/form-data" >

                    <p>Silahkan masukan kata kunci untuk melakukan pencarian. Kata kunci yang diproses sebagai parameter pencarian adalah Nomor Pasien dan Nama. Dapat dimasukan sebagian atau secara lengkap.
                    </p>
                    <span class="section"></span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kata Kunci <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control" name="cari_input" placeholder="dapat berupa No. Pasien/Nama" required="required" type="text" name="cari_input" >
                      </div>
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        
                        <input type="submit" name="search" class="btn btn-success" value="Cari">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php 
              //$pasien = array();
            if (!empty($pasien)) {
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Hasil Pencarian</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    
                    <thead>
                      <tr>
                        <th>No Pasien</th>
                        <th>No KTP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $n=1;
                      foreach ($pasien as $p) { ?>
                      <tr>
                        <?php $nomor_pasien = $p->no_pasien; ?>
                        <td><?php echo $nomor_pasien; ?></td>
                        <td><?php echo $p->no_ktp; ?></td>
                        <td><?php echo $p->nama; ?></td>
                        <td><?php echo $p->jenis_kelamin; ?></td>
                        <td><?php echo $p->tanggal_lahir; ?></td>
                        <td><?php echo $p->alamat; ?></td>
                        <td><a href="<?php echo base_url().'rekam_medis/pasien/'.$p->no_pasien; ?>" target="_blank"  >View</a>
                        <!-- Tampilan Modal -->
                        
                        <div class="modal fade bs-example-modal-lg-id-<?php echo $p->no_pasien; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel"><b><?php echo $p->no_pasien; ?> | <?php echo $p->nama; ?></b></h4>
                              </div>
                              <div class="modal-body">
                                <h4></h4>
          <!-- Isi dari Modal -->
                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Rekam Medis Pasien</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">

                                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                                          <div class="profile_img">

                                            <!-- end of image cropping -->
                                            <div id="crop-avatar">
                                              <!-- Current avatar -->
                                              <div class="avatar-view" title="Change the avatar">
                                                <img src="<?php echo base_url('images/pasien/').$p->foto ?>" alt="Avatar">
                                              </div>
                                            </div>
                                          </div>
                                          <h3><?php echo $p->nama; ?></h3>

                                          <ul class="list-unstyled user_data">
                                            <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $p->alamat; ?>
                                            </li>

                                            <li>
                                              <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $p->pekerjaan; ?>
                                            </li>
                                          </ul>
                                          <a class="btn btn-success" href="#" onclick="window.open('<?php echo base_url("resepsionis/pasien/profile_pasien/$p->no_pasien") ?>','','width=1020, height=720')" ><i class="fa fa-edit m-right-xs"  ></i>Edit Profile</a>
                                          
                                          <br />
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">

                                          <div class="profile_title">
                                            <div class="col-md-6">
                                              <h2>Laporan Aktivitas Pasien</h2>
                                            </div>
                                            
                                          </div>
                                          <!-- start of user-activity-graph -->
                                          
                                          <!-- end of user-activity-graph -->

                                          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                              <li role="presentation" class="active"><a href="#tab_content1<?php echo $p->no_pasien; ?>" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Aktivitas Terakhir</a>
                                              </li>
                                              <li role="presentation" class=""><a href="#tab_content2<?php echo $p->no_pasien; ?>" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Histori Resep</a>
                                              </li>
                                              <li role="presentation" class=""><a href="#tab_content3<?php echo $p->no_pasien; ?>" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Data Diri</a>
                                              </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1<?php echo $p->no_pasien; ?>" aria-labelledby="home-tab">
                                                <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "sirme";

                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                $sql = "SELECT * FROM rawat_jalan WHERE no_pasien=".$p->no_pasien."";
                                                $result = $conn->query($sql);

                                                if(!empty($result)){
                                                  while($row = $result->fetch_assoc()) {
                                                ?>
                                                <!-- start recent activity -->
                                                <ul class="messages">
                                                  <li>
                                                    <img src="<?php echo base_url('images/pasien/').$p->foto ?>" class="avatar" alt="Avatar">
                                                    <div class="message_date">
                                                      <h3 class="date text-info"><?php echo substr($row['tanggal'], 0,2) ?></h3>
                                                      <p class="month">
                                                      <?php
                                                      $b = substr($row['tanggal'], 3,2);
                                                      if($b=="01"){
                                                        $bulan = "Januari";
                                                      }elseif ($b=="02") {
                                                        $bulan = "Februari";
                                                      }elseif ($b=="03") {
                                                        $bulan = "Maret";
                                                      }elseif ($b=="04") {
                                                        $bulan = "April";
                                                      }elseif($b == "05"){
                                                        $bulan = "Mei";
                                                      }elseif ($b=="06") {
                                                        $bulan = "Juni";
                                                      }elseif ($b=="07") {
                                                        $bulan = "Juli";
                                                      }elseif ($b=="08") {
                                                        $bulan = "Agustus";
                                                      }
                                                      echo 
                                                      $bulan;
                                                      ?></p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                      <h4 class="heading"><?php echo $p->nama; ?></h4>
                                                      <blockquote class="message">Pasien telah mengunjungi/dirujuk ke poliklinik <b><?php echo $row['poliklinik'] ?></b>.</blockquote>
                                                      <br />
                                                      <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"><i class="fa fa-paperclip"></i> Tampilkan hasil medis </a>
                                                      </p>
                                                    </div>
                                                  </li>
                                                </ul>
                                                <?php
                                                  } 
                                                }
                                                $conn->close(); ?>
                                                <!-- end recent activity -->
                                              </div>
                                              <div role="tabpanel" class="tab-pane fade" id="tab_content2<?php echo $p->no_pasien; ?>" aria-labelledby="profile-tab">

                                                <!-- start user projects -->
                                                <table class="data table table-striped no-margin">
                                                  <thead>
                                                    <tr>
                                                      <th>#</th>
                                                      <th>Project Name</th>
                                                      <th>Client Company</th>
                                                      <th class="hidden-phone">Hours Spent</th>
                                                      <th>Contribution</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>1</td>
                                                      <td>New Company Takeover Review</td>
                                                      <td>Deveint Inc</td>
                                                      <td class="hidden-phone">18</td>
                                                      <td class="vertical-align-mid">
                                                        <div class="progress">
                                                          <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>2</td>
                                                      <td>New Partner Contracts Consultanci</td>
                                                      <td>Deveint Inc</td>
                                                      <td class="hidden-phone">13</td>
                                                      <td class="vertical-align-mid">
                                                        <div class="progress">
                                                          <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>3</td>
                                                      <td>Partners and Inverstors report</td>
                                                      <td>Deveint Inc</td>
                                                      <td class="hidden-phone">30</td>
                                                      <td class="vertical-align-mid">
                                                        <div class="progress">
                                                          <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>4</td>
                                                      <td>New Company Takeover Review</td>
                                                      <td>Deveint Inc</td>
                                                      <td class="hidden-phone">28</td>
                                                      <td class="vertical-align-mid">
                                                        <div class="progress">
                                                          <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                <!-- end user projects -->

                                              </div>
                                              <div role="tabpanel" class="tab-pane fade" id="tab_content3<?php echo $p->no_pasien; ?>" aria-labelledby="profile-tab">
                                                <table style="font-size: 14px;" class="table table-striped table-bordered" >
                                                  <tr>
                                                    <td><b>No Pasien</b></td>
                                                    <td>&nbsp;:<b> <?php echo $p->no_pasien; ?></b></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nomor KTP</b></td>
                                                    <td>&nbsp;: <?php echo $p->no_ktp; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nomor KK</b></td>
                                                    <td>&nbsp;: <?php echo $p->no_kk; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nama Pasien</b></td>
                                                    <td>&nbsp;: <?php echo $p->nama; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Jenis Kelamin</b></td>
                                                    <td>&nbsp;: <?php echo $p->jenis_kelamin; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Tanggal Lahir</b></td>
                                                    <td>&nbsp;: <?php echo $p->tanggal_lahir; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Tempat Lahir</b></td>
                                                    <td>&nbsp;: <?php echo $p->tempat_lahir; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Umur</b></td>
                                                    <td>&nbsp;: <?php echo $p->umur; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Alamat</b></td>
                                                    <td>&nbsp;: <?php echo $p->alamat; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Pekerjaan</b></td>
                                                    <td>&nbsp;: <?php echo $p->pekerjaan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Pendidikan Terakhir</b></td>
                                                    <td>&nbsp;: <?php echo $p->pendidikan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Golongan Darah</b></td>
                                                    <td>&nbsp;: <?php echo $p->golongan_darah; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Status Pernikahan</b></td>
                                                    <td>&nbsp;: <?php echo $p->status_pernikahan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nama Orangtua</b></td>
                                                    <td>&nbsp;: <?php echo $p->nama_orangtua; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Pekerjaan Orangtua</b></td>
                                                    <td>&nbsp;: <?php echo $p->pekerjaan_orangtua; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nama Suami/Istri</b></td>
                                                    <td>&nbsp;: <?php echo $p->nama_suamistri; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Agama</b></td>
                                                    <td>&nbsp;: <?php echo $p->agama; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Nomor Kontak</b></td>
                                                    <td>&nbsp;: <?php echo $p->no_telpon; ?></td>
                                                  </tr>
                                                  <style type="text/css">
                                                    th, td {
                                                      padding: 5px;
                                                  </style>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </tr>
                      <?php 
                    } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <?php } ?>
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