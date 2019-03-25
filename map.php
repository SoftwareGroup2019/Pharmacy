<?php


$id = $_GET['id'];

include "Connection.php";
$stmt = $conn->prepare("SELECT * FROM add_pharma WHERE ID = $id");
$stmt->execute();
foreach ($stmt as $mp) {

    $pname =  $mp['pharma_nm'];
    $pcity = $mp['city'];
    $egm = $mp['EGM'];

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

        .all2
        {
            height: 560px;
            width: 1200px;
            margin: 0 auto;
            background-color: #fafafa;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

    </style>

</head>
<body>

<div class="all2">

    <h1 style="text-align: center"><?php echo $pname . "-" . $pcity; ?></h1>


    <?php

     echo $egm;

    ?>






</div>





</body>
</html>
