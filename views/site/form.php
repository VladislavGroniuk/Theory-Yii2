<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<?php if($name) {?><p>Ваше имя: <?=$name?>. Ваш email: <?=$email?></p><?php } ?>
<?php $f=ActiveForm::begin(); ?>
    <?=$f->field($form,'name')?>
    <?=$f->field($form,'email')?>
    <?=$f->field($form,'file')->fileInput()?>
    <?=Html::submitButton("Отправить")?>
<?php ActiveForm::end(); ?>
