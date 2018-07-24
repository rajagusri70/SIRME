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
                  <h2>Data Obat </h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <?php foreach ($data_obat as $do) {

                          ?>
                    <div class="profile_img">

                      <!-- end of image cropping -->
                      
                      <!-- end of image cropping -->

                    </div>
                    <h3><?php echo $do->nama_obat; ?></h3>

                    <script type="text/javascript">
                      function bukaForm(){
                       
                        document.getElementById('nama_obat').removeAttribute('readonly');
                        document.getElementById('satuan').removeAttribute('disabled');
                        document.getElementById('kategori').removeAttribute('disabled');
                        document.getElementById('harga').removeAttribute('readonly');
                        document.getElementById('stok').removeAttribute('readonly');
                        document.getElementById('deskripsi').removeAttribute('readonly');
                        document.getElementById('tombol_submit_obat').removeAttribute('disabled');
                      }
                    </script>

                    <button class="btn btn-success" id="buka_form" onclick="bukaForm()" ><i class="fa fa-edit m-right-xs"></i>&nbsp; Buka Form Edit</buttton>
                    <br />


                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_data_diri" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Obat</a>
                        </li>
                        
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_data_diri" aria-labelledby="home-tab">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('apotek/detail/').$do->no_obat  ?>" method="post" enctype="multipart/form-data" >
                            
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Kode Obat
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                               <a class="btn btn-primary"><b><?php echo $do->no_obat; ?></b></a>
                              </div>
                            </div>                            
                            <span class="section"></span>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_obat" class="form-control" name="input_nama_obat"  required="required" type="text" value="<?php echo $do->nama_obat; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Satuan 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="satuan" name="input_satuan" class="normal-form-long" disabled >
                                  <?php
                                  $st = $do->jenis;
                                  ?>
                                  <option value="none"  >- none -</option>
                                  <option value="Tablet" <?php if($st=="Tablet"){ echo "selected"; } ?> >Tablet</option>
                                  <option value="Strip" <?php if($st=="Strip"){ echo "selected"; } ?> >Strip</option>
                                  <option value="Pak" <?php if($st=="Pak"){ echo "selected"; } ?> >Pak</option>
                                  <option value="Pieces" <?php if($st=="Pieces"){ echo "selected"; } ?> >Pieces</option>
                                  <option value="Botol" <?php if($st=="Botol"){ echo "selected"; } ?> >Botol</option>
                                  <option value="Sachet" <?php if($st=="Sachet"){ echo "selected"; } ?> >Sachet</option>
                                  <option value="Ampul" <?php if($st=="Ampul"){ echo "selected"; } ?> >Ampul</option>
                                  
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Kategori 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="kategori" name="input_kategori" class="normal-form-long" disabled >
                                  <?php
                                  $kt = $do->kategori;
                                  ?>
                                  <option value="none">- none -</option>
                                  <option value="Generik" <?php if($kt=="Generik"){ echo "selected"; } ?> >Generik</option>
                                  <option value="Paten" <?php if($kt=="Paten"){ echo "selected"; } ?> >Paten</option>
                                </select>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Harga 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="harga" class="form-control" name="input_harga"  required="required" type="text" value="<?php echo $do->harga; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Stok
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="stok" class="form-control" name="input_stok"  required="required" type="text" value="<?php echo $do->stok; ?>" readonly >
                              </div>
                            </div>
                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="deskripsi" name="input_deskripsi" value="" class="form-control" rows="3" placeholder="masukan deskripsi obat" readonly ><?php echo $do->deskripsi; ?></textarea>
                            </div>
                          </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <input id="tombol_submit_obat" type="submit" name="tombol_submit_obat" class="btn btn-success" value="Ubah Data" disabled >
                              </div>
                            </div>
                          </form>
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
