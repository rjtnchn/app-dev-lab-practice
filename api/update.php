<?php
// BACKEND MEMBER B — branch: feature/backend-update-delete
// POST /api/update.php — body: { "id": 1, "title": "...", "completed": true }
// Update a task and return it.

require_once __DIR__ . "/../config/db.php";

$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"] ?? null;

if (!$id) {
    http_response_code(400);
    echo json_encode(["error" => "id is required"]);
    exit;
}

// TODO (Backend Member B):
// $title = $data["title"];
// $completed = $data["completed"] ? 1 : 0;
// $stmt = $conn->prepare("UPDATE tasks SET title = ?, completed = ? WHERE id = ?");
// $stmt->bind_param("sii", $title, $completed, $id);
// $stmt->execute();
// echo json_encode(["id" => $id, "title" => $title, "completed" => (bool)$completed]);

http_response_code(501);
echo json_encode(["error" => "update.php not implemented yet"]);
