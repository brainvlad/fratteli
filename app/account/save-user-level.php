<?php
session_start();
try {


    header("Content-Type: application/json;");
    $user_id = $_SESSION['user']['id'];

    $json = file_get_contents('php://input');
    $req = json_decode($json, true);

    $user_level = $req["user_level"];

    // implement setting data to db

} catch (\Exception $e) {
    echo json_encode(["success" => false, "message"=>$e->getMessage()]);
}