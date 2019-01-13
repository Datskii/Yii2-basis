<?php

namespace app\controllers;


use app\models\tables\Tasks;
use app\models\tables\Users;
use app\models\Task;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Tasks::find()
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionOne($id){
        $model =  Tasks::findOne($id);

        return $this->render('one', [
            'one' => $model
        ]);
    }
}