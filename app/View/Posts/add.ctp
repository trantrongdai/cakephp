<h1>Add Post</h1>
<?php
echo $this->Form->create('Post'); //<form id="PostAddForm" method="post" action="/posts/add">
echo $this->Form->input('title');//input field
echo $this->Form->input('body', array('rows' => '3'));//input field 3 dong
echo $this->Form->end('Save Post');//button submit
?>