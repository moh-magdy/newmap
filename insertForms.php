<?php

/*
=================================================================================
==================================== Add websites =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();
        // I dont need navbar
        $noNavar = '' ;

        include 'init.php';
       
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Error';

        // Start Manage Page ?>

            <script src="<?php echo $js ?>sweetalert2.min.js"></script>
<?php

    if($mod == 'Error') { //Error  Page?>

                <h1>Error Page</h1>
           
       <?php 
       } elseif ($mod == 'insertWeb') { //Insert Page
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<div class='container'>";
    
                $name   = $_POST['name'];
                $cat_id = $_POST['cat_id'];
                $doma   = $_POST['domain'];
                $desc   = $_POST['description'];

                $nameFilter = filter_var($name,FILTER_SANITIZE_STRING);
                $domaFilter = filter_var($doma,FILTER_SANITIZE_URL);
                $descFilter = filter_var($desc,FILTER_SANITIZE_STRING);

               $formErrors = array();
               
               if (empty($name)) {
                   $formErrors[] = "<script>swal('Oops...', 'Name field is empty', 'error');</script>";
              
               }
               if (empty($doma)) {
                   $formErrors[] = "<script>swal('Oops...', 'The Domain field is empty', 'error');</script>";
               }
               
 
               foreach ($formErrors as $error ) {
                   $theMsg =  $error;
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {

                  $check = checkItem("Domain", "websites", $domaFilter);
               if ($check == 1) {
                       
                   $theMsg = "<script>swal('Oops...', 'Sorry This Domain Is Exist', 'error');</script>";
                   redirectHome($theMsg, 'back');
                                      
               } else {

                   $stmt = $contant->prepare("INSERT INTO 
                                                  websites(Name, Domain, Description, Add_Date, cat_ID)
                                                  VALUES(:zname, :zdomin, :zdescrip, now(), :zcatego )");
                   $stmt->execute(array(
                       'zname'     => $nameFilter,
                       'zdomin'    => $domaFilter,
                       'zdescrip'  => $descFilter,
                       ':zcatego'  => $cat_id
                   ));

                   
                   if ($stmt->rowCount() == 0){
                       $theMsg = "<script>swal('Warning...', 'Not Record Updated', 'error');</script>";
                       redirectHome($theMsg, 'Admin');
                   } else {

                       $theMsg = "<script>swal('Good job', 'Record Updated', 'success');</script>";
                       redirectHome($theMsg, 'Admin');
                   }
                   

               }//$check == 1

            }

           } else {

               $theMsg = "<script>swal('Warning...', 'Sorry You Cant Browse This Page Directly', 'error');</script>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } elseif ($mod == 'insertComment') { //Insert Comment Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<div class='container'>";
    
                $name   = $_POST['name'];
                $comment   = $_POST['comment'];

                $nameCommFilter = filter_var($name,FILTER_SANITIZE_STRING);
                $commentFilter = filter_var($comment,FILTER_SANITIZE_STRING);

               $formErrors = array();
               
               if (empty($name)) {
                   $formErrors[] = "<script>swal('Oops...', 'Name field is empty', 'error');</script>";
               }
               if (empty($comment)) {
                   $formErrors[] = "<script>swal('Oops...', 'The comment field is empty', 'error');</script>";
               }

               foreach ($formErrors as $error ) {
                   $theMsg = $error ;
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                                      
                   $stmt = $contant->prepare("INSERT INTO 
                                                  comments(Name, Comment, Comment_date)
                                                  VALUES(:zname, :zcomment, now())");
                   $stmt->execute(array(
                       'zname'     => $nameCommFilter,
                       'zcomment'  => $commentFilter

                   ));

                   
                   if ($stmt->rowCount() == 0){
                       $theMsg = "<script>swal('Warning...', 'Not Record Updated', 'error');</script>";
                       redirectHome($theMsg, 'Admin');
                   } else {
                        
                       $theMsg = "<script>swal('Good job', 'Record Updated', 'success');</script>";
                       redirectHome($theMsg, 'Admin');
                   } 

            }

           } else {

               $theMsg = "<script>swal('Warning...', 'Sorry You Cant Browse This Page Directly', 'error');</script>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        
            
    } elseif ($mod == 'insertEmail') { // Insert Email Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<div class='container'>";
    
                $email   = $_POST['email'];
                $emailFilter = filter_var($email,FILTER_SANITIZE_EMAIL);

               $formErrors = array();
               
               if (empty($email)) {
                   $formErrors[] = "<script>swal('Oops...', 'Email field is empty', 'error');</script>";
               }

               foreach ($formErrors as $error ) {
                   $theMsg =  $error;
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                                  
                   $stmt = $contant->prepare("INSERT INTO email(Email, Email_date)
                                                     VALUES(:zemail, now())");
                   $stmt->execute(array('zemail' => $emailFilter));

                   if ($stmt->rowCount() == 0){
                       $theMsg = "<script>swal('Warning...', 'Not Record Updated', 'error');</script>";
                       redirectHome($theMsg, 'Admin');
                   } else {
                        
                       $theMsg = "<script>swal('Good job', 'Record Updated', 'success');</script>";
                       redirectHome($theMsg, 'Admin');
                   }

            }

           } else {

               $theMsg = "<script>swal('Warning...', 'Sorry You Cant Browse This Page Directly', 'error');</script>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
               
    
    
    
    
    
    } else {
        header('Location: index.php'); //Redirect To index Page
        exit();
    }