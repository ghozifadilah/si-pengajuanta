<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		
		<a href="<?php echo site_url('dosen/dosen'); ?>">Home</a>
		
      </center>
	  <br>
	  <br>

	
	<div class="container">
		<center><?php echo anchor('dosen/penelitian/kirimbaru','Kirim Judul'); ?></center>
			<table class="table" style="margin:20px auto;" border="1">
		<tr class="success">
			<th>No</th>
			<th>Action</th>
			<th>Judul Penelitian</th>
			<th>Kuota</th>
		
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('dosen/penelitian/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('dosen/penelitian/hapus/'.$u->id,'Hapus'); ?>
			</td>
			<td><?php echo $u->Judul_Penelitian ?></td>
			<td><?php echo $u->kuota ?></td>
			
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  
  </body>
</html>
