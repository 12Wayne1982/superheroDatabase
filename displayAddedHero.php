<?php
    include("connect.php");

    $sql = "SELECT * FROM superhero;";
    $result = mysqli_query($conn, $sql);

    while( $row = mysqli_fetch_assoc($result)){
        $data = $row;
    }
    
    $arr_keys = array_keys($data);
    $arr_keys_lenght = count($arr_keys); 
    $num_rows_from_table = mysqli_num_rows($result);

    $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';

    if( $SUBMIT_BACK_TO_MENU ){
        header('location:menuPage.php');
    }
    // echo '<pre>';
    //     print_r($data);
    // echo '</pre>';

    // echo 'das sind die Werte: <br>';
    // for( $i = 1; $i < $arr_keys_lenght; $i++ ){
    //     echo $data[ $arr_keys[$i] ] . '<br>';
    // }

    // echo 'das sind die Schlüssel: <br>';
    // for( $i = 1; $i < $arr_keys_lenght; $i++ ){
    //     echo $arr_keys[$i] . '<br>';
    // }


    // for( $i = 1; $i < $arr_keys_lenght; $i++ ){
    //     echo '<tr>';
    //         echo '<td class="successfulTable-td-Left">' . $arr_keys[$i] .'</td>';
    //         echo '<td class="successfulTable-td-spacer-1"></td>';
    //         echo '<td class="successfulTable-td-spacer-2"></td>';
    //         echo '<td class="successfulTable-td-right">' . $data[ $arr_keys[$i] ] . '</td>';
    //     echo '</tr>';
    //     echo '<tr class="tr-spacer">';
    //         echo '<td></td>';
    //         echo '<td class="successfulTable-td-spacer-1"></td>';
    //         echo '<td class="successfulTable-td-spacer-2"></td>';
    //         echo '<td></td>';
    //     echo '</tr>';
    // }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Added Hero</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
            <!-- formContainer = mainContainer  -->
        <div id="outputWrapper">
            <div id="mainTitle">
                <div id="outputMainTitle">
                    YOUR ADDITION WAS SUCCESSFUL
                </div>
            </div>
            <div id="outputcontainer">
                <form method="post">
                    <table id="successfulTable">
                        <?php
                            for( $i = 1; $i < $arr_keys_lenght; $i++ ){
                                echo '<tr>';
                                    echo '<td class="successfulTable-td-Left">' . $arr_keys[$i] .'</td>';
                                    echo '<td class="successfulTable-td-spacer-1"></td>';
                                    echo '<td class="successfulTable-td-spacer-2"></td>';
                                    echo '<td class="successfulTable-td-right">' . $data[ $arr_keys[$i] ] . '</td>';
                                echo '</tr>';
                                echo '<tr class="tr-spacer">';
                                    echo '<td></td>';
                                    echo '<td class="successfulTable-td-spacer-1"></td>';
                                    echo '<td class="successfulTable-td-spacer-2"></td>';
                                    echo '<td></td>';
                                echo '</tr>';
                            }
                        ?>
                        <tr class="tr-spacer"></tr>
                        <tr class="tr-spacer"></tr>
                        <tr>
                            <td colspan="4" class="successfulTable-colspan">
                                <input type="submit" name="BACK_TO_MENU" value="BACK TO MENU" class="back-to-menu-input">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>  
        </div>
    </div>
</body>
</html>