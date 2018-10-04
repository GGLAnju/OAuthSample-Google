<?php

    require_once "config.php";
    if(isset($_SESSION['access_token']))
    {
        header('Location: index.php');
        exit();

    }
    $loginURL = $gClient->createAuthUrl();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
    <div class="""row justify content center">
        <div class="col-md-6 col-offset-j" align="center">

            <img src="images/login.png" width="200"><br><br>

            <form>

               <input placeholder="Email.." name="email" class="form-control"><br>
                <input type="Password.." placeholder="Password..." name="password" class="form-control"><br>
                <input type="submit" value="Log in" class="btn btn-primary">
                 <img src="images/button.png" width="200" onclick="window.location ='<?php echo $loginURL ?>'">

            </form>
</body>
</html>