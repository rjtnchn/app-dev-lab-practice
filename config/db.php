<?php
// Shared DB connection. All api/*.php files include this.
// Adjust credentials if your local MySQL setup differs (e.g. XAMPP default is user "root", empty password).

$host = "localhost";
$user = "root";
$pass = "";
$db   = "appdev_lab_practice";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(["error" => "Database connection failed"]));
}

header("Content-Type: application/json");
