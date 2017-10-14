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
        $fileWebimg = './Admin/data/upload/websites-Image/';

        // Start  Page


                // ############# Error Page ####################0
        if($mod == 'Error') { ?>


                <h1>Welcome Error Page</h1>


<?php
                // ############# imgDesign Page ####################1
        } elseif($mod == 'imgDesign') { ?>

          <div class="page"><!-- start page -->

          <div class="container">

              <div class="controls text-center">

                <button type="button" class="control btn-primary" data-filter=".green">Green</button>
                <button type="button" class="control btn-primary" data-filter=".blue">Blue</button>
                <button type="button" class="control btn-primary" data-filter=".pink">Pink</button>
            </div>

          </div> <!-- end controls container -->
                        <!-- categorys -->
          <div class="container " id="container">
            <div class="row">
<?php
                      //Green
                      $webCate = webCat(1);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 green">
                <div class="thumbnail">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <p><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-primary" role="button">اذهب</a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}
                    // Blue
                      $webCate = webCat(2);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <p><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-primary" role="button">اذهب</a></p>
                   </div>
                 </div>
              </div>
<?php
  }
}
                      //Pink
                      $webCate = webCat(4);
                       foreach($webCate as $web){
                         if($web['Approve'] == 1) {
                             ?>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="<?php echo $fileWebimg . $web['Images'] ; ?>" alt="">
                   <div class="caption">
                     <h3><?php echo $web['Name'] ; ?></h3>
                     <p><?php echo $web['Description'] ; ?></p>
                     <p><a href="<?php echo $web['Domain'] ; ?>" class="btn btn-primary" role="button">اذهب</a></p>
                   </div>
                 </div>
              </div>

<?php
  }
}
?>


            <!--
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>

              <div class="mix col-sm-6 col-md-3 blue">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>

-->
            </div><!-- end row -->
          </div><!-- end container -->

        </div><!-- end page -->
<?php
                // ############# webDesign Page ####################2
        } elseif ($mod == 'webDesign') { ?>

          <div class="page"><!-- start page -->

          <div class="container">

              <div class="controls text-center">
                <button type="button" class="control btn-primary" data-filter="all">All</button>
                <button type="button" class="control btn-primary" data-filter=".green">Green</button>
                <button type="button" class="control btn-primary" data-filter=".blue">Blue</button>
                <button type="button" class="control btn-primary" data-filter=".pink">Pink</button>
                <button type="button" class="control btn-primary" data-filter="none">None</button>

                <button type="button" class="control btn-primary" data-sort="default:asc">Asc</button>
                <button type="button" class="control btn-primary" data-sort="default:desc">Desc</button>
            </div>

          </div> <!-- end controls container -->
                        <!-- categorys -->
          <div class="container " id="container">
            <div class="row">

              <div class="mix col-sm-6 col-md-3 green">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>


            </div><!-- end row -->
          </div><!-- end container -->

        </div><!-- end page -->


<?php
                // #################### programmingWeb Page #########3
        } elseif ($mod == 'programmingWeb') {?>

          <div class="page"><!-- start page -->

            <div class="container">

                <div class="controls text-center">
                  <button type="button" class="control btn-primary" data-filter="all">All</button>
                  <button type="button" class="control btn-primary" data-filter=".green">Green</button>
                  <button type="button" class="control btn-primary" data-filter=".blue">Blue</button>
                  <button type="button" class="control btn-primary" data-filter=".pink">Pink</button>
                  <button type="button" class="control btn-primary" data-filter="none">None</button>

                  <button type="button" class="control btn-primary" data-sort="default:asc">Asc</button>
                  <button type="button" class="control btn-primary" data-sort="default:desc">Desc</button>
              </div>

            </div> <!-- end controls container -->
                        <!-- categorys -->
          <div class="container " id="container">
            <div class="row">

              <div class="mix col-sm-6 col-md-3 green">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>


            </div><!-- end row -->
          </div><!-- end container -->

        </div><!-- end page -->



<?php
                // ################## programmingDesktop Page #######4
        } elseif($mod == 'programmingDesktop') {?>

          <div class="page"><!-- start page -->
            <div class="container">

                <div class="controls text-center">
                  <button type="button" class="control btn-primary" data-filter="all">All</button>
                  <button type="button" class="control btn-primary" data-filter=".green">Green</button>
                  <button type="button" class="control btn-primary" data-filter=".blue">Blue</button>
                  <button type="button" class="control btn-primary" data-filter=".pink">Pink</button>
                  <button type="button" class="control btn-primary" data-filter="none">None</button>

                  <button type="button" class="control btn-primary" data-sort="default:asc">Asc</button>
                  <button type="button" class="control btn-primary" data-sort="default:desc">Desc</button>
              </div>

          </div> <!-- end controls container -->

                        <!-- categorys -->
          <div class="container " id="container">
            <div class="row">

              <div class="mix col-sm-6 col-md-3 green">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>


            </div><!-- end row -->
          </div><!-- end container -->

        </div><!-- end page -->



<?php
                // ###################### Mobile Page ###############5
        } elseif ($mod == 'Mobile') {?>

          <div class="page"><!-- start page -->

            <div class="container">

                <div class="controls text-center">
                  <button type="button" class="control btn-primary" data-filter="all">All</button>
                  <button type="button" class="control btn-primary" data-filter=".green">Green</button>
                  <button type="button" class="control btn-primary" data-filter=".blue">Blue</button>
                  <button type="button" class="control btn-primary" data-filter=".pink">Pink</button>
                  <button type="button" class="control btn-primary" data-filter="none">None</button>

                  <button type="button" class="control btn-primary" data-sort="default:asc">Asc</button>
                  <button type="button" class="control btn-primary" data-sort="default:desc">Desc</button>
              </div>

            </div> <!-- end controls container -->
                        <!-- categorys -->
          <div class="container " id="container">
            <div class="row">

              <div class="mix col-sm-6 col-md-3 green">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 green">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                  <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 blue">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>
              <div class="mix col-sm-6 col-md-3 pink">
                <div class="thumbnail">
                   <img src="http://via.placeholder.com/250x200" alt="">
                   <div class="caption">
                     <h3>Thumbnail label</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ut enim ad minim veniam.</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                   </div>
                 </div>
              </div>


            </div><!-- end row -->
          </div><!-- end container -->

        </div><!-- end page -->


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
