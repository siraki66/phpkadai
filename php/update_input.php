<?php session_start();?>

<?PHP
if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
  
} else {
    require'../require/before-header.php';
}?>


<div class="container">
　<link rel="stylesheet" href="/css/styles.css">


  

<h1>
   <div class="container">
      <div class="row o-3column">
        <div class="col-md-4">
  更新画面
</h1>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 
'root', '');
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


<?PHP
require'../require/footer.php';
?>
