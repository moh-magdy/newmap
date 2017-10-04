<?php
ob_start();
    include 'init.php'; 
    $pageTitle = ' Branches';
    $catNum = $_GET['catID'];
    $getWeb = getWeb($catNum);
?>

    <h1 class="text-center h1 catid"><?php echo str_replace("-", " ", $_GET['pagename']) ?></h1>
    <div class="container">
        
            
    <table class="table tab-web table-striped ">
    <thead class='text-center'>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Domain</th>
        <th>Description</th>
        <th>Images Name</th>
        <th>Date</th>
        <th>Control</th>
        </tr>
    </thead>
<?php
foreach ($getWeb as $web) {
    echo "<tbody class='text-center tbod'>";
    echo "<tr>";
        echo "<th scope='row'>". $web['ID'] ."</th>";
        echo "<td>". $web['Name'] ."</td>";
        echo "<td>". $web['Domain'] ."</td>";
        echo "<td>". $web['Description'] ."</td>";
        echo "<td>". $web['Images'] ."</td>";
        echo "<td>". $web['Add_Date'] ."</td>";
        echo "<td class='a-butn'>
             <a href='websites.php?mod=Edit&webid=" . $web['ID'] . "' class='  btn btn-success '>Edit</a>
             <a href='websites.php?mod=Delete&webid=" . $web['ID'] . "' class='confirm  btn btn-danger btn-edit'>Delete</a>";
             if ($web['Approve'] == 0) {
               echo "<a href='websites.php?mod=Approve&webid=" . $web['ID'] . "' class='  btn btn-primary '>Approve</a>";
             }
        echo "</td>";
    echo "</tr>";
    echo "</tbody>";
}
        
        ?>
    </div>

<?php include $tpl . 'footer.php';
ob_end_flush();
?>