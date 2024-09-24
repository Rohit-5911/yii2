<?php
use yii\helpers\Html;

$this->title = 'Manager Dashboard';
?>
<div class="site-dashboard">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>Project List</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= Html::encode($project->id) ?></td>
                    <td><?= Html::encode($project->title) ?></td>
                    <td><?= Html::encode($project->description) ?></td>
                    <td><?= Html::encode(date('Y-m-d H:i:s', $project->created_at)) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
