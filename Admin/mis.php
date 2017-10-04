<?php
/*
=================================================================================
=============================The Most Important Sites============================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Members';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page

          
        } elseif($mod == 'Add') { //Add  Page 


        } elseif ($mod == 'Insert') { //Insert Page

               
        } elseif ($mod == 'Edit') {// Edit Page  


        } elseif($mod == 'Update') {
        

        } elseif ($mod == 'Delete') {// Delete Page

            
        } elseif ($mod == 'Activate') {
         
        }
        include $tpl . 'footer.php';
        
    } else {

        header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent