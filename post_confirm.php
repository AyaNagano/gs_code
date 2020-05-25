<meta charset="utf-8">
<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];


//文字作成

//$str = date("Y-m-d H:i:s");　原型

//名前とメールの変数をカンマ区切りの文字列にする
$kadai = date($name.",".$mail);


//File書き込み

$file = fopen("data/data.txt","a");	// ファイル読み込み

//ファイルに書き込み
fwrite($file, $kadai."\r\n");
//fwrite($file, $str."\r\n");     //原型（strではなくなる）

//ファイルを閉じる
fclose($file);


if($name==""){
    $name = "未入力です";
    $flg = 1;
}
if($mail==""){
    $mail = "未入力です";
    $flg = 1;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前： <?php echo h($name); ?>
EMAIL： <?php echo $mail; ?>

<?php
if($flg == 0){
?>
 <button>登録</button>
<?php
}
?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>