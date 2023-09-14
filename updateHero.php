<?php
    include 'connect.php';
    $id = (isset($_GET['updateid'])) ? $_GET['updateid'] : '';


    // display data in input fields - DB-Ausgabe
        $sql = "SELECT * FROM `superhero` WHERE `id` = '$id'";
        $result = mysqli_query( $conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // echo '<pre>';
        //     print_r($row);
        // echo '</pre>';

        $name = $row['Name'];
        $alter_ego = $row['Alter Ego'];
        $publisher = $row['Publisher'];
        $first_appearence = $row['First Appearence'];
        $publishing_year = $row['Publishing Year'];
        $created_by = $row['Created By'];

    // update data in input

        $SUBMIT_UPDATE_HERO = (isset($_POST['UPDATE_HERO'])) ? $_POST['UPDATE_HERO'] : '';

        if($SUBMIT_UPDATE_HERO){
            $update_name = (isset($_POST['NAME'])) ? $_POST['NAME'] : '';
            $update_alter_ego = (isset($_POST['ALTER_EGO'])) ? $_POST['ALTER_EGO'] : '';
            $update_publisher = (isset($_POST['PUBLISHER'])) ? $_POST['PUBLISHER'] : '';
            $update_first_appearence = (isset($_POST['FIRST_APPEARENCE'])) ? $_POST['FIRST_APPEARENCE'] : '';
            $update_publishing_year = (isset($_POST['PUBLISHING_YEAR'])) ? $_POST['PUBLISHING_YEAR'] : '';
            $update_created_by = (isset($_POST['CREATED_BY'])) ? $_POST['CREATED_BY'] : '';

            $sql = "UPDATE `superhero` SET `Name` = '$update_name ', `Alter Ego` = '$update_alter_ego', `Publisher` = '$update_publisher', `First Appearence` = '$update_first_appearence', `Publishing Year` = ' $update_publishing_year', `Created By` = '$update_created_by' WHERE `ID` = '$id'";

            $result = mysqli_query($conn, $sql);

            // SESSION
            session_start();

            $_SESSION['updated_name'] = $update_name;
            $_SESSION['updated_alter_ego'] = $update_alter_ego;
            $_SESSION['updated_publisher'] = $update_publisher;
            $_SESSION['updated_first_appearence'] = $update_first_appearence;
            $_SESSION['updated_publishing_year'] = $update_publishing_year;
            $_SESSION['updated_created_by'] = $update_created_by;

            if($result){
                // echo "updated successfully.";
                header('location:displayUpdatedHero.php');
            }else{
                die(mysqli_error($conn));
            }
        }

        // echo $update_name . '<br>';
        // echo $update_alter_ego . '<br>';
        // echo $update_publisher . '<br>';
        // echo $update_first_appearence . '<br>';
        // echo $update_publishing_year . '<br>';
        // echo $update_created_by . '<br>';

    // BACK TO MENU
        $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';    

        if( $SUBMIT_BACK_TO_MENU ){
            header('location:menuPage.php');
        }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hero</title>
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
                        UPDATE HERO
                    </div>
                </div>
                <div id="formContainer">
                    <form method="post" id="form">
                        <table id="formTable">
                            <tr>
                                <td> <label for="NAME">Name</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="NAME" value="<?php echo $name ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="ALTER EGO">Alter Ego</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="ALTER_EGO" value="<?php echo $alter_ego ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHER">Publisher</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHER" value="<?php echo $publisher ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="FIRST APPEARENCE">First Appearence</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="FIRST_APPEARENCE" value="<?php echo $first_appearence ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHING YEAR">Publishing Year</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHING_YEAR" value="<?php echo $publishing_year ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="CREATED BY">Created By</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="CREATED_BY" value="<?php echo $created_by ?>"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td></td>
                                <td class="td-spacer"></td>
                                <td><input type="submit" name="UPDATE_HERO" value="UPDATE HERO" class="add-new-hero-input"></td>
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
    if( $SUBMIT_UPDATE_HERO && (!$update_name || !$update_alter_ego || !$update_publisher || !$update_first_appearence || !$update_publishing_year || !$update_created_by)){
        echo "<script>
        document.getElementById('speechbox').style.display = 'block';
      </script>";
    }


?>