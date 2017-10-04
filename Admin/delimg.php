<?php

/*
=================================================================================
====================================== Images ===================================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Images';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page

            echo '<h2 class="text-center Adm-h1">Images</h2>';
            echo '<div class="container">';
            
                $exts = array("jpeg", "jpg", "png", "gif");

                foreach(scandir($fiIma) as $fileImg) {

                    if( in_array(pathinfo($fileImg, PATHINFO_EXTENSION), $exts) ) {
                                        
                        echo "<div class='con-img col-md-6 float-md-left'>";
                        echo "<p class='name-img text-center'>". $fileImg ."</p>";
                            echo "<img src='" . $dir . $fileImg ."' class='height-img img-fluid'/>";

                            echo "<a href='delimg.php?mod=DeleteImg&nameImg=". $fileImg ."'  class='confirm float-right btn btn-danger btn-img'>Delete</a>";
                        echo "</div>";
                        }
                    }

            echo '</div>';

        } elseif ($mod == 'DeleteImg') {// Delete Image Page

            echo '<h2 class="text-center Adm-h1">Delete Image</h2>';
            echo '<div class="container">';
            $delImg = $_GET['nameImg'];

             if(file_exists($fiIma)) { 
                    unlink($fiIma . $delImg);
                                    
                    $theMsg = "<div class='alert alert-success aler text-center' role='alert'> Deleted image </div>";
                        redirectHome($theMsg, 'edit');
            }else {

                 $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>The Image Is Not Exist</div>";
                    redirectHome($theMsg, 'edit'); 
            }
            
         echo '</div>';
        }
        include $tpl . 'footer.php';
        
    } else {

       // header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent




    