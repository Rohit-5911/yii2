<?php

use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-bordered table-striped">
        <tr>
            <th><?= Html::encode($model->getAttributeLabel('id')) ?></th>
            <td><?= $model->id ?></td>
        </tr>
        <tr>
            <th><?= Html::encode($model->getAttributeLabel('title')) ?></th>
            <td><?= $model->title ?></td>
        </tr>
        <tr>
            <th><?= Html::encode($model->getAttributeLabel('description')) ?></th>
            <td><?= $model->description ?></td>
        </tr>
        <tr>
            <th><?= Html::encode($model->getAttributeLabel('created_at')) ?></th>
            <td><?= date('Y-m-d H:i:s', $model->created_at) ?></td>
        </tr>
        <tr>
            <th><?= Html::encode($model->getAttributeLabel('updated_at')) ?></th>
            <td><?= date('Y-m-d H:i:s', $model->updated_at) ?></td>
        </tr>
    </table>

</div>
