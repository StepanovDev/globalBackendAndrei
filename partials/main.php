<?php
$usersJson = file_get_contents('./dataset/users.json');
$users = json_decode($usersJson, true);

foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['name'] . '</td>';
    echo '<td>' . $user['username'] . '</td>';
    echo '<td>' . $user['email'] . '</td>';
    echo '<td>' . $user['address']['street'] . ', ' . $user['address']['zipcode'] . ', ' . $user['address']['city'] . '</td>';
    echo '<td>' . $user['phone'] . '</td>';
    echo '<td>' . $user['company']['name'] . '</td>';
    echo '<td><button onclick="removeUser(' . $user['id'] . ')">Remove</button></td>';
    echo '</tr>';
}
?>
