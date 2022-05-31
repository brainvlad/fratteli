<?php

session_start();

require_once '../db.php';

header("Content-Type: application/json;");

try {

    $json = file_get_contents('php://input');
    $req = json_decode($json, true);

    $email = $req['email'];
    $name = $req['name'];
    $password = md5($req['password']);
    $role = $req['role'];

    $query = "INSERT INTO user VALUE (NULL, '$email', '$name', '$password', '$role', NULL)";
    $db->query($query);


    $user_id = mysqli_insert_id($db);
    $response = ["key" => (boolean)$user_id, "user_id" => $user_id];
    echo json_encode($response);

    $user = $db->query("SELECT * FROM user WHERE user_id = '$user_id'")->fetch_assoc();


    $_SESSION['user'] = [
        "id" => $user['user_id'],
        "email" => $user['user_email'],
        "name" => $user['user_name'],
        "role" => $user['user_role'],
        "level" => $user['user_level']
    ];
} catch (\Exception $exception) {
    echo json_encode(["success" => false, "message" => $exception->getMessage()]);
}