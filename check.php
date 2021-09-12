<?php
    // $_大文字のコード スーパーグローバル変数
    // <!-- サニタイジング：セキュリティ対策の一つ -->
    // <!-- クロスサイトスクリプティング攻撃からサイトを守る対策 -->
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);

    if ($name == '') {
        $name_resalt = 'お名前が入力されておりません';
    } else {
        $name_resalt = $name . '様';
    }
    
    if ($email == '') {
        $email_resalt = 'メールアドレスが入力されておりません';
    } else {
        $email_resalt = $email;
    }
    
    if ($content == '') {
        $content_resalt = 'お問い合わせ内容が入力されておりません';
    } else {
        $content_resalt = $content;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>入力内容をご確認ください！！</h1>
    <P>お名前 : <?php echo $name_resalt; ?></P>
    <P>メールアドレス : <?php echo $email_resalt; ?></P>
    <P>お問い合わせ内容 : <?php echo $content_resalt; ?></P>

    <form action="thanks.php" method="post">
       <input type="hidden" name="name" value="<?php echo $name; ?>">
       <input type="hidden" name="email" value="<?php echo $email; ?>">
       <input type="hidden" name="content" value="<?php echo $content; ?>">
       <input type="submit" value="OK">
    </form>
    <form action="index.php" method="post">
       <input type="submit" value="戻る" onclick="histry.back()">
    </form>
</body>
</html>