<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>ADD NEW USER</h1>
    </header>
    <form action="create_check.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>PASSWORD:</th>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
        <div class="form-item">
            <input type="submit" value="CHECK">
        </div>
    </form>
</body>
</html>
