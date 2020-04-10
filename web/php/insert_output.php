<?php
$pdo=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 
	'root', '');
$sql=$pdo->prepare('insert into sumaho values(null, ?, ?, ?)');
if ($sql->execute([$_REQUEST['name'], $_REQUEST['price'], $_REQUEST['bench']])) {
	echo '追加に成功しました。';
	header('Location: index.php');
    exit();
} else {
	echo '追加に失敗しました。';
	header('Location: index.php');
    exit();
}
?>
