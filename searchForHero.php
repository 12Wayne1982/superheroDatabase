<?php
    include("connect.php");
    include("function.php");
    include("sql.php");

    $SUBMIT_BACK_TO_MENU = (isset($_POST['BACK_TO_MENU'])) ? $_POST['BACK_TO_MENU'] : '';
    if( $SUBMIT_BACK_TO_MENU ){
        header('location:menuPage.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search For Hero</title>
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
                        SEARCH FOR HERO
                    </div>
                </div>
                <div id="formContainer">
                    <!-- action="searchForHeroResult.php" -->
                    <!-- onsubmit = "reloadP()" -->
                    <form method="post" id="searchForm" action="searchForHeroResult.php">
                        <table id="formTable">
                            <tr>
                                <td> <label for="NAME">Name</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="NAME" class="searchFields"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="ALTER EGO">Alter Ego</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="ALTER_EGO" class="searchFields"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHER">Publisher</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHER" class="searchFields"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="FIRST APPEARENCE">First Appearence</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="FIRST_APPEARENCE" class="searchFields"></td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="PUBLISHING YEAR">Publishing Year</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="PUBLISHING_YEAR" class="searchFields"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td> <label for="CREATED BY">Created By</label> </td>
                                <td class="td-spacer"></td>
                                <td> <input type="text" name="CREATED_BY" class="searchFields"> </td>
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td></td>
                                <td class="td-spacer"></td>
                                <td>
                                    <input type="submit" name="SEARCH_FOR_HERO" value="SEARCH FOR HERO" class="search-for-hero-input" disabled="disabled" id = "submitSearch">
                                </td>
                                
                            </tr>
                            <tr class="tr-spacer"></tr>
                            <tr>
                                <td></td>
                                <td class="td-spacer"></td>
                                <td>
                                    <input type="submit" name="BACK_TO_MENU" value="BACK TO MENU" class="back-to-menu-input">
                                </td>
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
    <script>
        
    </script>
</body>
</html>

<?php
    // if( (!$sInput[1] || !$sInput[2] || !$sInput[3] || !$sInput[4] || !$sInput[5] || !$sInput[6]) &&  $SUBMIT_ADD_NEW_HERO == "ADD NEW HERO" ){
    //     // $formNotComplete = " ";
    //     echo "<script>
    //             document.getElementById('speechbox').style.display = 'block';
    //           </script>";
    //     // echo '<script src="test.js"></script>';
    // }
?>