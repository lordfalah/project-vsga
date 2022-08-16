<?php 
  $count = 0;

  if(isset($_POST["submit"])){
    $count = $_POST["subject"] ;
  };



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <!-- author Irfin Falah -->

    <form name="form" action="index.php" method="post">
        Jumlah Bintang =
        <input type="text" name="subject" id="subject" placeholder="numb" required />

        </br>
        <button type="submit" name="submit">kirim</button>
    </form>

    <?php for($i = 1; $i <= $count; $i++): ?>
    <?php for($j = 1; $j <= $i; $j++):?>
    <?php echo "*" ?>
    <?endfor ?>
    </br>
    <?php endfor?>
</body>

</html>