<?php
require_once("initialize.php");
$books = getBook();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.123.134.526</title>
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
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">rating</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">edit data</th>
            </tr>
            <?php while ($book = mysqli_fetch_assoc($books)) { ?>
                <tr>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $book['id']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $book['name']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $book['author']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $book['length']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $book['rating']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><a href = "editData.php?id=<?php echo $book['id']."_0"; ?>">edit this row</a></td>
            <?php } ?>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>