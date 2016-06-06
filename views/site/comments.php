<?php
use yii\widgets\LinkPager;
?>


<h1>Comments</h1>
<p>You saw last name <?=$name?></p>
<ul>
<?php foreach($comments as $comment): ?>
<li><b>Name: </b><a href="<?=Yii::$app->urlManager->CreateUrl(['site/user','name'=>$comment->name])?>"><?=$comment['name']?></a> <b>Comment: </b><?=$comment['text']?></li>
<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>
