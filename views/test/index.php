<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//vendor/yiisoft/yii2/helpers/BaseUrl.php
use yii\helpers\Url;
$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'method'=>'post',
//    'action'=>Url::to(['test/index-action']),
]) ?>
<?= $form->field($model, 'name')->label('用户名:') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
