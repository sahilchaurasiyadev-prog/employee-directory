<?php
require_once 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data['id']) && !empty($data['name']) && !empty($data['email']) && !empty($data['role'])) {
    try {
        $stmt = $pdo->prepare("UPDATE employees SET name = ?, email = ?, role = ? WHERE id = ?");
        $stmt->execute([$data['name'], $data['email'], $data['role'], $data['id']]);
        echo json_encode(["success" => true, "message" => "Employee updated successfully"]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Incomplete data"]);
}
?>