<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIRME | Admin</title>

  <!-- Bootstrap core CSS -->


  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>/assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#0C9;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }

    .my-float{
      margin-top:22px;
    }
  </style>
  
  


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

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
              <h3><?php foreach ($users as $u) {
                echo $u->tipe_admin;
              } ?></h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i> Manajemen User <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('admin/user') ?>" > Daftar User</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-info-circle"></i> Manajemen Info <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('admin/pasien') ?>" >Pasien</a>
                    </li>
                    <li><a href="<?php echo site_url('admin/obat') ?>" >Informasi Obat</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-fire"></i> Manajemen Server <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>" >FHIR</a>
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
                Manajemen Server
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
                  <h2>Daftar Server</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <a class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> <b>Tambah</b></a>
                  <!-- Modal --> 
                  <div class="modal fade bs-example-modal-lg" id="modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><b>Tambah Server</b></h4>
                        </div>
                        <div class="modal-body">
                          <!-- <h4>Text in a modal</h4> -->
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Data Server</h2>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content" >
                                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="" enctype="multipart/form-data" >
                                    <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="input_nama_server" id="nama" required="required" class="normal-form-long">
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">URL <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="input_url" id="url" required="required" class="normal-form-long">
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> <span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <small><b>contoh URL : http://rumahsakit.com/fhir-api</b></small>
                                      </div>
                                    </div>
                                  
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" onclick="tambahServer()" ><i class="fa fa-edit"></i> Simpan</button>
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
                  <p>
                  </p>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Server RS</th>
                        <th>URL</th>
                        <th align="center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">
                      
                    </tbody>
                  </table>
                  <script type="text/javascript">
                    function buka_popup(user_id){
                      resepWindow = window.open('<?php echo base_url()?>admin/profile/'+user_id,'', 'width=920, height=720, menubar=yes,location=no, scrollbars=yes, resizeable=no, status=yes, copyhistory=no,toolbar=no');
                    }
                  </script>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
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
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      viewFhir();
      $('#datatable').dataTable();
    });

    function dataTable(){
      $('#datatable').dataTable().fnDestroy();
      $('#datatable').dataTable();
    }

    function viewFhir(){
        $.ajax({
          type  : 'ajax',
          url   : '<?php echo base_url()?>/admin/getFhir',
          async : false,
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              var num = i+1;
              html += '<tr>'+
                      '<td align="center" style="vertical-align:middle" >'+num+'</td>'+
                      '<td style="vertical-align:middle" >'+data[i].nama+'</td>'+
                      '<td style="vertical-align:middle" >'+data[i].url+'</td>'+
                      '<td align="center" style="vertical-align:middle" >'+
                        '<button type="button" class="btn btn-danger" onclick="hapus(2,'+data[i].pk+')"><i class="fa fa-remove"></i> Hapus</button>'+
                      '</td>'+
                      '</tr>';
            }
            $('#show_data').html(html);
          }
        });
      }

    function tambahServer(){
      var nama_value = $('#nama').val();
      var url_value = $("#url").val();
      
        $.ajax({
          url: "<?php echo base_url().'/admin/tambahServer' ?>",
          type: 'POST',
          data: {nama: nama_value, url: url_value},
          dataType: "JSON",
          success: function(data) {
            $("#nama").val('');
            $("#url").val('');
            swal({
              title: "Berhasil",
              text: "Data berhasil disimpan",
              icon: "success",
              button: "Ok!",
            });
            $('#modal_tambah').modal('hide');
            $('#datatable').dataTable().fnDestroy();
            viewFhir();
            $('#datatable').dataTable();
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

    function hapus(jenis,item_id){
    var item_id_value = item_id;
    var jenis_value = jenis;
    swal({
        title: "Hapus Data.?",
        text: "Data akan dihapus dari database. Lanjutkan?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
            url: "<?php echo base_url().'admin/hapus' ?>",
            type: 'POST',
            data: {jenis: jenis_value, item_id: item_id_value},
            dataType: "JSON",
            success: function(data) {
              swal({
                title: "Data Berhasil Dihapus.!",
                text: "Data Telah berhasil dihapus dari Database",
                icon: "success",
                buttons: {
                  catch: {
                    text: "Oke",
                    value: "catch",
                  },
                },
              });
              $('#datatable').dataTable().fnDestroy();
              viewFhir();
              $('#datatable').dataTable();
            }
          });
        }else{
          
        }
      });
  }
  </script>
  
</body>

</html>