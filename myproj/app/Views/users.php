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
        <br> <br>
        <a href="<?= base_url('customers/new') ?>">Add Customer</a>
        <a href="<?= base_url('users/new') ?>">Add User</a>
        <a href="<?= base_url('logout') ?>">Log Out</a>
    </nav>

    <h1>USERS PAGE</h1>
    <h3></h3>

        <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td>
                        <?php if (!empty($user['avatar'])): ?>
                            <img
                                src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                                alt="Avatar"
                                width="80"
                                height="80"
                                style="object-fit: cover; border-radius: 50%;"
                            >
                        <?php else: ?>
                            <img
                                src="<?= base_url('images/default-avatar.png') ?>"
                                alt="Default Avatar"
                                width="80"
                                height="80"
                                style="object-fit: cover; border-radius: 50%;"
                            >
                        <?php endif; ?>
                    </td>

                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><a href="<?= base_url('users/edit/' . $user['id']) ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
