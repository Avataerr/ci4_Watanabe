<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>POS Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= esc(session()->getFlashdata('error')) ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="<?= base_url('login') ?>" method="post">
        <?= csrf_field() ?>

        <label for="username">Username</label>
        <input id="username" type="text" name="username" value="<?= esc(old('username')) ?>" required>

        <br><br>

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        <br><br>

        <button type="submit">Log In</button>
    </form>
</body>
</html>
