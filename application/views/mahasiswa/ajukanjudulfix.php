<html>
  <head>
    <title>Ajukan Judul Final || SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul Final || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/usulanjudul/LihatJudul'); ?>">Kirim Judul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	
	<center><?php echo anchor('mahasiswa/usulanjudulfix/kirimbaru','Kirim Judul'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Action</th>
			<th>Judul</th>
			<th>Dosen Pembimbing</th>
			<th>Komentar</th>
			<th>Status</th>
			<th>Status Pembimbing</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('mahasiswa/usulanjudulfix/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('mahasiswa/usulanjudulfix/hapus/'.$u->id,'Hapus'); ?>
			</td>
			<td><?php echo $u->judul_TA ?></td>
			<td><?php echo $u->Dospem ?></td>
			<td><?php echo $u->komentar ?></td>
			<td><?php echo $u->status ?></td>
			<td><?php echo $u->Status_pembimbing ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  
  </body>
</html>
