<?php
include "koneksi.php";
  if(isset($_POST['Save'])){
    $query_input=mysqli_query($koneksi,"insert into pengajuan_cuti (nik,nama_karyawan,departement,jabatan,date,pengajuan_cuti,sisa_cuti,keterangan_cuti)
    values(
    '".$_POST['nik']."',
    '".$_POST['nama_karyawan']."',
    '".$_POST['departement']."',
    '".$_POST['jabatan']."',
    '".$_POST['date']."',
    '".$_POST['pengajuan_cuti']."',
    '".$_POST['sisa_cuti']."',
    '".$_POST['keterangan_cuti']."')");
    
    if($query_input){
    header('location:view_cuti.php');
    }else{
	      echo mysqli_error();
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT PENGAJUAN CUTI KARYAWAN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container">
<body>
  SILAHKAN ISI DATA DIBAWAH INI
</body>
</html>
<form method ="POST">

<table class="table table-bordered" border="1">
<tr>
		<td>Nik</td>
      <td><input type="text" name="nik"></td>
  </tr>
  <tr>
		<td>Nama</td>
      <td><input type="text" name="nama_karyawan"></td>
  </tr>

  <tr>
		<td>Departement</td>
    <td>
      <select name="departement">
      <option value="">-----Pilih-----</option>
			<option value="HRD">HRD</option>
			<option value="Produksi">Produksi</option>
			<option value="Marketing">Marketing</option>
      </select>
    </td>

  </tr>
  <tr>
		<td>Jabatan</td>
    <td>
      <select name="jabatan">
			<option value="">-----Pilih-----</option>
      <option value="Manager">Manager</option>
			<option value="SPV">SPV</option>
			<option value="Leader">Leader</option>
      <option value="Staff">Staff</option>
      <option value="Admin">Admin</option>
      </select>
    </td>
  </tr>

  <tr>
		<td>Tanggal Cuti</td>
      <td><input type="date" name="date"></td>
  </tr>

  <tr>
		<td>Pengajuan Cuti</td>
      <td><input type="int" name="pengajuan_cuti"></td>
  </tr>

  <tr>
		<td>Sisa Cuti</td>
      <td><input type="int" name="sisa_cuti"></td>
  </tr>

  <tr>
		<td>Keterangan cuti</td>
    <td>
      <select name="keterangan_cuti">
			<option value="">-----Pilih-----</option>
			<option value="Nikah">Nikah</option>
      <option value="Sakit">Sakit</option>>
      <option value="Melahirkan">Melahirkan</option>
      <option value="Keperluan keluarga">Keperluan Keluarga</option>
		  </select>
  </td>
	</tr>

</table>
<td>
		<input type="submit" class="btn btn-primary"name="Save" value="Ajukan Cuti">
		</td>
</div>
		
</form>
