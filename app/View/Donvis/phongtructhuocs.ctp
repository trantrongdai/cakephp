<h1>Các phòng thuộc đơn vị <?php echo $donvi['Donvi']['ten'] ?></h1>
<ul>
    <?php foreach ($donvi['Phong'] as $phong) : ?>
        <li><?php echo $this->Html->link($phong['ten'], array('controller' => 'Phongs',$phong['id'], 'action' => 'detail')) ;?></li>
    <?php endforeach; ?>
</ul>