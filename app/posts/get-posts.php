<?php

session_start();
require_once '../db.php';

header("Content-Type: application/json;");

try {

    $json = file_get_contents('php://input');
    $req = json_decode($json, true);

    $res = array();

    $selectPosts = "SELECT * FROM `posts`";

    $postsData = $db->query($selectPosts);
    while ($post = $postsData->fetch_assoc()) {
        array_push($res, $post);
    }

    echo json_encode($res);
} catch (Exception $e) {
    echo json_encode(array("error" => $e->getMessage(), "success" => false));
}
