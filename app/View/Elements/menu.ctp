
<nav>
    <ul>
        <li>
            <?php echo $this->Html->link("TRANG CHỦ", array('controller' => 'Viens', 'action' => 'index')) ?>
        </li>
        <li>
            <?php echo $this->Html->link("CƠ CẤU TỔ CHỨC", array('controller' => 'khois', 'action' => 'index')) ?>
            <ul>
                <li>
                    <a href="#">FIRST YEAR</a>
                </li>
                <li>
                    <a href="#">SENCOND YEAR</a>
                </li>
                <li>
                    <a href="#">THIRD YEAR</a>
                </li>
                <li>
                    <a href="#">FOUTH YEAR</a>
                </li>
            </ul>
        <li>
            <?php echo $this->Html->link("LÃNH ĐẠO", array('controller' => 'congtacs', 'action' => 'index')) ?>
        </li>
        <li>
            <?php echo $this->Html->link("TÌM KIẾM CÁN BÔ", array('controller' => 'hosocanbos', 'action' => 'index')) ?>
        <li>
            <?php echo $this->Html->link("CÔNG BỐ KHOA HỌC", array('controller' => 'congbos', 'action' => 'index')) ?>
    </ul>
</nav>
