<?php

use yii\widgets\ActiveForm;
use yii\widget\Html;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password_hash')->passwordInput() ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'supervisor')->textInput() ?>
    
<?php ActiveForm::end(); ?>