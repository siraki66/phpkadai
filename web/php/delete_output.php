<?php
$pdo=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 
	'root', '');
$sql=$pdo->prepare('delete from sumaho where id=?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '削除に成功しました。';
	header('Location: index.php');
    exit();
   
} else {
	echo '削除に失敗しました。';
	header('Location: index.php');
    exit();
}
?>
