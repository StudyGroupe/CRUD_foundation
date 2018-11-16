<?php
$user_name = $_POST['user_name'];
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
    <form action="create_done.php" method="post">
        <table>
            <tr>
                <th>NAME:</th>
                <td><?php echo $user_name ?></td>
            </tr>
            <tr>
                <th>PASSWORD:</th>
                <td><p>※Can't display for security.</p></td>
            </tr>
        </table>
        <div class="form-item">
            <input type="submit" id="check" value="SIGN UP">
        </div>
        <input type="hidden" value="<?php echo $user_name ?>" name="user_name">
        <input type="hidden" value="<?php echo $user_pass ?>" name="user_pass">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validate.js"></script>
</body>
</html>
