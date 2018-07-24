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
                  <h2>Asesmen Rawat Jalan</h2>
                  <ul class="nav navbar-right">
                    <li><a class="" style="font-size: 14px">Tanggal Pemeriksaan : <b><?php echo $tanggal ?></b></a>
                    </li>
                  </ul>
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
                    <h3><?php echo $pt->nama ?></h3>

                    <table style="font-size: 14px">
                      <tr>
                        <td><b>Jenis Kelamin</b></td>
                      </tr>
                      <tr>
                        <td><?php echo $pt->jenis_kelamin ?></td>
                      </tr>
                      <tr>
                        <td><b>Tgl. Lahir</b></td>
                      </tr>
                      <tr>
                        <td><?php echo $pt->tanggal_lahir ?></td>
                      </tr>
                      <tr>
                        <td><b>Alamat</b></td>
                      </tr>
                      <tr>
                        <td><?php echo $pt->alamat ?></td>
                      </tr>
                      <tr>
                        <td><b>No. Telp</b></td>
                      </tr>
                      <tr>
                        <td><?php echo $pt->no_telpon ?></td>
                      </tr>
                      <tr>
                        <td><b>Umur</b></td>
                      </tr>
                      <tr>
                        <td><?php echo $pt->umur ?></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <!-- <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Pemeriksaan Pasien</h2>
                      </div>
                    </div> -->
                    <!-- start of user-activity-graph -->
                    
                    
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Resep Obat Pasien</h4>
                          </div>
                          <div class="modal-body">
                            <h4 align="center"><b>Resep Obat Rumah Sakit</b></h4>
                            <div class="ln_solid"></div>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            <table class="table table-striped table-bordered">
                              <thead align="center" style="font-weight: bold;">
                                <tr>
                                  <td>No. Obat</td>
                                  <td>Nama Obat</td>
                                  <td>Kuantitas</td>
                                  <td>Keterangan</td>
                                  <td>Atur</td>
                                </tr>
                              </thead>
                              <tbody id="show_resep">
                                <!-- <tr>
                                  <td colspan="6" align="center">Tidak ada data</td>
                                </tr> -->
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- </br> -->
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
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
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="rm1a" aria-labelledby="home-tab">
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
                          <?php
                            $RM1A11 = '';
                            $RM1A12 = '';
                            $RM1A21 = '';
                            $RM1A22 = '';
                            $RM1A23 = '';
                            $RM1A24 = '';
                            $RM1A25 = '';
                            $RM1A26 = '';
                            $RM1A27 = '';
                            $RM1A28 = '';
                            $RM1A31 = '';
                            $RM1A32 = '';
                            $RM1A33 = '';
                            $RM1A34 = '';

                            $RM1B11 = '';
                            $RM1B21 = '';
                            $RM1B22 = '';
                            $RM1B23 = '';
                            $RM1B31 = '';
                            $RM1B32 = '';
                            $RM1B33 = '';
                            $RM1B34 = '';
                            $RM1B35 = '';
                            $RM1B36 = '';
                            $RM1B37 = '';
    
                            foreach ($rm1a as $a) {
                              $RM1A11 = $a->RM1A11;
                              $RM1A12 = $a->RM1A12;
                              $RM1A21 = $a->RM1A21;
                              $RM1A22 = $a->RM1A22;
                              $RM1A23 = $a->RM1A23;
                              $RM1A24 = $a->RM1A24;
                              $RM1A25 = $a->RM1A25;
                              $RM1A26 = $a->RM1A26;
                              $RM1A27 = $a->RM1A27;
                              $RM1A28 = $a->RM1A28;
                              $RM1A31 = $a->RM1A31;
                              $RM1A32 = $a->RM1A32;
                              $RM1A33 = $a->RM1A33;
                              $RM1A34 = $a->RM1A34;
                            }
                            foreach ($rm1b as $b) {
                              $RM1B11 = $b->RM1B11;
                              $RM1B21 = $b->RM1B21;
                              $RM1B22 = $b->RM1B22;
                              $RM1B23 = $b->RM1B23;
                              $RM1B31 = $b->RM1B31;
                              $RM1B32 = $b->RM1B32;
                              $RM1B33 = $b->RM1B33;
                              $RM1B34 = $b->RM1B34;
                              $RM1B35 = $b->RM1B35;
                              $RM1B36 = $b->RM1B36;
                              $RM1B37 = $b->RM1B37;
                            } 
                          // }else{

                          // } ?>
                          <form>
                          <table id="form" style="width: 95% ">
                            <tr>
                              <td colspan="3" title="[RM1A.1]" ><b>RIWAYAT PSIKOLOG</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.11]" >Hubungan Pasien dengan Keluarga</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A11" id="RM1A11a" value="Baik" <?php if($RM1A11 == "Baik"){ echo "checked"; }elseif($RM1A11==''){echo "checked";} ?> /> Baik</label>
                                <label><input type="radio" class="flat" name="RM1A11" id="RM1A11b" value="Tidak Baik" <?php if($RM1A11 == "Tidak Baik"){ echo "checked"; } ?> /> Tidak Baik</label>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.12]" >Status Psikologi :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12a" value="Tenang" <?php if($RM1A12 == "Tenang"){ echo "checked"; }elseif($RM1A12==''){echo "checked";} ?> />Tenang</label>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12b" value="Cemas" <?php if($RM1A12 == "Cemas"){ echo "checked"; } ?> /> Cemas</label>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12c" value="Takut" <?php if($RM1A12 == "Takut"){ echo "checked"; } ?> /> Takut</label>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12d" value="Marah" <?php if($RM1A12 == "Marah"){ echo "checked"; } ?> /> Marah</label>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12f" value="Sedih" <?php if($RM1A12 == "Sedih"){ echo "checked"; } ?> /> Sedih</label>
                                <label><input type="radio" class="flat" name="RM1A12" id="RM1A12g" value="Lain-lain" <?php if($RM1A12 == "Lain-lain"){ echo "checked"; } ?> /> Lain-lain</label>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1A.2]" ><b>PEMERIKSAAN FISIK</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.21]" >Kesadaran :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A21" id="RM1A21a" value="Somnolen" <?php if($RM1A21 == "Somnolen"){ echo "checked"; }elseif($RM1A21==''){echo "checked";} ?> /> Somnolen</label>
                                <label><input type="radio" class="flat" name="RM1A21" id="RM1A21b" value="Sopor" <?php if($RM1A21 == "Sopor"){ echo "checked"; } ?> /> Sopor</label>
                                <label><input type="radio" class="flat" name="RM1A21" id="RM1A21c" value="<?php if($RM1A21 == "Coma"){ echo "checked"; } ?>" /> Coma</label>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.22]" >TD :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A22" name="RM1A22" placeholder="" value="<?php echo $RM1A22 ?>">
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;mmHg</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.23]" >N :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A23" name="RM1A23" placeholder="" value="<?php echo $RM1A23 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;x/menit</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.24]" >RR :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A24" name="RM1A24" placeholder="" value="<?php echo $RM1A24 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;x/menit</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.25]" >T :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A25" name="RM1A25" placeholder="" value="<?php echo $RM1A25 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;&#8451;</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.26]" >TB :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A26" name="RM1A26" placeholder="" value="<?php echo $RM1A26 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;cm</span>
                                </div>
                              </td>
                            </tr>
                             <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.27]" >BB :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A27" name="RM1A27" placeholder="" value="<?php echo $RM1A27 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;Kg</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.28]" >Linkgar Kepala :</td>
                              <td>
                                  <div class="has-feedback">
                                  <input type="text" class="form-control" id="RM1A28" name="RM1A28" placeholder="" value="<?php echo $RM1A28 ?>" >
                                  <span class="form-control-feedback right" aria-hidden="true">&nbsp;cm</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1A.3]" ><b>STATUS NUTRISI</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.31]" >Keluhan nafsu makan :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A31" id="RM1A31a" value="Ada" <?php if($RM1A31 == "Ada"){ echo "checked"; }elseif ($RM1A31 == '') { echo "checked"; } ?> /> Ada</label>
                                <label><input type="radio" class="flat" name="RM1A31" id="RM1A31b" value="Tidak Ada" <?php if($RM1A31 == "Tidak Ada"){ echo "checked"; } ?> /> Tidak Ada</label>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.32]" >Penurunan Berat Badan dalam 3 bulan terakhir</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A32" id="RM1A32a" value="Ada" <?php if($RM1A32 == "Ada"){ echo "checked"; }elseif($RM1A32==''){ echo "checked"; } ?> /> Ada</label>
                                <label><input type="radio" class="flat" name="RM1A32" id="RM1A32b" value="Tidak" <?php if($RM1A32 == "Tidak"){ echo "checked"; } ?> /> Tidak</label>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.33]" >Mual :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A33" id="RM1A33a" value="Ya" <?php if($RM1A33 == "Ya"){ echo "checked"; }elseif($RM1A33==''){ echo "checked"; } ?> /> Ya</label>
                                <label><input type="radio" class="flat" name="RM1A33" id="RM1A33b" value="Tidak" <?php if($RM1A33 == "Tidak"){ echo "checked"; } ?> /> Tidak</label>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1A.34]" >Muntah :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1A34" id="RM1A34a" value="Ya" <?php if($RM1A34 == "Ya"){ echo "checked"; }elseif($RM1A34==''){ echo "checked"; } ?> /> Ya</label>
                                <label><input type="radio" class="flat" name="RM1A34" id="RM1A34b" value="Tidak" <?php if($RM1A34 == "Tidak"){ echo "checked"; } ?> /> Tidak</label>
                              </td>
                            </tr>
                          </table>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <?php 
                              $buttona = 'Kirim';
                              foreach ($rm1a as $a) {
                                $buttona = 'Update';
                              }
                              ?>
                              <button type="button" id="rm1a_submit" onclick="rm1a()" class="btn btn-success" value="" ><?php echo $buttona; ?></button>
                            </div>
                          </div>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="rm1b" aria-labelledby="profile-tab">
                          <h2>ASESMEN AWAL</h2>
                          <div class="ln_solid"></div>
                          <form>
                          <table id="form" style="width: 90% ">
                            <tr>
                              <td colspan="2" title="[RM1B.1]" ><b>STATUS FUNGSIONAL</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.11]" >Aktivitas / Mobilitas pasien :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1B11" id="RM1B11a" value="Mandiri" <?php if($RM1B11 == "Mandiri"){ echo "checked"; }elseif($RM1B11==''){ echo "checked"; } ?> /> Mandiri</label>
                                <label><input type="radio" class="flat" name="RM1B11" id="RM1B11b" value="Perlu Bantuan" <?php if($RM1B11 == "Perlu Bantuan"){ echo "checked"; } ?> /> Perlu Bantuan</label>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1B.2]" ><b>SKIRINNING RESIKO CEDERA/JATUH</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1B.21]" >a). Perhatikan cara berjalan pasien saat akan duduk di kursi. Apakah pasien tampak tidak seimbang (sempoyongan / limbung) :</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" >
                                <label><input type="radio" class="flat" name="RM1B21" id="RM1B21a" value="Ya" <?php if($RM1B21 == "Ya"){ echo "checked"; }elseif($RM1B21==''){ echo "checked"; } ?> /> Ya</label>
                                <labek><input type="radio" class="flat" name="RM1B21" id="RM1B21b" value="Tidak" <?php if($RM1B21 == "Tidak"){ echo "checked"; } ?> /> Tidak</labek></td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1B.22]" >b). Apakah pasien pegang pinggiran kursi atau meja, benda lain sebagai penopang saat akan duduk</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" >
                                <label><input type="radio" class="flat" name="RM1B22" id="RM1B22a" value="Ya" <?php if($RM1B22 == "Ya"){ echo "checked"; }elseif($RM1B22==''){ echo "checked"; } ?> /> Ya</label>
                                <label><input type="radio" class="flat" name="RM1B22" id="RM1B22b" value="Tidak" <?php if($RM1B22 == "Tidak"){ echo "checked"; }?> /> Tidak</label></td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" title="[RM1B.23]" >Hasil :</td>
                              <td>
                                <ul>
                                  <li><label><input type="radio" class="flat" name="RM1B23" id="RM1B23a" value="Tidak Beresiko" <?php if($RM1B23 == "Tidak Beresiko"){ echo "checked"; }elseif($RM1B23==''){ echo "checked"; } ?> /> Tidak Beresiko</label></li>
                                  <li><label><input type="radio" class="flat" name="RM1B23" id="RM1B23b" value="Resiko Tinggi" <?php if($RM1B23 == "Resiko Tinggi"){ echo "checked"; } ?> /> Resiko Tinggi</label></li>
                                  <li><label><input type="radio" class="flat" name="RM1B23" id="RM1B23c" value="Resiko Rendah" <?php if($RM1B23 == "Resiko Rendah"){ echo "checked"; } ?> /> Resiko Rendah</label></li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" title="[RM1B.3]" ><b>SKIRINNING NYERI</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.31]" >Nyeri :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1B31" id="RM1B31a" value="Tidak Ada Nyeri" <?php if($RM1B31 == "Tidak Ada Nyeri"){ echo "checked"; }elseif($RM1B31==''){ echo "checked"; } ?> /> Tidak ada nyeri</label>
                                <label><input type="radio" class="flat" name="RM1B31" id="RM1B31b" value="Nyeri Kronis" <?php if($RM1B31 == "Nyeri Kronis"){ echo "checked"; } ?> /> Nyeri Kronis</label>
                                <label><input type="radio" class="flat" name="RM1B31" id="RM1B31c" value="Nyeri Akut" <?php if($RM1B31 == "Nyeri Akut"){ echo "checked"; } ?> /> Nyeri Akut</label>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" title="[RM1B.32]" >Skala Nyeri</td>
                            </tr>
                            <tr>
                              <td colspan="2"> <input type="text" id="RM1B32" value="<?php echo $RM1B32; ?>" name="RM1B32" /></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.33]" >Lokasi :</td>
                              <td><input type="text" id="RM1B33" name="RM1B33" value="<?php echo $RM1B33; ?>" class="form-control col-md-7 col-xs-12"></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.34]" >Karakteristik :</td>
                              <td><input type="text" id="RM1B34" name="RM1B34" value="<?php echo $RM1B34; ?>" class="form-control col-md-7 col-xs-12"></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.35]" >Durasi :</td>
                              <td><input type="text" id="RM1B35" name="RM1B35" value="<?php echo $RM1B35; ?>" class="form-control col-md-7 col-xs-12"></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.36]" >Frekuensi :</td>
                              <td><input type="text" id="RM1B36" name="RM1B36" value="<?php echo $RM1B36; ?>" class="form-control col-md-7 col-xs-12"></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" title="[RM1B.37]" >Nyeri hilang bila :</td>
                              <td>
                                <label><input type="radio" class="flat" name="RM1B37" id="RM1B37a" value="Minum Obat" <?php if($RM1B37 == "Minum Obat"){ echo "checked"; } ?> /> Minum Obat</label>
                                <label><input type="radio" class="flat" name="RM1B37" id="RM1B37b" value="Mendengarkan Musik" <?php if($RM1B37 == "Mendengarkan Musik"){ echo "checked"; } ?> /> Mendengarkan Musik</label>
                                <label><input type="radio" class="flat" name="RM1B37" id="RM1B37c" value="Istirahat" <?php if($RM1B37 == "Istirahat"){ echo "checked"; } ?> /> Istirahat</label>
                                <label><input type="radio" class="flat" name="RM1B37" id="RM1B37d" value="Berubah Posisi Tidur" <?php if($RM1B37 == "Berubah Posisi Tidur"){ echo "checked"; } ?> /> Berubah Posisi Tidur</label>
                                <label><input type="radio" class="flat" name="RM1B37" id="RM1B37e" value="Lain-lain" <?php if($RM1B37 == "Lain-lain"){ echo "checked"; } ?> /> Lain-lain</label>
                              </td>
                            </tr>
                          </table>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <?php 
                              $buttonb = 'Kirim';
                              foreach ($rm1b as $b) {
                                $buttonb = 'Update';
                              }
                              ?>
                              <button type="button" onclick="rm1b()" id="rm1b_submit" class="btn btn-success" ><?php echo $buttonb ?> </button>
                            </div>
                          </div>
                          </form>                   
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="rm2" aria-labelledby="profile-tab">

                          <h2>ASESMEN MEDIS</h2>
                          <div class="ln_solid"></div>
                          <table id="form" style="width: 90% ">
                            <tr>
                              <td colspan="2" ><b>RIWAYAT PENYAKIT</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">Tanggal</th>
                                      <th align="center">Jam Input</th>
                                      <th align="center">Kode ICD-10</th>
                                      <th align="center">Diagnosa</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_riwayat_penyakit">
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Kode ICD-10 :</td>
                              <td>
                                <input type="text" onchange="getNameRiwayat()" id="rm2_icd10" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Nama Penyakit :</td>
                              <td>
                                <input type="text" id="rm2_diagnosa" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm2_keterangan_penyakit" name="rm2_keterangan_penyakit" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_riwayat_button" class="btn btn-info btn-xs" onclick="tambahRiwayatPenyakit()" >Tambah</button></td>
                            </tr>
                            <tr>
                              <td colspan="2" ><b>RIWAYAT ALERGI</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">No.</th>
                                      <th align="center">Organ Sasaran</th>
                                      <th align="center">Gejala & Tanda</th>
                                      <th align="center">Bahan Kimia</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_riwayat_alergi">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Organ Sasaran :</td>
                              <td>
                                <input type="text" id="rm2_organ_sasaran" name="rm2_organ_sasaran" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Gejalan & Tanda :</td>
                              <td>
                                <input type="text" id="rm2_gejala" name="rm2_gejala" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Bahan Kimia :</td>
                              <td>
                                <input type="text" id="rm2_bahan_kimia" name="rm2_bahan_kimia" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm2_keterangan" name="rm2_keterangan" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_alergi_button" name="tambah_alergi_button" onclick="tambahAlergi()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                            <tr>
                              <td colspan="2" ><b>RIWAYAT KEHAMILAN</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" title="" >Jika pasien mempunyai riwayat kehamilan, silahkan buka form Riwayat Kehamilan untuk memasukan data ke rekam medis</td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Buka Form Asesmen :</td>
                              <td>
                                <button type="button" onclick="asesmenHamil()" class="btn btn-info btn-xs">Buka</button>
                              </td>
                              <script type="text/javascript">
                                function asesmenHamil(){
                                  resepWindow = window.open('<?php echo base_url()?>p_umum/check_up/asesmen_hamil/<?php echo $no_pasien ?>', '', 'width=820, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                                }
                              </script>
                            </tr>
                          </table>                  
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="rm3" aria-labelledby="profile-tab">
                          <h2>ASESMEN MEDIS SEKARANG</h2>
                          <div class="ln_solid"></div>
                          <table id="form" style="width: 90% ">
                            <tr>
                              <td colspan="2" ><b>ANAMNESA</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >Keluhan Utama</td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">Jam</th>
                                      <th align="center">Keluhan</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_keluhan">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Keluhan :</td>
                              <td>
                                <input type="text" id="rm3_keluhan" name="rm3_keluhan" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm3_keterangan" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_keluhan_button" name="tambah_keluhan_button" onclick="tambahKeluhan()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                            <tr>
                              <td colspan="2" >Pemeriksaan</td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">Jam Periksa</th>
                                      <th align="center">Bagian yang diperiksa</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_pemeriksaan">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Periksa :</td>
                              <td>
                                <input type="text" id="rm3_periksa" name="rm3_periksa" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm3_keterangan_2" name="rm3_keterangan_2" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_periksa_button" name="tambah_periksa_button" onclick="tambahPemeriksaan()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                          </table>                  
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="rm4" aria-labelledby="profile-tab">
                          <h2>DIAGNOSA</h2>
                          <div class="ln_solid"></div>
                          <table id="form" style="width: 90% ">
                            <tr>
                              <td colspan="2" ><b>DIAGNOSA</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">Jam Periksa</th>
                                      <th align="center">Kode ICD-10</th>
                                      <th align="center">Diagnosa</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_diagnosa">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Kode ICD-10 :</td>
                              <td>
                                <input type="text" onchange="getName()" id="rm4_icd10" name="rm4_icd10" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Diagnosa :</td>
                              <td>
                                <textarea class="form-control" id="rm4_diagnosa" name="rm4_diagnosa" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm4_keterangan" name="rm4_keterangan" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_diagnosa_button" name="tambah_diagnosa_button" onclick="tambahDiagnosa()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                            <tr>
                              <td colspan="2" ><b>TINDAKAN YANG DIBERIKAN</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">No.</th>
                                      <th align="center">Jam</th>
                                      <th align="center">Tindakan</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_tindakan">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Tindakan :</td>
                              <td>
                                <input type="text" id="tindakan_input" name="tindakan_input" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="keterangan_input" name="keterangan_input" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_rencana_button" name="tambah_rencana_button" onclick="tambahTindakan()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                            
                          </table>
                          <div class="ln_solid"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tindakan" aria-labelledby="profile-tab">
                          <h2>TINDAKAN LANJUT</h2>
                          <div class="ln_solid"></div>
                          <table id="form" style="width: 90% ">
                            <tr>
                              <td colspan="2" ><b>RENCANA PENATALAKSANAAN</b></td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th align="center">No.</th>
                                      <th align="center">Rencana</th>
                                      <th align="center">Keterangan</th>
                                      <th align="center">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="show_rencana">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Rencana :</td>
                              <td>
                                <input type="text" id="rm4_rencana" name="rm4_rencana" class="form-control col-md-7 col-xs-12">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="text-align: right;width: 30%" >Keterangan :</td>
                              <td>
                                <textarea class="form-control" id="rm4_keterangan_2" name="rm4_keterangan_2" rows="1" placeholder=''></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td ><button type="button" id="tambah_rencana_button" name="tambah_rencana_button" onclick="tambahRencana()" class="btn btn-info btn-xs">Tambah</button></td>
                            </tr>
                            <tr>
                              <td colspan="2" ><b>PENGOBATAN</b></td>
                            </tr>
                            <tr>
                              <td style="text-align: right;width: 30%" >Susun Resep Obat :</td>
                              <td>
                                <button type="button" class="btn btn-primary" onclick="buka_popup()"><a class="fa fa-shopping-cart" style="color: white"></a>&nbsp;&nbsp;Atur Resep</button>&nbsp;<button type="button" class="btn btn-primary" onclick="buka_detail()"><a class="fa fa-eye" style="color: white"></a>&nbsp;&nbsp;Lihat Resep</button>
                              </td>
                            </tr>
                            
                          </table>
                          <script type="text/javascript">
                                function buka_popup(){
                                  resepWindow = window.open('<?php echo base_url()?>p_umum/check_up/resep/<?php echo $id_resep ?>', '', 'width=820, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                                }

                                function buka_detail(){
                                  resepWindow = window.open('<?php echo base_url()?>p_umum/check_up/detail/<?php echo $id_resep ?>', '', 'width=480, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                                }
                          </script>                      
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
  <script type="text/javascript">

    tampilkan();

    function tampilkan() {
      tampilRiwayatPenyakit();
      tampilRiwayatAlergi();
      tampilKeluhan();
      tampilPemeriksaan();
      tampilDiagnosa();
      tampilRencana();
      tampilTindakan();
      tampilRiwayatHamil();
    }
    
    //pemanggilan fungsi tampil barang.
    //fungsi tampil barang

    function getName(){
      var rm4_icd10_value = $("#rm4_icd10").val();
      $("#rm4_diagnosa").attr('disabled','disabled');
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/getName/'+rm4_icd10_value,
        type  : 'GET',
        success : function(data){
          $("#rm4_diagnosa").val(data);
          $("#rm4_diagnosa").removeAttr('disabled');
        }, 
        error: function(){
          new PNotify({
            title: 'Gagal ICD-10!',
            text: 'Terjadi error saat mengambil kode ICD-10. Dikarenakan error di server atau database',
            type: 'error'
          });              
        }
      });
    }

    function getNameRiwayat(){
      var kode_icd10_value = $("#rm2_icd10").val();
      $("#rm2_diagnosa").attr('disabled','disabled');
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/getName/'+kode_icd10_value,
        type  : 'GET',
        success : function(data){
          $("#rm2_diagnosa").val(data);
          $("#rm2_diagnosa").removeAttr('disabled');
        }, 
        error: function(){
          new PNotify({
            title: 'Gagal ICD-10!',
            text: 'Terjadi error saat mengambil kode ICD-10. Dikarenakan error di server atau database',
            type: 'error'
          });            
        }
      });
    }

    function tampilRiwayatPenyakit(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewRiwayatPenyakit',
        type  : 'POST',
        data : {no_pasien: <?php echo $no_pasien; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_riwayat_penyakit').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += 
              '<tr>'+
              '<td align="center" >'+data[i].tanggal_input+'</td>'+
              '<td align="center" >'+data[i].jam_input+'</td>'+
              '<td>'+data[i].kode_icd10+'</td>'+
              '<td>'+data[i].diagnosa+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(1,'+data[i].id_riwayat+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_riwayat_penyakit').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilRiwayatAlergi(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewRiwayatAlergi',
        type  : 'POST',
        data : {no_pasien: <?php echo $no_pasien; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_riwayat_alergi').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += 
              '<tr>'+
              '<td align="center" >'+data[i].jam_input+'</td>'+
              '<td align="center" >'+data[i].organ_sasaran+'</td>'+
              '<td>'+data[i].gejala+'</td>'+
              '<td>'+data[i].bahan_kimia+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(2,'+data[i].id_alergi+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_riwayat_alergi').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilKeluhan(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewKeluhan',
        type  : 'POST',
        data : {id_periksa: <?php echo $id_periksa; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_keluhan').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += 
              '<tr>'+
              '<td align="center" >'+data[i].jam_input+'</td>'+
              '<td align="center" >'+data[i].keluhan+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(3,'+data[i].id_keluhan+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_keluhan').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

   

    function tampilPemeriksaan(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewPemeriksaan',
        type  : 'POST',
        data : {id_periksa: <?php echo $id_periksa; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_pemeriksaan').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += 
              '<tr>'+
              '<td align="center" >'+data[i].jam_periksa+'</td>'+
              '<td align="center" >'+data[i].periksa+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(4,'+data[i].id_pemeriksaan+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_pemeriksaan').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilDiagnosa(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewDiagnosa',
        type  : 'POST',
        data : {id_periksa: <?php echo $id_periksa; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_diagnosa').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += 
              '<tr>'+
              '<td align="center" >'+data[i].jam_cek+'</td>'+
              '<td align="center" >'+data[i].kode_icd10+'</td>'+
              '<td>'+data[i].diagnosa+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(5,'+data[i].id_diagnosa+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_diagnosa').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilRencana(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewRencana',
        type  : 'POST',
        data : {id_periksa: <?php echo $id_periksa; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_rencana').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            <?php $numb=0; ?>
            for(i=0; i<data.length; i++){
              var num = i+1;
              html += 
              '<tr>'+
              '<td align="center" >'+num+'</td>'+
              '<td align="center" >'+data[i].rencana+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(6,'+data[i].id_penatalaksanaan+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_rencana').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilTindakan(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewTindakan',
        type  : 'POST',
        data : {id_periksa: <?php echo $id_periksa; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_tindakan').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            <?php $numb=0; ?>
            for(i=0; i<data.length; i++){
              var num = i+1;
              html += 
              '<tr>'+
              '<td align="center" >'+num+'</td>'+
              '<td align="center" >'+data[i].jam+'</td>'+
              '<td>'+data[i].tindakan+'</td>'+
              '<td>'+data[i].keterangan+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(7,'+data[i].id_tindakan+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_tindakan').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

    function tampilRiwayatHamil(){
      $.ajax({
        url   : '<?php echo base_url()?>p_umum/check_up/viewRiwayatHamil',
        type  : 'POST',
        data : {no_pasien: <?php echo $no_pasien; ?>},
        dataType : 'JSON',
        success : function(data){
          if (data.length <= 0){
            html += 
              '<tr>'+
              '<td colspan="9" align="center">Data pemeriksaan belum ada</td>'+
              '</tr>';
            $('#show_riwayat_hamil').html(html);
            //setTimeout(tampil_diagnosa, 500)
          }else{
            var html = '';
            var i;
            <?php $numb=0; ?>
            for(i=0; i<data.length; i++){
              var num = i+1;
              html += 
              '<tr>'+
              '<td align="center" >'+num+'</td>'+
              '<td align="center" >'+data[i].macam_persanlinan+'</td>'+
              '<td>'+data[i].jenis_kelamin+'</td>'+
              '<td>'+data[i].status_lahir+'</td>'+
              '<td>'+data[i].waktu+'</td>'+
              '<td>'+data[i].penolong_persalinan+'</td>'+
              '<td>'+data[i].penyulit+'</td>'+
              '<td>'+data[i].sebab_kematian+'</td>'+
              '<td title="Hapus Data" align="center"><a class="fa fa-remove" onclick="hapus(8,'+data[i].id_hamil+')" style="cursor:pointer" ></a></td>'+
              '</tr>';
            }
            $('#show_riwayat_hamil').html(html);
          }
        }, 
        error: function(){
                  
        }
      });
    }

  </script>
  <script type="text/javascript">
    function rm1a(){
      <?php 
      $actiona = 'Kirim';
      foreach ($rm1a as $a) {
        $actiona = 'Update';
      }
      
      ?>
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var RM1A11_value = $('input[name=RM1A11]:checked').val();
      var RM1A12_value = $('input[name=RM1A12]:checked').val();
      var RM1A21_value = $('input[name=RM1A21]:checked').val();
      var RM1A22_value = $('input[name=RM1A22]').val();
      var RM1A23_value = $('input[name=RM1A23]').val();
      var RM1A24_value = $('input[name=RM1A24]').val();
      var RM1A25_value = $('input[name=RM1A25]').val();
      var RM1A26_value = $('input[name=RM1A26]').val();
      var RM1A27_value = $('input[name=RM1A27]').val();
      var RM1A28_value = $('input[name=RM1A28]').val();
      var RM1A31_value = $('input[name=RM1A31]:checked').val();
      var RM1A32_value = $('input[name=RM1A32]:checked').val();
      var RM1A33_value = $('input[name=RM1A33]:checked').val();
      var RM1A34_value = $('input[name=RM1A34]:checked').val();
      // if(periksa_value && kode_value && keterangan_value && tindakan_value){
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpanRm1a/'.$id_periksa ?>",
          type: 'POST',
          data: {action: "<?php echo $actiona; ?>", id_periksa: id_periksa_value, RM1A11: RM1A11_value, RM1A12: RM1A12_value, RM1A21: RM1A21_value, RM1A22: RM1A22_value, RM1A23: RM1A23_value, RM1A24: RM1A24_value, RM1A25: RM1A25_value, RM1A26: RM1A26_value, RM1A27: RM1A27_value, RM1A28: RM1A28_value, RM1A31: RM1A31_value, RM1A32: RM1A32_value, RM1A33: RM1A33_value, RM1A34: RM1A34_value},
          dataType: "JSON",
          success: function(data) {
            $("#rm1a_submit").attr('disabled','disabled');
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            setTimeout(location.reload.bind(location), 1000);
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
  <script type="text/javascript">

    function rm1b(){
      <?php 
      $actionb = 'Kirim';
      foreach ($rm1b as $b) {
        $actionb = 'Update';
      }
      ?>
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var RM1B11_value = $('input[name=RM1B11]:checked').val();
      var RM1B21_value = $('input[name=RM1B21]:checked').val();
      var RM1B22_value = $('input[name=RM1B22]:checked').val();
      var RM1B23_value = $('input[name=RM1B23]:checked').val();
      var RM1B31_value = $('input[name=RM1B31]:checked').val();
      var RM1B32_value = $('input[name=RM1B32]').val();
      var RM1B33_value = $('input[name=RM1B33]').val();
      var RM1B34_value = $('input[name=RM1B34]').val();
      var RM1B35_value = $('input[name=RM1B35]').val();
      var RM1B36_value = $('input[name=RM1B36]').val();
      var RM1B37_value = $('input[name=RM1B37]:checked').val();
      // if(periksa_value && kode_value && keterangan_value && tindakan_value){
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpanRm1b/'.$id_periksa ?>",
          type: 'POST',
          data: {action: "<?php echo $actionb; ?>", id_periksa: id_periksa_value, RM1B11: RM1B11_value, RM1B21: RM1B21_value, RM1B22: RM1B22_value, RM1B23: RM1B23_value, RM1B31: RM1B31_value, RM1B32: RM1B32_value, RM1B33: RM1B33_value, RM1B34: RM1B34_value, RM1B35: RM1B35_value, RM1B36: RM1B36_value, RM1B37: RM1B37_value},
          dataType: "JSON",
          
          success: function(data) {
            $("#rm1b_submit").attr('disabled','disabled');
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            setTimeout(location.reload.bind(location), 1000);
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
  <script type="text/javascript">
    function tambahRiwayatPenyakit(){
      var no_pasien_value = <?php echo $no_pasien; ?>;
      var kode_icd10_value = $("#rm2_icd10").val();
      var diagnosa_value = $("#rm2_diagnosa").val();
      var keterangan_penyakit_value = $("#rm2_keterangan_penyakit").val();
      
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
  <script type="text/javascript">

    function tambahAlergi(){
      var no_pasien_value = '<?php echo $no_pasien; ?>';
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var rm2_organ_sasaran_value = $("#rm2_organ_sasaran").val();
      var rm2_gejela_value = $("#rm2_gejala").val();
      var rm2_bahan_kimia_value = $("#rm2_bahan_kimia").val();
      var rm2_keterangan_value = $("#rm2_keterangan").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Alergi', no_pasien: no_pasien_value, organ_sasaran: rm2_organ_sasaran_value, gejala: rm2_gejela_value, bahan_kimia: rm2_bahan_kimia_value, keterangan: rm2_keterangan_value},
          dataType: "JSON",
          success: function(data) {
            tampilRiwayatAlergi();
            new PNotify({
              title: 'Sukses',
              text: 'Data pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm2_organ_sasaran").val('');
            $("#rm2_gejala").val('');
            $("#rm2_bahan_kimia").val('');
            $("#rm2_keterangan").val('');
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
  <script type="text/javascript">
    function tambahKeluhan(){
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var rm3_keluhan_value = $("#rm3_keluhan").val();
      var rm3_keterangan_value = $("#rm3_keterangan").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Keluhan', id_periksa: id_periksa_value, keluhan: rm3_keluhan_value, keterangan: rm3_keterangan_value},
          dataType: "JSON",
          success: function(data) {
            tampilKeluhan();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm3_keluhan").val('');
            $("#rm3_keterangan").val('');
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
  <script type="text/javascript">
    function tambahPemeriksaan(){
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var rm3_periksa_value = $("#rm3_periksa").val();
      var rm3_keterangan_2_value = $("#rm3_keterangan_2").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Pemeriksaan', id_periksa: id_periksa_value, periksa: rm3_periksa_value, keterangan: rm3_keterangan_2_value},
          dataType: "JSON",
          success: function(data) {
            tampilPemeriksaan();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm3_periksa").val('');
            $("#rm3_keterangan_2").val('');
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
  <script type="text/javascript">
    function tambahDiagnosa(){
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var rm4_icd10_value = $("#rm4_icd10").val();
      var rm4_diagnosa_value = $("#rm4_diagnosa").val();
      var rm4_keterangan_value = $("#rm4_keterangan").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Diagnosa', id_periksa: id_periksa_value, kode_icd10: rm4_icd10_value, diagnosa: rm4_diagnosa_value, keterangan: rm4_keterangan_value},
          dataType: "JSON",
          success: function(data) {
            tampilDiagnosa();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm4_icd10").val('');
            $("#rm4_diagnosa").val('');
            $("#rm4_keterangan").val('');
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
  <script type="text/javascript">
    function tambahRencana(){
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var rm4_rencana_value = $("#rm4_rencana").val();
      var rm4_keterangan_2_value = $("#rm4_keterangan_2").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Rencana', id_periksa: id_periksa_value, rencana: rm4_rencana_value, keterangan: rm4_keterangan_2_value},
          dataType: "JSON",
          success: function(data) {
            tampilRencana();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#rm4_rencana").val('');
            $("#rm4_keterangan_2").val('');
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
  <script type="text/javascript">
    function tambahTindakan(){
      var id_periksa_value = '<?php echo $id_periksa ?>';
      var tindakan_value = $("#tindakan_input").val();
      var keterangan_value = $("#keterangan_input").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'Tindakan', id_periksa: id_periksa_value, tindakan: tindakan_value, keterangan: keterangan_value},
          dataType: "JSON",
          success: function(data) {
            tampilTindakan();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#tindakan_input").val('');
            $("#keterangan_input").val('');
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
  <script type="text/javascript">
    function hapus(jenis,item_id){
    var item_id_value = item_id;
    var jenis_value = jenis;
    swal({
        title: "Hapus Item",
        text: "Apakah anda yakin ingin menghapus?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
            url: "<?php echo base_url().'p_umum/check_up/hapusRM' ?>",
            type: 'POST',
            data: {jenis: jenis_value, item_id: item_id_value},
            dataType: "JSON",
            success: function(data) {
              new PNotify({
                  title: 'Sukses',
                  text: 'Data hasil diagnosa pasien telah berhasil dihapus!',
                  type: 'success',
                  nonblock: {
                    nonblock: true,
                    nonblock_opacity: .2
                }
              });
              tampilkan();
            }
          });
        }else{
          
        }
      });
  }
  </script>
  <script type="text/javascript">
    function selesai(){
      swal({
        title: "Selesaikan Pemeriksaan",
        text: "Apakah anda yakin ingin menyelesaikan semua pemeriksaan Pasien? Jika semua diagnosa telah dilakukan, Anda dapat melakukan aksi ini. Tindakan ini tidak dapat dibatalkan dan semua data yang dimasukan akan tersimpan secara permanen di database",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/selesai/'.$id_rawat ?>",
          type: 'POST',
          data: {no_pasien: <?php echo $no_pasien; ?> },
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "Pasien Telah Diperiksa",
              text: "Rawat Jalan pasien telah selesai dilakukan",
              icon: "success",
              buttons: {
                catch: {
                  text: "Oke",
                  value: "catch",
                },
              },
            })
            .then((value) => {
              switch (value) {         
                case "defeat":
                  swal("");
                  break;         
                case "catch":
                  window.close();
                  break;     
                default:
                  window.close();
              }
            });
          }
        });
        } else {
          
        }
      });
    }
  </script>
            <?php } ?>
  
</body>

</html>