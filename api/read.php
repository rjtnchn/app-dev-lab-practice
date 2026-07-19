<?php
// BACKEND MEMBER A — branch: feature/backend-create-read
// GET /api/read.php — return all tasks as a JSON array.

require_once __DIR__ . "/../config/db.php";

// TODO (Backend Member A):
// $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
// $tasks = $result->fetch_all(MYSQLI_ASSOC);
// echo json_encode($tasks);

http_response_code(501);
echo json_encode(["error" => "read.php not implemented yet"]);
