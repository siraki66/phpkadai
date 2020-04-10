<?php
$pdo=new PDO('mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=test;charset=utf8', 
	'root', '');
$sql=$pdo->prepare('insert into customer values(null, ?, ?, ?)');
if ($sql->execute([$_REQUEST['name'], $_REQUEST['email'], $_REQUEST['password']])) {
	echo '追加に成功しました。';
	header('Location: index.php');
    exit();
} else {
	echo '追加に失敗しました。';
	header('Location: index.php');
    exit();
}
?>

