<?php 
    include 'init.php';
?>

<script src="<?php echo $js ?>sweetalert2.min.js"></script>

<?php

	if (isset($_POST['key'])) {

            $catId  = $conn->real_escape_string($_POST['catId']);
            $name   = $conn->real_escape_string($_POST['name']);
            $doma   = $conn->real_escape_string($_POST['domain']);
            $desc   = $conn->real_escape_string($_POST['desc']);
            $date   = date("Y/m/d");
            
            $nameFilter = filter_var($name,FILTER_SANITIZE_STRING);
            $domaFilter = filter_var($doma,FILTER_SANITIZE_STRING);
            $descFilter = filter_var($desc,FILTER_SANITIZE_STRING);
            




     if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM websites WHERE Domain = '$doma'");
			if ($sql->num_rows > 0)
				exit("<script>swal('Oops...', 'Sorry This Domain Is Exist', 'error');</script>");
			else {
				$conn->query("INSERT INTO 
                                            websites(Name, Domain, Description, Add_Date, cat_ID)
                                            VALUES('$nameFilter', '$domaFilter', '$descFilter', '$date', '$catId' )");
				exit("<script>swal('Good job', 'Record Updated', 'success');</script>");
			}
		}
	}
?>











