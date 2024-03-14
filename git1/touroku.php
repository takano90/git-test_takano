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
    </div>
</body>
</html>