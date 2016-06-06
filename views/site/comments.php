<h1>Comments</h1>
<ul>
<?php foreach($comments as $comment): ?>
<li><b>Name: </b><?=$comment['name']?> <b>Comment: </b><?=$comment['text']?></li>
<?php endforeach; ?>
</ul>
