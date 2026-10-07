<h2><?= esc($title) ?></h2>

<?php if (session()->getFlashdata('errors')): ?>
    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <p><?= esc($error) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form
    action="<?= $user
        ? base_url('users/update/' . $user['id'])
        : base_url('users/create') ?>"
    method="post"
    enctype="multipart/form-data"
>

    <?= csrf_field() ?>

    <label>Username</label>
    <input type="text" name="username"
        value="<?= esc($user['username'] ?? '') ?>" required>

    <br><br>

    <label>Full Name</label>
    <input type="text" name="full_name"
        value="<?= esc($user['full_name'] ?? '') ?>" required>

    <br><br>

    <label>Password</label>
    <input type="password" name="password"
        <?= $user ? '' : 'required' ?>>

    <?php if ($user): ?>
        <small>Leave blank to keep the current password.</small>
    <?php endif; ?>

    <br><br>

    <label>Avatar</label>
    <input
        type="file"
        name="avatar"
        accept=".jpg,.jpeg,.png"
    >

    <br><br>

    <button type="submit">Save User</button>
</form>