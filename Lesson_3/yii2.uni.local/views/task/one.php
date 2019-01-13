<?php
$model = \app\models\tables\Tasks::findOne(2);
//var_dump($model);

echo app\widgets\TaskPreview::widget(['model'=>$model]);