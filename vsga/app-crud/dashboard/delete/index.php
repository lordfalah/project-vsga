<?php 
    session_start();

    if(!isset($_SESSION["email"])){
        header("Location: ../../index.php");
    }

    include "../../utils/options.php";

    if(isset($_GET["id"])){
        $resultData = deleteData("tb_user", $_GET["id"]);
        if($resultData){
            echo "
                    <script>
                        alert('Success Delete');
                        window.location = '../show.php';
                    </script>
                ";
        }else{
            echo "
                <script>
                    alert('Failed Delete');
                    window.location = '../show.php';
                </script>
            ";
        }
    }else{
        header( "Location: ../show.php" );
    }

    

?>