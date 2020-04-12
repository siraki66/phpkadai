
<footer class="footer">
<p>© 2020 スマホコスパの館. All Rights Reserved.</p>
<form action="../php/yahoo-api.php" method="post" pattern="\d{5,6}">
<div class="size">入力した郵便番号（ハイフン無し）を元にして市町村を表示することができます。</div>
<input type="text" name="address" placeholder="〒1234567(7桁の郵便番号を入力してください)" pattern="^[0-9]{7}$"><input type="submit" value="送信">
</form>
</footer>

<style>
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 100px;
  background-color: #87CEFA;
}

footer p {
    color: #fff;
    font-size: 14px;
    text-align: center;
}
</style>
