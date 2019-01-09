<?php

namespace app\models;


use yii\base\Model;

class Task extends Model
{
    public $user;
    public $name;
    public $description;
    public $status;
    public $type;
    public $dateStart;

    public function rules()
    {
        return [
            ['user', 'string'],
            [['type', 'status'], 'number'],
            [['name', 'description', 'dateStart'], 'required'],
            ['type', 'typeValidate'],
        ];
    }
    public function typeValidate($attribute)
    {
        if ($this->$attribute == '1') {
            $this->addError($attribute, 'Атрибут с параметром ' . $this->$attribute . ' не допустим.');
        }
    }
}