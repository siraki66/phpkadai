<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db_name = substr($url["path"], 1);

$db_host = $url["host"];

$user = $url["user"];

$password = $url["pass"];

$dsn = "mysql:dbname=".$db_name.";host=".$db_host;

$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));


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
