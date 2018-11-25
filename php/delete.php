<?php
$id = $_GET['id'];
//DB接続情報
$DATABASE_SOURCENAME = 'mysql:dbname=crud_foundation;hostname=localhost;';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = 'root';

try{
    $dbh = new PDO($DATABASE_SOURCENAME,$DATABASE_USERNAME,$DATABASE_PASSWORD);
    $sql = "select name,tel from user where id=$id";
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
    <title>DELETE</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>DELETE USER</h1>
    </header>
    <form action="delete_done.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><?php echo $row['name'] ?></td>
            </tr>
            <tr>
                <th>TEL:</th>
                <td><?php echo $row['tel'] ?></td>
            </tr>
        </table>
        <div class="form-item">
            <input type="submit" id="check" value="DELETE">
        </div>

        <div class="form-item">
            <input type="button" value="USER LIST" onClick="location.href='read.php'">
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
