<?php
    include("connect.php");
    include("sql.php");

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
    
    // echo '<pre>';
    //     print_r($theRows);
    // echo '</pre>';
    $inputArray = array(
        1 => '<input type="text" id="inputName" class="inputDisplayAllHeroesTable" title="type in a name" onkeyup="filterName(\'inputName\', 0)">',
        2 => '<input type="text" id="inputAlterEgo" class="inputDisplayAllHeroesTable" title="type in the alter ego" onkeyup="filterName(\'inputAlterEgo\', 1)">',
        3 => '<input type="text" id="inputPublisher" class="inputDisplayAllHeroesTable" title="type in a publisher" onkeyup="filterName(\'inputPublisher\', 2)">',
        4 => '<input type="text" id="inputFirstAppearence" class="inputDisplayAllHeroesTable" title="type in the first appearence" onkeyup="filterName(\'inputFirstAppearence\', 3)">',
        5 => '<input type="text" id="inputDisplayAllHeroesTable" class="inputDisplayAllHeroesTable" title="type in the publishing year" onkeyup="filterName(\'inputDisplayAllHeroesTable\', 4)">',
        6 => '<input type="text" id="inputCreatedBy" class="inputDisplayAllHeroesTable" title="type in the publishing year" onkeyup="filterName(\'inputCreatedBy\', 5)">',
    );
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Hero</title>
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
                    THE SUPERHERO DATABASE
                </div>
            </div>
            <div id="outputcontainer">
                <form method="post">
                    <div id="displayAllHeroesTable-container">
                        <table id="displayAllHeroesTable">
                        <?php
                            echo '<thead>';
                                echo '<tr class="displayAllHeroesTable-thead-tr">';   
                                    for( $i = 1; $i < $arr_keys_lenght; $i++ ){
                                    echo '<th class="displayAllHeroesTable-th">';
                                        echo '<p>'. $arr_keys[$i] .'</p>';
                                        echo $inputArray[$i];
                                    echo '</th>';
                                    }
                                    echo '<th class="displayAllHeroesTable-th">';
                                        // echo 'Buttons';
                                    echo '</th>';
                                echo '</tr>';
                            echo '</thead>';
                        echo '<tbody id="displayAllHeroesTable-tbody">';    
                        for( $x = 0; $x < $num_rows_from_table; $x++ ){
                            echo '<tr class="displayAllHeroesTable-tr">';
                                for( $y = 1; $y < $arr_keys_lenght; $y++ ){
                                    echo '<td class="displayAllHeroesTable-td">';
                                        echo $theRows[$x][$arr_keys[$y]];
                                    echo '</td>';
                                }
                                    $id = $theRows[$x][$arr_keys[0]];
                                    // echo $id . '<br>';
                                echo '<td class="displayAllHeroesTable-td">';

                                    echo '<button class="displayAllHeroesTable-button-edit" title="Edit Hero">
                                            <a href="updateHero.php?updateid='.$id.'">-</a>
                                         </button>';
                                    echo '<button class="displayAllHeroesTable-button-delete" title="Delete Hero">
                                            <a href="deleteHero.php?deleteid='.$id.'">X</a>
                                         </button>';  
                                echo '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';    
                        ?>
                    </table>       
                    </div>
                    <input type="submit" name="BACK_TO_MENU" value="BACK TO MENU" class="back-to-menu-input">
                    <br>           
                </form>
            </div>  
        </div>
    </div>
<script src="functions.js"></script>
</body>
</html>