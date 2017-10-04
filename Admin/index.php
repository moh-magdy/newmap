<?php
    session_start();
    $noNavar = '';
    $pageTitle = 'Login';
    if (isset($_SESSION['user'])) {

        header('Location: dashboard.php'); //Redirect To Dashbord Page

    }
    include     "init.php";

// Check If User Coming From HTTP Post Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $admin   = $_POST['admin'];
        $pass   = $_POST['pass'];
        $hashedpass = sha1($pass);

//Check If The User Exist In Database

        $stmt = $contant->prepare("SELECT * FROM user WHERE ID = 0 AND Admin = ? AND Password = ? LIMIT 1");
        $stmt->execute(array($admin, $hashedpass));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

//if Count > 0 This Mean The Databese Contain About Thih Username 

        if ($count > 0) {
            
            $_SESSION['admin'] = $admin;
            $_SESSION['name'] = $row['ID'];
            header('Location: dashboard.php'); //Redirect To Dashbord Page
            exit();
        }
                
    }


?>


<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Admin Name</label>
    <input
        type="text"
        class="form-control"
        name="admin" 
        autocomplete="off" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp" 
        placeholder="Enter Name"
    >
  </div>
  <div class="form-group">  
    <label for="exampleInputPassword1">Password </label>
    <input 
        type="password" 
        class="form-control"
        name="pass" 
        id="exampleInputPassword1" 
        placeholder="Password"
        autocomplete="new-password"
    >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>


<?php include $tpl . "footer.php";?>


