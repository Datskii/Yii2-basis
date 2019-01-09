<?php

namespace app\controllers;

use app\models\tables\Tasks;
use app\models\Task;
use yii\web\Controller;

class DbController extends Controller
{
    public function actionIndex()
    {
//    \Yii::$app->db->createCommand("
//    INSERT INTO test (title,content) VALUES ('Title 6', 'Content 6')
//    ")->execute();

        /*$result = \Yii::$app->db->createCommand("
        SELECT * FROM test WHERE id = :id
        ")->bindValue(":id",1)
        ->queryOne();*/

        /*$result = \Yii::$app->db->createCommand("
        SELECT id FROM test
        ")->queryColumn();*/

        $result = \Yii::$app->db->createCommand("
    SELECT COUNT(*) FROM test
    ")->queryScalar();
        var_dump($result);

        exit;

    }

    public function actionAr()
    {
        /*$model = new Tasks();
        $model->name = "Next Task";
        $model->date = date("Y-m-d");
        $model->description = "Next Description";
        $model->responsible_id = 9;
        $model->save();*/

        /*$model = Tasks::findOne(2);*/

        /* $model = Tasks::findOne(9);
         $model->name = "Task 9";
         $model->description = "Description 9";
         $model->save();*/

        /*$model = Tasks::findOne(9);
        $model->delete();*/
    }

    public function actionFind()
    {
        /*$tasks = Tasks::find()->all();*/

        $tasks =Tasks::findOne(4);
        var_dump($tasks->users);
    }
}