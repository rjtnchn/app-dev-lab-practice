<?php
// BACKEND MEMBER A — branch: feature/backend-create-read
// GET /api/read.php — return all tasks as a JSON array.

require_once __DIR__ . "/../config/db.php";


$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
$tasks = $result->fetch_all(MYSQLI_ASSOC);


echo json_encode($tasks);


