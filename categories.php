<?php
/*
=================================================================================
====================================== Sections page ============================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();

        include 'init.php';
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Error';


        // Start  Page


                // ############# Error Page ####################0
        if($mod == 'Error') { ?>


                <h1>Welcome Error Page</h1>


<?php
                // ############# imgDesign Page ####################1
        } elseif($mod == 'imgDesign') { ?>

          <div class="controls">
            <button type="button" class="control" data-filter="all">All</button>
            <button type="button" class="control" data-filter=".green">Green</button>
            <button type="button" class="control" data-filter=".blue">Blue</button>
            <button type="button" class="control" data-filter=".pink">Pink</button>
            <button type="button" class="control" data-filter="none">None</button>

            <button type="button" class="control" data-sort="default:asc">Asc</button>
            <button type="button" class="control" data-sort="default:desc">Desc</button>
        </div>

          <div class="container up" id="container">
            <div class="mix green"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix green"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix blue"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix pink"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix green"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix blue"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix pink"><img src="http://via.placeholder.com/400x300" alt=""></div>
            <div class="mix blue"><img src="http://via.placeholder.com/400x300" alt=""></div>
          </div>
          

<?php
                // ############# webDesign Page ####################2
        } elseif ($mod == 'webDesign') { ?>



                <h1>welcome webDesign</h1>


<?php
                // #################### programmingWeb Page #########3
        } elseif ($mod == 'programmingWeb') {?>



                <h1>welcome programmingWeb</h1>



<?php
                // ################## programmingDesktop Page #######4
        } elseif($mod == 'programmingDesktop') {?>


                <h1>welcome programmingDesktop</h1>



<?php
                // ###################### Mobile Page ###############5
        } elseif ($mod == 'Mobile') {?>

                <h1>welcome Mobile</h1>


<?php

                //###################### More Page ##################6
        } elseif ($mod == 'More') {?>

                <h1>welcome More</h1>

<?php
                //############## service provider Page ###############7
        } elseif ($mod == 'serviceProvider') {?>

                <h1>welcome service provider</h1>

<?php
                //###################### call us Page ################8
        } elseif ($mod == 'callUs') {?>

                <h1>welcome call us</h1>

<?php
        } else {

        header('Location: index.php'); //Redirect To index Page
        exit();

    }

//End Page

        include $tpl . "footer.php";

    ob_end_flush(); // Headers Sent
