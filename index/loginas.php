
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>LOGIN</title>

</head>
<body class="my-3">
    <div class="mask">
        <div class="signupbox">
            <h1> LOGIN AS: </h1>
                <a href="../authentication/admin_login.php" ><input type="submit" value="Administrator"/></a>
                <a href="../authentication/fmo_login.php"><input type="submit" value="F.M.O"/></a>
                <a href="../php_lib/d_login.php"><input type="submit" value="Driver"/></a>
                <input type="button" class="backbutton" value="Go Back!" onclick="history.back()">
        </div>
    </div>
</body>
</html>