<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $email
 * @property string $password
 *
 * @property Tasks[] $tasks
 */
class Users extends \yii\db\ActiveRecord
{
    const SCENARIO_AUTH = 'auth';
   /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'email'], 'required'],
            [['login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['responsible_id' => 'id']);
    }

    public function fields()
    {
        if ($this->scenario == self::SCENARIO_AUTH){
            return [
                'id',
                'username'=>'login',
                'password'
            ];
      }
        return parent::fields();

    }
}
