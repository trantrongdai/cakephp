<h1> Author list</h1>
<h1> <?php  echo $this->Html->link('Add Author', array('controller' => 'Authors', 'action' => 'add'))?></h1>
<table>
<th>Id</th>
<th>name</th>
<th>information</th>
<th>Action</th>

<?php foreach ($authors as $author):
?>
<tr>
<td><?php echo $author['Author']['id'] ?></td>

<td><?php echo $this -> Html -> link($author['Author']['name'], array('action' => 'detail', $author['Author']['id'])); ?></td>

<td><?php echo $author['Author']['mail'] ?></td>
<td>
	<?php echo $this -> Html -> link('Edit', array('action' => 'edit', $author['Author']['id'])); ?>
	<?php echo $this -> Form -> postlink('Delete', array('action' => 'delete', $author['Author']['id']), array('confirm' => 'Are you sure')); ?>
</td>

</tr>
<?php endforeach; ?>
</table>