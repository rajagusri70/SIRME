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
  <link href="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- Sweetbox -->
  
  



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
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Check Up <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Pasien Terdaftar</a>
                    </li>
                    <li><a href="index2.html">Status Rawat Pasien</a>
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
                  Dr. 
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
            
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User Report</h2>
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
                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Pemeriksaan Pasien</h2>
                      </div>
                    </div>
                    <!-- start of user-activity-graph -->
                    <table id="tabel_diagnosa" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th align="center">Tanggal Periksa</th>
                          <th align="center">Jam Periksa</th>
                          <th align="center">Check Up</th>
                          <th align="center">Kode ICD-10</th>
                          <th align="center">Diagnosa</th>
                          <th align="center">Tindakan Lanjut</th>
                          <th align="center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
                        
                        <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" onclick="buka_popup()"><a class="fa fa-shopping-cart" style="color: white"></a>&nbsp;&nbsp;Atur Resep</button> &nbsp;<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" ><a class="fa fa-file-text btn-primary" ></a>&nbsp;&nbsp;Lihat Resep</button>
                    
                    <script type="text/javascript">
                                function buka_popup(){
                                  resepWindow = window.open('<?php echo base_url()?>p_umum/check_up/resep/<?php echo $id_rawat ?>', '', 'width=820, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                                }
                    </script>
                    <div class="ln_solid"></div>
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
                                  <td>Biaya</td>
                                  <td>Aksi</td>
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
                        <li role="presentation" class="active"><a href="#periksa" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Periksa</a>
                        </li>
                        <li role="presentation" class=""><a href="#diagnosa" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Diagnosa</a>
                        </li>
                        <li role="presentation" class=""><a href="#tindakan" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tindakan</a>
                        </li>
                      </ul>
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="periksa" aria-labelledby="home-tab">
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uraian Periksa<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="periksa_input"  class="form-control" rows="3" placeholder=''></textarea>
                            </div>
                          </div>
                          <script type="text/javascript">
                            function transfer(){
                              var div = document.getElementById('kol1');
                              var periksa = document.getElementById('periksa').value;
                              div.innerHTML += periksa;
                            }
                          </script>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="diagnosa" aria-labelledby="profile-tab">

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Penyakit (ICD-10)<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="kode_input" class="normal-form" id="icd10" placeholder="Kode atau Nama">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan Diagnosa<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea class="form-control"  id="keterangan_input" rows="3" placeholder=''></textarea>
                            </div>
                          </div>                      
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tindakan" aria-labelledby="profile-tab">
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tindakan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea class="form-control"  id="tindakan_input" rows="3" placeholder=''></textarea>
                            </div>
                          </div>                       
                        </div>
                        
                        
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" onclick="save()" class="btn btn-success" >Kirim</button>
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
  <script src='https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/15.1.1/autocomplete-lhc_jQuery.min.js'></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.sweet-modal.min.css" />
  <script src="<?php echo base_url(); ?>/assets/js/jquery.sweet-modal.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  
        
        <script type="text/javascript">
          new Def.Autocompleter.Search('icd10', 'https://clinicaltables.nlm.nih.gov/api/icd10cm/v3/search?sf=code,name',
            {tableFormat: true, valueCols: [0], colHeaders: ['Code', 'Name']});
        </script>
  <script type="text/javascript">
    
        tampil_diagnosa();
        tampil_resep();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_diagnosa(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>p_umum/check_up/viewdiagnosa/<?php echo $pt->id_rawat ?>',
                dataType : 'json',
                success : function(data){
                  // console.log(data);
                  if (data.length <= 0){
                    html += '<tr>'+
                                '<td colspan="8" align="center">Data pemeriksaan belum ada</td>'+
                                '</tr>';
                    $('#show_data').html(html);
                    setTimeout(tampil_diagnosa, 500)
                  }else{
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].tanggal_cek+'</td>'+
                                '<td>'+data[i].jam_cek+'</td>'+
                                '<td>'+data[i].periksa+'</td>'+
                                '<td>'+data[i].kode_penyakit+'</td>'+
                                '<td>'+data[i].diagnosa+'</td>'+
                                '<td>'+data[i].tindakan+'</td>'+
                                '<td align="center"><a class="fa fa-remove" onclick="hapus('+data[i].id_diagnosa+')" style="cursor:pointer" ></a></td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                    setTimeout(tampil_diagnosa, 500)
                  }
                }, 
                error: function(){
                  
                }
 
            });
        }

        function tampil_resep(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>p_umum/check_up/viewresep/<?php echo $id_rawat ?>',
                dataType : 'json',
                success : function(data){
                  // console.log(data);
                  if (data.length <= 0){
                    html += '<tr>'+
                                '<td colspan="6" align="center">Belum ada Obat yang dimasukan ke resep</td>'+
                                '</tr>';
                    $('#show_resep').html(html);
                    setTimeout(tampil_resep, 500)
                  }else{
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td align="center">'+data[i].no_obat+'</td>'+
                                '<td>'+data[i].nama_obat+'</td>'+
                                '<td>'+data[i].kuantitas+'</td>'+
                                '<td>'+data[i].keterangan+'</td>'+
                                '<td>'+data[i].keterangan+'</td>'+
                                '<td align="center"><a class="fa fa-remove" onclick="" style="cursor:pointer" ></a></td>'+
                                '</tr>';
                    }
                    $('#show_resep').html(html);
                    setTimeout(tampil_resep, 500)
                  }
                }, 
                error: function(){
                  
                }
 
            });
        }


      
  </script>
  <script type="text/javascript">
    function save(){
      var no_rawat_value = '<?php echo $pt->id_rawat ?>';
      var periksa_value = $("#periksa_input").val();
      var kode_value = $("#icd10").val();
      var keterangan_value = $("#keterangan_input").val();
      var tindakan_value = $("#tindakan_input").val();
      if(periksa_value && kode_value && keterangan_value && tindakan_value){
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {periksa: periksa_value, kode: kode_value, keterangan: keterangan_value, tindakan: tindakan_value, no_rawat: no_rawat_value},
          dataType: "JSON",
            //data: {periksa: periksa_value, kode_penyakit: kode_value, diagnosa: keterangan_value, tindakan: tindakan_value},
          success: function(data) {
              // $.sweetModal({
              //   content: 'This is a success.',
              //   icon: $.sweetModal.ICON_SUCCESS,
              //   timeout: 2000
              // });
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#periksa_input").val('');
            $("#icd10").val('');
            $("#keterangan_input").val('');
            $("#tindakan_input").val('');
          }
        });
      }else{
        $.sweetModal({
          content: 'Form tidak boleh kosong. Semua form harus diisi',
          icon: $.sweetModal.ICON_WARNING
        });
      }
    }
  </script>
  <script type="text/javascript">
    function hapus(id_diagnosa){
    var id_diagnosa_value = id_diagnosa;
    $.sweetModal.confirm('Konfirmasi Hapus', 'Anda yakin ingin menghapus.?', function() {
      $.ajax({
        url: "<?php echo base_url().'p_umum/check_up/hapusDiagnosa' ?>",
        type: 'POST',
        data: {id_diagnosa: id_diagnosa_value},
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
          }
      });
    }, function() {
        
    });
  }
  </script>
            <?php } ?>
  }
</body>

</html>