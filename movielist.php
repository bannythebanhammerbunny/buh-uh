<?php
require_once("initialize.php");
$movies = getMovie();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie of list</title>
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

    <main>
        <table style="border-collapse: collapse; width: 100%;">
            <tr>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">id</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">Name</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">Author</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">length</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">funny</th>
            </tr>
            <?php while ($movie = mysqli_fetch_assoc($movies)) { ?>
                <tr>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $movie['id']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $movie['name']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $movie['author']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $movie['length']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $movie['funny']; ?></td>
            <?php } ?>
        </table>
    </main>
    <footer>

    </footer>
</body>

</html>