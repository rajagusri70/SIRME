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


  <!-- <script src="<?php //echo base_url(); ?>/assets/js/jquery.min.js"></script> -->
  <!-- <script src="https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/15.1.1/autocomplete-lhc_jQuery.min.js"></script> -->
  <link href="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- ion_range -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ion.rangeSlider.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ion.rangeSlider.skinFlat.css" />


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
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Dashboard</a>
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
              </ul>
            </div>
          </div>
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
                Pemeriksaan Pasien
              </h3>
            </div>

            <div class="title_right">
              
            </div>
          </div>
          <div class="clearfix"></div>
          
          <div class="row">
            <?php
            foreach ($pasien_terdaftar as $pt) {

              $no_pasien = $pt->no_pasien;
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User Report</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div class="avatar-view" title="Change the avatar">
                          <img src="<?php echo base_url() ?>images/pasien/<?php echo $pt->foto ?>" alt="Avatar">
                        </div>
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>

                    </div>
                    <div class="ln_solid"></div>
                    <div style="width: 100%">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li><a href="#profile" data-toggle="tab">Aktivitas Terakhir</a>
                        </li>
                        <li class="active"><a href="#data_diri" data-toggle="tab">Data Diri</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Rawat Jalan</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Riwayat Medis</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab">Riwayat Pengobatan</a>
                        </li>
                      </ul>
                    </div>
                    
                  </div>

                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <!-- <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Pemeriksaan Pasien</h2>
                      </div>
                    </div> -->
                    <!-- start of user-activity-graph -->
                    
                    
                    
                    <!-- </br> -->
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <!-- <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#rm1a" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">RM1A</a>
                        </li>
                        <li role="presentation" class=""><a href="#rm1b" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">RM1B</a>
                        </li>
                        <li role="presentation" class=""><a href="#rm2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">RM2</a>
                        </li>
                        <li role="presentation" class=""><a href="#rm3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">RM3</a>
                        </li>
                        <li role="presentation" class=""><a href="#rm4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">RM4</a>
                        </li>
                        <li role="presentation" class=""><a href="#tindakan" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tindakan</a>
                        </li>
                        <li role="presentation" id="tombol_selesai" class=""><button class="btn btn-success" onclick="selesai()" ><b>SELESAI</b></button>
                        </li>
                      </ul> -->
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="data_diri" aria-labelledby="home-tab">
                          <h2>ASESMEN AWAL</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <form>
                          <table id="form" style="width: 95% ">
                            <tr>
                              <td colspan="3" title="[RM1A.1]" ><b>RIWAYAT PSIKOLOG</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.11]" >Hubungan Pasien dengan Keluarga</td>
                              <td>
                                
                              </td>
                            </tr>
                          </table>                     
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

  <script src="https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/15.1.1/autocomplete-lhc_jQuery.min.js"></script>
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
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.keyTable.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/responsive.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.scroller.min.js"></script>
  <link href='https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/15.1.1/autocomplete-lhc_jQueryUI.min.css' rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.sweet-modal.min.css" />
  <script src="<?php echo base_url(); ?>/assets/js/jquery.sweet-modal.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>
  <!-- range slider -->
  <script src="<?php echo base_url(); ?>/assets/js/ion_range/ion.rangeSlider.min.js"></script>
  
  <script type="text/javascript">
    new Def.Autocompleter.Search('rm2_icd10', 'https://clinicaltables.nlm.nih.gov/api/icd10cm/v3/search?sf=code,name', {tableFormat: true, valueCols: [0], colHeaders: ['Code', 'Name']});
  </script>
  <script type="text/javascript">
    new Def.Autocompleter.Search('rm4_icd10', 'https://clinicaltables.nlm.nih.gov/api/icd10cm/v3/search?sf=code,name', {tableFormat: true, valueCols: [0], colHeaders: ['Code', 'Name']});
  </script>
  <script>
      $("#RM1B32").ionRangeSlider({
        grid: true,
        values: [
        "Tidak Sakit", "Sedikit Sakit",
        "Agak Mengganggu ", "Mengganggu Aktivitas",
        "Sangat Mengganggu", "Tidak Tertahankan"
        ]
      });
  </script>
  
            <?php } ?>
  
</body>

</html>