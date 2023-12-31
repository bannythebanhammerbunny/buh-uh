<?php require_once('initialize.php');
$id = $_GET["id"];
$tempArray = explode("_", $id);
$authors = getAuthor();
$data_id = $tempArray[0];
$table = $tempArray[1];


if ($table == "1") {
    $data = get_music_by_id($data_id);
} elseif ($table == "2") {  //movie
    $data = get_movie_by_id($data_id);
} elseif ($table == "0") {
    $data = get_book_by_id($data_id);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // if cancel button was click

    if (isset($_POST["cancel"])) {
        if ($table == "1") {
            header("Location: musiclist.php");
        } elseif ($table == "2") {  //movie
            header("Location: movielist.php");
        } elseif ($table == "0") {
            header("Location: booklist.php");
        }
    }

    if (isset($_POST["submit"])) {
        if ($table == "1") {
            $name = $_POST['name'];
            $author = $_POST['author'];
            $length = $_POST['length'];
            $rating = $_POST['rating'];
            update_music_by_id($id, $name, $length, $author, $rating);
            header("Location: musiclist.php");
        } elseif ($table == "2") {  //movie
            $name = $_POST['name'];
            $author = $_POST['author'];
            $length = $_POST['length'];
            $rating = $_POST['rating'];
            update_movie_by_id($id, $name, $length, $author, $rating);
            header("Location: movielist.php");
        } elseif ($table == "0") {
            $name = $_POST['name'];
            $author = $_POST['author'];
            $length = $_POST['length'];
            $rating = $_POST['rating'];
            update_book_by_id($id, $name, $length, $author, $rating);
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

    <script>
        function filterOptions() {
            var input, filter, select, options, option, i, txtValue;
            input = document.getElementById("authorSearch");
            filter = input.value.toUpperCase();
            select = document.getElementById("author");
            options = select.getElementsByTagName("option");

            for (i = 0; i < options.length; i++) {
                option = options[i];
                txtValue = option.textContent || option.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    option.style.display = "";
                } else {
                    option.style.display = "none";
                }
            }
        }
    </script>
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
            name: <input type="text" name="name" value="<?php echo $data['name']; ?>">
            <br>

            <label for="authorSearch">Search Author:</label>
            <input type="text" id="authorSearch" oninput="filterOptions()" placeholder="Search...">

            <select name="author" id="author">
                <?php while ($author = mysqli_fetch_assoc($authors)) { ?>
                    <option value="<?php echo $author['id']; ?>" 
                    <?php 
                    if($data['author'] == $author['id']) {
                        echo "selected";  // print("selected");
                    }
                    ?>><?php echo $author['name']; ?></option>
                <?php } ?>
            </select>
            <br>
            length: <input type="text" name="length" value="<?php echo $data['length']; ?>">
            <br>
            rating: <input type="text" name="rating" value="<?php echo $data['rating']; ?>">
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