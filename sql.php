<?php
    include("connect.php");

    // $theRows = array();

    $sql = "SELECT * FROM superhero;";
    $result = mysqli_query($conn, $sql);

    while( $row = mysqli_fetch_assoc($result)){
        $data = $row;
        // $theRows ist ein mehrdimensionales array!
        $theRows[] = $row; 
    }
    
    $arr_keys = array_keys($data);
    $arr_keys_lenght = count($arr_keys); 
    $num_rows_from_table = mysqli_num_rows($result);

    // echo '<pre>';
    //         print_r($data);
    // echo '</pre>';

    // echo '<pre>';
    //         print_r($theRows);
    // echo '</pre>';

    // echo '<pre>';
    //         print_r($arr_keys);
    // echo '</pre>';

    //echo $arr_keys[0] . '<br>'; // ID
    //echo $arr_keys[1] . '<br>'; // Name
    //echo $arr_keys[2] . '<br>'; // Alter Ego
                     // ID
    // echo $theRows[1][$arr_keys[0]] . '<br>';
    // echo $theRows[0]["ID"] . '<br>';

    // echo $theRows[1][$arr_keys[0]] . '<br>';
?>