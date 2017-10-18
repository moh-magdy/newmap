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
            <form action="insertForms.php?mod=insertEmail" method="post">
              <h2>ابق علي تواصل</h2>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="البريد الالكتروني">
              </div>

              <button type="submit" class="btn btn-default btn-danger">أرسال</button>
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
        tread mark
      </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
      <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js  "integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="<?php echo $js ?>smooth-scroll.polyfills.min.js"></script>
      <script src="<?php echo $js ?>mixitup.min.js"></script>
      <script src="<?php echo $js ?>plugins.js"></script>
    </body>
</html>
