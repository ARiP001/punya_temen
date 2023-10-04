<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quote - QOTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="add_quote.css">
    <link rel="shortcut icon" href="chat-right-quote.svg">
    <style> 
        .container-fluid{
        margin: 0 10% 0 10%;
        }
        .card{
            margin: 2% 25% 4% 25%;
        }
        .btn{
            background-color: #9eb384 !important;
            color: black;
            border: #9eb384;
        }
        .bg-dark{
            background-color: #9eb384 !important;
        }
        body{
            background-color: #faf1e4;
        }
        .card-header{
            background-color: #b3c99c;
        }
        .card-body{
            background-color: #E8F3D6;
        }
    </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-quote" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
          </svg>
            QOTD</a>
            <div class="navbar-nav">
              <a class="nav-link" href="homequote.php">Home</a>
              <a class="nav-link active" aria-current="page" href="page_quote.php">Quote</a>
            </div>
        </div>
      </nav>
</body>
<main>
    <div class="card">
        <h5 class="card-header">Tambah Quote</h5>
        <div class="card-body">
          <form action="page_quote.php" method="post">
            <div class="form-group row p-2 g-col-6">
              <label for="inputquote" class="col-sm-2 col-form-label">Quote</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="addquote" rows="3" placeholder="Silakan isi quote"></textarea>
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
              <label for="inputauthor" class="col-sm-2 col-form-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputauthor" name="author" placeholder="Silakan isi author">
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
              <label for="inputselect" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                    <option selected>Pilih kategori</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Romance">Romance</option>
                    <option value="Life">Life</option>
                    <option value="Friendship">Friendship</option>
                    <option value="Religi">Religi</option>
                  </select>
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
                <label for="inputtanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
              </div>

              <div class="form-group row p-2 g-col-6">
              <label for="inputselect" class="col-sm-2 col-form-label">Bahasa pemrograman</label>
              <div class="col-sm-10">
              <div class="form-check" >
                  <input class="form-check-input" type="checkbox" name="bahasa[]" value="C++" id="flexCheckDefault">
                  <label class="form-check-label">
                    C++
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="bahasa[]" value="Phyton" id="flexCheckDefault">
                  <label class="form-check-label">
                    Phyton
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="bahasa[]" value="Java" id="flexCheckDefault">
                  <label class="form-check-label">
                    Java
                  </label>
                </div>
                </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12 d-flex flex-row-reverse bd-highlight">
                <button type="submit" value="submit" name="submit-btn" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
</main>
</html>