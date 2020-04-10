<?php session_start();?>

<?PHP

if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';
} elseif(isset($_SESSION['miss'])) {
    require'../require/before-header.php';
    echo $_SESSION["miss"];
    unset($_SESSION['miss']);
}else {
    require'../require/before-header.php';
}?>

<title>ログインページ</title>


<link rel="stylesheet" href="/css/login-about.css">

<div class="form-wrapper">
  <h1>ログイン画面</h1>


  <form action="login_output.php" method="post">

    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="email" required="required" placeholder="メールアドレス(test@mail)"></input>
    </div>

    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="パスワード(testpass)"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="ログイン"></input>
    </div>
  </form>



  <div class="form-footer">
    <p><a href="customer_input.php">新規登録</a></p>
  </div>
</div>



<?PHP 
require'../require/footer.php';
?>
