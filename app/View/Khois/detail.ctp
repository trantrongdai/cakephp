<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Các đơn vị trực thuộc  <?php echo $khoi['Khois']['ten'] ?></h1>
<table>
    <?php foreach($khoi['Donvi'] as $donvi) : ?>
        <tr>
            <td><?php
                echo $this->Html->image('department.jpg', array('alt' => 'no picture', 'width'=>'200'));
                ?></td>
            <td>
                <?php echo $this->Html->link($donvi['ten'], array('controller' => 'Donvis', $donvi['id'], 'action' => 'detail')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>