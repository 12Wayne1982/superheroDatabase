<?php
    include("connect.php");
    include("function.php");
    include("sql.php");

    $sInput = array();

    $sInput[0] = ''; 
    $sInput[1] = (isset($_POST['NAME'])) ? $_POST['NAME'] : '';
    $sInput[2] = (isset($_POST['ALTER_EGO'])) ? $_POST['ALTER_EGO'] : '';
    $sInput[3] = (isset($_POST['PUBLISHER'])) ? $_POST['PUBLISHER'] : '';
    $sInput[4] = (isset($_POST['FIRST_APPEARENCE'])) ? $_POST['FIRST_APPEARENCE'] : '';
    $sInput[5] = (isset($_POST['PUBLISHING_YEAR'])) ? $_POST['PUBLISHING_YEAR'] : '';
    $sInput[6] = (isset($_POST['CREATED_BY'])) ? $_POST['CREATED_BY'] : '';

    $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';
    if( $SUBMIT_BACK_TO_MENU ){
        header('location:menuPage.php');
    }

    // Erstellung eines SQL-Query-Strings

        $sInsertHeroData = array(
            $arr_keys[1] => $sInput[1],
            $arr_keys[2] => $sInput[2],
            $arr_keys[3] => $sInput[3],
            $arr_keys[4] => $sInput[4],
            $arr_keys[5] => $sInput[5],
            $arr_keys[6] => $sInput[6],
        );

        // Delete empty values
        for( $i = 0; $i < $arr_keys_lenght;  $i++){
            $del_value = '';

            if( ($key = array_search( $del_value, $sInsertHeroData)) !== false ){
                unset( $sInsertHeroData[$key]);
            }
        }
        
        if(empty($sInsertHeroData)){
            echo "<br>Dieser Array ist leer!!!<br>";
        }

        $sql = searchForHero( 'superhero', $sInsertHeroData );

    // Datenbankaufruf
        $resultSearch = mysqli_query($conn, $sql);

        while( $row = mysqli_fetch_assoc($resultSearch)){
            $dataSearch = $row;
            // $theRows ist ein mehrdimensionales array!
            $theRowsSearch[] = $row; 
        }
        
        $arr_keys_Search = array_keys($dataSearch);
        $arr_keys_lenght_Search = count($arr_keys_Search);
        $num_rows_from_table_Search = mysqli_num_rows($resultSearch);
        


        // LINK: Back to Menu
            $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';

            if( $SUBMIT_BACK_TO_MENU ){
                header('location:menuPage.php');
            }

        // Array mit Filter für Tabellenspalten
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
    <title>Search For Hero Result</title>
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
                    HERE ARE YOUR SEARCH RESULTS
                </div>
            </div>
            <div id="outputcontainer">
                <form method="post">
                    <div id="displayAllHeroesTable-container">
                        <table id="displayAllHeroesTable">
                        <?php
                            // thead
                            echo '<thead>';
                                echo '<tr class="displayAllHeroesTable-thead-tr">';   
                                    for( $i = 1; $i < $arr_keys_lenght_Search; $i++ ){
                                    echo '<th class="displayAllHeroesTable-th">';
                                        echo '<p>'. $arr_keys_Search[$i] .'</p>';
                                        echo $inputArray[$i];
                                    echo '</th>';
                                    }
                                    echo '<th class="displayAllHeroesTable-th">';
                                        // echo 'Buttons';
                                    echo '</th>';
                                echo '</tr>';
                            echo '</thead>';
                        // tbody
                        echo '<tbody id="displayAllHeroesTable-tbody">';    
                        for( $x = 0; $x < $num_rows_from_table_Search; $x++ ){
                            echo '<tr class="displayAllHeroesTable-tr">';
                                for( $y = 1; $y < $arr_keys_lenght_Search; $y++ ){
                                    echo '<td class="displayAllHeroesTable-td">';
                                        echo $theRowsSearch[$x][$arr_keys_Search[$y]];
                                    echo '</td>';
                                }
                                    $id = $theRowsSearch[$x][$arr_keys_Search[0]];
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