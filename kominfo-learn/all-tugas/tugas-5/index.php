<?php 
    // inisialisasikan variable
    $tambah = 0;
    $kurang = 0;
    $bagi = 0;
    $kali = 0;
    
    
    // mendapatkan value dengan post
    if(isset($_POST["bilangan_1"]) && $_POST["bilangan_2"]){
        // menympan hasil kedalam variable
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
    <title>Tugas 5</title>
</head>

<!-- author irfin falah -->

<body>
    <form name="form" method="POST" action="index.php">
        <label for="bilangan1">
            Bilangan 1 :
            <input type="text" id="bilangan1" name="bilangan_1" required />
        </label>

        </br>

        <label for="bilangan2">
            Bilangan 2 :
            <input type="text" id="bilangan2" name="bilangan_2" required />
        </label>

        <button type="submit" name="submit">Kalkulasi</button>
    </form>
    <p>========================</p>


    <?php if($tambah == 0 && $kurang == 0 && $kali == 0 && $bagi == 0){
        return 0;
    }else{
        echo "
            <p>Hasil penjumlahan adalah $tambah : </p>
            <p>Hasil pengurangan adalah : $kurang </p>
            <p>Hasil perkalian adalah : $kali </p>
            <p>Hasil pembagian adalah : $bagi </p>
        
        ";
    }?>


</body>

</html>