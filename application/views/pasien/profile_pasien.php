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
                Rekam Medis Pasien
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
                  <h2><?php echo $pt->nama; ?></h2>
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
                        <li class="active"><a href="#data_diri" data-toggle="tab">Data Diri</a>
                        </li>
                        <li><a href="#aktivitas" data-toggle="tab">Aktivitas Terakhir</a>
                        </li>
                        <li><a href="#rawat_jalan" data-toggle="tab">Rawat Jalan</a>
                        </li>
                        <li><a href="#riwayat_penyakit" data-toggle="tab">Riwayat Penyakit</a>
                        </li>
                        <li><a href="#riwayat_alergi" data-toggle="tab">Riwayat Alergi</a>
                        </li>
                        <li><a href="#riwayat_obat" data-toggle="tab">Riwayat Obat</a>
                        </li>
                        <li><a href="#riwayat_hamil" data-toggle="tab">Riwayat Kehamilan</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  

                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="data_diri" aria-labelledby="home-tab">
                          <h2>Data Diri</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          <table id="form" style="width: 95% ">
                            <tr>
                              <td colspan="3" title="" ><b>DATA DIRI</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >No Pasien :</td>
                              <td><b><?php echo $pt->no_pasien; ?></b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Nomor KTP :</td>
                              <td><?php echo $pt->no_ktp; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Nomor KK :</td>
                              <td><?php echo $pt->no_kk; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Nama :</td>
                              <td><?php echo $pt->nama; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Jenis Kelamin :</td>
                              <td><?php echo $pt->jenis_kelamin; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Tanggal Lahir :</td>
                              <td><?php echo $pt->tanggal_lahir; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Tempat Lahir :</td>
                              <td><?php echo $pt->tempat_lahir; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Umur :</td>
                              <td><?php echo $pt->umur; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Alamat :</td>
                              <td><?php echo $pt->alamat; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Pekerjaan :</td>
                              <td><?php echo $pt->pekerjaan; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Pendidikan Terakhir :</td>
                              <td><?php echo $pt->pendidikan; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Golongan Darah :</td>
                              <td><?php echo $pt->golongan_darah; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Status Pernikahan :</td>
                              <td><?php echo $pt->status_pernikahan; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Nama Orangtua :</td>
                              <td><?php echo $pt->nama_orangtua; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Pekerjaan Orangtua :</td>
                              <td><?php echo $pt->pekerjaan_orangtua; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Nama Suami/Istri :</td>
                              <td><?php echo $pt->nama_suamistri; ?></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >Agama :</td>
                              <td><?php echo $pt->agama; ?></td>
                            </tr>
                            <tr>
                              <td colspan="3" title="" ><b>KONTAK PASIEN</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="" >No Kontak :</td>
                              <td><?php echo $pt->no_telpon; ?></td>
                            </tr>
                          </table>                     
                        </div>
                        <?php } ?>

                        <div role="tabpanel" class="tab-pane fade active in" id="aktivitas" aria-labelledby="home-tab">
                          <h2>Aktivitas Terakhir</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          <ul class="messages">
                            <?php
                            foreach ($data_rawat as $dr) {
                            ?>
                            <li>
                              <img src="<?php echo base_url('images/pasien/').$pt->foto ?>" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-info"><?php echo substr($dr->tanggal, 0,2) ?></h3>
                                  <p class="month">
                                  <?php 
                                  $b = substr($dr->tanggal, 3,2);
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
                                  echo $bulan;
                                  ?></p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class=""><?php echo $pt->nama; ?></h4>
                                <blockquote class="message">Pasien telah mengunjungi/dirujuk ke poliklinik <b><?php echo $dr->poliklinik; ?></b>.</blockquote>
                                <br/>
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                </p>
                              </div>
                            </li>
                            <?php } ?>
                          </ul>             
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="rawat_jalan" aria-labelledby="home-tab">
                          <h2>Rawat Jalan Pasien</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th align="center">No Rawat Jalan</th>
                                <th align="center">Poliklinik</th>
                                <th align="center">Tanggal Masuk</th>
                                <th align="center">Jam</th>
                                <th align="center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($data_rawat as $dr) {
                              ?>
                              <tr>
                                <td><?php echo $dr->id_rawat ?></td>
                                <td><?php echo $dr->poliklinik ?></td>
                                <td><?php echo $dr->tanggal ?></td>
                                <td><?php echo $dr->waktu ?></td>
                                <td align="center"><a onclick="buka_popup(<?php echo $dr->id_rawat ?>)" style="cursor:pointer" >Lihat</a></td>
                              </tr>
                              <?php } ?>
                              <script type="text/javascript">
                                function buka_popup(id_rawat){
                                  resepWindow = window.open('<?php echo base_url()?>rekam_medis/rawat_jalan/'+id_rawat, '', 'width=820, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                                }
                              </script>
                            </tbody>
                          </table>   
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="riwayat_penyakit" aria-labelledby="home-tab">
                          <h2>Riwayat Penyakit</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <table id="datatable2" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th align="center">No.</th>
                                <th align="center">ID</th>
                                <th align="center">Tanggal Masuk</th>
                                <th align="center">Kode ICD</th>
                                <th align="center">Diagnosa Penyakit</th>
                                <th align="center">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $n=1;
                              foreach ($riwayat_penyakit as $rp) {
                              ?>
                              <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $rp->id_riwayat ?></td>
                                <td><?php echo $rp->tanggal_input ?></td>
                                <td><?php echo $rp->kode_icd10 ?></td>
                                <td><?php echo $rp->diagnosa ?></td>
                                <td><?php echo $rp->keterangan ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>   
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="riwayat_alergi" aria-labelledby="home-tab">
                          <h2>Riwayat Alergi</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <table id="datatable3" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th align="center">No.</th>
                                <th align="center">ID</th>
                                <th align="center">Tanggal Masuk</th>
                                <th align="center">Organ Sasaran</th>
                                <th align="center">Gejala</th>
                                <th align="center">Bahan Kimia</th>
                                <th align="center">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $n=1;
                              foreach ($riwayat_alergi as $ra) {
                              ?>
                              <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $ra->id_alergi ?></td>
                                <td><?php echo $ra->tanggal_input ?></td>
                                <td><?php echo $ra->organ_sasaran ?></td>
                                <td><?php echo $ra->gejala ?></td>
                                <td><?php echo $ra->bahan_kimia ?></td>
                                <td><?php echo $ra->keterangan ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>   
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="riwayat_hamil" aria-labelledby="home-tab">
                          <h2>Riwayat Kehamilan</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <table id="datatable4" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th align="center">No.</th>
                                <th align="center">Macam Persalinan</th>
                                <th align="center">Jenis Kelamin</th>
                                <th align="center">Status Lahir</th>
                                <th align="center">Waktu</th>
                                <th align="center">Penolong</th>
                                <th align="center">Penyulit</th>
                                <th align="center">Sebab Kematian</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $n=1;
                              foreach ($riwayat_kehamilan as $rk) {
                              ?>
                              <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $rk->macam_persalinan ?></td>
                                <td><?php echo $rk->jenis_kelamin ?></td>
                                <td><?php echo $rk->status_lahir ?></td>
                                <td><?php echo $rk->waktu ?></td>
                                <td><?php echo $rk->penolong_persalinan ?></td>
                                <td><?php echo $rk->penyulit ?></td>
                                <td><?php echo $rk->sebab_kematian ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>   
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="riwayat_obat" aria-labelledby="home-tab">
                          <h2>Riwayat Obat</h2>
                          <div class="ln_solid"></div>
                          <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                          
                          <table id="datatable5" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th align="center">Tanggal</th>
                                <th align="center">Nama Obat</th>
                                <th align="center">Jenis</th>
                                <th align="center">Kategori</th>
                                <th align="center">Kuantitas</th>
                                <th align="center">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $n=1;
                              foreach ($resep_obat as $ro) {
                              ?>
                              <tr>
                                <td><?php echo $ro->tanggal_masuk ?></td>
                                <td><?php echo $ro->nama_obat ?></td>
                                <td><?php echo $ro->jenis ?></td>
                                <td><?php echo $ro->kategori ?></td>
                                <td><?php echo $ro->kuantitas ?></td>
                                <td><?php echo $ro->keterangan ?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
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
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable').DataTable();
    });
  </script>
  <script type="text/javascript">
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable2').DataTable();
    });
  </script>
  <script type="text/javascript">
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable3').DataTable();
    });
  </script>
  <script type="text/javascript">
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable4').DataTable();
    });
  </script>
  <script type="text/javascript">
    function dataTable(){}
    $(document).ready(function(){
      $('#datatable5').DataTable();
    });
  </script>

  
</body>

</html>