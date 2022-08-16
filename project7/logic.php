<?php 



    function resultDatabases($koneksi, $quert){
        $dataArray = [];
        $resultDb = mysqli_query($koneksi, $quert);


        while($resultData = mysqli_fetch_assoc($resultDb)){
            $dataArray[] = $resultData;
        };

        return $dataArray;
    };


    $conect = mysqli_connect("localhost", "root", "", "listAnime");
    // adding
    function addingDataBooks($data, $image){
        global $conect;

        $title = mysqli_real_escape_string($conect, htmlspecialchars($data["title"]));
        $genre = mysqli_real_escape_string($conect, htmlspecialchars($data["genre"]));
        $nameBook = mysqli_real_escape_string($conect, htmlspecialchars($data["nameBook"]));
        $creator = mysqli_real_escape_string($conect, htmlspecialchars($data["creator"]));
        // $dataImg = mysqli_real_escape_string($conect, htmlspecialchars($data["image"]));

        // print_r($data["creator"]);



        $gambar = imgDetails($image); 

        if(!$gambar){
            return false;
        }

        if($gambar == "default.jpg"){
            $gambar = "default.jpg";
        }

        $query = "INSERT INTO books VALUES(
                    0,
                    '$title',
                    '$genre',
                    '$nameBook',
                    '$gambar',
                    '$creator'
            );
        ";

        mysqli_query($conect, $query);

        return mysqli_affected_rows($conect);
    };


    function imgDetails($data){
        $imgName = $data["image"]["name"];
        $fileName = pathinfo($imgName, PATHINFO_FILENAME);
        $extensiImg = pathinfo($imgName, PATHINFO_EXTENSION);
        $basName = pathinfo($imgName, PATHINFO_BASENAME);

        $sizeImg = $data["image"]["size"];
        $erorImg = $data["image"]["error"];
        $tmpName = $data["image"]["tmp_name"];

        
        // cek apakah gambar diisi atau tidak
        if(!$erorImg == 0){
            echo "
                <script>
                    alert('Img With Deffault');
                    window.location.assign('index.php');
                </script>
            ";

            return "default.jpg";
        };


        // cek ukuran gambar
        if($sizeImg >= 5000000){
            echo "
                <script>
                    alert('Maksimal Size is 5Mb');

                </script>
            ";

            return false;
        };


        // cek type img
        $typeImg = ["jpg", "png", "jpeg", "pdf"];
        if(!in_array(strtolower($extensiImg), $typeImg)){
            echo "
                <script>
                    alert('This file is not Support');
                    window.location.assign('add.php');
                </script>
            ";

            return false;
        };

        
        $newFileImg = uniqid("");
        $newFileImg .= ".";
        $newFileImg .= $extensiImg;
        
        // move file img
        if (move_uploaded_file($tmpName, "image/".$newFileImg)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Upload failed";
        };
    
    
        return $newFileImg;
    }







    // remove
    function removeBook($data){
        global $conect;

        $queryImg = "SELECT image FROM books WHERE id = '$data'";
        $deleteImg = resultDatabases($conect, $queryImg)[0]["image"];
        


        if($deleteImg !== "default.jpg"){
            unlink("image/" . $deleteImg);
        
        }


        $query = "DELETE FROM books WHERE id = '$data'";
        mysqli_query($conect, $query);

        return mysqli_affected_rows($conect);
    }



    // update
    function updateBook($data, $image){
        global $conect;


        $title = mysqli_real_escape_string($conect, htmlspecialchars($data["title"]));
        $genre = mysqli_real_escape_string($conect, htmlspecialchars($data["genre"]));
        $nameBook = mysqli_real_escape_string($conect, htmlspecialchars($data["nameBook"]));
        $creator = mysqli_real_escape_string($conect, htmlspecialchars($data["creator"]));



        $keyId = $data["idBook"];
        $queryImg = "SELECT image FROM books WHERE id = '$keyId'";
        $imgLama = resultDatabases($conect, $queryImg); 
        $oldImg = $imgLama[0]["image"];

        
        $imgNew =  imgDetails($image);

        if(!$imgNew){
            return false;
        }
        
        if($imgNew == "default.jpg"){
            $imgNew = $oldImg;
        
        }else{
            unlink("image/" . $oldImg);
        }



        $query = "UPDATE books SET 
                    title = '$title',
                    genre = '$genre',
                    name = '$nameBook',
                    image = '$imgNew',
                    creator = '$creator'   
                WHERE id = $keyId
        ";

        mysqli_query($conect, $query);
        return mysqli_affected_rows($conect);
    };


?>