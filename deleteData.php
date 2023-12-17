<?php require_once('initialize.php');
    $id = $_GET["id"];
    $tempArray = explode("_", $id);
    
    $data_id = $tempArray[0];
    $table = $tempArray[1];


    if ($table == "1") {
        $data = get_music_by_id($data_id);
    }
    elseif ($table == "2") {  //movie
        $data = get_movie_by_id($data_id);
    }
    elseif ($table == "0") {
        $data = get_book_by_id($data_id);
    }



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
                    delete_music_by_id($data_id);
                    header("Location: musiclist.php");
                }
                elseif ($table == "2") {  //movie
                    delete_movie_by_id($data_id);
                    header("Location: movielist.php");
                }
                elseif ($table == "0") {
                    delete_book_by_id($data_id);
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
        <p>warnging this is irreversible and you may regret thissss</p>
        <form action="" method="POST">
            <div>
                <input style="font-size:18px; background-color: #04AA6D; border: none; color: white; padding: 5px 10px; text-decoration: none; margin: 4px 2px; cursor: pointer;" type="submit" name="submit" value="DELETE IT DELETE RIT DELETER IT" />
                <input style="font-size:18px; background-color: #04AA6D; border: none; color: white; padding: 5px 10px; text-decoration: none; margin: 4px 2px; cursor: pointer;" type="submit" name="cancel" value="Cancel" />
            </div>
            <table style="border-collapse: collapse; width: 100%;">
            <tr>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">id</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">Name</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">Author</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">length</th>
                <th style="border: 1px solid #202020; text-align: center; padding: 8px;">rating</th>
            </tr>
                <tr>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $data['id']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $data['name']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $data['a_name']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $data['length']; ?></td>
                    <td style="border: 1px solid #202020; text-align: center; padding: 8px;"><?php echo $data['rating']; ?></td>
                </tr>
        </table>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>