<?php

    // １．データベースに接続する
    $dsn = 'mysql:dbname=cycletour;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // ２．SQL文を実行する
    $sql = 'SELECT * FROM `customer_list`';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    
    // while文またはforeach文を使って取り出す
    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        // データベースからデータを取得するための組み込み関数
        // fetch():1行ずつ
        // fetchAll()：データベースすべて
        if ($rec == False) {
            break;
        }
        echo $rec['id'] . '<br>';
        echo $rec['name'] . '<br>';
        echo $rec['email'] . '<br>';
        echo $rec['content'] . '<br>';
        echo '<hr>';
    }
    
    // ３．データベースを切断する
    $dbh = null;
?>