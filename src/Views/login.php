<?php

/**
 * @var string $stylePath
 * @var string $scriptPath
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylePath; ?>">
    <link rel="stylesheet" href="./styles/reset.css">
    <title>Document</title>
</head>

<body>

    <div class="login-box">
        <h1>ログイン</h1>
        <form action="login" method="post" class="login-form">
            <p>username</p>
            <input type="text" name="username" id="username">
            <p>password</p>
            <input type="text" name="password" id="password">
            <button type="submit">sign in</button>
        </form>
    </div>
</body>
<script src="<?php echo $scriptPath; ?>"></script>

</html>