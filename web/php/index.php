<?php session_start();?>

<?PHP
if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
} elseif (isset($_SESSION['miss'])) {
    require'../require/before-header.php';
    echo $_SESSION['miss'];
    unset($_SESSION['miss']);
} else {
    require'../require/before-header.php';
}?>

<title>index.php</title>
  <?php include 'default.php'; ?>

  <?php include 'api.php'; ?>




<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">スマホ名</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">中古未使用相場</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">ベンチマーク</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">編集</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">削除</th>
    </tr>
</thead>
<tbody>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); foreach ($pdo->query('select * from sumaho') as $row) {
     echo '<tr>';
     echo '<p>';
     echo '<td>', $row['name'],'</td>';
     echo '<td>', $row['price'],'</td>';
     echo '<td>', $row['bench'],'</td>';
     echo "<td class='edit'>" ,'<a href="update_input.php?id=', $row['id'], '">編集</a>','</td>';
     echo '<td >' ,'<a href="delete_output.php?id=', $row['id'], '"  >   削除  </a>','</td>';
 } ?>



</tbody>
</table>
<b></br>
<b></br>
<b></br>
<b></br>
<b></br>
<b></br>
<link rel="stylesheet" href="/css/styles.css">






<?PHP  require'../require/footer.php'; ?>