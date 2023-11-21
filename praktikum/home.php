<!doctype html>
<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
        }
    </style>
    <?php $i=1?>
  </head>
  <body>
    <div class="container">

        <div class="header mt-5">
            <h1>Shoesteria DATABASE</h1>
            <hr></hr>
            <h5>Selamat Datang <?php echo $_SESSION['username'];?></h5>
        </div>

        <div class="tombol">
          <div class="btn-group mt-5 mb-2">
            <button type="button" class="btn btn-primary btn-sm"><a href="create.php" style="text-decoration:none; color:white">tambah</a></button> 
            <!-- <button type="button" class="btn btn-danger btn-sm"><a href="logout.php"  style="text-decoration:none; color:white">logout</a></button>  -->
          </div>
        </div>
        
        <div class="tabel">
          
          <div class="table-responsive">
            <table class="table align-middle" style="text-decoration: none;">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No hp</th>
                  <th>Jenis Sepatu</th>
                  <th>Deskripsi</th>
                  <th>edit</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                include 'koneksi.php';
                $query=mysqli_query($konek,"select * from data_orang");
                while($data=mysqli_fetch_array($query))
                { ?>
              
              <tr>
                <td> <?php echo $i++ ?></td>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['alamat']; ?> </td>
                <td> <?php echo $data['nohp']; ?></td>
                <td> <?php echo $data['jenis_sepatu']; ?></td>
                <td> <?php echo $data['deskripsi']; ?></td>
                <td>
                  <a href=edit.php?nomor=<?php echo $data['nomor'];?> style="text-decoration:none;">edit</a> |
                  <a href=hapus.php?nomor=<?php echo $data['nomor'];?> style="text-decoration:none" onClick="return confirm('Apakah anda yakin ingin menghapus tersebut??')">Selesai dilayani</a></td>
                  <?php }?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tombol">
          <div class="d-grid mt-5 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger btn-sm"><a href="logout.php"  style="text-decoration:none; color:white">logout</a></button> 
          </div>
        </div>

      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>