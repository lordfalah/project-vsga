<?php 
    // inisialisasikan variable
    $tambah = 0;
    $kurang = 0;
    $bagi = 0;
    $kali = 0;
    $nilai1 = 0;
    $nilai2 = 0;
    
    // echo $nilai1;
    
    
    // mendapatkan value dengan post
    if(isset($_POST["bilangan_1"]) && $_POST["bilangan_2"]){
        // menympan hasil kedalam variable
        
        $nilai1 = $_POST["bilangan_1"];
        $nilai2 = $_POST["bilangan_2"];

        $tambah = penjumlahan($_POST["bilangan_1"], $_POST["bilangan_2"]);
        $kurang = pengurangan($_POST["bilangan_1"], $_POST["bilangan_2"]);
        $bagi = pembagian($_POST["bilangan_1"], $_POST["bilangan_2"]);
        $kali = perkalian($_POST["bilangan_1"], $_POST["bilangan_2"]);
    }

    // logika tiap-tiap fungsi yang memiliki parameter dan kalkulasi yang berbeda-beda

    function penjumlahan($value1, $value2){
        $result = $value1 + $value2;
        return $result;
    }

    function pengurangan($value1, $value2){
        $result = $value1 - $value2;
        return $result;
    }

    function pembagian($value1, $value2){
        $result = $value1 / $value2;
        return $result;
    }

    function perkalian($value1, $value2){
        $result = $value1 * $value2;
        return $result;
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 5</title>
</head>

<!-- author irfin falah -->

<body>
    <div class="container">
        <form name="form" method="POST" action="index.php" autocomplete="off">
            <div class="image">
                <a
                    href="https://www.flaticon.com/free-icon/calculator_891175?term=calculator&page=1&position=5&page=1&position=5&related_id=891175&origin=search#">
                    <img src="img/calculator.png" />
                </a>
                <h1>Calculator</h1>
            </div>

            <div class="input-data">

                <label for="bilangan1">
                    <p>Bilangan 1 :</p>
                    <input type="number" id="bilangan1" name="bilangan_1" value=<?php echo $nilai1 ?> required />
                </label>

                </br>

                <label for="bilangan2">
                    <p>Bilangan 2 :</p>

                    <input type="number" id="bilangan2" name="bilangan_2" value=<?php echo $nilai2 ?> required />
                </label>


                <br />
                <button type="submit" name="submit">Kalkulasi</button>
            </div>


            <?php if($tambah == 0 && $kurang == 0 && $kali == 0 && $bagi == 0){
                return 0;
                }else{
                    echo "
                        <p>Hasil penjumlahan adalah : <b> $tambah </b> </p>
                        <p>Hasil pengurangan adalah : <b> $kurang </b> </p>
                        <p>Hasil perkalian adalah : <b> $kali </b> </p>
                        <p>Hasil pembagian adalah : <b> $bagi </b> </p>
                    
                    ";
            }?>
        </form>




    </div>
</body>

</html>