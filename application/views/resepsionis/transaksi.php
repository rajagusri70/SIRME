<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Transaksi Pasien</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

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
            <div class="col-md-12 col-sm-12 col-xs-12" style="align-items:  center;">
              <div class="x_panel">
                <h3 align="center">Rumah Sakit Umum XYZ</h3>
                <h2 align="center">Ringkasan Biaya Rawat Jalan No.</h2> 
                <div class="clearfix"></div>
                <div class="x_content">
                  <div class="ln_solid"></div>
                  <table style="font-size: 14px">
                    <?php foreach ($data_trx as $trx) {?>
                    <tr>
                      <td>Nama</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo $trx->nama ?></td>
                    </tr>
                    <tr>
                      <td>No. Transaksi</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo $trx->id_transaksi ?></td>
                    </tr>
                    <tr>
                      <td>No. Pasien</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo $trx->no_pasien ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Transaksi</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo $trx->tanggal_transaksi ?></td>
                    </tr>
                    <tr>
                      <td>Status Transaksi</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo $trx->status ?> &nbsp;<a style="cursor:pointer" onclick="selesai()" title="Lunaskan" class="fa fa-check-square-o"></a></td> 
                    </tr>
                  <?php } ?>
                  </table>
                </br></br>
                  <table class="table table-striped table-bordered">
                    <thead align="center">
                      <tr style="font-weight: bold;">
                        <td>No</td>
                        <td>Uraian Transaksi</td>
                        <td>Jumlah</td>
                        <td>Harga (Rp.)</td>
                        <td>Biaya (Rp.)</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center" ><b>1</b></td>
                        <td colspan="4" ><b>Pendaftaran</b></td>
                      </tr>
                      <?php foreach ($pendaftaran as $pdt) { ?>
                      <tr>
                        <td></td>
                        <td><?php echo $pdt->nama_transaksi ?></td>
                        <td align="center" ><?php echo $pdt->jumlah ?></td>
                        <td align="right"><?php echo $pdt->harga ?></td>
                        <td align="right" ><?php echo $pdt->biaya ?></td>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td align="center" ><b>2</b></td>
                        <td colspan="4" ><b>Pemeriksaan Rawat Jalan</b></td>
                      </tr>
                      <?php foreach ($pemeriksaan as $pms) { ?>
                      <tr>
                        <td></td>
                        <td><?php echo $pms->nama_transaksi ?></td>
                        <td align="center" ><?php echo $pms->jumlah ?></td>
                        <td align="right" ><?php echo $pms->harga ?></td>
                        <td align="right" ><?php echo $pms->biaya ?></td>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td colspan="4" align="center"><b>Jumlah Biaya Rawat Jalan</b></td>
                        <?php foreach ($sumBiaya as $biaya) {?>
                        <td align="right" ><b>Rp.&nbsp;&nbsp;</b><b><?php echo $biaya->biaya ?></b></td>
                      <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div style="text-align: center;">
              <button type="button" class="btn btn-primary" onclick="window.print()"><a class="" style="color: white"></a>Cetak</button>
              </div>
            </div>
          </div>
        </div>
        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">SIRME <a href=""></a>  
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
 

  <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
  <!-- Datatable -->
  <script src="<?php echo base_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>
  
  <script type="text/javascript">
        tampil_resep();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_resep(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>p_umum/check_up/viewresep/<?php echo $id_poli_umum ?>',
                dataType : 'json',
                success : function(data){
                  // console.log(data);
                  if (data.length <= 0){
                    html += '<tr>'+
                                '<td colspan="6" align="center">Belum ada Obat yang dimasukan ke resep</td>'+
                                '</tr>';
                    $('#show_resep').html(html);
                    //setTimeout(tampil_resep, 500)
                  }else{
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td align="center">'+data[i].no_obat+'</td>'+
                                '<td>'+data[i].nama_obat+'</td>'+
                                '<td><input id="kuantitas_input'+data[i].no_id+'" value="'+data[i].kuantitas+'" type="number"  ></td>'+
                                '<td><input id="keterangan_input'+data[i].no_id+'" value="'+data[i].keterangan+'"></td>'+
                                '<td align="center"><button class="" onclick="update_resep('+data[i].no_id+')">Kirim</button></td>'+
                                '<td align="center"><a class="fa fa-remove" onclick="hapus('+data[i].no_id+')" style="cursor:pointer" ></a></td>'+
                                '</tr>';
                    }
                    $('#show_resep').html(html);
                    //setTimeout(tampil_resep, 500)
                  }
                }, 
                error: function(){
                  
                }
 
            });
        }
      
  </script>
  <script type="text/javascript">
    function update_resep(no_id){
      var no_id_value = no_id;
      var kuantitas_value = $("#kuantitas_input"+no_id_value).val();
      var keterangan_value = $("#keterangan_input"+no_id_value).val();;
      
        $.ajax({
          url: "<?php echo base_url().'p_umum/check_up/updateresep' ?>",
          type: 'POST',
          data: {no_id: no_id_value, kuantitas: kuantitas_value, keterangan: keterangan_value},
          dataType: "JSON",
          success: function(data) {
            
            new PNotify({
              title: 'Sukses',
              text: 'Keterangan Resep telah berhasil di ganti',
              type: 'success'
            });
            tampil_resep();
          }
          //tampil_resep();
        });

    }
  </script>
  <script type="text/javascript">
    function selesai(){
      swal({
        title: "Ganti Status",
        text: "Apakah anda ingin mengganti status pembayaran pasien menjadi Lunas.?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((simpan) => {
        if (simpan) {
          $.ajax({
          url: "<?php echo base_url().'resepsionis/kasir/updatebayar/'.$id_rawat ?>",
          type: 'POST',
          data: {},
          dataType: "JSON",
          success: function(data) {
            swal({
              title: "Transaksi Lunas",
              text: "Semua pembiayaan rawat jalan pasien telah dilunasi",
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
                  location.reload();
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
</body>

</html>
