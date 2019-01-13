<?php
/**
 * @var $model \app\models\tables\Tasks
 */


?>


<div class="task-container">
    <div class="task-preview">
        <div class="task-preview-header"><?= $model->name ?></div>
        <div class="task-preview-content"><?= $model->description ?></div>
        <div class="task-preview-user"><?= $model->users->login ?></div>
    </div>
</div>