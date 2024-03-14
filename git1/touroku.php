<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git・PHP・SQL　テスト課題</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Git・PHP・SQL　テスト課題</h1>
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <label for="profile_picture">プロフィール写真:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required><br><br>

            <label for="introduction">自己紹介・プロフィール:</label>
            <textarea id="introduction" name="introduction" rows="4" cols="50" required></textarea><br><br>

            <label for="recipient">宛先 </label>
            <select id="recipient" name="recipient" required>
                <option value="" selected disabled>選択してください</option>
                <option value="高野 龍馬">高野 龍馬</option>
                <option value="野間 真仁">野間 真仁</option>
            </select><br><br>

            <label for="name">名前:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">メッセージ:</label>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="送信">
        </form>

        <h2>お問い合わせコメント</h2>
        <div id="comments">
            <?php include 'comments.php' ?>
        </div>
        <!-- ここから追加 -->
        <div class="profile">
            <h2>編集した人</h2>
            <dl>
                <dt>名前</dt>
                <dd>野間　真仁</dd>
            </dl>
            <dl>
                <dt>出身</dt>
                <dd>兵庫県　神戸市</dd>
            </dl>
            <dl>
                <dt>誕生日</dt>
                <dd>11月23日</dd>
            </dl>
            <dl>
                <dt>趣味</dt>
                <dd>ネットサーフィン<br>ゲーム、読書</dd>
            </dl>
        </div>
    </div>
</body>

</html>