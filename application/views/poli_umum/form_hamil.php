<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pilih Obat</title>

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
      
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <h2 align="center">Riwayat Kehamilan</h2> 
                <div class="clearfix"></div>
                <table id="tabel_diagnosa" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th align="center">No.</th>
                      <th align="center">Macam Persalinan</th>
                      <th align="center">L/P</th>
                      <th align="center">Hidup/Mati</th>
                      <th align="center">Umur Skrg/Waktu Mnggl</th>
                      <th align="center">Penolong Persalinan</th>
                      <th align="center">Penyulit</th>
                      <th align="center">Sebab Kematian</th>
                      <th align="center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="show_riwayat_hamil">
                                    
                                    <!-- <td colspan="7" align="center">Tidak ada Data</td> -->
                  </tbody>
                </table>
                <div class="x_content">
                  <style type="text/css">
                            #form td {
                              padding: 5px;
                            }

                            ul{
                              list-style-type: none;
                            }
                          </style>
                  <button class="btn btn-primary" onclick="tutup()" >Selesai</button>
                  <div class="ln_solid"></div>
                 
                  <table id="form" style="width: 90% ">
                    <tr>
                      <td colspan="2" ><b>FORM RIWAYAT KEHAMILAN</b></td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Macam Persalinan :</td>
                      <td>
                        <input type="text" id="macam_persalinan" class="form-control col-md-7 col-xs-12">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >L/P :</td>
                      <td>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>                         
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Status Kelahiran :</td>
                      <td>
                        <select class="form-control" name="status_kelahiran" id="status_kelahiran">
                          <option value="Hidup">Hidup</option>
                          <option value="Mati">Mati</option>
                        </select>                         
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Umur/Waktu Meninggal :</td>
                      <td>
                        <input type="text" id="umur" class="form-control col-md-7 col-xs-12">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Penolong Persalinan :</td>
                      <td>
                        <input type="text" id="penolong_persalinan" class="form-control col-md-7 col-xs-12">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Penyulit :</td>
                      <td>
                        <input type="text" id="penyulit" class="form-control col-md-7 col-xs-12">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: right;width: 30%" >Sebab Kematian :</td>
                      <td>
                        <input type="text" id="sebab_kematian" class="form-control col-md-7 col-xs-12">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" >
                        <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-3" st>
                      <center><button type="button" onclick="tambahRiwayatHamil()" id="riwayat_hamil_submit" class="btn btn-success" >Kirim </button></center>
                    </div>
                  </div>
                      </td>
                    </tr>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
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

  

  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/datepicker/daterangepicker.js"></script>

  <!-- chart js -->
  <script src="<?php echo base_url(); ?>/assets/js/chartjs/chart.min.js"></script>

  <!-- moris js -->
  <script src="<?php echo base_url(); ?>/assets/js/moris/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/moris/morris.min.js"></script>

  <!-- pace -->
  <script src="<?php echo base_url(); ?>/assets/js/pace/pace.min.js"></script>
  <!-- Datatable -->
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>

  <!-- Sweet Modal -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.sweet-modal.min.css" />
  <script src="<?php echo base_url(); ?>/assets/js/jquery.sweet-modal.min.js"></script>

  
  <script type="text/javascript">
    tampilRiwayatHamil();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
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
              '<td align="center" >'+data[i].macam_persalinan+'</td>'+
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
    function tambahRiwayatHamil(){
      var no_pasien_value = '<?php echo $no_pasien ?>';
      var macam_persalinan_value = $("#macam_persalinan").val();
      var jenis_kelamin_value = $("#jenis_kelamin").val();
      var status_kelahiran_value = $("#status_kelahiran").val();
      var umur_value = $("#umur").val();
      var penolong_persalinan_value = $("#penolong_persalinan").val();
      var penyulit_value = $("#penyulit").val();
      var sebab_kematian_value = $("#sebab_kematian").val();
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/simpan' ?>",
          type: 'POST',
          data: {jenis:'RiwayatHamil', no_pasien: no_pasien_value, macam_persalinan: macam_persalinan_value, jenis_kelamin: jenis_kelamin_value, status_lahir: status_kelahiran_value, waktu: umur_value, penolong_persalinan: penolong_persalinan_value, penyulit: penyulit_value, sebab_kematian: sebab_kematian_value},
          dataType: "JSON",
          success: function(data) {
            tampilRiwayatHamil();
            new PNotify({
              title: 'Sukses',
              text: 'Data hasil diagnosa pasien telah berhasil disimpan!',
              type: 'success'
            });
            $("#macam_persalinan").val('');
            $("#jenis_kelamin").val('Laki-laki');
            $("#status_kelahiran").val('Hidup');
            $("#umur").val('');
            $("#penolong_persalinan").val('');
            $("#penyulit").val('');
            $("#sebab_kematian").val('');
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
    function tutup(){
      window.close();
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
              tampilRiwayatHamil();
            }
          });
        }else{
          
        }
      });
  }
  </script>
</body>

</html>
