<?php 
    $dataBase = [
        [
            "name" => "volvo",
            "stock" => 22,
            "sold" => 18,
        ],
        [
            "name" => "bmw",
            "stock" => 15,
            "sold" => 13,
        ],
        [
            "name" => "saab",
            "stock" => 5,
            "sold" => 2,
        ],
        [
            "name" => "landRover",
            "stock" => 17,
            "sold" => 15,
        ],
    ]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <table border="5">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>
        <?php foreach($dataBase as $data): ?>
        <tr>
            <td>
                <?php echo $data["name"] ?>
            </td>
            <td>
                <?php echo $data["stock"] ?>
            </td>
            <td>
                <?php echo $data["sold"] ?>
            </td>
        </tr>
        <?php endforeach ?>

    </table>
</body>

</html>