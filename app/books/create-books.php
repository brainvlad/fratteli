<?php
session_start();
require_once '../db.php';

// header("Content-Type: application/json;");

try {

    $user_id = $_SESSION["user"]["id"];

    if (!$user_id) {
        throw new Exception("Необходимо авторизация!");
    }


    $name = $_POST["name"];
    $description = $_POST["description"];

    $path = 'uploads/' . time() . $_FILES['book_picture']['name'];
    if (!move_uploaded_file($_FILES['book_picture']['tmp_name'], '../' . $path)) {

    }
    $bookPicture = '/app/' . $path;

    $path = 'uploads/' . time() . $_FILES['book_file']['name'];
    if (!move_uploaded_file($_FILES['book_file']['tmp_name'], '../' . $path)) {

    }
    $bookFile = '/app/' . $path;





    $insetBookRow = "INSERT INTO `books`(`name`, `image`, `file`, `description`) 
                          VALUES ($name,$bookPicture,$bookFile,$description)
    ";

    $groupData = $db->query($insetPostRow);

    $res = array("book_id" => mysqli_insert_id($db));

    echo json_encode($res);
} catch (Exception $e) {
    echo json_encode($e->getMessage(), JSON_UNESCAPED_UNICODE);
}