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
              <p><i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i></p>
            </div>
          </div>
      </div>
    </div>
    <!-- end head -->

    <!-- start about seaction -->
    <section class="about">
      <div class="container">
        <div class="cont text-center">
          <h2>هدفنا</h2>
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
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>تصميم الرسومات</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>تصميم ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>..المزيد</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الموبايل</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4">
          <a href="#"><div class="thumbnail">
              <img src="http://via.placeholder.com/350x300" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الدسك توب</h3>
              </div>
            </div></a>
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