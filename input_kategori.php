<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query=mysqli_query($koneksi,"INSERT INTO kategori(id_kategori,nama_kategori)
VALUES(	
'".$_POST['id_kategori']."',
'".$_POST['nama_kategori']."')");

if($query){
	header('location:tampil_kategori.php');
}else{
	echo mysqli_error();
	}
}
include('header.php');
?>
<h4>INPUT KATEGORI </h4>
<form method="post">
<table class="table">
	<tr>
		<td>ID Kategori</td>
		<td><input type="text" name="id_kategori" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Kategori</td>
		<td><input type="text" name="nama_kategori" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php')
?>