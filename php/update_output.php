<?php
$pdo=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 
	'root', '');
$sql=$pdo->prepare('update sumaho set name=?, price=?, bench=? where id=?');
if (empty($_REQUEST['name'])) {
	echo '商品名を入力してください。';
} else
if (!preg_match('/[0-9]+/', $_REQUEST['price'])) {
	
	echo '整数で入力してください。';
	header('Location: index.php');
    exit();
} else
if (empty($_REQUEST['price'])) {
	echo 'ベンチマークを入力してください。。';
} else
if ($sql->execute(
	[htmlspecialchars($_REQUEST['name']), 
	$_REQUEST['price'], $_REQUEST['bench'], $_REQUEST['id']]
)) {
	echo '更新に成功しました。';
	header('Location: index.php');
    exit();
} else {
	echo '更新に失敗しました。';
	header('Location: index.php');
    exit();
}
?>
