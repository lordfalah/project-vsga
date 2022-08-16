<?php 
    session_start();
    include "utils/options.php";

    $conn = mysqli_connect("localhost", "root", "", "admin");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_SESSION["email"])){
        header("Location: dashboard/show.php");

    }

    if(isset($_POST["submit"])){
        $resultData = cekLogin("tb_admin", $conn, $_POST["email"], $_POST["password"]);
        
        if($resultData){
            $_SESSION["email"] = $_POST["email"];
            echo "
                <script>
                    alert('Success Login');
                    window.location = 'dashboard/show.php';
                </script>
            ";
        
        }else{
            echo "
                <script>
                    alert('Fail Login');
                    window.location = 'index.php';
                </script>
            ";
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

    <title>Login</title>
</head>

<body>
    <div class="container mx-auto d-flex flex-column justify-content-center gap-4" style="height: 100vh;">
        <h2 class="text-center">Login Admin</h2>
        <form class="w-50 mx-auto" action="index.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input name="email" type="email" id="form2Example1" class="form-control" required
                    placeholder="xample@yahoo.com" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input name="password" type="password" id="form2Example2" class="form-control" required />
                <label class="form-label" for="form2Example2">Password</label>
            </div>



            <!-- Submit button -->
            <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center mt-3">
                <p>Not a member? <a href="#!" style="cursor: not-allowed;">Register</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>