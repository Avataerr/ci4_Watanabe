<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
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


    <h1>CUSTOMERS PAGE</h1>
    <h3></h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td><a href="<?= base_url('customers/edit/' . $customer['id']) ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
