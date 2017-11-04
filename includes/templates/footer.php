<?php
/*
=================================================================================
======================================== Footer page ============================
=================================================================================
*/
?>
    <div class="footer text-center">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-md-6">
            <form onsubmit="event.preventDefault();">
              <h2>ابق علي تواصل</h2>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="البريد الالكتروني">
              </div>

              <button type="submit" onclick="addEmail('addNewEmail')" class="btn btn-default btn-danger">أرسال</button>
            </form>
       </div>
<!-- Count and collect all categories within the section -->
<?php $graDesig =  countItems(1) +  countItems(2) + countItems(3) +  countItems(4) + countItems(5) +  countItems(6) + countItems(32);?>
<?php $webDesig =  countItems(7) +  countItems(8) + countItems(9) +  countItems(10) + countItems(11) + countItems(32);?>
<?php $webDevel =  countItems(12) +  countItems(13) + countItems(14) +  countItems(15) + countItems(16) +  countItems(17) +  countItems(18);?>
<?php $Computer =  countItems(19) +  countItems(20) + countItems(21) +  countItems(22) + countItems(23);?>
<?php $Mobile   =  countItems(24) +  countItems(25) + countItems(26) +  countItems(27) + countItems(28);?>

          <div class="col-xs-12 col-md-6">
            <div class="col-xs-12 col-sm-6">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="categories.php?mod=imgDesign" class="list-group-item"><span class="badge"><?php echo $graDesig;?></span>تصميم الرسومات</a>
                  <a href="categories.php?mod=webDesign" class="list-group-item"><span class="badge"><?php echo $webDesig;?></span>تصميم ويب</a>
                  <a href="categories.php?mod=programmingWeb" class="list-group-item"><span class="badge"><?php echo $webDevel;?></span>برمجة ويب</a>
                  <a href="categories.php?mod=More" class="list-group-item"><span class="badge"><?php echo countItems(29);?></span>المزيد</a>
                  
                </li>
              </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
            <ul class="list-group">
              <li class="list-group-item">
              <a href="categories.php?mod=programmingDesktop" class="list-group-item"><span class="badge"><?php echo $Computer;?></span>الدسك توب</a>
                <a href="categories.php?mod=Mobile" class="list-group-item"><span class="badge"><?php echo $Mobile;?></span>الموبايل</a>
                
                <a href="categories.php?mod=serviceProvider" class="list-group-item">مزود الخدمة</a>
                <a href="categories.php?mod=callUs" class="list-group-item">أتصل بنا</a>
              </li>
            </ul>
        </div>
          </div>
        </div> <!-- row -->

      </div> <!-- container -->
      <div class="mark text-center">
      All rights reserved 2017 &reg; Developed by 'Kamal tabash' &amp; Designed by 'mohamed magdy'
      </div>
    </div>

      <script src="<?php echo $js ?>wow.min.js"></script>
      <script>new WOW().init();</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<?php echo $Js ?>jquery-3.2.1.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="<?php echo $js ?>bootstrap.min.js"></script>
      <script src="<?php echo $js ?>smooth-scroll.polyfills.min.js"></script>
      <script src="<?php echo $js ?>mixitup.min.js"></script>
      <script src="<?php echo $js ?>plugins.js"></script>
    </body>
</html>
