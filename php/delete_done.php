<?php
$id = $_POST['id'];
//DB接続情報
$DATABASE_SOURCENAME = 'mysql:dbname=crud_foundation;hostname=localhost;';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = 'root';

try{
    $dbh = new PDO($DATABASE_SOURCENAME,$DATABASE_USERNAME,$DATABASE_PASSWORD);
    $sql = "delete from user where id =$id";
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
    <title>DELETE</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>DELETE USER</h1>
    </header>
    <form>
        <div class="form-item">
            <p>Complete dlete user</p>
        </div>

        <div class="form-item">
            <input type="button" value="USER LIST" onClick="location.href='read.php'">
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
