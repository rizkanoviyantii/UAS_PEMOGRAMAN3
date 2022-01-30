<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query=mysqli_query($koneksi,"INSERT INTO pelanggan(nama_pelanggan,no_tlp,status)
VALUES(	
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlp']."',
'".$_POST['status']."')");

if($query){
	header('location:tampil_pelanggan.php');
}else{
	echo mysqli_error();
	}
}
include('header.php');
?>
<h4>INPUT PELANGGAN </h4>
<form method="post">
<table class="table">
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td>Nomor Telpon</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php')
?>