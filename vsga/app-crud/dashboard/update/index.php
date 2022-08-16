<?php 
    session_start();

    if(!isset($_SESSION["email"])){
        header("Location: ../../index.php");
    }

    include "../../utils/options.php";
    $resultData = selectData("tb_user", isset($_GET["id"]) ? $_GET["id"] 
    :  header( "Location: ../show.php" ));


    if(isset($_POST["submitUpdate"])){

        if(isset($_POST["nameUpdate"]) && isset($_POST["addressUpdate"]) && isset($_POST["ageUpdate"])){
            $result =  updateData($_POST, $resultData["id"]);
            if($result){
                echo "
                    <script>
                        alert('Success Update');
                        window.location = '../show.php';
                    </script>
                ";
            }else{
                echo "
                <script>
                    alert('Failed Update');
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

    <title>Update</title>
</head>

<body>
    <div class="container mx-auto d-flex align-items-center flex-column justify-content-center" style="height: 100vh;">
        <h2>Update Data</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="nameUpdate" type="text" class="form-control" id="name"
                    value="<?php echo $resultData['name']; ?>">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input name="addressUpdate" type="text" class="form-control" id="address"
                    value="<?php echo $resultData['address']; ?>">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input name="ageUpdate" type="number" class="form-control" id="age"
                    value="<?php echo $resultData['age']; ?>">
            </div>
            <button name="submitUpdate" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>