<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIRME | Pasien Lama</title>

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
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIRME</span></a>
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
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li><a href="index2.html">Dashboard2</a>
                    </li>
                    <li><a href="index3.html">Dashboard3</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('pasien/') ?>">Cari Pasien</a>
                    </li>
                    <li><a href="<?php echo site_url('pasien/daftar') ?>" >Pendaftaran Pasien Baru</a>
                    </li>
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Pendaftaran Pasien Lama</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Rawat Jalan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('pasien/status') ?>">Status Rawat Pasien</a>
                    </li>
                    <li><a href="index2.html">Status Selesai</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
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
                  <img src="images/img.jpg" alt="">Dr. 
                  <?php foreach ($users as $user) {
                    echo $user->nama;
                  } ?>
                  <span class=" fa fa-angle-down"></span>
                  
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="<?php echo base_url('admin/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
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
                Pendaftaran Pasien Lama
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
                  <h2>Menggunakan Metode Pencarian<!-- <small>sub title</small> --></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('pasien/daftar_pasien_lama'); ?>" method="post" enctype="multipart/form-data" >

                    <p>Silahkan masukan kata kunci untuk melakukan pencarian. Kata kunci yang diproses sebagai parameter pencarian adalah Nomor Pasien dan Nama. Dapat dimasukan sebagian atau secara lengkap.
                    </p>
                    <span class="section"></span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kata Kunci <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control" name="cari_input" placeholder="dapat berupa No. Pasien/Nama" required="required" type="text" name="cari_input" >
                        
                      </div>
                      <!-- <select class="" name="parameter_input" >
                        <option value="id_pasien">ID Pasien</option>
                        <option value="nama_pasien">Nama Pasien</option>
                        <option value="no_ktp">Nomor KTP</option>
                        <option value="no_kk">Nomor KK</option>
                      </select> -->
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="parameter_input" class="btn-group" data-toggle="buttons">
                          <input type="radio" name="parameter_input" value="id_pasien" checked=""> Nomor Pasien&nbsp; &nbsp;
                          <input type="radio" name="parameter_input" value="no_ktp"> No. KTP&nbsp; &nbsp;
                          <input type="radio" name="parameter_input" value="no_kk"> No. KK&nbsp; &nbsp;
                        </div>
                      </div>
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
                        <th>Umur</th>
                        <th>Pekerjaan</th>
                        <th>Gol. Darah</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($pasien as $p) { ?>
                      <tr>
                        <td><?php echo $p->no_pasien; ?></td>
                        <td><?php echo $p->no_ktp; ?></td>
                        <td><?php echo $p->nama; ?></td>
                        <td><?php echo $p->jenis_kelamin; ?></td>
                        <td><?php echo $p->tanggal_lahir; ?></td>
                        <td><?php echo $p->umur; ?></td>
                        <td><?php echo $p->pekerjaan; ?></td>
                        <td><?php echo $p->golongan_darah; ?></td>
                        <td>
                          <button type="button" class=" btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-id-<?php echo $p->no_pasien; ?>">Daftarkan ke Poli</button>
                          <!-- <a href="#" class=""><i class="fa fa-hospital-o"></i> Daftar ke Poli </a> -->
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
                  <h2>Data Pribadi</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('pasien/pasien_lama'); ?>?nomor_pasien=<?php echo $p->no_pasien; ?>" method="post" enctype="multipart/form-data" >
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Poliklinik<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="poliklinik" name="input_poliklinik" onchange="biaya();" class="normal-form-long" >
                          <option value="none">-Pilih Poliklinik-</option>
                          <option value="Poli Umum">Poli Umum</option>
                          <option value="Poli Mata">Poli Mata</option>
                          <option value="Poli T.H.T">Poli T.H.T</option>
                          <option value="Poli Bedah">Poli Bedah</option>
                          <option value="Bersalin">Bersalin</option>
                          <option value="Poli Kulit dan Kelamin">Poli Kulit dan Kelamin</option>
                          <option value="UGD">UGD</option>
                          <option value="Poli Gigi">Poli Gigi</option>
                          <option value="Poli Anak">Poli Anak</option>
                          <option value="Poli Syaraf">Poli Syaraf</option>
                          <option value="Poli Jantung">Poli Jantung</option>
                          <option value="Paru">Paru</option>
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Biaya Pendaftaran (Rp.)<span ></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="biaya_daftar" name="input_biaya" type="text" class="normal-form-long" readonly required="" placeholder="Biaya yang dikeluarkan untuk pendaftaran Poli">
                      </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <input type="submit" name="daftar_poli" id="tombol_poli" class="btn btn-success" value="Daftarkan Ke Poli" disabled="true">
                      </div>
                    </div>
                    <script type="text/javascript">
                      function biaya(){
                        var poli = document.getElementById("poliklinik").value;
                        if(poli == "none"){
                          document.getElementById("tombol_poli").disabled = true;
                          document.getElementById("biaya_daftar").value = "";
                        }else if(poli == "Poli Umum"){
                          document.getElementById("biaya_daftar").value = "30000";
                          document.getElementById("tombol_poli").disabled = false;
                        }else if(poli == "Poli Mata"){
                          document.getElementById("biaya_daftar").value = "40000";
                          document.getElementById("tombol_poli").disabled = false;
                        }else if(poli == "Poli T.H.T"){
                           document.getElementById("biaya_daftar").value = "50000";
                           document.getElementById("tombol_poli").disabled = false;
                        }else if(poli == "Poli Bedah"){
                           document.getElementById("biaya_daftar").value = "50000";
                           document.getElementById("tombol_poli").disabled = false;
                        }else if(poli == "Bersalin"){
                           document.getElementById("biaya_daftar").value = "35000";
                           document.getElementById("tombol_poli").disabled = false;
                        }else if(poli == "Poli Kulit dan Kelamin"){
                           document.getElementById("biaya_daftar").value = "40000";
                           document.getElementById("tombol_poli").disabled = false;
                        }
                      }
                    </script>
                    <?php 
                      $_SESSION['no_pasien'] = $p->no_pasien;
                    ?>
                  </form>
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