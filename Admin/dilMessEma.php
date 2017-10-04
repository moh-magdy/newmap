<?php

/*
=================================================================================
==================================== Message Page  =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Message';

    if(isset($_SESSION['admin'])) {
        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page
            
            $stmtMess = $contant->prepare("SELECT * FROM message ORDER BY ID DESC ");
            $stmtMess->execute();
            $message = $stmtMess->fetchAll();
            
        
        ?> <!-- echo "<a href='websites.php?mod=Manage&categoryName=" . $row['categoryName'] . $row['ID'] . "' class='  btn btn-primary '>".$row['categoryName']."</a>";-->
            <h2 class="text-center Adm-h1">Manage Message</h2>
            <div class="container">

            
                <table class="table tab-web table-striped ">
                    <thead class='text-center'>
                        <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Control</th>
                        </tr>
                    </thead>
            <?php
                foreach ($message as $mess) {
                    echo "<tbody class='text-center tbod'>";
                    echo "<tr>";
                        echo "<th scope='row'>". $mess['ID'] ."</th>";
                        echo "<td>". $mess['Email'] ."</td>";
                        echo "<td>". $mess['address'] ."</td>";
                        echo "<td>". $mess['Message'] ."</td>";
                        echo "<td>". $mess['dateMessage'] ."</td>";
                        echo "<td class='a-butn'>";
                            echo "<a href='dilMessEma.php?mod=DeleteM&messid=" . $mess['ID'] . "' class='  btn btn-danger '>Delete</a>";
                        echo "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            ?>
                </table>
            </div>
      <?php

        } elseif ($mod == 'DeleteM') {// Delete Message Page
            echo '<h2 class="text-center Adm-h1">Delete Message</h2>';
            echo '<div class="container">';

                $messid = isset($_GET['messid']) && is_numeric($_GET['messid']) ? intval($_GET['messid']) : 0;
                $check = checkItem('ID', 'message', $messid);
        if ($check > 0) {

        
                $stmt = $contant->prepare("DELETE FROM message WHERE ID = :Message");
                $stmt->bindParam(":Message", $messid);
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


        } elseif ($mod == 'DeleteE') {// Delete Email Page
            echo '<h2 class="text-center Adm-h1">Delete Email</h2>';
            echo '<div class="container">';

                $Emailid = isset($_GET['Emailid']) && is_numeric($_GET['Emailid']) ? intval($_GET['Emailid']) : 0;
                $check = checkItem('ID', 'email', $Emailid);
        if ($check > 0) {

        
                $stmt = $contant->prepare("DELETE FROM  email WHERE ID = :Email");
                $stmt->bindParam(":Email", $Emailid);
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