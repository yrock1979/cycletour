<?php

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $content = $_POST ['content'];

    // １．データベースに接続する
    $dsn = 'mysql:dbname=cycletour;host=localhost'; 
               // dbname=のあとは保存するデータベースの名前で変わる
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // ２．SQL文を実行する
    $sql = 'INSERT INTO `customer_list`(`name`, `email`, `content`) VALUES ("'. $name.'", "'.$email.'", "'.$content.'")';
    $stmt = $dbh->prepare($sql);
           //データベースの準備（SQL文をセット）
           // -> アロー演算子『の』という意味
    $stmt->execute();

    // CRUD処理（Create/Read/Update/Delete）
    // 保存 Create処理
    //      SQL文 → insert文/delete文/update文/select文

    // ３．データベースを切断する
    $dbh = null;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>送信完了</title>
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <div>
    <h3>お問い合わせ詳細内容</h3>
    <p>ニックネーム：<?php echo $name; ?></p>
    <p>メールアドレス：<?php echo $email; ?></p>
    <p>お問い合わせ内容：<?php echo $content; ?></p>
  </div>
</body>
</html>