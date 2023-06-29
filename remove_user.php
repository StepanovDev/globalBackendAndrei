<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents('php://input'), true);
    $userId = $requestData['id'];

    // Read the existing JSON data
    $usersJson = file_get_contents('./dataset/users.json');
    $users = json_decode($usersJson, true);

    // Find and remove the user with the specified ID
    foreach ($users as $index => $user) {
        if ($user['id'] === $userId) {
            unset($users[$index]);
            break;
        }
    }

    $users = array_values($users);

    // Save the updated JSON data
    file_put_contents('./dataset/users.json', json_encode($users));

    http_response_code(200);
} else {
    http_response_code(400);
}
?>
