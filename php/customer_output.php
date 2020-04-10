<?php



  $db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
  $db['heroku_e2556b4168bb606'] = ltrim($db[' mysql://bef1c616153bbe:2c68fd8d@us-cdbr-iron-east-01.cleardb.net/heroku_e2556b4168bb606?reconnect=true'], '/');
  $dsn = "mysql:host={$db['us-cdbr-iron-east-01.cleardb.net']};dbname={$db['heroku_e2556b4168bb606']};charset=utf8";
  $user = $db['bef1c616153bbe'];
  $password = $db['2c68fd8d'];
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY =>true,
  );
  $pdo = new PDO($dsn,$user,$password,$options);







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

