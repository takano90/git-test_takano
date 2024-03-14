<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからの情報を取得
    $profile_pic = $_FILES['profile_picture']['name'];
    $introduction = $_POST['introduction'];
    $recipient = $_POST['recipient'];
    echo $recipient;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // データベースへの接続
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=git-test', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // データを挿入する準備
        $stmt = $pdo->prepare("INSERT INTO comments (profile_picture, introduction, recipient, name, email, message) VALUES (:profile_picture, :introduction, :recipient, :name, :email, :message)");

        // パラメータをバインドしてクエリを実行
        $stmt->bindParam(':profile_picture', $profile_pic);
        $stmt->bindParam(':introduction', $introduction);
        $stmt->bindParam(':recipient', $recipient);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // コメントが挿入された後、再度入力画面にリダイレクトする
        header("Location: touroku.php");
        exit();
    } catch (PDOException $e) {
        echo "エラー：" . $e->getMessage();
    }
} else {
    echo "フォームが送信されていません。";
}
