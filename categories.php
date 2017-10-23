<?php
/*
=================================================================================
====================================== Sections page ============================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();
include 'init.php';

        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Error';
        $goLink = "أذهب";
        $fileWebimg = './Admin/data/upload/websites-Image/';

        // Start  Page


                // ############# Error Page ####################0
        if($mod == 'Error') {

          ?>

            <div class="page">
              <div class="container">
                <div class="row">

                  <div class="o-4 col-sm-12 col-md-6">
                    <h2>what did you do!!</h2>
                    <p class="lead">This link is broken</p>

                    <!-- add link to home :) -->
                  <a href="index.php">
                    <button class="btn btn-danger" type="button">GO HOME
                      <i class="fa fa-home fa-2x" aria-hidden="true"></i></button>
                  </a>
                  </div>

                  <div class="o-4 col-sm-12 col-md-6">
                    <i class="fa fa-chain-broken" aria-hidden="true"></i>
                  </div>

                </div>
              </div>
            </div>


<?php
                // ############# imgDesign Page ####################1
        } elseif($mod == 'imgDesign') { ?>

          <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" data-wow-delay="1s">تصميم الرسومات</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1.5s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-1">الالوان</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">الخطوط</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">cat-3</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">cat-4</button>
                    <button type="button" class="control btn-default" data-filter=".cat-5">cat-5</button>
                    <button type="button" class="control btn-default" data-filter=".cat-6">cat-6</button>
                    <button type="button" class="control btn-default" data-filter=".cat-7">cat-7</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="2.5s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(1); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!-- ألوان -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(2);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-2"><!-- خطوط غرافك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(3);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-3"><!-- برامج غرافك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(4);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-4"><!-- دعم غرافيك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(5);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-5"><!-- مدارس غرافك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(6);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-6"><!-- المزيد غرافك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(32);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-7"><!-- الصور -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}
?>
            </div><!-- end row -->
          </div><!-- end container -->
        </div><!-- end page -->
<?php
                // ############# webDesign Page ####################2
        } elseif ($mod == 'webDesign') { ?>
          <div class="page">
            <h2>web design</h2>
          </div>



<?php
                // #################### programmingWeb Page #########3
        } elseif ($mod == 'programmingWeb') {?>

          <h2>web programming</h2>


<?php
                // ################## programmingDesktop Page #######4
        } elseif($mod == 'programmingDesktop') {?>

          <h2>desktop programming</h2>


<?php
                // ###################### Mobile Page ###############5
        } elseif ($mod == 'Mobile') {?>

          <h2>Mobile</h2>


<?php

                //###################### More Page ##################6
        } elseif ($mod == 'More') {?>

                <h1>welcome More</h1>

<?php
                //############## service provider Page ###############7
        } elseif ($mod == 'serviceProvider') {?>

                <h1>welcome service provider</h1>


<?php
                //###################### call us Page ################8
        } elseif ($mod == 'callUs') {?>

                <h1>welcome call us</h1>

<?php
        } else {

        header('Location: index.php'); //Redirect To index Page
        exit();

    }

//End Page

        include $tpl . "footer.php";

    ob_end_flush(); // Headers Sent
