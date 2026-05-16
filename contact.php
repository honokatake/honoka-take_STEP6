

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せフォーム</title>
</head>
<body>
<header>
<h2>お問合せフォーム</h2>
</header>

<ul>
    <li><a href="top.html">トップページ</a></li>
    <li><a href="popular_posts.html">人気投稿</a></li>
    <li><a href="engineer_recommended_products.html">エンジニアおすすめ商品</a></li>
    <li><a href="engineer_recommended_articles.html">エンジニアおすすめ記事</a></li>
    <li><a href="post_page.html">投稿ページ</a></li>
</ul>

<p id="error" style="color:red;"></p>
<form id="myForm" action="confirm.php" method="post">
    <table border="3">
        <tr>
            <th>お名前</th>
            <td><input type="text" id="name" name="name"></td>
        </tr>

        <tr>
            <th>会社</th>
            <td><input type="text" id="companyName" name="companyName"></td>
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td><input type="text" id="email" name="email"></td>
        </tr>

        <tr>
            <th>年齢</th>
            <td><input type="text" id="age" name="age"></td>
        </tr>

        <tr>
            <th>お問合せ内容</th>
            <td><textarea id="message" name="message"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="送信">
</form>

<footer>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <button type="button" class="colorButton">押してみてね！</button>
</footer>

<script src="style.js" defer></script>
</body>
</html>