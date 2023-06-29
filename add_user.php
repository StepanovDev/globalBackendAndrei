<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usersJson = file_get_contents('./dataset/users.json');
    $users = json_decode($usersJson, true);

    // Generate a new ID for the user
    $newUserId = count($users) + 1;

    // Create a new user object
    $newUser = [
        'id' => $newUserId,
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'address' => [
            'street' => $_POST['street'],
            'suite' => '',
            'city' => $_POST['city'],
            'zipcode' => $_POST['zipcode'],
            'geo' => [
                'lat' => '',
                'lng' => '',
            ],
        ],
        'phone' => $_POST['phone'],
        'website' => '',
        'company' => [
            'name' => $_POST['company'],
            'catchPhrase' => '',
            'bs' => '',
        ],
    ];

    // Add the new user to the existing array of users
    $users[] = $newUser;

    // Convert the updated array of users back to JSON
    $updatedUsersJson = json_encode($users, JSON_PRETTY_PRINT);

    // Write the updated JSON back to the file
    file_put_contents('./dataset/users.json', $updatedUsersJson);

    // Redirect back to the index.php page
    header('Location: index.php');
    exit();
}

?>
