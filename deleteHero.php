<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `superhero` WHERE `ID` = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location:displayAllHeroes.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>