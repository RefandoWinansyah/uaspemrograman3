<?php
include("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into satuan(id_satuan,nama)
	values(
		'".$_POST['id_satuan']."',
		'".$_POST['nama']."')");
	
	if($query_input){
	header('location:tampil_satuan.php');
	}else{
		echo mysqli_error();
	}
	}
include("header.php");
?>
<h1><center> TAMBAHKAN SATUAN </center></h1>
<form method="POST">
<table border="1" class="table table-bordered">
	<tr>
		<td>Id Satuan</td>
		<td><input type="number" name="id_satuan" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>
<?php
include "footer.php";
?>