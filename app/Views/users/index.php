<?= view('templates/header') ?>
<h1>User / Staff Accounts</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users) && is_array($users)): ?>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['name']) ?></td>
            <td><?= esc($user['role']) ?></td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="3">No users found.</td>
    </tr>
<?php endif; ?>
    </tbody>
</table>
<?= view('templates/footer') ?>