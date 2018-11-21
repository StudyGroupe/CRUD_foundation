<?php
//DB接続情報
$DATABASE_SOURCENAME = 'mysql:dbname=crud_foundation;hostname=localhost;';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = 'root';

try{
  $dbh = new PDO($DATABASE_SOURCENAME, $DATABASE_USERNAME, $DATABASE_PASSWORD);
  $sql = "SELECT * FROM user";

  $stmt = $dbh->query($sql);

  $dbh = null;
}catch (PDOException $e){
  var_dump($e -> getMessage());
  die();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>READ</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>USERS LIST</h1>
    </header>
    <div class="table">
        <table class="list" border="1">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>電話番号</th>
            </tr>

            <?php foreach($stmt as $row): ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["tel"] ?></td>
                <td class="edit"><a href="update.php?id=<?php echo $row["id"] ?>" >編集</a></td>
                <td class="delete"><a href="delete.php?id=<?php echo $row["id"] ?>">削除</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <form action="">
            <div class="form-item">
                <input type="button" value="ADD USER" onClick="location.href='create.php'">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
