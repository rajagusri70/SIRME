<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Rekam Medis Rawat Jalan</title>

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
                <h2 align="center">Perincian Rawat Jalan</h2>
                <h2 align="center">No. Rekam Medis <b><?php foreach ($rawat_jalan as $rj) { echo $rj->id_rawat; } ?></b></h2> 
                <div class="clearfix"></div>
                <div class="x_content">
                  <div class="ln_solid"></div>
                  <?php foreach ($rawat_jalan as $rj) {?>
                  <table>
                    <tr>
                      <td><b>Tanggal</b></td>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo substr($rj->tanggal, 0,2) ?> <?php 
                                  $b = substr($rj->tanggal, 3,2);
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
                                  ?> <?php echo substr($rj->tanggal, 6) ?></td>
                      <td>&nbsp;&nbsp;</td>
                      <td><b>Jam</b></std>
                      <td>&nbsp;:&nbsp;</td>
                      <td><?php echo substr($rj->waktu, 0,5) ?> WIB</td>
                    </tr>
                  </table>
                <?php } ?>
                  </br>
                  <table >
                    <tr>
                      <td>
                        <?php foreach ($pasien as $ps) {
                        ?>
                        <table>
                          <tr>
                            <td><b>Nama Pasien</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->nama; ?></td>
                          </tr>
                          <tr>
                            <td><b>Tgl. Lahir</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->tanggal_lahir; ?></td>
                          </tr>
                          <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->jenis_kelamin; ?></td>
                          </tr>
                          <tr>
                            <td><b>Agama</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->agama; ?></td>
                          </tr>
                          <tr>
                            <td><b>Status Perkawinan</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->status_pernikahan; ?></td>
                          </tr>
                          <tr>
                            <td><b>Kontak</b></td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><?php echo $ps->no_telpon; ?></td>
                          </tr>
                        </table>
                      <?php } ?>
                      </td>
                    </tr>
                  </table>
                  <div class="ln_solid"></div>
                </br>
                  <table class="table table-striped table-bordered">
                      <tr style="font-weight: bold;">
                        <td colspan="2">I. Pengkajian Keperawatan</td>
                      </tr>
                      <tr>
                        <?php foreach ($rm1a as $r) {?>
                        <td>
                          <b>Status Fungsional</b>
                          <ul>
                            <li>Hubungan dengan keluarga : <b><u><?php echo $r->RM1A11; ?></u></b></li>
                            <li>Status Psikologi : <b><u><?php echo $r->RM1A12; ?></u></b></li>
                          </ul>
                          <b>Status Nutrisi</b>
                          <ul>
                            <li>Keluhan nafsu makan : <b><u><?php echo $r->RM1A31; ?></u></b></li>
                            <li>Penurunan berat badan dalam 3 bulan terakhir : <b><u><?php echo $r->RM1A32; ?></u></b></li>
                            <li>Mual : <b><u><?php echo $r->RM1A33; ?></u></b></li>
                            <li>Muntah : <b><u><?php echo $r->RM1A34; ?></u></b></li>
                          </ul>
                        </td>
                        <td>
                          <b>Pemeriksaan Fisik</b>
                          <ul>
                            <li>Kesadaran : <b><u><?php echo $r->RM1A21; ?></u></b></li>
                            <li>Tekanan Darah : <b><u><?php echo $r->RM1A22; ?> mmHg</u></b></li>
                            <li>Denyut Nadi : <b><u><?php echo $r->RM1A23; ?> kali/menit</u></b></li>
                            <li>Frekuensi Pernapasan : <b><u><?php echo $r->RM1A24; ?> kali/menit</u></b></li>
                            <li>Suhu Badan : <b><u><?php echo $r->RM1A25; ?> Celcius</u></b></li>
                            <li>Tinggi Badan : <b><u><?php echo $r->RM1A26; ?> cm</u></b></li>
                            <li>Berat Badan : <b><u><?php echo $r->RM1A27; ?> kg</u></b></li>
                            <li>Lingkar Kepala : <b><u><?php echo $r->RM1A28; ?> cm</u></b></li>
                          </ul>
                        </td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <?php foreach ($rm1b as $r) {?>
                        <td>
                          <b>Status Fungsional</b>
                          <ul>
                            <li>Status Mobilitas Pasien : <b><u><?php echo $r->RM1B11; ?></u></b></li>
                          </ul>
                          <b>Skrinning Resiko Cedera/Jatuh</b>
                          <ul>
                            <li>Perhatikan cara berjalan pasien saat akan duduk di kursi. Apakah</br> pasien tampak tidak seimbang (sempoyongan / limbung) : <b><u><?php echo $r->RM1B21; ?></u></b></li>
                            <li>Apakah pasien pegang pinggiran kursi atau meja, </br>benda lain sebagai penopang saat akan duduk : <b><u><?php echo $r->RM1B22; ?></u></b></li>
                            <li>Status Resiko Cedera/Jatuh : <b><u><?php echo $r->RM1B23; ?></u></b></li>
                          </ul>
                        </td>
                        <td>
                          <b>Skrinning Nyeri</b>
                          <ul>
                            <li>Nyeri : <b><u><?php echo $r->RM1B31; ?></u></b></li>
                            <li>Skala Nyeri : <b><u><?php echo $r->RM1B32; ?></u></b></li>
                            <li>Lokasi : <b><u><?php echo $r->RM1B33; ?></u></b></li>
                            <li>Karakteristik : <b><u><?php echo $r->RM1B34; ?></u></b></li>
                            <li>Durasi : <b><u><?php echo $r->RM1B35; ?></u></b></li>
                            <li>Frekuensi : <b><u><?php echo $r->RM1B36; ?></u></b></li>
                            <li>Nyeri Hilang Bila : <b><u><?php echo $r->RM1B37; ?></u></b></li>
                          </ul>
                        </td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <b>Riwayat Penyakit</b>
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td><b>No.</b></td>
                              <td><b>Tanggal</b></td>
                              <td><b>Kode ICD-10</b></td>
                              <td><b>Diagnosa</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($riwayat_penyakit as $rp) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $rp->tanggal_input; ?></td>
                              <td><?php echo $rp->kode_icd10; ?></td>
                              <td><?php echo $rp->diagnosa; ?></td>
                              <td><?php echo $rp->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                          <b>Riwayat Alergi</b>
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td align="center"><b>No.</b></td>
                              <td><b>Organ Sasaran</b></td>
                              <td><b>Gejala</b></td>
                              <td><b>Bahan Kimia</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($riwayat_alergi as $ra) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $ra->organ_sasaran; ?></td>
                              <td><?php echo $ra->gejala; ?></td>
                              <td><?php echo $ra->bahan_kimia; ?></td>
                              <td><?php echo $ra->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                        </td>
                      </tr>
                  </table></br>
                  <table class="table table-striped table-bordered">
                      <tr style="font-weight: bold;">
                        <td colspan="2">II. Pengkajian Dokter</td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <b>Anamnesa</b></br>
                          Keluhan Utama
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td><b>No.</b></td>
                              <td><b>Keluhan</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($keluhan as $k) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $k->keluhan; ?></td>
                              <td><?php echo $k->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                          Pemeriksaan
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td><b>No.</b></td>
                              <td><b>Jam</b></td>
                              <td><b>Bagian yang Diperiksa</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($pemeriksaan as $p) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $p->jam_periksa; ?></td>
                              <td><?php echo $p->periksa; ?></td>
                              <td><?php echo $p->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                          <b>Diagnosa</b>
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td><b>No.</b></td>
                              <td><b>Kode ICD-10</b></td>
                              <td><b>Diagnosa</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($diagnosa as $d) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $d->kode_icd10; ?></td>
                              <td><?php echo $d->diagnosa; ?></td>
                              <td><?php echo $d->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                          <b>Tindakan yang Diberikan</b>
                          <table class="table table-striped table-bordered">
                            <tr align="center">
                              <td><b>No.</b></td>
                              <td><b>Tindakan</b></td>
                              <td><b>Keterangan</b></td>
                            </tr>
                            <?php $n=1;
                            foreach ($tindakan as $t) {
                            ?>
                            <tr>
                              <td align="center"><?php echo $n++; ?></td>
                              <td><?php echo $t->tindakan; ?></td>
                              <td><?php echo $t->keterangan; ?></td>
                            </tr>
                            <?php } ?>
                          </table>
                        </td>
                      </tr>
                  </table>
                  </br>
                  <style>

                    div.b {
                        position: absolute;
                        right: 0;
                    } 
                  </style>
                  <div class="b">Dokter Pemeriksa</div>
                </br></br></br></br>
                <?php foreach ($dokter_pemeriksa as $dp) {?>
                <div class="b"><?php echo $dp->nama; ?></div>
                <?php } ?>
                </br></br>
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
