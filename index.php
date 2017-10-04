<?php
/*
=================================================================================
====================================== Body page ================================
=================================================================================
*/
    ob_start();
    session_start();

    //Include Header & navBar
    include 'init.php';
 ?>

<!-- start head -->
    <div class="header text-center">
      <div class="head-img">
          <div class="overlay">
            <div class="jumbotron">
              <h1>مابلينك طريقك للعالم</h1>
              <p class="lead">أنتقل مباشرة لما تريد</p>
              <a data-scroll href="#scroll">
              <p><i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i></p>
                </a>

            </div>
          </div>
      </div>
    </div>
    <!-- end head -->

    <!-- start about seaction -->
    <section class="about">
      <div class="container">
        <div class="cont text-center">
          <h2 id="scroll">هدفنا</h2>
          <p class="lead">
            يهدف الموقع ليكون المرجع الأول والأخير لكي تجد ضالتك من أفضل المواقع ضمن مجالك ونأمل أن تشاركونا بهذه التجرية بأضافة محتوى للمرجع
          </p>

          <p>"العلم ما نَفَع و ليس العلم ما حُفِظ"</p>
        </div>
      </div>
    </section>
    <!-- end about seaction -->

    <!-- start our site seactions -->
    <section class="site-sec text-center">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=programmingWeb"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=imgDesign"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>تصميم الرسومات</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=webDesign"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>تصميم ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=More"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>..المزيد</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=Mobile"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الموبايل</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="categories.php?mod=programmingDesktop"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الدسك توب</h3>
              </div>
            </div></a>
          </div>

        </div>
      </div>
    </section>

    <section class="add-site">
      <div class="container">
        <div class="row">
          <div class="img col-xs-12 col-md-6">
            <img src="http://via.placeholder.com/400x300" alt="">
          </div>
          <div class="form col-xs-12 col-md-6 ">
            <div class="cont pull-right">

              <h2>شاركنا بموقع او رابط</h2>

              <form action="" method="post"></form> 

                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم الموقع">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رابط الموقع">
                </div>

                <div class="form-group">
                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="نبذة عن الموقع"></textarea>
                </div>

                <button type="submit" class="btn btn-danger">مشاركة</button>

              </form>     
            </div>      
          </div>
        </div>
      </div>
    </section>
    <section class="add-comment">
      <div class="container">
        <div class="row">
        <div class="cont">       
              <div class="img col-xs-12 col-md-6">
                <img src="http://via.placeholder.com/400x300" alt="">
              </div>
            </div>   
          
            <div class="form col-xs-12 col-md-6">
              <div class="smi-pull">
               <h2>التعليقات</h2>

                <form action="" method="post"></form> 

                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="الأسم">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" id="exampleTextarea2" rows="3" placeholder="نبذة عن الموقع"></textarea>
                  </div>

                  <button type="submit" class="btn btn-danger">مشاركة</button>
                </div>
                </form>    
              </div>
            </div> 
                 
        </div>
      </div>
    </section>

    <!-- start our site seactions -->


<!-- Include Footer -->
<?php
  include $tpl . 'footer.php';
  ob_end_flush();
?>
