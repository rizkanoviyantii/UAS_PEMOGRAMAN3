<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"SELECT * FROM transaksi
JOIN barang ON transaksi.id_barang = barang.id_barang
JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan");
include('header.php');
?>
</br>
<a href="input_Transaksi.php" class="btn btn-danger">Tambah Transaksi</a>
<table class="table table-bordered" border="1">
	<tr>
		
		<td>Id Transaksi</td>
		<td>Nama</td>
		<td>Tanggal</td>
		<td>Harga</td>
        <td>qty</td>
        <td>ID Barang</td>
        <td>Diskon</td>
        <td>ID Pelanggan</td>
        
		<td colspan="4">Action</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		
		<td><?php echo $tampil['id_transaksi'];?></td>
		<td><?php echo $tampil['nama_transaksi'];?></td>
		<td><?php echo $tampil['tgl_transaksi'];?></td>
		<td><?php echo $tampil['harga'];?></td>
        <td><?php echo $tampil['qty'];?></td>
        <td><?php echo $tampil['id_barang'];?></td>
        <td><?php echo $tampil['diskon'];?></td>
        <td><?php echo $tampil['id_pelanggan'];?></td>
		<td><a href="edit_transaksi.php?id_transaksi=<?php echo $tampil['id_transaksi'];?>">Edit</a></td>
		<td><a href="hapus_transaksi.php?id_transaksi=<?php echo $tampil['id_transaksi'];?>">Hapus</a></td>
	</tr>
<?php }?>
</table>
<?php
include('footer.php')
?>