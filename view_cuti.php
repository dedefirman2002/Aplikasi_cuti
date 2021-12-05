<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LIST PENGAJUAN CUTI</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container">
<body>
    <h1><center>LIST PENGAJUAN CUTI</center></h1>
<?php
include "koneksi.php";


?>
<table class="table table-bordered" border="1">
<tr>
    <td>Id_Karyawan</td>
    <td> NIK </td>
    <td> Nama </td>
    <td> Departement </td>
    <td> jabatan </td>
	<td> Tanggal Cuti </td>
	<td> pengajuan cuti </td>
	<td> Sisa Cuti </td>
    <td> Keterangan Cuti </td>
	<td colspan="8">Menunggu Persetujuan</td>
    </tr>
    <?php
        $query=mysqli_query($koneksi,"select * from pengajuan_cuti");
        $no=1;
        while ($sisa_cuti=mysqli_fetch_array($query))
        {
        ?>
    <tr>
        <td><?php echo $no++;?></td>
		<td><?php echo $sisa_cuti['nik'];?></td>
        <td><?php echo $sisa_cuti['nama_karyawan'];?></td>
		<td><?php echo $sisa_cuti['departement'];?></td>
		<td><?php echo $sisa_cuti['jabatan'];?></td>
        <td><?php echo $sisa_cuti['date'];?></td>
		<td><?php echo $sisa_cuti['pengajuan_cuti'];?></td>
        <td><?php echo $sisa_cuti['sisa_cuti'];?></td>
        <td><?php echo $sisa_cuti['keterangan_cuti'];?></td>
        <td><a href="edit_karyawan.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan'];?>">Setuju</td>
		<td><a href="hapus_karyawan.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan'];?>">Ditolak</td>
    </tr>

        <?php } ?>

</table>
<table class="table table-bordered" border="1">
	<tr>
	<td><a class="btn btn-primary" href="input_cuti.php" role="button">kembali</a><td>
	</tr>
</table>
</html>