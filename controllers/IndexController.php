<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\EntryForm;
use yii\captcha\CaptchaAction;

class IndexController extends Controller
{
    public $layout="new_style.php";
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 4,
                'minLength' => 4,
                'width'	    => 120,
                'height'    => 40,
                //重定义验证码生成规则
//                'fixedVerifyCode' =>(string)mt_rand(10000,99999),
            ],
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin(){
        $model = new EntryForm;
//        $info=EntryForm::findOne();
//        dump($info);exit;
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())){
            if($model->validate()){
                $user_name=Yii::$app->request->post('user_name');
//                $password =Yii::$app->request->
                echo '验证成功!';exit;
            }else{
                var_dump($model->getErrors());
            }
        }

        return $this->renderPartial('login',['model'=>$model]);
    }

    public function actionVerify(){
//        var_dump($this->id);exit;
        $captcha=new \yii\captcha\CaptchaAction($this->id,$this->className());
        $captcha->run();
    }
}