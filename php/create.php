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
    <form action="create_check.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><input id="user_name" type="text" name="user_name" placeholder="ex)jack johnson"></td>
            </tr>
            <tr>
                <th>TEL:</th>
                <td><input id="user_tel" type="text" name="user_tel" placeholder="ex)XXX-XXXX-XXXX"></td>
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
