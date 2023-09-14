<?php
    include("connect.php");
    include("function.php");
    include("sql.php");

    $formNotComplete = '';
    $sInput = array();

    $sInput[0] = ''; 
    $sInput[1] = (isset($_POST['NAME'])) ? $_POST['NAME'] : '';
    $sInput[2] = (isset($_POST['ALTER_EGO'])) ? $_POST['ALTER_EGO'] : '';
    $sInput[3] = (isset($_POST['PUBLISHER'])) ? $_POST['PUBLISHER'] : '';
    $sInput[4] = (isset($_POST['FIRST_APPEARENCE'])) ? $_POST['FIRST_APPEARENCE'] : '';
    $sInput[5] = (isset($_POST['PUBLISHING_YEAR'])) ? $_POST['PUBLISHING_YEAR'] : '';
    $sInput[6] = (isset($_POST['CREATED_BY'])) ? $_POST['CREATED_BY'] : '';

    $SUBMIT_ADD_NEW_HERO = (isset($_POST['ADD_NEW_HERO'])) ? $_POST['ADD_NEW_HERO'] : '';
    $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';

    // echo $SUBMIT_BACK_TO_MENU;

    if( $SUBMIT_BACK_TO_MENU ){
        header('location:menuPage.php');
    }

    if( $SUBMIT_ADD_NEW_HERO == "ADD NEW HERO" && $sInput[1] && $sInput[2] && $sInput[3] && $sInput[4] && $sInput[5] && $sInput[6]){
        $sInsertHeroData = array();
        for( $i = 1; $i < $arr_keys_lenght;  $i++){
                $sInsertHeroData[ $arr_keys[$i] ] = $sInput[ $i ];	 
        }
        
        $sql = insertIntoDB( 'superhero', $sInsertHeroData );
       
        if( !mysqli_query( $conn, $sql ) ) 
        {
            die( "<H3>Fehler beim INSERT der Daten</H3><br>" );
        }
        else{
            header('location:displayAddedHero.php');
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Hero</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div id="inputWrapper">
            <div id="inputContainer">
                <div id="mainTitle">
                    <div id="inputMainTitle">
                        ADD NEW HERO
                    </div>
                </div>
                <div id="formContainer">
                    <form method="post" id="form">
                        <table id="formTable">
                            <tr>
                                <td> <label for="NAME">Name</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="NAME"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="ALTER EGO">Alter Ego</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="ALTER_EGO"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHER">Publisher</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHER"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="FIRST APPEARENCE">First Appearence</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="FIRST_APPEARENCE"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHING YEAR">Publishing Year</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHING_YEAR"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="CREATED BY">Created By</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="CREATED_BY"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td></td>
                                <td class="td-spacer"></td>
                                <td><input type="submit" name="ADD_NEW_HERO" value="ADD NEW HERO" class="add-new-hero-input"></td>
                                <!-- <td> <button type="submit" value="ADD NEW HERO">ADD NEW HERO</button> </td> -->
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td></td>
                                <td class="td-spacer"></td>
                                <td><input type="submit" name="BACK_TO_MENU" value="BACK TO MENU" class="back-to-menu-input"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="asideContainer">
                <div id="speechbox">
                    <blockquote class="speechbuble">
                        Your input <br> was not complete. <br>Please, try it again.
                    </blockquote>
                </div>
            </div>
        </div>  
    </div>
    <script src="functions.js"></script>
    <script></script>
</body>
</html>

<?php
    if( (!$sInput[1] || !$sInput[2] || !$sInput[3] || !$sInput[4] || !$sInput[5] || !$sInput[6]) &&  $SUBMIT_ADD_NEW_HERO == "ADD NEW HERO" ){
        // $formNotComplete = " ";
        echo "<script>
                document.getElementById('speechbox').style.display = 'block';
              </script>";
        // echo '<script src="test.js"></script>';
    }
?>