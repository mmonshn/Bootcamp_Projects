<?php include('sever.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>check student</h2>
    </div>
    <form action="login_db.php" method="post">
        <div class="input-group">
            <label for="username">username</label>
            <input type="varchar" name="username">
        </div>
        <div class="input-group">
            <label for="password">password</label>
            <input type="varchar" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class ="btn">login</button>
        </div>
        <p>forgot password? <a href = "register.php">sign out</a></a> </p>
    </form>
</body>

</html>