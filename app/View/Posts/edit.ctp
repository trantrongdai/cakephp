<h1> Edit Post</h1>
<?php 
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=>'3'));
echo $this->Form->input('id', array('type' => 'hidden'));//co cai nay thi Cakephp hieu la dang edit chu khong phai create new
echo $this->Form->end('save');