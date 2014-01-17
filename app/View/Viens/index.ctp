<h1>Vien han lam khoa hoc viet nam</h1>
<div class="vien">
    <?php
    echo $this->Html->image('department.jpg', array('alt' => 'no picture'));
    ?>
</div>
<?php
foreach ($viens as $vien) :
    if ($vien['Vien']['published'] == 1):
        ?>
        <p><?php echo $vien['Vien']['id'] ?></p>
        <p><?php echo $vien['Vien']['gioithieu'] ?></p>
        <p><?php echo $vien['Vien']['cosovatchat'] ?></p>
        <p><?php echo $vien['Vien']['chucnang'] ?></p>
        <p><?php echo $vien['Vien']['hoatdong'] ?></p>
        <p><?php echo $vien['Vien']['nhanluckhoahoc'] ?></p>
        <p><?php echo $vien['Vien']['cocautochuc'] ?></p>
        <?php
    endif;
endforeach;
