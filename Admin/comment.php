<?php

/*
=================================================================================
==================================== Comments Page  =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Comments';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page
            $query = '';
            if (isset($_GET['page']) && $_GET['page'] == 'Pending') {

                $query = 'AND Approve = 0';
            }
            
            $stmtComm = $contant->prepare("SELECT * FROM comments ");
            $stmtComm->execute();
            $comms = $stmtComm->fetchAll();
            
        
        ?> <!-- echo "<a href='websites.php?mod=Manage&categoryName=" . $row['categoryName'] . $row['ID'] . "' class='  btn btn-primary '>".$row['categoryName']."</a>";-->
            <h2 class="text-center Adm-h1">Manage Comments</h2>
            <div class="container">

            
                <table class="table tab-web table-striped ">
                    <thead class='text-center'>
                        <tr>
                        <th>#</th>
                        <th>Comments</th>
                        <th>Comment Date</th>
                        <th>Control</th>
                        </tr>
                    </thead>
            <?php
                foreach ($comms as $comm) {
                    echo "<tbody class='text-center tbod'>";
                    echo "<tr>";
                        echo "<th scope='row'>". $comm['ID'] ."</th>";
                        echo "<td>". $comm['Comment'] ."</td>";
                        echo "<td>". $comm['Comment_date'] ."</td>";
                        echo "<td class='a-butn'>
                             <a href='comment.php?mod=Edit&commid=" . $comm['ID'] . "' class='  btn btn-success '>Edit</a>
                             <a href='comment.php?mod=Delete&commid=" . $comm['ID'] . "' class='confirm  btn btn-danger btn-edit'>Delete</a>";
                             if ($comm['Status'] == 0) {
                               echo "<a href='comment.php?mod=Approve&commid=" . $comm['ID'] . "' class='  btn btn-primary '>Approve</a>";
                             }
                        echo "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            ?>
                </table>
            </div>
      <?php
        
        } elseif ($mod == 'Edit') {// Edit Page  

            $commid = isset($_GET['commid']) && is_numeric($_GET['commid']) ? intval($_GET['commid']) : 0;

            $stmt = $contant->prepare("SELECT * FROM comments WHERE ID = ? LIMIT 1");

            $stmt->execute(array($commid));
            $comme = $stmt->fetch();
            $count = $stmt->rowCount(); 
            if ($count > 0) { 
           ?>
            <h2 class="text-center Adm-h1">Edit Comment</h2>
            <div class="container">
                <form action="?mod=Update" method="POST">
                <input type="hidden" name="commid" value="<?php echo $commid ?>">
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <label class="form-control-label" for="formGroupExampleInput">comment</label>
                            <textarea rows="5" cols="5" type="text" name="comment" class="form-control " id="formGroupExampleInput" ><?php echo $comme['Comment'] ?></textarea>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 div-center">
                            <input class="btn btn-primary" type="submit" value=" Save">
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
                
                echo "<h2 class='text-center Adm-h1'>Update Comment</h2>";
                echo "<div class='container'>";
                    $id   = $_POST['commid'];
                    $name = $_POST['comment'];
                    
                    $stmt = $contant->prepare("UPDATE comments SET Comment = ? WHERE ID = ?");
                    $stmt->execute(array($name, $id));
                    
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
                echo "</div>";

        } elseif ($mod == 'Delete') {// Delete Page
            
            echo '<h2 class="text-center Adm-h1">Delete Comment</h2>';
            echo '<div class="container">';

            $commid = isset($_GET['commid']) && is_numeric($_GET['commid']) ? intval($_GET['commid']) : 0;
                $check = checkItem('ID', 'comments', $commid);
        if ($check > 0) {

        
                $stmt = $contant->prepare("DELETE FROM comments WHERE ID = :comments");
                $stmt->bindParam(":comments", $commid);
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
         
        } elseif ($mod == 'Approve') {// Activate Page
               
            echo '<h2 class="text-center Adm-h1">Approve Comment</h2>';
            echo '<div class="container">';

            $commid = isset($_GET['commid']) && is_numeric($_GET['commid']) ? intval($_GET['commid']) : 0;
            $check = checkItem('ID', 'comments', $commid);

        if ($check > 0) {

                $stmt = $contant->prepare("UPDATE comments SET Status = 1  WHERE ID = ?");
                $stmt->execute(array($commid));

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


        }
        include $tpl . 'footer.php';
        
    } else {

        header('location: index.php');
        exit();
    }

    ob_end_flush(); // Headers Sent