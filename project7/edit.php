<?php 
    session_start();
    
    if(!isset($_SESSION["index"])){
        header("Location:index.php");
    }




    include 'logic.php';
    $conect = mysqli_connect("localhost", "root", "", "listAnime");


    if(isset($_GET["keyBook"])){
        global $conect;
        $id = $_GET["keyBook"];

        $query = "SELECT * FROM books WHERE id = $id";
        $resultDataBook = resultDatabases($conect, $query); 


        // catch post
        if(isset($_POST["submit"])){
            $dataUpdate = updateBook($_POST, $_FILES);


            // cek in
            if($dataUpdate > 0){
                echo "
                    <script>
                        alert('Success Update Books :)');
                        window.location.assign('index.php');
                    </script>
                ";
            
            }else{
                echo "
                    <script>
                        alert('Failed Update Books :(');
                    </script>
                ";
            };

        }
    }else{
        header("Location:index.php");
    }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Edit Books</title>
  </head>
  <body>



    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand ml-md-5 text-monospace font-weight-bold" size="50px" href="index.php">Home Book</a>
        <a class="navbar-brand ml-md-5 text-monospace font-weight-bold" size="50px" href="add.php">Adding Book</a>
    </nav>

    <div class="container">
        <div class="content-form mt-5 w-75">
            <h2 class="font-weight-bold mb-4">Form Edit Book</h2>

                
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id;?>" name="idBook">


                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="title..." required value="<?php echo $resultDataBook[0]["title"]; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Genre</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="genre" placeholder="genre..." required value="<?php echo $resultDataBook[0]["genre"]; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Creator Book</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="creator" placeholder="creator..." required value="<?php echo $resultDataBook[0]["creator"]; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Name Book</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nameBook" placeholder="name..." required value="<?php echo $resultDataBook[0]["name"]; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
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

  </body>
</html>