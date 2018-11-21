<?php
$id = $_GET['id'];
//DB接続情報
$DATABASE_SOURCENAME = 'mysql:dbname=crud_foundation;hostname=localhost;';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = 'root';

try{
    $dbh = new PDO($DATABASE_SOURCENAME,$DATABASE_USERNAME,$DATABASE_PASSWORD);
    $sql = "SELECT name,tel FROM user where id=$id";
    $stmt = $dbh->query($sql);
    foreach($stmt as $row){}

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
    <form action="update_check.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><input id="user_name" type="text" name="user_name" value="<?php echo $row['name'] ?>"></td>
            </tr>
            <tr>
                <th>TEL:</th>
                <td><input id="user_tel" type="text" name="user_tel" value="<?php echo $row['tel'] ?>"></td>
            </tr>
            <tr>
                <th>PASSWORD:</th>
                <td><input id="user_pass" type="password" name="user_pass"></td>
            </tr>
            <tr>
                <th>CONFIRM:</th>
                <td><input id="user_pass2" type="password" name="user_pass2"></td>
            </tr>
        </table>
        <div class="form-item">
            <input type="submit" id="check" value="CHECK">
        </div>

        <div class="form-item">
            <input type="button" value="USER LIST" onClick="location.href='read.php'">
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
