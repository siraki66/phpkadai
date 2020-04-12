
<?php session_start();?>

<?PHP
if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
} else {
    require'../require/before-header.php';
}?>
  <title>ユーザー登録</title>

<div class="container">
　<h1> 追加画面</h1>
　<form method="POST" action="insert_output.php"  >
 　 <p> 
   　 <input type="text" name="name" placeholder="スマホ名"  required="required" >
　  </p>
 　 <p> 
 　   <textarea name="price" placeholder="中古未使用相場(整数で5~6桁で入力ください。)" required="required" pattern="\d{5,6}"></textarea>
 　 </p>
 　 <p> 
 　   <textarea name="bench" placeholder="ベンチマーク(整数で5~6桁で入力ください。)" required="required" pattern="\d{5,6}"></textarea>
　  </p>
　　<a href="index.php" class="back">Back</a>
　    <input type="submit">
　</form>
</div>


<?PHP 
require'../require/footer.php';
?>



