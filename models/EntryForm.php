<?php
namespace app\models;

use yii\base\Model;

class EntryForm extends Model{
    public $user_name;
    public $password;
    public $verifyCode;

//    public static function

    public function attributeLabels()
    {
        return [
            'user_name' => '用户名',
            'password' => '密码',
            'verifyCode' => '验证码',
        ];
    }

    public function rules()
    {
        return [
            [['user_name','password'],'required' ,'message'=>'请输入 {attribute}'],

            ['verifyCode','captcha','captchaAction' => 'index/captcha','message'=>'验证码输入错误了'],

            ['password','validatePassword'],
        ];
    }


    public function validatePassword($attribute, $params)
    {
        echo $this->getUser();
        var_dump($attribute);
        var_dump($params);exit;
    }
}