<?php


namespace common\models;


use yii\base\Model;

class CreateProfiles extends Model
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $phone
    ;
    public function attributeLabels()
    {
        return [
          'first_name' => 'First Name',
          'middle_name' => 'Middle Name',
          'last_name' => 'Last Name',
          'phone' => 'Phone',
        ];
    }

    public function rules()
    {
        return [
          [[ 'first_name', 'last_name'], 'required'],
          [['phone'], 'number'],
          [['phone'], 'filter', 'filter' => function($value){
              return str_replace(['(', ')', '-'], '', $value);
          }],
          [[ 'first_name', 'middle_name', 'last_name'], 'string', 'max' => 128],
        ];
    }
}