<?php
$this->extend('/Common/basepage');
$this->assign('title',$author['Author']['name']);

$this->start('breadcrum');
echo $this->Html->link('authors',array('action'=>'index'));
?>
 -->
<?php echo $author['Author']['name']; ?>
<?php $this->end(); ?>
<?php
$this->start('footer');
echo "this is footer";
$this->end();
?>
<?php echo h($author['Author']['infor']) ?>

