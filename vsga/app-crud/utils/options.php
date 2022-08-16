<?php 


$conn = mysqli_connect("localhost", "root", "", "user");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function selectData($tabelName, $id){
    global $conn;
    $sql = "SELECT * FROM $tabelName WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function getAllData($tabelName, $conn){

    $sql = "SELECT * FROM $tabelName";
    $result = mysqli_query($conn, $sql);
    $temp = [];

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $temp[] = $row;
        };
    }

    return $temp;
};   


function createData($data){
    global $conn;
    $name = mysqli_escape_string($conn, htmlspecialchars($data["name"]));
    $address = mysqli_escape_string($conn, htmlspecialchars($data["address"]));
    $age = mysqli_escape_string($conn, htmlspecialchars($data["age"]));

    $sql = "INSERT INTO tb_user VALUES ('0', '$name', '$address', '$age')";
    mysqli_query($conn, $sql);
    
    return mysqli_affected_rows($conn);

}


function updateData($data, $id){
    global $conn;
    $nameUpdate = mysqli_escape_string($conn, htmlspecialchars($data["nameUpdate"]));
    $addressUpdate = mysqli_escape_string($conn, htmlspecialchars($data["addressUpdate"]));
    $ageUpdate = mysqli_escape_string($conn, htmlspecialchars($data["ageUpdate"]));

    $sql = "UPDATE tb_user SET name='$nameUpdate', address='$addressUpdate', age='$ageUpdate'
    WHERE id='$id'";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
};

function deleteData($tabelName, $id){
    global $conn;

    $sql = "DELETE FROM $tabelName WHERE id='$id'";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
};

function searchData($value){
    global $conn;

    $temp = [];

    $sql = "SELECT * FROM tb_user WHERE name LIKE '$value%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $temp[] = $row;
        };
    }
    return $temp;
}

function cekLogin($tabelName, $conn, $email, $password){
    $sql = "SELECT * FROM $tabelName WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       return mysqli_fetch_assoc($result);
    }

    return false;
}


?>