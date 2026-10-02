<?= view('templates/header') ?>
<h1>Customer Accounts</h1>
<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($customers) && is_array($customers)): ?>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= esc($customer['name']) ?></td>
            <td><?= esc($customer['email']) ?></td>
            <td><?= esc($customer['phone']) ?></td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="3">No customers found.</td>
    </tr>
<?php endif; ?>
    </tbody>
</table>
<?= view('templates/footer') ?>