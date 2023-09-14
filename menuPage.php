<?php
    // Link zu addNewHero.php
        $SUBMIT_ADD_NEW_HERO = (isset($_POST['ADD_NEW_HERO'])) ? $_POST['ADD_NEW_HERO'] : '';

        if( $SUBMIT_ADD_NEW_HERO ){
            header('location:addNewHero.php');
        }

    // Link zu displayAllHeroes.php
        $DISPLAY_MY_HEROES = (isset($_POST['DISPLAY_MY_HEROES'])) ? $_POST['DISPLAY_MY_HEROES'] : '';

        if( $DISPLAY_MY_HEROES ){
            header('location:displayAllHeroes.php');
       }

    // Link zu searchForHero.php
    $SEARCH_FOR_HERO = (isset($_POST['SEARCH_FOR_HERO'])) ? $_POST['SEARCH_FOR_HERO'] : '';

    if( $SEARCH_FOR_HERO ){
        header('location:searchForHero.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
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
                    WELCOME TO <br> HERO DATABASE
                </div>
            </div>
            <div id="outputcontainer">
                <form method="post">
                    <table id="buttonTable">
                        <tr>
                            <td><input type="submit" name="ADD_NEW_HERO" value="ADD NEW HERO" class="add-new-hero-input"></td>
                            
                        </tr>
                        <tr class="tr-spacer"></tr>
                        <tr>
                            <td><input type="submit" name="SEARCH_FOR_HERO" value="SEARCH FOR HERO" class="search-for-hero-input"></td>
                        </tr>
                        <tr class="tr-spacer"></tr>
                        <tr>
                            <td><input type="submit" name="DISPLAY_MY_HEROES" value="DISPLAY ALL HEROES" class="display-my-heroes-input"></td>
                        </tr>
                    </table>
                </form>
            </div>  
        </div>
    </div>
</body>
</html>