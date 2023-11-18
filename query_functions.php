<?php
function getMusic()
{
	global $db;

	$sql = "SELECT * FROM `ok` ";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result; // returns an assoc. array

}
function getBook()
{
	global $db;

	$sql = "SELECT * FROM `book` ";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result; // returns an assoc. array
	
}
function getMovie()
{
	global $db;

	$sql = "SELECT * FROM `movie` ";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result; // returns an assoc. array
	
}



//experimental functions that we might use later

function insert_movie($id, $name, $author, $funni, $lengh) {
	global $db;

	$sql = "INSERT INTO `products`(`id`, `name`, `author`, 'funni', lengh) VALUES ('$id','$name','$author', '$funni', '$lengh')";

	$result = mysqli_query($db, $sql);
	if ($result) {
		return true;
	} else {
		// UPDATE failed
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

function get_movie_by_id($id)
{
	global $db;
	$sql = "SELECT * FROM `movie` WHERE `id` = $id";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$p = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $p; // returns an assoc. array
}

function get_music_by_id($id)
{
	global $db;
	$sql = "SELECT * FROM `music` WHERE `id` = $id";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$p = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $p; // returns an assoc. array
}

function get_book_by_id($id)
{
	global $db;
	$sql = "SELECT * FROM `book` WHERE `id` = $id";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$p = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $p; // returns an assoc. array
}

// function update_music_by_id($id, $name, $lengh, $author, $rating)
// {
// 	global $db;

// 	$sql = "UPDATE `products` SET `brand`='$brand',`name`='$name',`img`='$img' WHERE `id`='$id';";

// 	$result = mysqli_query($db, $sql);
// 	// For UPDATE statements, $result is true/false
// 	if ($result) {
// 		return true;
// 	} else {
// 		// UPDATE failed
// 		echo mysqli_error($db);
// 		db_disconnect($db);
// 		exit;
// 	}
// }















































// // 
// // Admins
// // 
// // Find an admin by id
// function get_admin_by_id($id)
// {
// 	global $db;

// 	$sql = "SELECT * FROM `admin` ";
// 	$sql .= "WHERE id='" . db_escape($db, $id) . "' ";
// 	$sql .= "LIMIT 1";
// 	$result = mysqli_query($db, $sql);
// 	confirm_result_set($result);
// 	$admin = mysqli_fetch_assoc($result); // get first
// 	mysqli_free_result($result);
// 	return $admin; // returns an assoc. array
// // }


// // Find an admin by username, used in admin login
// function get_admin_by_username($username)
// {
// 	global $db;

// 	$sql = "SELECT * FROM `admin` ";
// 	$sql .= "WHERE username='" . db_escape($db, $username) . "' ";
// 	$sql .= "LIMIT 1";
// 	$result = mysqli_query($db, $sql);
// 	confirm_result_set($result);
// 	$admin = mysqli_fetch_assoc($result); // find first
// 	mysqli_free_result($result);
// 	return $admin; // returns an assoc. array
// }

// // 
// // Products
// // 
// function get_all_products()
// {
// 	global $db;

// 	$sql = "SELECT * FROM `products` ";
// 	$sql .= "ORDER BY brand ASC";
// 	$result = mysqli_query($db, $sql);
// 	confirm_result_set($result);
// 	return $result; // returns an assoc. array
// }


// function update_product_by_id($id, $brand, $name, $img)
// {
// 	global $db;

// 	$sql = "UPDATE `products` SET `brand`='$brand',`name`='$name',`img`='$img' WHERE `id`='$id';";

// 	$result = mysqli_query($db, $sql);
// 	// For UPDATE statements, $result is true/false
// 	if ($result) {
// 		return true;
// 	} else {
// 		// UPDATE failed
// 		echo mysqli_error($db);
// 		db_disconnect($db);
// 		exit;
// 	}
// }

// function delete_product_by_id($id)
// {
// 	global $db;

// 	$sql = "DELETE FROM `products` WHERE `id` = $id;";
// 	$result = mysqli_query($db, $sql);

// 	// For DELETE statements, $result is true/false
// 	if ($result) {
// 		return true;
// 	} else {
// 		// DELETE failed
// 		echo mysqli_error($db);
// 		db_disconnect($db);
// 		exit;
// 	}
// }

// function insert_product($brand, $name, $img) {
// 	global $db;

// 	$sql = "INSERT INTO `products`(`brand`, `name`, `img`) VALUES ('$brand','$name','$img')";

// 	$result = mysqli_query($db, $sql);
// 	if ($result) {
// 		return true;
// 	} else {
// 		// UPDATE failed
// 		echo mysqli_error($db);
// 		db_disconnect($db);
// 		exit;
// 	}
// }

// // Hours
// function get_all_hours()
// {
// 	global $db;

// 	$sql = "SELECT * FROM `hours` ";
// 	$result = mysqli_query($db, $sql);
// 	confirm_result_set($result);
// 	return $result; // returns an assoc. array
// }

// function update_hours_by_id($mon, $tue, $wed, $thu, $fri, $sat, $sun)
// {
// 	global $db;

// 	$sql = "UPDATE `hours` SET `mon`='$mon',`tue`='$tue',`wed`='$wed',`thu`='$thu',`fri`='$fri',`sat`='$sat',`sun`='$sun' WHERE `id`=1;";

// 	$result = mysqli_query($db, $sql);
// 	// For UPDATE statements, $result is true/false
// 	if ($result) {
// 		return true;
// 	} else {
// 		// UPDATE failed
// 		echo mysqli_error($db);
// 		db_disconnect($db);
// 		exit;
// 	}
// }