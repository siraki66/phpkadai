<?php session_start(); ?>

<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
    echo 'ログアウトしました。';
     header('Location: index.php');
     exit();

} else {
    echo 'すでにログアウトしています。';
    
     header('Location: index.php');
     exit();
}
?>
