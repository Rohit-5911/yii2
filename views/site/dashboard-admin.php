<?php
use yii\helpers\Html;

$this->title = 'Admin Dashboard';
?>
<div class="site-dashboard">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>User List</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= Html::encode($user->id) ?></td>
                    <td><?= Html::encode($user->name) ?></td>
                    <td><?= Html::encode($user->email) ?></td>
                    <td><?= Html::encode($user->role) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
