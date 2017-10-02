<?php
/*
=================================================================================
====================================== Sections page ============================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();
        
        include 'init.php';
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';


        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page
            
          echo 'Welcome Manage';
                // ############# imgDesign Page ####################1
        } elseif($mod == 'imgDesign') { ?>



                    <h1>welcome imgDesign</h1>

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


<?php/*
                    
                //###################### More Page ##################6
        } elseif ($mod == 'More') {?>

                <h1>welcome imgDesign</h1>

<?php*/
        } else {
        header('Location: index.php'); //Redirect To index Page
        exit();
    }

        include $tpl . "footer.php";
        
    ob_end_flush(); // Headers Sent