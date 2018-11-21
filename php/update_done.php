<?php
$user_name = $_POST['user_name'];
$user_tel = $_POST['user_tel'];
$user_pass = $_POST['user_pass'];

//DB接続情報
$DATABASE_SOURCENAME = 'mysql:dbname=crud_foundation;hostname=localhost;';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = 'root';

try{
    $dbh = new PDO($DATABASE_SOURCENAME,$DATABASE_USERNAME,$DATABASE_PASSWORD);
    $sql = 'update user set name =:name, tel =:tel, password =:password where id = value';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name', $user_name, PDO::PARAM_STR);
    $stmt->bindParam(':tel', $user_tel, PDO::PARAM_STR);
    $stmt->bindParam(':password', $user_pass, PDO::PARAM_STR);
    $stmt->bindValue(':value', $_POST['id'], PDO::PARAM_INT);
    $stmt->execute();
    //sqlの実行
    $sql = "select * from user";
    $stmt = $dbh->query($sql);

    $dbh = null;
}catch(PDOException $e){
    $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>UPDATE</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>EDIT USER</h1>
    </header>
    <form action="" method="post">
        <div class="form-item">
            <p>Completed the account edit!</p>
        </div>
        <div class="form-item">
            <input type="button" value="USER LIST" onClick="location.href='read.php'">
        </div>
    </form>
</body>
</html>
