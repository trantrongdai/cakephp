<html>
    <head>
        <?php echo $this->Html->css('donvi_detail'); ?>
    </head>
</html>
<h1><strong><?php echo $donvi['Donvi']['ten']; ?></strong></h1>

<br>
<h3><strong><?php echo $this->Html->link('Danh sách các phòng ban trực thuộc', array('action' => 'phongtructhuocs' , $donvi['Donvi']['id']) ) ?></strong></h3>
<table>

    <tr>
        <td rowspan="5" id="picture"><?php echo $this->Html->image('department.jpg', array('alt' => 'CakePHP', 'width'=>'250px')); ?></td>
        <td>Địa Chỉ</td>
        <td><?php echo $donvi['Donvi']['diachi']; ?></td>
    </tr>
    <tr>
        <td>Số điện thoại</td>
        <td><?php echo $donvi['Donvi']['sodienthoai']; ?></td>

    </tr>
    <tr>
        <td>Fax</td>
        <td><?php echo $donvi['Donvi']['fax']; ?></td>
    </tr>
    <tr>
        <?php if ($donvi['Donvi']['diachi']) : ?>
            <td>Thư điện tử</td>
            <td><?php echo $donvi['Donvi']['thudientu']; ?></td>
        <?php endif; ?>
    </tr>
    <tr>
        <td>Trang web</td>
        <td><a href=<?php echo $donvi['Donvi']['website']; ?> ><?php echo $donvi['Donvi']['website']; ?></a></td>
    </tr>
    
</table>

<div id="chucnang">
    <?php if ($donvi['Donvi']['chucnang']) : ?>
        <h2>Chức Năng</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['chucnang']; ?>
        </div>
    <?php endif; ?>
</div>

<div id="nhiemvu">
    <?php if ($donvi['Donvi']['nhiemvu']) : ?>
        <h2>Nhiệm vụ</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['nhiemvu']; ?>
        </div>
    <?php endif; ?>
</div>

<div id="hoidongkhoahoc">
    <?php if ($donvi['Donvi']['hoidongkhoahoc']) : ?>
        <h2>Hội đồng khoa học</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['hoidongkhoahoc']; ?>
        </div>
    <?php endif; ?>
</div>

<div id="hoatdongthuongxuyen">
    <?php if ($donvi['Donvi']['hoatdongthuongxuyen']) : ?>
        <h2>Hoạt động thường xuyên</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['hoatdongthuongxuyen']; ?>
        </div>
    <?php endif; ?>
</div>

<div id="thanhtuu">
    <?php if ($donvi['Donvi']['thanhtuu']) : ?>
        <h2>thành tựu</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['thanhtuu']; ?>
        </div>
    <?php endif; ?>
</div>

<div id="thongtinkhac">
    <?php if ($donvi['Donvi']['thongtinkhac']) : ?>
        <h2>thông tin khác</h2>
        <div class="child_content">
            <?php echo $donvi['Donvi']['thongtinkhac']; ?>
        </div>
    <?php endif; ?>
</div>