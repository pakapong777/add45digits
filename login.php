<?php

header("Content-Type: application/json");

$validCredentials = [
    "888" => password_hash("123", PASSWORD_DEFAULT),
    "nong123" => password_hash("nong7789", PASSWORD_DEFAULT),
];

$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data["username"]) && isset($data["password"])) {
    $username = $data["username"];
    $password = $data["password"];

    if (isset($validCredentials[$username]) && password_verify($password, $validCredentials[$username])) {
        echo json_encode(["success" => true, "username" => $username]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false]);
}
?>
