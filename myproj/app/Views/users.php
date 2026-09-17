<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('/about') ?>">About</a> |
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <h1>USERS PAGE</h1>
    <h3></h3>

        <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $users): ?>
                <tr>
                    <td><?= esc($users['username']) ?></td>
                    <td><?= esc($users['full_name']) ?></td>
                    <td><?= esc($users['role']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>