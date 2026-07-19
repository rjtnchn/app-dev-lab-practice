<?php
// BACKEND MEMBER A — branch: feature/backend-create-read
// POST /api/create.php — body: { "title": "..." }
// Insert a new task and return it.

require_once __DIR__ . "/../config/db.php";

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"] ?? null;

if (!$title) {
    http_response_code(400);
    echo json_encode(["error" => "Title is required"]);
    exit;
}


$stmt = $conn->prepare("INSERT INTO tasks (title) VALUES (?)");
$stmt->bind_param("s", $title);
$stmt->execute();

$newId = $stmt->insert_id;

http_response_code(201);
echo json_encode([
    "id" => $newId, 
    "title" => $title, 
    "completed" => false
]);
