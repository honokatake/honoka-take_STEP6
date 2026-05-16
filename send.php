<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: contact.php');
    exit;
 }

 $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
 $companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
 $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
 $age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
 $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム-送信完了画面</title>
</head>
<body>
    <h1>お問合せフォーム-送信完了画面</h1>
    <?php 
$to = "test@exampie.com";

$subject = "お問合せが届きました。";

$body = 
"名前： {$name}\n" .
"会社名： {$companyName}\n" .
"メール： {$email}\n" .
"年齢： {$age}\n" .
"お問合せ内容: \n{$message}";

$headers = "From: {$email}";

$result = mail($to, $subject, $body, $headers);

    if ($result) {
        echo "お問合せが送信されました。ありがとうございます！";
    }else{
        echo "お問合せの送信に失敗しました。";
    }
     ?>
     <br>
<button onclick="location.href='contact.php'">お問合せフォームに戻る</button>

</body>
</html>