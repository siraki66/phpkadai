<?php session_start();?>

<?PHP
if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
} else {
    require'../require/before-header.php';
}?>

<!DOCTYPE html>

<html lang="ja">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ログインページ</title>
 </head>
   
　<link rel="stylesheet" href="/css/login-about.css">


 <div class="form-wrapper">
 <h1>登録画面</h1>

 <form action="customer_output.php" method="post">
 <table>

 <div class="form-item">
 <input type="email" name="email" required="required" placeholder="メールアドレス">
 </td></tr>
 </div>


 <div class="form-item">
 <input type="text" name="name" required="required" placeholder="名前">
 </td></tr>
 </div>

 <div class="form-item">
 <input type="password" name="password" required="required" placeholder="パスワード">
 </td></tr>
 </div>
 
 </table>

<div class="button-panel">
<input type="submit" class="button" title="Sign In" value="登録"></input>
</div>
</form>

<div class="form-footer">
<p><a href="login.php">ログインはこちら</a></p>

</div>
</div>

 

 </form>

 </div>

 <?PHP 
require'../require/footer.php';
?>







