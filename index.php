<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once './partials/main.php'; ?>
            </tbody>
        </table>

        <form method="POST" action="add_user.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="address">Street:</label>
            <input type="text" name="address" id="address" required><br>

            <label for="city">City:</label>
            <input type="text" name="city" id="city" required><br>

            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" required><br>

            <label for="company">Company:</label>
            <input type="text" name="company" id="company" required><br>

            <button type="submit">Add User</button>
        </form>
    </main>

    <script src="assets/js/script.js"></script>
   
</body>

</html>