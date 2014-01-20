<h1>Các khối trong viện hàn lâm khoa học Việt Nam</h1>
<table>
    <th>Tên khối</th>
    <th>Mô tả</th>
    <?php foreach ($khois as $khoi) : ?>

        <tr>
            <td><?php echo $this->Html->link($khoi['Khois']['ten'], array('action' => 'detail', $khoi['Khois']['id'])); ?></td>
            <td><?php echo $khoi['Khois']['mota'] ?></td>
        </tr>

    <?php endforeach;
    ?>
</table>