<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");
include('header.php');
?>
</br>
<a href="input_satuan.php" class="btn btn-danger">Tambah barang</a>
<table class="table table-bordered" border="1">
	<tr>
		
		<td>Id Satuan</td>
		<td>Nama</td>
		<td colspan="4">Action</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		
		<td><?php echo $tampil['id_satuan'];?></td>
		<td><?php echo $tampil['nama_satuan'];?></td>
		<td><a href="edit_satuan.php?id_satuan=<?php echo $tampil['id_satuan'];?>">Edit</a></td>
		<td><a href="hapus_satuan.php?id_satuan=<?php echo $tampil['id_satuan'];?>">Hapus</a></td>
	</tr>
<?php }?>
</table>
<?php
include('footer.php')
?>