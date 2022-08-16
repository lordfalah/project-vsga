<?php 

    $data = file_get_contents('dataPesawat.json');
    $assocArray = json_decode($data, true);

    $pajakAsal = 0;
    $pajakTujuan = 0;


    if(isset($_POST["submit"])){
        $dataPajakAsal = strtolower($_POST[1]);
        $dataPajakTujuan = strtolower($_POST[2]);

        $resultPajak1 = resultPajakAsal($dataPajakAsal, $pajakAsal);
        $resultPajak2 = resultPajakTujuan($dataPajakTujuan, $pajakTujuan);

        $totalPajak = $resultPajak1 + $resultPajak2;
        $totalAll = $totalPajak + $_POST[3];

        $assocArray[] = [0 => $_POST[0], 1 => $_POST[1], 2 => $_POST[2], 3 => 
        $_POST[3], 4 => $totalPajak, 5 => $totalAll];
        sort($assocArray);
    }


    function resultPajakAsal($nameAsal, $pajakAsal){
        if($nameAsal == "soekarno-hatta (cgk)"){
            $pajakAsal = 50000;
        
        }else if($nameAsal == "husein sastranegara (bdo)"){
            $pajakAsal = 30000;
        
        }else if($nameAsal == "abdul rachman saleh (mlg)"){
            $pajakAsal = 40000;
        
        }else if($nameAsal == "juanda (sub)"){
            $pajakAsal = 40000;
        
        }else{
            echo "
            <script type=\"text/javascript\">
                alert('Error Input');
                window.location.assign('index.php');
            </script>
        ";
        }

        return $pajakAsal;
    }

    function resultPajakTujuan($nameTujuan, $pajakTujuan){
        if($nameTujuan == "ngurah rai (dps)"){
            $pajakTujuan = 80000;
        
        }else if($nameTujuan == "hasanuddin (upg)"){
            $pajakTujuan = 70000;
        
        }else if($nameTujuan == "inanwatan (inx)"){
            $pajakTujuan = 90000;
        
        }else if($nameTujuan == "sultan iskandarmuda (btj)"){
            $pajakTujuan = 70000;
        
        }else {
             echo "
            <script type=\"text/javascript\">
                alert('Error Input');
                window.location.assign('index.php');
            </script>
        ";
        }

        return $pajakTujuan;
    }

    


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mt-5 mb-5">Pendaftaran Rute Penerbangan</h1>

        <form method="POST" action="index.php">
            <div class="form-group row">
                <label for="maskapai" class="col-sm-2 col-form-label">Maskapai</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="maskapai" placeholder="Nama Maskapai" name=0>
                </div>
            </div>

            <div class="form-group row">
                <label for="bandaraAsal" class="col-sm-2 col-form-label">Bandara Asal</label>
                <div class="col-sm-5">

                    <select name=1 id="bandaraAsal" class="w-100 p-2">
                        <option value="Soekarno-Hatta (CGK)">Soekarno-Hatta (CGK)</option>
                        <option value="Husein Sastranegara (BDO)">Husein Sastranegara (BDO)</option>
                        <option value="Abdul Rachman Saleh (MLG)">Abdul Rachman Saleh (MLG) </option>
                        <option value="Juanda (SUB)">Juanda (SUB)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="bandaraTujuan" class="col-sm-2 col-form-label">Bandara Tujuan</label>
                <div class="col-sm-5">

                    <select name=2 id="bandaraTujuan" class="w-100 p-2">
                        <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
                        <option value="Hasanuddin (UPG)">Hasanuddin (UPG)</option>
                        <option value="Inanwatan (INX)">Inanwatan (INX)</option>
                        <option value="Sultan Iskandarmuda (BTJ)">Sultan Iskandarmuda (BTJ)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="tiket" class="col-sm-2 col-form-label">Harga Tiket</label>
                <div class="col-sm-10">
                    <input required type="number" class="form-control" id="tiket" placeholder="Harga Tiket" name=3>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>

        <h1 class="text-center mt-5 mb-5">Daftar Rute Tersedia</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Maskapai</th>
                    <th scope="col">Asal Penerbangan</th>
                    <th scope="col">Tujuan Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Pajak</th>
                    <th scope="col">Total Harga Tiket</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach($assocArray as $dataArr): ?>

                <tr>

                    <?php foreach($dataArr as $maskapai): ?>
                    <td><?php echo $maskapai?></td>
                    <?php endforeach?>

                </tr>


                <?php endforeach?>
            </tbody>


        </table>


    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>