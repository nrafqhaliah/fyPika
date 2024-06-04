<?php
    include 'config.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $id = mysqli_real_escape_string($conn, $id);

        $query = "DELETE FROM users WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "Delete Successfully!";
        }
        else {
            die(mysqli_error($conn));
        }
    }


?>