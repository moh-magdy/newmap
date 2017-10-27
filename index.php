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
            <div class="jumbotron wow bounceIn" data-wow-delay=".40s">
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
          <h2 id="scroll" class="wow fadeInRight" data-wow-offset="100">هدفنا</h2>
          <p class="lead wow fadeInRight" data-wow-offset="100">
            يهدف الموقع ليكون المرجع الأول والأخير لكي تجد ضالتك بين أفضل المواقع ضمن مجالك ونأمل أن تشاركونا بهذه التجربة بأضافة محتوى للمرجع
          </p>

          <p class="lead wow fadeInRight" data-wow-offset="100">"العلم ما نَفَع و ليس العلم ما حُفِظ"</p>
        </div>
      </div>
    </section>
    <!-- end about seaction -->

    <!-- start our site seactions -->
    <section class="site-sec text-center">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=programmingWeb"><div class="thumbnail">
              <img src="layout\imgs\web-dv.jpeg" alt="...">
              <div class="caption">
                <h3>برمجه ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=imgDesign"><div class="thumbnail">
              <img src="layout\imgs\img-d.jpg" alt="...">
              <div class="caption">
                <h3>تصميم الرسومات</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=webDesign"><div class="thumbnail">
              <img src="layout\imgs\web-d.jpeg" alt="...">
              <div class="caption">
                <h3>تصميم ويب</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=More"><div class="thumbnail">
              <img src="layout\imgs\next.jpeg" alt="...">
              <div class="caption">
                <h3>..المزيد</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=Mobile"><div class="thumbnail">
              <img src="layout\imgs\mob-d.jpeg" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الموبايل</h3>
              </div>
            </div></a>
          </div>

          <div class="col-sm-6 col-md-4 wow bounceIn" data-wow-offset="400" data-wow-duration="1s">
          <a href="categories.php?mod=programmingDesktop"><div class="thumbnail">
              <img src="layout\imgs\dt.jpeg" alt="...">
              <div class="caption">
                <h3>برمجه تطبيقات الدسك توب</h3>
              </div>
            </div></a>
          </div>

        </div>
      </div>
    </section>
    <!-- end our site seactions -->

    <!-- start forms seactions -->

    <section class="add-site">
      <div class="container">
        <div class="row">
          <div class="img col-xs-12 col-md-6 wow fadeInLeft" data-wow-offset="50">
            <img src="layout/imgs/add.jpeg" alt="">
          </div>
          <div class="form col-xs-12 col-md-6 wow fadeInRight" data-wow-offset="50">
            <div class="cont pull-right">

              <h2>شاركنا بموقع او رابط</h2>

              <form action="insertForms.php?mod=insertWeb" method="POST">

                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="اسم الموقع">
                  <input type="hidden" name="cat_id" class="form-control" value="1000">
                </div>

                <div class="form-group">
                  <input type="text" name="domain" class="form-control" id="formGroupExampleInput2" placeholder="رابط الموقع">
                </div>

                <div class="form-group">
                  <textarea name="description" class="form-control" id="exampleTextarea" rows="3" placeholder="نبذة عن الموقع"></textarea>
                </div>

                <button type="submit" class="btn btn-danger">مشاركة</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!--!!!!! 2th form !!!!! -->
    <section class="add-comment">
      <div class="container">
        <div class="row">

            <div class="form col-xs-12 col-md-6 wow fadeInLeft" data-wow-offset="50">
              <div class="smi-pull">
               <h2>شاركنا بتعليقك</h2>

                <form action="insertForms.php?mod=insertComment" method="post">

                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput3" placeholder="الأسم">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" name="comment" id="exampleTextarea2" rows="3" placeholder="تعليقك هنا"></textarea>
                  </div>

                  <button type="submit" class="btn btn-danger">مشاركة</button>
                </div>
                </form>
              </div>
              <div class="cont text-right">
                    <div class="img col-xs-12 col-md-6 wow fadeInRight " data-wow-offset="50">
                      <div class="list-group">
                        <a  class="list-group-item ">
                          <h4 class="list-group-item-heading">اسم المستخدم</h4>
                          <p class="list-group-item-text">تعليق هنا</p>
                        </a>
                      </div>
                      <div class="list-group">
                        <a  class="list-group-item ">
                          <h4 class="list-group-item-heading">اسم المستخدم</h4>
                          <p class="list-group-item-text">تعليق هنا </p>
                        </a>
                      </div>
                      <div class="list-group">
                        <a class="list-group-item ">
                          <h4 class="list-group-item-heading">اسم المستخدم</h4>
                          <p class="list-group-item-text">تعليق هنا</p>
                        </a>
                      </div>

                    </div>
                  </div>
            </div>

        </div>
      </div>
    </section>

    <!-- end forms seactions -->


<!-- Include Footer -->
<?php
  include $tpl . 'footer.php';
  ob_end_flush();
?>
