<?php
namespace app\models;

use yii\base\Model;

class ValidateForm extends Model{
    public $name;
    public $password;

    public function rules()
    {
        $attr['Name']='用户名';
        return [
//            ['name', 'required', 'message' => '亲输入用户名.'],
            [['name','password'],'required' ,'message'=>'Please enter a value for {attribute}'],
            'name'=>[['name'],'string','max'=>3,'message' => '字符不能超过3位.']
        ];
    }

}