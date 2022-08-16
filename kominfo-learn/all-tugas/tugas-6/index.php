<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Calculator Design </title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
</head>

<body>
    <div>
        <h1> Author Irfin Falah </h1>
    </div>
    <form>
        <table border="0">
            <tr>
                <td colspan="4">
                    <h2> Calculator </h2>
                </td>
            </tr>
            <tr>
                <td colspan="4"><input id="nilai" type="text" placeholder="0"></td>
            </tr>
            <tr>
                <td> <button type="button"> 7 </button> </td>
                <td> <button type="button"> 8 </button> </td>
                <td> <button type="button"> 9 </button> </td>
                <td> <button type="button" id="bagi" class="orange">/</button> </td>
            </tr>
            <tr>
                <td> <button type="button"> 4 </button> </td>
                <td> <button type="button"> 5 </button> </td>
                <td> <button type="button"> 6 </button> </td>
                <td> <button type="button" id="kali" class="orange">*</button></td>
            </tr>
            <tr>
                <td> <button type="button"> 1 </button> </td>
                <td> <button type="button"> 2 </button> </td>
                <td> <button type="button"> 3 </button> </td>
                <td> <button type="button" id="tambah" class="orange">+</button> </td>
            </tr>
            <tr>
                <td> <button type="button"> 0 </button> </td>
                <td> <button type="button"> .</button> </td>
                <td> <button type="button" id="result" class="orange"> = </button> </td>
                <td> <button type="button" id="kurang" class="orange"> - </button> </td>
            </tr>
        </table>
    </form>

    <script>
    <?php require_once("interaktive.js");?>
    </script>
</body>

</html>