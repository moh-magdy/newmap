<?php

/*
=================================================================================
==================================== Add websites =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Websites';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page
            $query = '';
            if (isset($_GET['page']) && $_GET['page'] == 'Pending') {

                $query = 'AND Approve = 0';
            }
            
            $stmt = $contant->prepare("SELECT 
                                            websites.*, categories.Name 
                                        As  
                                            categoryName 
                                        FROM 
                                            websites
                                        INNER JOIN 
                                            categories 
                                        ON 
                                        categories.ID = websites.cat_ID");
            $stmt->execute();
            $rows = $stmt->fetchAll();
            
        ?> 
            <h2 class="text-center Adm-h1">Manage Website</h2>
            <div class="container">

            
                <table class="table tab-web table-striped table-responsive">
                    <thead class='text-center'>
                        <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Domain</th>
                        <th>Description</th> 
                        <th>Date</th>
                        <th>Category</th>
                        <th>Rating</th>
                        </tr>
                    </thead>
            <?php

            
                foreach ($rows as $row) {
                    echo "<tbody class='text-center tbod'>";
                    echo "<tr>";
                        echo "<th scope='row'>". $row['cat_ID'] ."</th>";
                        echo "<td class='div-img-size img-responsive'>";
                        if(! empty($row['Images'])) {
                            echo "<img src='". $dir . $row['Images'] ."' class='img-fluid'/>";
                        } else {
                            echo "<img src='./layout/img/empty.jpg' class='img-fluid'/>";
                        }
                        echo "</td>";
                        echo "<td>". $row['Name'] ."</td>";
                        echo "<td>". $row['Domain'] ."</td>";
                        echo "<td>". $row['Description'] ."</td>";
                        echo "<td>". $row['Add_Date'] ."</td>";
                        echo "<td>". $row['categoryName'] ."</td>";
                        echo "<td>";?>
                                <i class="fa fa-star <?php if($row['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                <i class="fa fa-star <?php if($row['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                <i class="fa fa-star <?php if($row['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                <i class="fa fa-star <?php if($row['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                <i class="fa fa-star <?php if($row['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
        <?php  
                        echo "<div class='conta'>";
                                echo "<a href='websites.php?mod=Delete&webid=" . $row['ID'] . "' class='confirm float-right btn btn-danger btn-cat'>Delete</a>";
                                echo "<a href='websites.php?mod=Edit&webid=" . $row['ID'] . "' class=' float-right btn btn-success btn-edit btn-cat'>Edit</a>";
                                echo "</div>";

                         echo  "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            ?>
                </table>
                <a href="websites.php?mod=Add" class="badge badge-primary">+ New Domain</a>
            </div>
      <?php
        } elseif($mod == 'Add') { //Add  Page ?>
        
            <h2 class="text-center Adm-h1">Add Website</h2>
            <div class="container">
                <form action="?mod=Insert" method="POST" enctype="multipart/form-data" class="rating-form">
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput">Name</label>
                            <input type="text" name="name" class="form-control " id="formGroupExampleInput" placeholder="Name Of The Website"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput2">Domain</label>
                            <input type="text" name="domain" class="form-control" id="formGroupExampleInput2" placeholder="Domain Of The Website"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput2">Description</label>
                            <input type="text" name="description" class="form-control" maxlength="90" id="formGroupExampleInput2" placeholder="Description Of The Work Of The Site "> 
                             
                        </div>
                    </div>
            <div class="clearfix">

            
                    <div class="form-group mar-bott">
                        <div class="col-sm-6 div-center">
                            <label class="custom-file float-md-left">
                                <input type="file" name="imagweb" id="file2" class="custom-file-input" >
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                    </div>


                    <div class="form-group mar-bott">
                        <div class="col-sm-6 div-center">
                            <select name="category" class="custom-select ma-bott-sm float-md-left">
                                <option value="0" selected>Choose a section</option>
                                <?php 
                                    $stmt = $contant->prepare("SELECT * FROM categories");
                                    $stmt->execute();
                                    $categores = $stmt->fetchAll();
                                    foreach ($categores as $category) {
                                      echo "<option value='" . $category['ID'] . "'>" . $category['Name'] . "</option>";
                                    }
                                ?>
                                
                            </select>
                        </div>
                    </div>
                </div>
                    <fieldset class="form-group">
                    
                    <legend class="form-legend">Rating:</legend>
                    
                        <div class="form-item flo-lef">
                        
                            <input id="rating-5" name="rating" type="radio" value="5" />
                            <label for="rating-5" data-value="5">
                                <span class="rating-star">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                </span>
                                <span class="ir">5</span>
                            </label>
                            <input id="rating-4" name="rating" type="radio" value="4" />
                            <label for="rating-4" data-value="4">
                                <span class="rating-star">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                </span>
                                <span class="ir">4</span>
                            </label>
                            <input id="rating-3" name="rating" type="radio" value="3" />
                            <label for="rating-3" data-value="3">
                                <span class="rating-star">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                </span>
                                <span class="ir">3</span>
                            </label>
                            <input id="rating-2" name="rating" type="radio" value="2" />
                            <label for="rating-2" data-value="2">
                                <span class="rating-star">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                </span>
                                <span class="ir">2</span>
                            </label>
                            <input id="rating-1" name="rating" type="radio" value="1" />
                            <label for="rating-1" data-value="1">
                                <span class="rating-star">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                </span>
                                <span class="ir">1</span>
                            </label>
                            
                            <div class="form-action">
                                <input class="btn-reset" type="reset" value="Reset" />   
                            </div>
                        
                            <div class="form-output">
                                ? / 5
                            </div>
                        
                        </div>
                    
                  </fieldset>

                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <input class="btn btn-primary" type="submit" value=" Add Website">
                        </div>
                    </div>
                </form>
            </div>

<?php
        } elseif ($mod == 'Insert') { //Insert Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Insert Website</h2>";
                echo "<div class='container'>";
    
                $name   = $_POST['name'];
                $doma   = $_POST['domain'];
                $desc   = $_POST['description'];
                $categ  = $_POST['category'];
                $star   = $_POST['rating'];
                $imagName   = $_FILES['imagweb']['name'];
                $imagType   = $_FILES['imagweb']['type'];
                $imagTmp    = $_FILES['imagweb']['tmp_name'];
                $imagSize   = $_FILES['imagweb']['size'];

                //List Of Allowed File Typed To Upload
                $avatarAllowedExtension = array("jpeg", "jpg", "png", "gif");
                
                //Get Avatar Extension
                $imagAllowed = explode(".", $imagName);
                $imagExtension = strtolower(end($imagAllowed));


               $formErrors = array();
               
               if (empty($name)) {
                   $formErrors[] = "Name field is empty";
               }
               if (empty($doma)) {
                   $formErrors[] = "The Domain field is empty";
               }
               if(!isset($star) && empty($star) && $star == 0){
                    $formErrors[] = "Did not choose an rating";
                }
            
               if (empty($imagName)) {
                $formErrors[] = "Did not choose an image";
                }
               if (!empty($imagName) && !in_array($imagExtension,$avatarAllowedExtension)) {
                    $formErrors[] = "This Extension Is Not Allowed";
               }
               
               foreach ($formErrors as $error ) {
                   $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                   $ImageRandName = rand(0, 1000000) . '_' . $imagName;

                  $check = checkItem("Domain", "websites", $doma);
               if ($check == 1) {
                       
                   $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>Sorry This Domain Is Exist</div>";
                   redirectHome($theMsg, 'back');
                                      
               } else {

                   $stmt = $contant->prepare("INSERT INTO 
                                                  websites(Name, Domain, Description, Images, Add_Date, Stars, cat_ID)
                                                  VALUES(:zname, :zdomin, :zdescrip, :zimage, now(),:zrating , :zcatego )");
                   $stmt->execute(array(
                       'zname'     => $name,
                       'zdomin'    => $doma,
                       'zdescrip'  => $desc,
                       'zimage'    => $ImageRandName,
                       'zcatego'   => $categ,
                       'zrating'   => $star

                   ));

                   
                   if ($stmt->rowCount() == 0){
                       $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } else {
                        //If the transfer is correct, raise the image
                        move_uploaded_file($imagTmp, "./data/upload/websites-Image//" . $ImageRandName);

                       $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   }
                   

               }//$check == 1

            }

           } else {

               $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Sorry You Cant Browse This Page Directly</div>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } elseif ($mod == 'Edit') {// Edit Page  

            $webid = isset($_GET['webid']) && is_numeric($_GET['webid']) ? intval($_GET['webid']) : 0;

            $stmt = $contant->prepare("SELECT * FROM websites WHERE ID = ? LIMIT 1");

            $stmt->execute(array($webid));
            $web = $stmt->fetch();
            $count = $stmt->rowCount(); 
            if ($count > 0) { 

                
           ?>
            <h2 class="text-center Adm-h1">Edit Website</h2>
            <div class="container form-edit">
                <form action="?mod=Update" method="POST" enctype="multipart/form-data" class="rating-form">
                <input type="hidden" name="webid" value="<?php echo $webid ?>">
                    <div class="form-group">
                        <div class="col-sm-6 ">
                            <label class="form-control-label" for="formGroupExampleInput">Name</label>
                            <input type="text" name="name" class="form-control " id="formGroupExampleInput" value="<?php echo $web['Name'] ?>"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 abs-img float-right">
                            <div class='smol-img img-fluid'>
                        <?php
                                if(!empty($web['Images'])) {
                                        echo "<img src='". $dir . $web['Images'] ."' class='wid-img img-fluid'/>";
                                } else {
                                        echo "<img src='./layout/img/empty.jpg' class='wid-img img-fluid'/>";
                                }
                        ?>

                            </div>
                                <a class="btn btn-outline-danger btn-img-dele float-right" href="websites.php?mod=DeleteImag&webid=<?php echo $web['ID'] ?>&images=<?php echo $web['Images'] ?>"><i class="fa fa-times" aria-hidden="true"></i> DELETE </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label class="form-control-label" for="formGroupExampleInput2">Domain</label>
                            <input type="text" name="domain" class="form-control" id="formGroupExampleInput2" value="<?php echo $web['Domain'] ?>"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label class="form-control-label" for="formGroupExampleInput2">Description</label>
                            <input type="text" name="description" class="form-control" id="formGroupExampleInput2" value="<?php echo $web['Description'] ?>"> 
                        </div>
                    </div>
            <div class="clearfix">
                    <div class="form-group mar-bott">
                        <div class="col-sm-6 ">
                        <input type="hidden" class="plaschol" name="imaghid" value="<?php echo $web['Images'] ?>">
                            <label class="custom-file float-md-left">
                                <input type="file" name="image" id="file2" class="custom-file-input"  >
                                <span class="custom-file-control"><?php echo $web['Images'] ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mar-bott">
                        <div class="col-sm-6 ">
                            <select name="category" class="custom-select ma-bott-sm float-md-left">
                                <?php 
                                    $stmt = $contant->prepare("SELECT * FROM categories");
                                    $stmt->execute();
                                    $categores = $stmt->fetchAll();
                                    foreach ($categores as $category) {
                                      echo "<option value='" . $category['ID'] . "'"; if ($web['cat_ID'] == $category['ID']){ echo 'selected';} echo">" . $category['Name'] . "</option>";
                                    }
                                ?>
                                
                            </select>
                        </div>
                    </div>
            </div>

            <!-- RATING  -->

                <fieldset class="form-group">
                        
                    <legend class="form-legend">Rating:</legend>
                        
                    <div class="form-item">
                        
                        <input id="rating-5" name="ratin" type="radio" value="5" <?php if ($web['Stars'] == 5) {echo "checked";} ?>/>
                        <label for="rating-5" data-value="5">
                            <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="ir">5</span>
                        </label>
                        <input id="rating-4" name="ratin" type="radio" value="4" <?php if ($web['Stars'] == 4) {echo "checked";} ?>/>
                        <label for="rating-4" data-value="4">
                            <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="ir">4</span>
                        </label>
                        <input id="rating-3" name="ratin" type="radio" value="3"<?php if ($web['Stars'] == 3) {echo "checked";} ?>/>
                        <label for="rating-3" data-value="3">
                            <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="ir">3</span>
                        </label>
                        <input id="rating-2" name="ratin" type="radio" value="2" <?php if ($web['Stars'] == 2) {echo "checked";} ?>/>
                        <label for="rating-2" data-value="2">
                            <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="ir">2</span>
                        </label>
                        <input id="rating-1" name="ratin" type="radio" value="1"<?php if ($web['Stars'] == 1) {echo "checked";} ?> />
                        <label for="rating-1" data-value="1">
                            <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="ir">1</span>
                        </label>
                        
                        <input hidden name="ratin" type="radio" value="0" <?php if ($web['Stars'] == 0) {echo "checked";} ?>/>


                        <div class="form-output">
                            ? / 5
                        </div>
                    </div>
                        
                </fieldset>

                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <input class="btn btn-primary btn-edit" type="submit" value=" Save">
                        </div>
                    </div>
                </form>
            </div>
     <?php
         } else {

                if ($stmt->rowCount() == 0){
                        $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                } else {
                    $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                    redirectHome($theMsg, 'Admin');
                }
            }
     
        } elseif($mod == 'Update') {// Update Page 

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Update Website</h2>";
                echo "<div class='container'>";
                
                    $id         = $_POST['webid'];
                    $name       = $_POST['name'];
                    $doma       = $_POST['domain'];
                    $hidInp     = $_POST['imaghid'];
                    $desc       = $_POST['description'];
                    $categ      = $_POST['category'];
                    $starz       = $_POST['ratin'];
                    $imagNa     = $_FILES['image']['name'];
                    $imagTyp    = $_FILES['image']['type'];
                    $imagTm     = $_FILES['image']['tmp_name'];
                    $imagSiz    = $_FILES['image']['size'];
                    $poth       = $fiIma . $hidInp; // The Image Is Exists In File

                  $formErrors = array();
                    
                    if (empty($name)) {
                        $formErrors[] = "Name field is empty";
                    }
                    if (empty($doma)) {
                        $formErrors[] = "The Domain field is empty";
                    }
                    if ($hidInp == $imagNa & !empty($imagNa)) {
                        $formErrors[] = "The Image You Are Uploading Matches The Database";
                    }
                   if ($categ == 0) {
                        $formErrors[] = "Did not choose a section";
                    }
                    if ($starz  == 0 ) {
                        $formErrors[] = "Did not choose a Star";
                    }
                    foreach ($formErrors as $error ) {
                        $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                        redirectHome($theMsg, 'back');
                    }
                 if(empty($formErrors)) { 


                    if (empty($imagNa)) {
                        $stmt = $contant->prepare("UPDATE 
                                                    websites 
                                                SET 
                                                    Name = ?, 
                                                    Domain = ?,
                                                    Description = ?,
                                                    Images = ?,
                                                    Stars  = ?,
                                                    cat_ID = ? 
                                                WHERE 
                                                    ID = ?
                                                ");
                    $stmt->execute(array($name, $doma, $desc, $hidInp, $starz, $categ, $id));
                   

                    $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    } else {

                    $stmt = $contant->prepare("UPDATE 
                                                    websites 
                                                SET 
                                                    Name = ?, 
                                                    Domain = ?,
                                                    Description = ?,
                                                    Images = ?,
                                                    Stars  = ?,
                                                    cat_ID = ? 
                                                WHERE 
                                                    ID = ?
                                                ");
                    $stmt->execute(array($name, $doma, $desc, $imagNa, $starz, $categ, $id));
                    
                    if ($stmt->rowCount() == 0){

                        $theMsg = "<div class='alert alert-danger aler text-center'role='alert'>Not Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');

                    } else {

                            move_uploaded_file($imagTm, "./data/upload/websites-Image//" . $imagNa);
                        
                        $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    }
                    }// Image empty
                }//formErrors
                
            } else {
                $theMsg = "<div class='alert alert-danger' role='alert'> Sorry You Browse This Page Directly</div>";
                redirectHome($theMsg);
            }
                echo "</div>";

        } elseif ($mod == 'Delete') {// Delete Page
            
            echo '<h2 class="text-center Adm-h1">Delete Website</h2>';
            echo '<div class="container">';

                $webid = isset($_GET['webid']) && is_numeric($_GET['webid']) ? intval($_GET['webid']) : 0;

                $check = checkItem('ID', 'websites', $webid);
        if ($check > 0) {

                $stmt = $contant->prepare("DELETE FROM websites WHERE ID = :website");
                $stmt->bindParam(":website", $webid);
                $stmt->execute();

             if ($stmt->rowCount() == 0){

                    $theMsg = "<div class='alert alert-danger aler text-center'role='alert'>Not Record Deleted</div>" ;
                    redirectHome($theMsg, 'Admin');
            } else {
                    $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Deleted</div>" ;
                    redirectHome($theMsg, 'Admin');
                }

            } else {

                $theMsg = "<div class='alert alert-danger aler text-center' role='alert'> This ID Not EXist</div>";
                redirectHome($theMsg);
            }
            echo '</div>';
         
        } elseif ($mod == 'Approve') { // Activate Page
               
            echo '<h2 class="text-center Adm-h1">Approve Website</h2>';
            echo '<div class="container">';

                $webid = isset($_GET['webid']) && is_numeric($_GET['webid']) ? intval($_GET['webid']) : 0;
                $check = checkItem('ID', 'websites', $webid);

        if ($check > 0) {

                $stmt = $contant->prepare("UPDATE websites SET Approve = 1  WHERE ID = ?");
                $stmt->execute(array($webid));

             if ($stmt->rowCount() == 0){
                    $theMsg = "<div class='alert alert-danger aler text-center'role='alert'>Not Record Updated</div>" ;
                    redirectHome($theMsg, 'Admin');
            } else {
                    $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                    redirectHome($theMsg, 'Admin');
                }
            } else {

                $theMsg = "<div class='alert alert-danger aler text-center' role='alert'> This ID Not EXist</div>";
                redirectHome($theMsg);
            }
            echo '</div>';


        } elseif ($mod == "DeleteImag") {
            echo '<h2 class="text-center Adm-h1">Delete Images</h2>';
            echo '<div class="container">';
                $nameImg = $_GET['images'];
                $Img = '';

                $webid = isset($_GET['webid']) && is_numeric($_GET['webid']) ? intval($_GET['webid']) : 0;

                if ($nameImg == ''){

                $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>There Is No Image Of This Name</div>";
                    redirectHome($theMsg, 'edit');
                } else {

                    $stmt = $contant->prepare("UPDATE `websites` SET `Images` = ? WHERE ID = ?");
                    $stmt->execute(array($Img ,$webid));
                    
                    if(file_exists($fiIma)) { 
                                    unlink($fiIma . $nameImg);
                                    
                                $theMsg = "<div class='alert alert-success aler text-center' role='alert'> Deleted image </div>";
                                    redirectHome($theMsg, 'edit');
                                }else {

                                    $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>The Image Is Not Exist</div>";
                                       redirectHome($theMsg, 'edit'); 
                                }
                    
                }
                                

           echo "</div>";

        }
        include $tpl . 'footer.php';
        
    } else {

        header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent