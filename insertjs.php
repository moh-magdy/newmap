<?php
	if (isset($_POST['key'])) {

        $conn = new mysqli('localhost', 'root', '', 'myshortcuts');
        
            $catId = $conn->real_escape_string($_POST['catId']);
            $name = $conn->real_escape_string($_POST['name']);
            $domain = $conn->real_escape_string($_POST['domain']);
            $desc = $conn->real_escape_string($_POST['desc']);

     if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM websites WHERE Name = '$name'");
			if ($sql->num_rows > 0)
				exit("Country With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO 
                                            websites(Name, Domain, Description, Add_Date, cat_ID)
                                            VALUES('$name', '$domain', '$desc', 'now()', '$catId' )");
				exit('Country Has Been Inserted!');
			}
		}
	}
?>











