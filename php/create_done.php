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
    $sql = 'INSERT INTO user (name,tel,password) VALUES (?,?,?)';
    $stmt = $dbh->prepare($sql);

    //sqlの実行
    $stmt->execute(array(
        $user_name,
        $user_tel,
        $user_pass,
    ));

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
    <title>CREATE</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>ADD NEW USER</h1>
    </header>
    <form action="create_done.php" method="post">
        <div class="form-item">
            <p>Completed the account registration!</p>
        </div>
        <div class="form-item">
            <input type="button" value="USER LIST" onClick="location.href='read.php'">
        </div>
    </form>
</body>
</html>
