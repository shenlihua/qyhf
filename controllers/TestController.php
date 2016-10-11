<?php

namespace app\controllers;

use app\models\ValidateForm;
use Yii;
use yii\web\Controller;
use yii\helpers\Url;
class TestController extends Controller
{
    public $layout=false;
//    public function behaviors(){
////        echo 12324323423;exit;
//    }
    public function actionIndex()
    {
        $model=new ValidateForm();
        print_r(Yii::$app->request->getBodyParam('name'));
//        print_r($model->activeAttributes());
//        print_r($model::$attributes);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据

            // 做些有意义的事 ...

            echo 123;exit;
        }else{
            return $this->render('index', ['model' => $model]);
        }


    }

}
