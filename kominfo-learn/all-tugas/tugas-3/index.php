<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>

<body>
    <!-- author Irfin Falah -->
    <!-- penjelasan : program akan mengulang selama 1-100 = true 
    setelah lewat dari seratus program berenti = false
    lalu logic modulus kita sisipkan dengan if/kondisi 
    yang dimana jika i/atau value bisa di modulus 2 maka akan jadi genap
    jika bukan maka akan jadi ganjil. 

    -->

    <p>==========CETAK BILANGAN GANJIL GENAP 1-100==========</p>
    <?php for($i = 1; $i <= 100; $i++):?>
    <?php if($i % 2 == 0){
            echo "<p>", $i, " adalah Bilangan Genap." ,"</p>";
        }else{
            echo "<p>", $i, " adalah Bilangan Ganjil." ,"</p>";
        } ?>
    <?php endfor?>

</body>

</html>