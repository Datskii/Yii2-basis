<?php
namespace app\validators;
use yii\validators\Validator;

class MyValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if ($this->$attribute == '1') {
            $model->addError($attribute, 'Атрибут с параметром ' . $this->$attribute . ' не допустим.');
        }
    }

}