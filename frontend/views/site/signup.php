<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
/* @var $profile \common\models\CreateProfiles */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <div class="row">
                <div class="col-lg-4">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($profile, 'first_name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($profile, 'middle_name') ?>

                    <?= $form->field($profile, 'last_name') ?>

                    <?= $form->field($profile, 'phone')->widget(MaskedInput::className(),[
                      'mask' => '8(099)999-99-99',
                    ]) ?>
                </div>

            </div>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>


        <?php ActiveForm::end(); ?>

</div>
