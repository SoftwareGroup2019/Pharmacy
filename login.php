<?php

session_start();

if(isset($_SESSION['nm']) && isset($_SESSION['pp']) )
{
    header('Location: admin.php');
}

include 'Connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $name = $_POST['nn'];
    $pass = $_POST['pp'];

    $stmt = $conn->prepare("SELECT nm,pp FROM User WHERE nm = ? AND pp = ?");
    $stmt->execute(array($name,$pass));
    $count = $stmt->rowCount();

    if ($count > 0)
    {
        $_SESSION['nm'] = $name;
        $_SESSION['pp'] = $pass;
        header("Location:admin.php");
        exit();
    }





}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Location</title>
    <link href="css/sty.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>


        /* 'Open Sans' font from Google Fonts */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        body {

            font-family: 'Open Sans', sans-serif;
        }

        .login {
            width: 400px;
            margin: 16px auto;
            font-size: 16px;
        }

        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
            margin-top: 0;
            margin-bottom: 0;
        }

        /* The triangle form is achieved by a CSS hack */
        .login-triangle {
            width: 0;
            margin-right: auto;
            margin-left: auto;
            border: 12px solid transparent;
            border-bottom-color: #28d;
        }

        .login-header {
            background: #28d;
            padding: 20px;
            font-size: 1.4em;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
        }

        .login-container {
            background: #ebebeb;
            padding: 12px;
        }

        /* Every row inside .login-container is defined with p tags */
        .login p {
            padding: 12px;
        }

        .login input {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            padding: 16px;
            outline: 0;
            font-family: inherit;
            font-size: 0.95em;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: #fff;
            border-color: #bbb;
            color: #555;
        }

        /* Text fields' focus effect */
        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            border-color: #888;
        }

        .login input[type="submit"] {
            background: #28d;
            border-color: transparent;
            color: #fff;
            cursor: pointer;
        }

        .login input[type="submit"]:hover {
            background: #17c;
        }

        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
            border-color: #05a;
        }



    </style>

</head>
<body>

<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Admin</h2>

    <form class="login-container" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <p><input type="text" placeholder="Name" name="nn"></p>
        <p><input type="password" placeholder="Password" name="pp"></p>
        <p><input type="submit" value="Log in"></p>
    </form>
</div>




</body>
</html>

