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
              <h2 class="wow fadeInRightBig" >تصميم الرسومات</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-7">المزيد</button>
                    <button type="button" class="control btn-default" data-filter=".cat-6">الصور</button>
                    <button type="button" class="control btn-default" data-filter=".cat-5">مدارس</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">دعم</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">برامج</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">الخطوط</button>
                    <button type="button" class="control btn-default" data-filter=".cat-1">الالوان</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
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
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
              <div class="mix col-sm-6 col-md-3 cat-7"><!-- المزيد غرافك -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
              <div class="mix col-sm-6 col-md-3 cat-6"><!-- الصور -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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

          <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" >تصميم ويب</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-5">المزيد</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">مدارس</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">برامج</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">دعم</button>
                    <button type="button" class="control btn-default" data-filter=".cat-6">الصور</button>
                    <button type="button" class="control btn-default" data-filter=".cat-1">خطوط</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(7); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!-- خطوط ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(8);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-2"><!--برامج ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(9);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-3"><!-- دعم ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(10);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-4"><!-- مدارس ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(11);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-5"><!--  المزيد -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
              <div class="mix col-sm-6 col-md-3 cat-6"><!-- الصور -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                // #################### programmingWeb Page #########3
        } elseif ($mod == 'programmingWeb') {?>

          <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" >برمجة ويب</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-6">المزيد</button>
                    <button type="button" class="control btn-default" data-filter=".cat-5">مدارس</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">دعم</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">برامج</button>
                    <button type="button" class="control btn-default" data-filter=".cat-7">كتيب اللغات</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">أستضافة</button>
                    <button type="button" class="control btn-default" data-filter=".cat-1">أختبار الموقع</button>

                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(12); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!-- أختبار ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(13);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-7"><!-- كتيب اللغ أستضافة -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(14);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-2"><!-- أستضافة -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(15);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-3"><!-- برامج برمجة ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(16);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-4"><!--  دعم برمجة الويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(17);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-5"><!-- مدارس برمجة ويب -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(18);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-6"><!-- المزيد -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                      <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                // ################## programmingDesktop Page #######4
        } elseif($mod == 'programmingDesktop') {?>

                    <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" > دسك توب</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-5">المزيد</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">مدارس</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">دعم</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">برامج</button>
                    <button type="button" class="control btn-default" data-filter=".cat-1">كتيب اللغات</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(19); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!-- كتيب اللغ   -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(20);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-2"><!--  برامج  -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(21);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-3"><!-- دعم -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(22);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-4"><!-- مدارس -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(23);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-5"><!-- المزيد -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                // ###################### Mobile Page ###############5
        } elseif ($mod == 'Mobile') {?>

        <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" >موبايل</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-5">المزيد</button>
                    <button type="button" class="control btn-default" data-filter=".cat-4">مدارس</button>
                    <button type="button" class="control btn-default" data-filter=".cat-3">دعم</button>
                    <button type="button" class="control btn-default" data-filter=".cat-2">برامج</button>
                    <button type="button" class="control btn-default" data-filter=".cat-1">كتيب اللغات</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(24); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!-- كتيب اللغ   -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(25);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-2"><!--  برامج  -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(26);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-3"><!-- دعم -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}

                      $webCate = webCat(27);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-4"><!-- مدارس -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}

                      $webCate = webCat(28);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-5"><!-- المزيد -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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

                //###################### More Page ##################6
        } elseif ($mod == 'More') {?>


        <div class="page"><!-- start page -->
            <div class="back text-center ">
              <h2 class="wow fadeInRightBig" >المزيد</h2>
              <nav class="navbar navbar-default">
              <div class="container">
                  <div class="controls text-center wow lightSpeedIn" data-wow-delay="1s"> <!-- start controls container -->
                    <button type="button" class="control btn-default" data-filter=".cat-1">بدون تصنيف</button>
                </div>
              </div> <!-- end controls container -->
            </nav>
            </div>

                        <!-- category -->


          <div class="container wow fadeInLeft " data-wow-delay="1s" id="container"> <!-- start container -->
            <div class="row">
<?php

                      $webCate = webCat(29); // function for call up categories
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 cat-1"><!--  بدون تصنيف  -->
                <div class="thumbnail text-center">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <div class="star-grop">
                       <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?>" aria-hidden="true"></i>
                       <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?>" aria-hidden="true"></i>
                     </div>
                      <p class="lead"><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" target="_blank" class="btn btn-danger" role="button"><?php echo $goLink; ?></a></p>
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
                //############## service provider Page ###############7
        } elseif ($mod == 'serviceProvider') {?>

                  <div class="page">
                  <div class="cont-us text-center">
                    <div class="container">
                    <h2>من نحن</h2>
                      <div class="row">
                        <div class="col-sm-12 col-md-6">
                          
                        </div>
                        <div class="col-sm-12 col-md-6">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>



<?php
                //###################### call us Page ################8
        } elseif ($mod == 'callUs') {?>

                <div class="page">
                  <div class="cont-us text-center">
                    <div class="container">
                    <h2>اتصل بنا</h2>
                      <div class="row">
                        <div class="col-sm-12 ">
                          <div class="size">
                          <form>
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="البريد الالكتروني">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="الموضوع">
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" name="comment"  rows="3" placeholder="تعليقك هنا"></textarea>
                            </div>

                            <button type="submit" class="btn btn-danger">راسلنا</button>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<?php
        } else {

        header('Location: index.php'); //Redirect To index Page
        exit();

    }

//End Page

        include $tpl . "footer.php";

    ob_end_flush(); // Headers Sent
