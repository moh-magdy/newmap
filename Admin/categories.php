<?php
/*
=================================================================================
====================================  categories Page =================================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Categorie';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page
        $sort = 'ASC';
        $sort_array = array('ASC', 'DESC');

        if(isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)) {

            $sort = $_GET['sort'];
        }

        if($mod == 'Manage') { //Manage  Page
            $stmtCat = $contant->prepare("SELECT * FROM categories ORDER BY Ordering $sort ");
            $stmtCat->execute();
            $cats = $stmtCat->fetchAll(); 
            
            ?>

            <div class="container">
            
                <div class="panel-manag" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" >
                            <h3 class="mb-0 text-center h1">Manage Category</h3>
                             <a href="categories.php?mod=Add" class="badge badge-primary">+ New Category</a>
                            <div class="ordering float-right">
                                <a class="<?php if($sort == 'ASC') {echo 'active'; } ?>" href="?sort=ASC">Asc</a> |
                                <a class="<?php if($sort == 'DESC') {echo 'active'; } ?>" href="?sort=DESC">Desc</a>
                            </div>
                    </div>
                    <div class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                        <?php 
                              foreach ($cats as $cat) {
                                echo "<div class='conta'>";
                                echo "<a href='categories.php?mod=Delete&catid=" . $cat['ID'] . "' class='confirm float-right btn btn-danger btn-cat'>Delete</a>";
                                echo "<a href='categories.php?mod=Edit&catid=" . $cat['ID'] . "' class=' float-right btn btn-success btn-edit btn-cat'>Edit</a>";
                               
                                    echo "<h5><a href='incategory.php?catID=". $cat['ID'] .'&pagename='.str_replace(" ", "-", $cat['Name'])."'>" . $cat['Name'] . "</a></h5>";
                                    echo "<span>" . 'Ordering: ' . $cat['Ordering'] . "</span>";
                                    echo "<span class='cat-id-marg'>" . 'cat_ID: ' . $cat['ID'] . "</span>";
                                echo "</div>";
                                echo "<hr>";
                            }
                            
                        ?>
                        </div>
                    </div>
                </div>
               
            </div>
    <?php    
        } elseif($mod == 'Add') { //Add  Page ?>
            <h2 class="text-center Adm-h1">Add Category</h2>
            <div class="container">
                <form action="?mod=Insert" method="POST">
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput">Name</label>
                            <input type="text" name="name" class="form-control " id="formGroupExampleInput" placeholder="Name Of The Category"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput2">	Ordering</label>
                            <input type="number" name="ordering" class="form-control" id="formGroupExampleInput2" placeholder="Organize sections by number"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <input class="btn btn-primary" type="submit" value=" Add Category">
                        </div>
                    </div>
                </form>
            </div>

<?php
        } elseif ($mod == 'Insert') { //Insert Page

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
                echo "<h2 class='text-center Adm-h1'>Insert Category</h2>";
                echo "<div class='container'>";

                    $name   = $_POST['name'];
                    $order  = $_POST['ordering'];

                if (empty($name)) {
                    $theMsg = "<div class='alert alert-danger aler text-center'role='alert'>Name Is Empty </div>" ;
                    redirectHome($theMsg, 'Admin');
                } else {

                    $check = checkItem("Name", "categories", $name);
                if ($check == 1) {

                    $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>Sorry This Category Is Exist</div>";
                    redirectHome($theMsg, 'back');
               
                } else {

                    $stmt = $contant->prepare("INSERT INTO categories(Name, Ordering)
                                                    VALUES(:name, :orderin)");
                    $stmt->execute(array(
                        'name'      => $name,
                        'orderin'   => $order
                    ));

                    if ($stmt->rowCount() == 0){
                        $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    } else {
                        $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                        redirectHome($theMsg, 'Admin');
                    }
                }
            }   echo "</div>";
        }


            
        } elseif ($mod == 'Edit') {// Edit Page  
            $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0;

            $stmt = $contant->prepare("SELECT * FROM categories WHERE ID = ?");
            $stmt->execute(array($catid));
            $col = $stmt->fetch();
            $count = $stmt->rowCount();

            if ($count > 0) {
    ?>
            <h2 class="text-center Adm-h1">Edit Category</h2>
            <div class="container">
                <form action="?mod=Update" method="POST">
                <input type="hidden" name="catid" value="<?php echo $catid ?>">
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput">Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control " 
                                id="formGroupExampleInput" 
                                value="<?php echo $col['Name']?>"
                            > 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput2">	Ordering</label>
                            <input 
                                type="number" 
                                name="ordering" 
                                class="form-control" 
                                id="formGroupExampleInput2" 
                                value="<?php echo $col['Ordering']?>"
                            > 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <input class="btn btn-primary" type="submit" value="Save">
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

           echo '<h2 class="text-center Adm-h1">Update Category</h2>';
           echo '<div class="container">';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['catid'];
            $name = $_POST['name'];
            $orde = $_POST['ordering'];
            
            $stmt = $contant->prepare("UPDATE categories SET Name = ?, 	Ordering = ? WHERE ID = ?");
            $stmt->execute(array($name, $orde, $id));

            if ($stmt->rowCount() == 0){
                $theMsg = "<div class='alert alert-danger aler text-center'role='alert'>Not Record Updated</div>" ;
                redirectHome($theMsg, 'Admin');
            } else {
                $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                redirectHome($theMsg, 'Admin');
            }
        

        } else {
            $theMsg = "<div class='alert alert-danger' role='alert'> Sorry You Browse This Page Directly</div>";
            redirectHome($theMsg);
        }

           echo '</div>';

        } elseif ($mod == 'Delete') {// Delete Page
            echo '<h2 class="text-center Adm-h1">Delete Category</h2>';
            echo '<div class="container">';

                $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0;
                $check = checkItem('ID', 'categories', $catid);
        if ($check > 0) {

        
                $stmt = $contant->prepare("DELETE FROM categories WHERE ID = :Category");
                $stmt->bindParam(":Category", $catid);
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
        } 
        include $tpl . 'footer.php';
        
    } else {

        header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent