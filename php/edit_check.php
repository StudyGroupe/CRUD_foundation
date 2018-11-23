<?php
$user_name = $_POST['user_name'];
$user_tel = $_POST['user_tel'];
$user_pass = $_POST['user_pass'];
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
    <form action="edit_check.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><?php echo $row["name"] ?></td>
            </tr>
            <tr>
                <th>TEL:</th>
                <td><?php echo $row["tel"] ?></td>
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
        <input type="hidden" name="<?php  ?>">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
