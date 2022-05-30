<?php

try {

    // implement setting data to db

} catch (\Exception $e) {
    echo json_encode(["success" => false, "message"=>$e->getMessage()]);
}