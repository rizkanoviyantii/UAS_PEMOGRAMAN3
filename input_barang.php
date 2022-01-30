<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query=mysqli_query($koneksi,"INSERT INTO barang(nama,kategori_id,satuan_id)
VALUES(	
'".$_POST['nama']."',
'".$_POST['kategori_id']."',
'".$_POST['satuan_id']."')");

if($query){
	header('location:tampil_barang.php');
}else{
	echo mysqli_error();
	}
}
include('header.php');
?>
<h4>Input Transaksi </h4>
<form method="post">
<table class="table">
	<tr>
		<td>nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>katagori_id</td>
		<td><input type="text" name="kategori_id" class="form-control"></td>
	</tr>
	<tr>
		<td>satuan_id</td>
		<td><input type="text" name="satuan_id" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php')
?>