<?php
namespace app\components;

use yii\base\Widget;


class HeaderWidget extends Widget
{

    public function run()
    {
        return $this->render('_header');
    }
}