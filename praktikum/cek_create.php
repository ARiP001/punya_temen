<?php
include "koneksi.php";
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$nohp =$_POST['nohp'];
$jenis_sepatu =$_POST['jenis_sepatu'];
$deskripsi =$_POST['deskripsi'];
$query=mysqli_query($konek,"INSERT INTO data_orang VALUES('','$nama','$alamat','$nohp','$jenis_sepatu', '$deskripsi')") or die(mysqli_error($konek));

if($query)
{
header("location: home.php");
}
else
{
echo "Proses Input gagal";
}
?> 