<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Cac cong trinh </h1>
<?php foreach($congtrinhs as $congtrinh) :  ?>
<div>
    <?php  echo $this->Html->link($congtrinh['Congtrinh']['id'],array('action'=>'detail',$congtrinh['Congtrinh']['id'])); ?>
</div>
<?php endforeach; ?>
</body>
</html>

