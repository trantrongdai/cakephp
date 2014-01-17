<html>
<head>
<title><?php echo $this->fetch('title') ?></title>
</head>
<body>
	<div class ="breadcrum" style="background-color: #bbbbbb">
		<?php echo $this -> fetch('breadcrum'); ?>
	</div>
	<div class ="content" style="padding: 30px">
		<?php echo $this -> fetch('content'); ?>
	</div>
	<div class ="footer">
		<?php echo $this -> fetch('footer'); ?>
	</div>
</body>
</html>