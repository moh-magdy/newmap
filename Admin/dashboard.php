<?php
 ob_start();
    session_start();
    $pageTitle = "Control Board";
    if (isset($_SESSION['admin'])) {

        include     "init.php";

    $numWebsites = 5; // Number of Latest websites
    $latestwebsites = getLatest("*", "websites", "ID", $numWebsites); // Latest websites Array

    $numComments = 5; // Number of Latest comments
    $latestcomments = getLatest("*", "comments", "ID", $numComments); // Latest comments Array
    
    $numMessage = 5; // Number of Latest message
    $latestMessage = getLatest("*", "message", "ID", $numMessage); // Latest message Array

    $numEmail = 30; // Number of Latest Email
    $latestEmail = getLatest("*", "email", "ID", $numEmail); // Latest Email Array

    ?>



    <h2 class='text-center dash-h1'>Control Board</h2>
        <div class="container">
            <div class='row'>
                <div class='dash-section col-sm-12 col-md-6'>
                    <a class='a-web' href="websites.php">
                        <div class='web-in'>
                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
                            <p>Websites</p>
                            <span><?php echo countItems('ID', 'websites');?></span>
                        </div>
                    </a>
                </div>


            <div class='dash-section col-sm-12 col-md-6'>
                <a class='a-web com-color' href="comment.php">
                    <div class='web-in'>
                    <i class="fa fa-comment-o fa-5x" aria-hidden="true"></i>
                        <p>Comments</p>
                        <span><?php echo countItems('ID', 'comments');?></span>
                    </div>
                </a>
            </div>

            </div><!-- End row -->

            <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-globe fa-lg " aria-hidden="true"></i>
                                 Latest <?php echo $numWebsites;  ?> Websites
                                 <span class="toggle-info pull-left">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                 </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <?php
                                        foreach ($latestwebsites as $letWeb) {
                                            echo "<li>";
                                            echo $letWeb['Name'];
                                                echo '<a href="websites.php?mod=Edit&webid=' . $letWeb['ID'] . ' ">';
                                                    echo "<span class='btn btn-success pull-left dash-btn-edit none-btn marg-btn'>";
                                                        echo "<i class='fa fa-pencil-square-o' aria-hidden='true'></i> Edit";
                                                         if ($letWeb['Approve'] == 0) {
                                                                echo "<a href='websites.php?mod=Approve&webid=". $letWeb['ID'] .
                                                                "' class='btn btn-info  pull-left dash-btn-act none-btn btn-edit'>
                                                                <i class='fa fa-check' aria-hidden='true'></i> Activate</a>";               
                                                                }
                                                    echo"</span>";
                                                echo "</a>";   
                                        echo "</li>";


                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-comment-o" aria-hidden="true"></i> 
                                Latest <?php echo $numComments;  ?> Comments
                                <span class="toggle-info pull-left">
                                    <i class="fa fa-minus fa-lg" aria-hidden="true"></i>
                                 </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                <?php
                                        foreach ($latestcomments as $letComm) {
                                            echo "<li>";
                                            echo $letComm['Comment'];
                                                echo '<a href="comment.php?mod=Edit&commid=' . $letComm['ID'] . ' ">';
                                                    echo "<span class='btn btn-success pull-left dash-btn-edit none-btn marg-btn'>";
                                                        echo "<i class='fa fa-pencil-square-o' aria-hidden='true'></i> Edit";
                                                         if ($letComm['Status'] == 0) {
                                                                echo "<a href='comment.php?mod=Approve&commid=". $letComm['ID'] .
                                                                "' class='btn btn-info  pull-left dash-btn-act none-btn btn-edit'>
                                                                <i class='fa fa-check' aria-hidden='true'></i> Activate</a>";               
                                                                }
                                                    echo"</span>";
                                                echo "</a>";   
                                        echo "</li>";


                                        }
                                ?>    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- panel message -->
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Latest <?php echo $numMessage;  ?> Message
                                <span class="toggle-info pull-left">
                                    <i class="fa fa-minus fa-lg" aria-hidden="true"></i>
                                 </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                <?php
                                        foreach ($latestMessage as $letMess) {
                                            echo "<li>";
                                            echo $letMess['Message'] ;
                                                
                                                 echo '<a href="dilMessEma.php?mod=DeleteM&messid=' . $letMess['ID'] . ' ">';
                                                    echo "<span class='btn btn-danger none-btn pull-left dash-btn-edit'>";
                                                        echo "<i class='fa fa-times' aria-hidden='true'></i> Delete";
                                                    echo"</span>";
                                                echo "</a>";   
                                            echo "</li>";
                                        }
                                ?>    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- panel Email -->
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Latest <?php echo $numEmail;  ?> Email
                                <span class="toggle-info pull-left">
                                    <i class="fa fa-minus fa-lg" aria-hidden="true"></i>
                                 </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                <?php
                                        foreach ($latestEmail as $letEmail) {
                                            echo "<li>";
                                                echo $letEmail['Email'];
                                                echo '<a href="dilMessEma.php?mod=DeleteE&Emailid=' . $letEmail['ID'] . ' ">';
                                                    echo "<span class='btn btn-danger pull-left none-btn dash-btn-edit'>";
                                                        echo "<i class='fa fa-times' aria-hidden='true'></i> Delete";
                                                    echo"</span>";
                                                echo "</a>";
                                            echo "</li>";


                                        }
                                ?>    
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!-- Row End  -->
        </div>






            <?php
            include $tpl . "footer.php";

    } else {

        header('Location: index.php'); //Redirect To index Page
        exit();
    }
 ob_end_flush();    