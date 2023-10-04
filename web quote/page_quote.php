<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Quote - QOTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="page_quote.css">
    <link rel="shortcut icon" href="chat-right-quote.svg">
</head>
<style>
        .card-header{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .container-fluid{
            margin: 0 10% 0 10%;
        }
        .card{
            margin: 0 10% 1% 10%;
        }
        .btn{
            margin: 1% 10% 1% 10%;
            background-color: #9eb384 !important;
            color: black;
            border: #9eb384;
        }
        .bg-success{
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
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-quote" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
          </svg>
            QOTD</a>
            <div class="navbar-nav">
              <a class="nav-link" href="homequote.php">Home</a>
              <a class="nav-link active" aria-current="page" href="#">Quote</a>
            </div>
        </div>
      </nav>
</body>
<main>
    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='add_quote.php';">Add Quote</button>
    <div class="card">
        <div class="card-header">
            <span>Life</span>
            <span>2023-09-18</span>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>The aim of live, and to live means to be aware, joyously, drunkenly, serenely</p>
            <footer class="blockquote-footer"><cite title="Source Title">Henry Miller</cite></footer>
          </blockquote>
        </div>
      </div>

         <!-- <?php if(isset($data)): ?>
    <div class="card">
        <div class="card-header">
            <span><?php echo $data["kategori"]; ?></span>
            <span><?php echo $data["tanggal"]; ?></span>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><?php echo $data["addquote"]; ?></p>
            <footer class="blockquote-footer"><cite title="Source Title"><?php echo $data["author"]; ?></cite></footer>
          </blockquote>
        </div>
    </div>
<?php else: ?>
    <p>No data available.</p>
<?php endif; ?> -->


<?php
if(isset($_POST['submit-btn'])) {
    // PHP code inside this block will only execute if the form is submitted
// Assuming you have data like this
        $data = array(
            "addquote" => $_POST['addquote'],
            "author" => $_POST['author'],
            "kategori" => $_POST['kategori'],
            "tanggal" => $_POST['tanggal'],

        );
    if(isset($data)): ?>
        <div class="card">
            <div class="card-header">
                <span><?php echo $data["kategori"]; ?></span>
                <span><?php echo $data["tanggal"]; ?></span>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p><?php echo $data["addquote"]; ?></p>
                <footer class="blockquote-footer"><cite title="Source Title"><?php echo $data["author"]; ?></cite></footer>
              </blockquote>
            </div>
        </div>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif;
} 

if (isset($_POST["submit-btn"])){
    isset($_POST["bahasa"]);
    if (empty($_POST["bahasa"])) echo "You have skill issue";
    else {
        $lang = $_POST["bahasa"];
        echo "Bahasa yang anda kuasai :\n";
        $jum = count($lang);
        for ($i=0;$i<$jum;$i++){
            echo ($lang[$i]) ." ";
        }
    }
}
?>


</main>
</html>