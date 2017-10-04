<?php
/*
=================================================================================
==================================== Edit Admin =================================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Edit Admin';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        //adoff == admin officer // if isiset  Get request true

        $adoff = isset($_GET['adoff']) ? $_GET['adoff'] : 'Manage';

        // Start Manage Page

        if($adoff == 'Manage') { //Manage  Page ?>
            <div class="container">
                <div class="card amion-card">
                    <img class="card-img-top" src="layout/img/Kamal.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title adm-h4">Administrator</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="Admin.php?adoff=Edit&AdminID=<?php echo $_SESSION['name']?>" class="card-link btn btn-primary card-btn">Edit</a>
                    </div>
                </div>
            
            

      <?php  } elseif ($adoff == 'Edit') {// Edit Page 

            $AdminID = isset($_GET['AdminID']) && is_numeric($_GET['AdminID']) ? intval($_GET['AdminID']) :  0 ;

            $stmt = $contant->prepare("SELECT * FROM user WHERE ID = ? LIMIT 1");
            $stmt->execute(array($AdminID));
            $row = $stmt->fetch();
            $count = $stmt->rowCount();
    
        if ($count > 0) {
    ?>
            <h2 class="text-center Adm-h1">Edit Admin</h2>
            <div class="container">
               <form action="?adoff=Update" method="post">
                    <div class="form-group row">
    
                        <div class="col-sm-8 div-center">
                            <label for="exampleInputEmail1">Email address</label>
                            <input 
                                type="text" 
                                name="AdminName" 
                                value="<?php echo $row['Admin']; ?>" 
                                class="form-control" 
                                id="exampleInputEmail1" 
                                aria-describedby="emailHelp"
                            >  
                        </div>
                    </div>

                    <div class="form-group row  from-admin">
                        <div class="col-sm-8 div-center">
                           <label for="exampleInputPassword1">Password</label>
                            <input 
                                type="text" 
                                name="adminNewpssword"  
                                class="form-control" 
                                id="exampleInputPassword1"
                            > 
                            <input 
                                type="hidden" 
                                name="adminOldpssword" 
                                value="<?php echo $row['Password']; ?>" 
                                id="exampleInputPassword1"
                            >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-center">Save</button>
                </form>
            </div>
            

<?php   
        } else{// $count > 0

            $theMsg = "<div class='alert alert-danger' role='alert'> This ID Not EXist</div>";
                redirectHome($theMsg);
            }

        } elseif($adoff == 'Update') {// Update Page
        
           echo "<h2 class='text-center Adm-h1'>Update Admin</h2>";
           echo  "<div class='container'>";
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               
                $nameAdm = $_POST['AdminName'];
                $passAdm = empty($_POST['adminNewpssword']) ? $_POST['adminOldpssword'] : sha1($_POST['adminNewpssword']);

                $formErrors = array();

                if (empty($nameAdm)) { $formErrors[] =  "<div class='alert alert-danger aler text-center'role='alert'>Input Name Is Empty</div>" ; } 

                foreach($formErrors as $error) {echo $error;}

                if (empty($formErrors)) {

                    $stmt = $contant->prepare("UPDATE user SET Admin = ? , Password = ? WHERE ID = 0");
                    $stmt->execute(array($nameAdm, $passAdm));


                    if ($stmt->rowCount() == 0){
                        $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    } else {
                        $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    }
                      

                }

           }else{

            $theMsg = "<div class='alert alert-danger aler text-center' role='alert'> This ID Not EXist</div>";
            redirectHome($theMsg);
           }
            echo  "</div>";//container Is End
        } 
        include $tpl . 'footer.php';
        
    } else {

        header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent