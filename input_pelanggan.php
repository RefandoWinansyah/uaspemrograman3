<?php
include("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into pelanggan(id_pelanggan,nama_pelanggan,no_tlp,status)
	values(
		'".$_POST['id_pelanggan']."',
		'".$_POST['nama_pelanggan']."',
		'".$_POST['no_tlp']."',
		'".$_POST['status']."')");
	
	if($query_input){
	header('location:tampil_pelanggan.php');
	}else{
		echo mysqli_error();
	}
	}
include("header.php");
?>
<h1><center> TAMBAHKAN DATA PELANGGAN </center></h1>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
	    <td>Id Pelanggan</td>
		<td><input type="number" name="id_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td>No Tlp</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
    <td>Status</td>
		<td><select type="text" name="status" class="form-control">
			<option value="">-----Pilih-----</option>
			<option value="Member">Member</option>
			<option value="Non">Non Member</option>
		</td>
	
	<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>
<?php
include("footer.php");
?>