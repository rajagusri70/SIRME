<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
	</head>
	<body>
		<h1>Form Tambah Pasien Baru</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"></div>

		<form action="<?php echo base_url('pasien/daftar'); ?>" method="post" > 
			<table cellpadding="8">
				<tr>
					<td>No Ktp</td>
					<td><input type="text" name="input_no_ktp" value=""></td>
				</tr>
				<tr>
					<td>No KK</td>
					<td><input type="text" name="input_no_kk" value=""></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama" value=""></td>
				</tr>
				
				<tr>
					<td>Jenis Kelamin</td>
					<td>
					<input type="radio" name="input_jenis_kelamin" value="Laki-laki" > Laki-laki
					<input type="radio" name="input_jenis_kelamin" value="Perempuan" > Perempuan
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="input_tanggal_lahir" value=""></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="input_tempat_lahir" value=""></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="text" name="input_umur" value=""></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="input_alamat" value=""></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="input_pekerjaan" value=""></td>
				</tr>
				<tr>
					<td>Pendidikan</td>
					<td><input type="text" name="input_pendidikan" value=""></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td><input type="text" name="input_golongan_darah" value=""></td>
				</tr>
				<tr>
					<td>Status Pernikahan</td>
					<td><input type="text" name="input_status_pernikahan" value=""></td>
				</tr>
				<tr>
					<td>Nama Orangtua</td>
					<td><input type="text" name="input_nama_orangtua" value=""></td>
				</tr>
				<tr>
					<td>Pekerjaan Orangtua</td>
					<td><input type="text" name="input_pekerjaan_orangtua" value=""></td>
				</tr>
				<tr>
					<td>Nama Suami/Istri</td>
					<td><input type="text" name="input_nama_suamistri" value=""></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td><input type="text" name="input_agama" value=""></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="input_no_telpon" value=""></td>
				</tr>
			</table>
				
			<hr>
			<button type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		</form>
	</body>
</html>
