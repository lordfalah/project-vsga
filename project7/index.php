<?php 
    session_start();

    $_SESSION["index"] = "yahoo";


    include 'logic.php';

    $conect = mysqli_connect("localhost", "root", "", "listAnime");
    $query = "SELECT * FROM books";

    $resultDataBook = resultDatabases($conect, $query); 

    
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand ml-md-5 text-monospace font-weight-bold" size="50px" href="#">Home Book</a>
        <a class="navbar-brand ml-md-5 text-monospace font-weight-bold" size="50px" href="add.php">Adding Book</a>
    </nav>



    <!-- content -->
    <div class="container mt-5">
        <h1 class="font-weight-bold">List Book Anime</h1>

        <div class="this-content-card mt-4">
            <div class="row">
                <?php foreach($resultDataBook as $listBook):?>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="card mb-3 card text-white bg-dark">
                            <div class="row no-gutters flex-wrap">
                                <div class="col-6 col-sm-6 col-md-4">
                                    <img class="img-fluid" src="image/<?php echo $listBook["image"]; ?>" alt="...">
                                </div>
                                <div class="col-6 col-sm-6 col-md-8">
                                    <div class="card-body mt-3">
                                        <span class="position-absolute bg-info text-white px-2 py-1 rounded" style="top:0; right:0;"><small><?php echo $listBook["name"]; ?></small></span>
                                        <h5 class="card-title"><?php echo $listBook["title"]; ?></h5>
                                        
                                        <p class="card-text"><small class="text-muted"><b>Genre : </b><?php echo $listBook["genre"]; ?></small></p>
                                        <p class="card-text"><small class="text-white-50"><b>Creator : </b><?php echo $listBook["creator"]; ?></small></p>
                                        <div class="tombol d-flex flex-wrap justify-content-between  justify-content-sm-between justify-content-md-between justify-content-lg-beetwen justify-content-xl-beetwen">
                                            <a href="edit.php?keyBook=<?php echo $listBook["id"]; ?>">
                                                <button type="button" class="btn btn-warning mb-2 mb-sm-0 mb-md-0 mb-lg-2 mb-xl-0">Edit</button>
                                            </a>

                                            <a href="remove.php?keyBook=<?php echo $listBook["id"]; ?>" class="remove">
                                                <button type="button" class="btn btn-danger mb-2 mb-sm-0 mb-md-0 mb-lg-2 mb-xl-0">Delete</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                <?php endforeach;?>

            </div>
        </div>
    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    <script src="button.js"></script>
  </body>
</html>