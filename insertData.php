<?php require_once('initialize.php');
    $id = $_GET["id"];
    $table = $id;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // if cancel button was click
    
        if (isset($_POST["cancel"])) 
            {if ($table == "1") {
            header("Location: musiclist.php");
            }
            elseif ($table == "2") {  //movie
            header("Location: movielist.php");
            }
            elseif ($table == "0") {
            header("Location: booklist.php");

            }
        }
    
        if (isset($_POST["submit"])) 
            {
                if ($table == "1") {
                    $name=$_POST['name'];
                    $author=$_POST['author'];
                    $length=$_POST['length'];
                    $rating=$_POST['rating'];
                    insert_music($name, $length, $author, $rating);
                    header("Location: musiclist.php");
                }
                elseif ($table == "2") {  //movie
                    $name=$_POST['name'];
                    $author=$_POST['author'];
                    $length=$_POST['length'];
                    $rating=$_POST['rating'];
                    insert_movie($name, $length, $author, $rating);
                    header("Location: movielist.php");
                }
                elseif ($table == "0") {
                    $name=$_POST['name'];
                    $author=$_POST['author'];
                    $length=$_POST['length'];
                    $rating=$_POST['rating'];
                    insert_book($name, $length, $author, $rating);
                    header("Location: booklist.php");
                }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yuh huh</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <br style="margin-bottom: 10px;">
        <a href="index.php" style="float: left;">
            <h1 class="page_title">noob pro hacker 2010 video compilamtion</h1>
        </a>
        <a href="index.php" style="float: left;">
            <p style="color: #FFFFFF; float: left; margin-left: 5vw; font-size: 35px;">home</p>
        </a>
        <a href="musiclist.php" style="float: left;">
            <p style="color: #FFFFFF; float: left; margin-left: 5vw; font-size: 35px;">music</p>
        </a>
        <a href="booklist.php" style="float: left;">
            <p style="color: #FFFFFF; float: left; margin-left: 5vw; font-size: 35px;">books</p>
        </a>
        <a href="movielist.php" style="float: left;">
            <p style="color: #FFFFFF; float: left; margin-left: 5vw; font-size: 35px;">movies</p>
        </a>
        <br style="margin-bottom: 10px; clear: both;">
        <br style="margin-bottom: 10px; clear: both;">
    </header>


    <main style="display: block; margin: auto;  width: 70%; font-size:18px;">

        <form action="" method="POST">
            name: <input type="text" name="name" placeholder="gold trigger">
            <br>
            author: <input type="text" name="author" placeholder="gold digger">
            <br>
            length: <input type="text" name="length" placeholder="gold puglic figure">
            <br>
            rating: <input type="text" name="rating" placeholder="gold devious licker">
            <br>
            <div>
                <input style="font-size:18px; background-color: #04AA6D; border: none; color: white; padding: 5px 10px; text-decoration: none; margin: 4px 2px; cursor: pointer;" type="submit" name="submit" value="Save" />
                <input style="font-size:18px; background-color: #04AA6D; border: none; color: white; padding: 5px 10px; text-decoration: none; margin: 4px 2px; cursor: pointer;" type="submit" name="cancel" value="Cancel" />
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>