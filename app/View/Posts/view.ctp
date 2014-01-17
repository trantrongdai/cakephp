<?php
$this->extend('/Common/view');
$this->assign('title',$post['Post']['title']);
$this->start('sidebar');
?>
<li>
<?php
echo $this->Html->link('Edit', array('action'=>'edit', $post['Post']['id']));
echo $this->Form->postlink('Delete', array('action'=>'delete', $post['Post']['id']), array('confirm'=>'Are you sure?'));
?>
</li>
<?php $this->end(); ?>

<?php echo h($post['Post']['body']) ?>
