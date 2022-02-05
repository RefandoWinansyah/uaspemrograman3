<?php
include("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into kategori(id_kategori , nama )
	values(
		'".$_POST['id_kategori']."',
		'".$_POST['nama']."')");
	if($query_input){
	header('location:tampil_kategori.php');
	}else{
		echo mysqli_error();
	}
	}
include("header.php");
?>

<h1><center> TAMBAHKAN KATEGORI </center></h1>
<form method="POST">
<table class="table table-bordered" border="1">	
	<tr>
		<td>Id Kategori</td>
		<td><input type="text" name="kategori_id" class="form-control"></td>
		</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

<?php
include "footer.php";
?>