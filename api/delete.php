<?php
// BACKEND MEMBER B — branch: feature/backend-update-delete
// POST /api/delete.php — body: { "id": 1 }
// Delete a task.

require_once __DIR__ . "/../config/db.php";

$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"] ?? null;

if (!$id) {
    http_response_code(400);
    echo json_encode(["error" => "id is required"]);
    exit;
}

// TODO (Backend Member B):
// $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
// $stmt->bind_param("i", $id);
// $stmt->execute();
// echo json_encode(["deleted" => $id]);

http_response_code(501);
echo json_encode(["error" => "delete.php not implemented yet"]);
