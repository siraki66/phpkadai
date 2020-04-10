<?php



$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

$server=$url["us-cdbr-iron-east-01.cleardb.net"];
$username=$url["bef1c616153bbe"];
$password=$url["2c68fd8d"];
$db=substr($url["heroku_e2556b4168bb606"], 1);

$pdo=new mysqli($server, $username, $password, $db);





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

