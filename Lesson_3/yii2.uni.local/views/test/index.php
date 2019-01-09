<?php
/**
 * @var \app\models\tables\Test $model
 */
$form = \yii\widgets\ActiveForm::begin();
echo $form->field($model,'title')->textInput();
echo $form->field($model,'content')->textarea();
echo \yii\helpers\Html::submitButton('Let\'s go',['class'=>['btn btn-success']]);
\yii\widgets\ActiveForm::end();?>