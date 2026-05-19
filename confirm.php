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

 $errors = [];

if (empty($name)){
    $errors[] = "名前を入力してください。";
}

if (empty($companyName)){
    $errors[] = "会社名を入力してください。";
}

if (empty($email)){
    $errors[] = "メールを入力してください。";
}

if (empty($age)){
    $errors[] = "年齢を入力してください。";
}

if (empty($message)){
    $errors[] = "お問合せ内容を入力してください。";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" >
    <title>お問合せフォーム-確認画面</title>
</head>

<body>

<header>
    <h2>お問い合わせフォーム-確認画面</h2>
</header>

<div class="page1">
    <ul class="link1">
        <li><a href="top.html">トップページ</a></li>
        <li><a href="popular_posts.html">人気投稿</a></li>
        <li><a href="engineer_recommended_products.html">エンジニアおすすめ商品</a></li>
        <li><a href="engineer_recommended_articles.html">エンジニアおすすめ記事</a></li>
        <li><a href="post_page.html">投稿ページ</a></li>
    </ul>

    <main>

    <?php if (!empty($errors)): ?>

        <div  style="color:red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php else: ?>

    <form action="send.php" method="post">
        <input type = "hidden" name = "name" value="<?php echo $name; ?>">
        <input type = "hidden" name = "companyName" value="<?php echo $companyName; ?>">
        <input type = "hidden" name = "email" value="<?php echo $email; ?>">
        <input type = "hidden" name = "age" value="<?php echo $age; ?>">
        <input type = "hidden" name = "message" value="<?php echo $message; ?>">


        <table border="3">
            <tr>
                <th>お名前</th>
                <td><?php echo $name; ?></td>
            </tr>
    
            <tr>
                <th>会社</th>
                <td><?php echo $companyName; ?></td>
            </tr>
    
            <tr>
                <th>メールアドレス</th>
                <td><?php echo $email; ?></td>
            </tr>
    
            <tr>
                <th>年齢</th>
                <td><?php echo $age; ?></td>
            </tr>
    
            <tr>
                <th>お問合せ内容</th>
                <td><?php echo nl2br($message); ?></td>
            </tr>
        </table>

        <input type="submit" value="送信">
    <button onclick = "history.back()">戻る</button>

        </form>
        <?php endif; ?>
    </main>
</div>




<footer></footer>
</body>
</html>