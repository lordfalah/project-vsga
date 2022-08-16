<?php 
    session_start();

    if(!isset($_SESSION["index"])){
        header("Location:index.php");
    }


    include 'logic.php';
    // die;

    if(isset($_GET["keyBook"])){
        $resultData = removeBook($_GET["keyBook"]);

        // cek in
        if($resultData > 0){
            echo "
                <script>
                    alert('Success Remove Books :)');
                    window.location.assign('index.php');
                </script>
            ";
        
        }else{
            echo "
                <script>
                    alert('Failed Remove Books :(');
                    window.location.assign('index.php');
                </script>
            ";
        };
    
    }else{
        header("Location:index.php");
    }

?>













