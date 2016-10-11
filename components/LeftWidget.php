<?php
namespace app\components;

use yii\base\Widget;


class LeftWidget extends Widget
{

    public function run()
    {
        return $this->render('_menu.php');
    }
}