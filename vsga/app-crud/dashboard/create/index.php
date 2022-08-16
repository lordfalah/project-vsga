<?php 

    session_start();

    if(!isset($_SESSION["email"])){
        header("Location: ../../index.php");
    }

    include "../../utils/options.php";

    if(isset($_POST["submit"])){
        if(isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["age"])){
            $resultData = createData($_POST);
            if($resultData){
                echo "
                    <script>
                        alert('Success Add');
                        window.location = '../show.php';
                    </script>
                ";
            }else{
                echo "
                <script>
                    alert('Failed Add');
                    window.location = '../show.php';
                </script>
            ";
            }
        }
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Data</title>
</head>

<body>
    <div class="container mx-auto d-flex flex-column justify-content-center" style="height: 100vh;">
        <a style="width: fit-content;" class="btn btn-info" href="../show.php" role="button">
            back
        </a>

        <h2 class="text-center">Create Data</h2>
        <form class="w-50 mx-auto" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="irfin" required />
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="skw" required />
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input name="age" type="number" class="form-control" id="age" placeholder="19" required />
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>