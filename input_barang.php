<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query ($koneksi,"insert into barang(id_barang,nama,kategori_id,satuan_id)
	values(
		'".$_POST['id_barang']."',
		'".$_POST['nama']."',
		'".$_POST['kategori_id']."',
		'".$_POST['satuan_id']."')");
	
	if($query_input){
	header('location:tampil_barang.php');
	}else{
		echo mysqli_error();
	}
	}
include("header.php");
?>

<h1><center> TAMBAHKAN BARANG </center></h1>
<form method ="POST">
<table class="table table-bordered" border="1">
	<tr>
	    <td>Id Barang</td>
		<td><input type="number" name="id_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
	<td>Id Kategori</td>
		<td><select type="text" name="id_kategori" class="form-control">
			<option value="">---select---</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from kategori" ) or die
			(mysql_error($koneksi));
			while ($id_kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$id_kategori['id_kategori'].'">'.$id_kategori['id_kategori'].'</option>';
			} 
			?>
		</td>
	</tr>
    <td>Id Satuan</td>
		<td><select type="text" name="satuan_id" class="form-control">
			<option value="">---select---</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from satuan" ) or die
			(mysql_error($koneksi));
			while ($id_satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$id_satuan['id_satuan'].'">'.$id_satuan['id_satuan'].'</option>';
			} 
			?>
		</td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<input type='button'value='Tambah kategori'onClick='top.location="input_kategori.php"'class='btn btn-danger'>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-danger'>
<?php
include("footer.php");
?>