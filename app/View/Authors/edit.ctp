<h1>Edit Author</h1>

<?php
echo $this -> Form -> create("Author");
echo $this -> Form -> input('name');
echo $this -> Form -> input('infor', array('rows' => '3'));
echo $this -> Form -> input('mail');
echo $this -> Form -> input('address');
echo $this -> Form -> input('id', array('type' => 'hidden'));
echo $this -> Form -> end('save');
?>