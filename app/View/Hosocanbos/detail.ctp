<h1>thông tin hồ sơ cán bộ</h1>

<table style="padding: 40px">
    <tr>
        <td rowspan="4"><?php echo $this->Html->image('troll.png')?></td>
        <td>Họ tên</td>
        <td><?php echo $hosocanbo['Hosocanbo']['hoten']; ?></td>
    </tr>

    <tr>
        <td>Số điện thoại</td>
        <td><?php echo $hosocanbo['Hosocanbo']['dienthoai']; ?></td>
    </tr>

    <tr>
        <td>Địa chỉ hiện tại</td>
        <td><?php echo $hosocanbo['Hosocanbo']['diachihientai']; ?></td>
    </tr>

    <tr>
        <td>Quốc tịch</td>
        <td><?php echo $hosocanbo['Quocgia']['ten']; ?></td>
    </tr>




</table>