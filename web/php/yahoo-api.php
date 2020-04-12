<meta http-equiv="refresh" content=" 2; url=index.php">
<?php
$post=$_POST["address"];
if(preg_match("/^\d{7}$/",$post)){
    $url = "http://zipcloud.ibsnet.co.jp/api/search?zipcode=$post";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

$prefecture = $arr['results'][0]['address1'];
$city = $arr['results'][0]['address2'];
$city2 = $arr['results'][0]['address3'];
$prefectureKana = $arr['results'][0]['kana1'];
$cityKana = $arr['results'][0]['kana2'];
$city2Kana = $arr['results'][0]['kana3'];
$zipcode = $arr['results'][0]['zipcode'];

echo "入力した郵便番号は".$zipcode."です";
echo '<br>';
echo "市町村は".$prefecture.$city.$city2."です";
}else{
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
   
}
 ?>

 