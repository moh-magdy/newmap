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

          <div class="col-xs-12 col-md-6">
            <h2>تابعنا</h2>
            <div class="icons">
              <i class="fa fa-github-square fa-3x" aria-hidden="true"></i>
              <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
              <i class="fa fa-codepen fa-3x" aria-hidden="true"></i>
              <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
              <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i>
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
      <script src="<?php echo $js ?>jquery-3.2.1.min.js"></script> 
      <!-- Latest compiled and minified JavaScript -->
      <script src="<?php echo $js ?>bootstrap.min.js"></script>      
      <script src="<?php echo $js ?>smooth-scroll.polyfills.min.js"></script>
      <script src="<?php echo $js ?>mixitup.min.js"></script>
      <script src="<?php echo $js ?>plugins.js"></script>
    </body>
</html>
