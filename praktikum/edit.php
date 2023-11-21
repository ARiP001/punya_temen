<!doctype html>
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


  </head>

  <body>
    <?php
    include 'koneksi.php';
    $nomor=$_GET['nomor'];
    $query=mysqli_query($konek,"SELECT * from data_orang where nomor=$nomor");
    $data =mysqli_fetch_array($query);
    ?>
    <div class="container">
        <div class="header mt-5">
            <h1>Edit Data Pelanggan</h1>
        </div>
        <hr></hr>


        <td border="4px"></td>

        <form action="cek_edit.php" method="POST">
  
            <input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">

        <div class="username mt-4">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value=<?php echo $data['nama']; ?>>
              </div>
        </div>
    
        <div class="alamat mt-4">
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value=<?php echo $data['alamat']; ?>>
              </div>
        </div>
    
        <div class="nohp mt-4">
            <div class="mb-3">
                <label class="form-label">No hp</label>
                <input type="text" name="nohp" class="form-control" value=<?php echo $data['nohp']; ?>>
              </div>
        </div>

        <div class="nohp mt-4">
            <div class="mb-3">
                <label class="form-label">Jenis sepatu</label>
                <input type="text" name="jenis_sepatu" class="form-control" value=<?php echo $data['jenis_sepatu']; ?>>
              </div>
        </div>
        
        <div class="form-group mt-4 g-col-6">
              <label for="inputquote" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-12">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="<?php echo $data['deskripsi']; ?>"><?php echo $data['deskripsi']; ?></textarea>
              </div>
            </div>
    
            <button type="submit" class="btn btn-primary" name="submit"> Send</button>

    </form>
        
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>