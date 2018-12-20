<?php

namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        $task = new Task();
        $task->load([
            'Task' => ['user' => 'Игорь Федосенко',
            'name' => 'Валидатор',
            'description' => 'Создать класс валидатора.',
            'status' => 1,
            'type' => 1,
            'dateStart' => '2018-12-16 10:00:00']
        ]);
        return $this->render('index', ['task' => $task]);
    }
}