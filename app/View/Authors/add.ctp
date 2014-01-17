<h1> Add Author</h1>

<?php 
echo $this->Form->create('Author');

echo $this->Form->input('name');
echo $this->Form->input('infor', array('rows' => '3'));
echo $this->Form->input('mail');
echo $this->Form->input('address');

echo $this->Form->end('Save Author');
?>