<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php

include 'StrUtils.php';

$myStr = new StrUtils('WTF ???!');
?>
<?= $myStr->bold() ?>
<?= $myStr->italic() ?>
<?= $myStr->underline() ?>
<?= $myStr->capitalize() ?>
<?= $myStr->uglify() ?>

</body>
</html>