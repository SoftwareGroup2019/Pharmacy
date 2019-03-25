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

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }

    </style>
</head>
<body>


<div class="all">

    <div class="sb">

        <div class="s">

            <!-- The form -->
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Search for Pharmacy..." name="search" id="lo">

            </form>

        </div>

        <div class="s2">
           <a href="login.php"> <button class="button"><span>Login </span></button></a>
        </div>

    </div>

    <ul id="myUL">
        <li><a href="static_pages/greenway_pharmacy.html">Green way Pharmacy-Erbil</a></li>
        <li><a href="static_pages/Lya_Pharmacy.html">Lya Pharmacy-Slemani</a></li>
        <li><a href="static_pages/Maryam_pharmacy.html">Maryam Pharmacy-Duhok</a></li>

        <?php

        include "Connection.php";

        $stmt = $conn->prepare("SELECT * FROM add_pharma");
       $stmt->execute();
        foreach ($stmt as $aa){
            $pname =  $aa['pharma_nm'];
            $pcity = $aa['city'];

            ?>

            <li><a href="map.php?id=<?php echo $aa['ID']; ?>"><?php echo $pname. "-" . $pcity;?></a></li>



        <?php

        }


        ?>




    </ul>

    <h2 id="em" style="padding: 10px; display: none;">Not Found!</h2>
    <p id="pp" style="padding: 10px; display: none;">Add the Pharmacy in your Admin Panel</p>


</div>



<script type="text/javascript">

    function contains(text_one,text_two) {

        if (text_one.indexOf(text_two) != -1)
        {
            return true;
        }
        
    }

    $('#lo').keyup(function () {

        var serch = $('#lo').val().toLowerCase();
        $('ul li').each(function () {

            if (!contains($(this).text().toLowerCase() , serch))
            {
                $(this).hide();


            }

            else
                {
                    $(this).show();

                }

        });


    });

</script>

<script src="js/script.js" rel="script"></script>
</body>
</html>