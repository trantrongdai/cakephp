<h1>Thông tin các cán bộ</h1>
<table style="padding: 20px">
    <th>mã tài khoản</th>
    <th>tên tài khoản</th>
    <th>họ và tên</th>
    <th>địa chỉ hiện tại</th>
<?php
foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['Hosocanbo']['hoten']; ?></td>
        <td><?php echo $user['Hosocanbo']['diachihientai']; ?></td>
    </tr>
    <?php endforeach;?>
</table>