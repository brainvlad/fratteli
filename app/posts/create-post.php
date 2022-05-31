<?php

session_start();
require_once '../db.php';

// header("Content-Type: application/json;");

try {

    $user_id = $_SESSION["user"]["id"];

    if (!$user_id) {
        throw new Exception("Необходимо авторизация!");
    }


    $postHeader = $_POST["post_header"];
    $postText = $_POST["post_text"];

    $path = 'uploads/' . time() . $_FILES['post_picture']['name'];
    if (!move_uploaded_file($_FILES['post_picture']['tmp_name'], '../' . $path)) {

    }
    $postPicture = '/app/' . $path;

    $insetPostRow = "INSERT INTO `posts`
        (`post_header`, `post_text`, `post_picture`) VALUES 
        ($postHeader,$postText,$postPicture);
    ";

    $groupData = $db->query($insetPostRow);

    $res = array("post_id" => mysqli_insert_id($db));

    echo json_encode($res);
} catch (Exception $e) {
    echo json_encode($e->getMessage(), JSON_UNESCAPED_UNICODE);
}