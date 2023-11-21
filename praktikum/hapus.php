<?php
include "koneksi.php";
$nomor =$_GET['nomor'];
$query=mysqli_query($konek,"DELETE FROM data_orang where
nomor=$nomor");
if($query)
{
header("location: home.php");
}
else
{
echo "Proses Input gagal";
}
?>
