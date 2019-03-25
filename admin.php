<?php


session_start();

if (isset($_SESSION['nm']) && isset($_SESSION['pp'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Location</title>
        <link href="css/sty.css" rel="stylesheet">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <!-- Load icon library -->
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>

            @import url(https://fonts.googleapis.com/css?family=Open+Sans);

            body {
                background: #eee;
                text-align: center;
            }

            .card {
                background-color: #fff;
                display: inline-block;
                margin: 10px;
                padding: 25px;
                width: 300px;
            }

            .card-1 {
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            }

            .card-1:hover {
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            }


        </style>
    </head>
    <body>

    <h1 style="text-align: center; font-family: 'Open Sans', sans-serif;">Admin Panel</h1>

    <div class="card card-1">

        <a href="add_pharma.php">Add Pharmacy</a>

    </div>
    <div class="card card-1">
        <a href="show_pharmacy.php?do=show">Show Pharmacy</a>
    </div>
    <div class="card card-1">
        <a href="log_out.php">Logout</a>
    </div>


    </body>
    </html>

    <?php



}

else
    {
        header('Location: index.php');
        exit();
    }