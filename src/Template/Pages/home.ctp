<h1>CakePHP CMS TEST PAGE</h1>

<?php if ($whoInThere):?>
    <h2><?= h($whoInThere['email'])?></h2>
    <h5><?= $this->Html->link('ログアウト',['controller' => 'Users', 'action' => 'logout'])?></h5>

    <h3><?= $this->Html->link('記事一覧',['controller' => 'Articles', 'action' => 'index'])?></h3>
    <h3><?= $this->Html->link('ユーザーリスト',['controller' => 'Users', 'action' => 'index'])?></h3>

<?php else:?>
    <h3><?= $this->Html->link('ログイン',['controller'=> 'Users','action' => 'login']) ?></h3>
<?php endif; ?>



