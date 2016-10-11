<?php
namespace app\controllers;

class CaptchaAction extends \yii\captcha\CaptchaAction {
    public $autoRegenerate = true;

    public function run()
    {
        if ($this->autoRegenerate && Yii::$app->request->getQueryParam(self::REFRESH_GET_VAR) === null) {
            $this->setHttpHeaders();
            Yii::$app->response->format = Response::FORMAT_RAW;
            return $this->renderImage($this->getVerifyCode(true));
        }
        return parent::run();
    }
}