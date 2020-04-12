<?php session_start();?>

<?PHP
if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
  
} else {
    require'../require/before-header.php';
}?>

<title>更新画面</title>

<div class="container">
　<link rel="stylesheet" href="/css/styles.css">


  

<h1>
   <div class="container">
      <div class="row o-3column">
        <div class="col-md-4">
  更新画面
</h1>

<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db_name = substr($url["path"], 1);

$db_host = $url["host"];

$user = $url["user"];

$password = $url["pass"];

$dsn = "mysql:dbname=".$db_name.";host=".$db_host;

$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql=$pdo->prepare('select * from sumaho where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
   echo '<form action="update_output.php" method="post">';
   echo '<input type="hidden" name="id" value="', $row['id'], '">';
   echo '<div class="td1">';
   echo '<input type="text" name="name" value="', $row['name'], '">';
   echo '</div> ';
   echo '<p>';
   echo '<div class="td1">';
   echo '<textarea name="price">' ,$row["price"] , ' </textarea>';
   echo '</div> ';
   echo '<p>';
   echo '<div class="td1">';
   echo '<input type="text" name="bench" value="', $row['bench'], '">';
   echo '</div> ';
   echo '<a href="index.php" class="back">Back</a>';
   echo '<div class="td2"><input type="submit" value="更新"></div>';
   echo '</form>';
   echo "\n";


}

?>
</div>

<b></br>

<?PHP
require'../require/footer.php';
?>
