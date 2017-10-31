<?php 
$noHeader   = '';
$noNavar    = '';
    include 'init.php';
?>

<script src="<?php echo $js ?>sweetalert2.min.js"></script>

<?php

	if (isset($_POST['key'])) {
            $date   = date("Y/m/d");

            

     if ($_POST['key'] == 'addNew') {
        /*Start Insert addWebsites */
            $catId  = $conn->real_escape_string($_POST['catId']);
            $name   = $conn->real_escape_string($_POST['name']);
            $doma   = $conn->real_escape_string($_POST['domain']);
            $desc   = $conn->real_escape_string($_POST['desc']);
            
            
            $nameFilter = filter_var($name,FILTER_SANITIZE_STRING);
            $domaFilter = filter_var($doma,FILTER_SANITIZE_STRING);
            $descFilter = filter_var($desc,FILTER_SANITIZE_STRING);
            /*End Insert addWebsites */

			$sql = $conn->query("SELECT id FROM websites WHERE Domain = '$doma'");
			if ($sql->num_rows > 0)
				exit("<script>swal('Oops...', 'Sorry This Domain Is Exist', 'error');</script>");
			else {
				$conn->query("INSERT INTO 
                                            websites(Name, Domain, Description, Add_Date, cat_ID)
                                            VALUES('$nameFilter', '$domaFilter', '$descFilter', '$date', '$catId' )");
				exit("<script>swal('Good job', 'Record Updated', 'success');</script>");
			}
        }/*End If POST KEY (addNew) */
        


    if ($_POST['key'] == 'addNewCom') {
        /*Start Insert addComment */
                $nameCom  = $conn->real_escape_string($_POST['nameCom']);
                $comment   = $conn->real_escape_string($_POST['comment']);
                $nameComFilter = filter_var($nameCom,FILTER_SANITIZE_STRING);
                $commentFilter = filter_var($comment,FILTER_SANITIZE_STRING);
            /*End Insert addComment */
			
				$conn->query("INSERT INTO 
                                        comments(Name, Comment, Comment_date)
                                    VALUES('$nameComFilter', '$commentFilter', '$date')");
				exit("<script>swal('Good job', 'Record Updated', 'success');</script>");
			
        }/*End If POST KEY (addComment) */


    if ($_POST['key'] == 'addNewEmail') {
        /*Start Insert addNewEmail */
            $email  = $conn->real_escape_string($_POST['email']);
            
            $emailFilter = filter_var($email,FILTER_SANITIZE_EMAIL);

            /*End Insert addNewEmail */

			$sql = $conn->query("SELECT id FROM email WHERE Email = '$email'");
			if ($sql->num_rows > 0)
				exit("<script>swal('Oops...', 'Sorry This Domain Is Exist', 'error');</script>");
			else {
				$conn->query("INSERT INTO 
                                            email(Email, Email_date)
                                            VALUES('$emailFilter', '$date')");
				exit("<script>swal('Good job', 'Record Updated', 'success');</script>");
            }        
        }/*End If POST KEY (addNewEmail) */


    if ($_POST['key'] == 'addNewMess') {
        /*Start Insert addNewMess */
                $usEmail    = $conn->real_escape_string($_POST['usEmail']);
                $theme      = $conn->real_escape_string($_POST['theme']);
                $message    = $conn->real_escape_string($_POST['message']);

                $usEmailFilter  = filter_var($usEmail,FILTER_SANITIZE_EMAIL);
                $themeFilter    = filter_var($theme,FILTER_SANITIZE_STRING);
                $messageFilter  = filter_var($message,FILTER_SANITIZE_STRING);
            /*End Insert addNewMess */
			
				$conn->query("INSERT INTO 
                                        message(Email, address, Message, dateMessage)
                                    VALUES('$usEmailFilter', '$themeFilter', '$messageFilter', '$date')");
				exit("<script>swal('Good job', 'Record Updated', 'success');</script>");
			
        }/*End If POST KEY (addNewMess) */

    } /*End If POST KEY */
?>












