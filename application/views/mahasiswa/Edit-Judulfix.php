<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3>Edit Data</h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/mahasiswa/LihatJudul'); ?>">LihatJudul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
			
	</center>
	<?php foreach($table_ta as $u){ ?>
	<form action="<?php echo base_url(). 'mahasiswa/usulanjudulfix/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="judul_TA" value="<?php echo $u->judul_TA ?>">
				</td>
			</tr>
			<tr>
				<td>Ringkasan</td>
				<td><textarea type="text" name="ringkasan" value=""><?php echo $u->ringkasan ?></textarea></td>
			</tr>
			<tr>
				<td>Dosen Pembimbing</td>
				<td><input type="text" name="dospem" value="<?php echo $u->Dospem ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>

  	
  
  </body>
</html>
