<h1>Tìm kiếm cán bộ</h1>

<?php
echo $this->Form->create('Hosocanbo');
?>
<div id="divleft">
<?php
echo $this->Form->input('Tên');
echo 'Đơn vị <br>' . $this->Form->select('Đơn vị', array(
    'Group 1' => array(
        '1' => 'a1',
        '2' => 'a2'
    ),
    'Group 2' => array(
        '3' => 'b1',
        '4' => 'b2'
    )
        ), array('empty' => 'Toàn viện')
);
?>
</div>
<div id="divright">
    <?php
echo 'Giới tính <br>';
echo $this->Form->radio('Giới tính', array(
    'Nam' => 'Nam',
    'Nu' => 'Nữ'
        ), array(
    'label' => true,
    'legend' => false
        )
);

echo $this->Form->end('Tìm');
//print_r($hosocanbos) ;
echo '<br>Xem kết quả<br>';
print_r($data);
echo '<br>' . count($data);
echo "</div>";
?>
</div>
<table style="padding: 20px">
    <th>Họ tên</th>
    <th>Thư điện tử</th>
<?php
foreach ($hosocanbos as $hosocanbo) : {
        
    }
    ?>
        <tr>
            <td><?php echo $this->Html->link($hosocanbo['Hosocanbo']['hoten'], array($hosocanbo['Hosocanbo']['id'], 'action' => 'detail',)); ?></td>
            <td><?php echo $hosocanbo['Hosocanbo']['thudientu']; ?></td>   
        </tr>

<?php endforeach; ?>


</table>