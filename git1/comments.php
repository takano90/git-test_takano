<?php
// データベースからコメントを取得して表示する
try {
    $pdo = new PDO('mysql:host=localhost;dbname=git-test', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // データを取得
    $stmt = $pdo->query("SELECT * FROM comments");

    // 結果を表示
    while ($row = $stmt->fetch()) {
        echo "<div class='comment'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        echo "<p><strong>メッセージ:</strong> " . $row['message'] . "</p>";
        echo "</div>";
    }
} catch(PDOException $e) {
    echo "エラー：" . $e->getMessage();
}
?>