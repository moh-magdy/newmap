<?php
/*
=================================================================================
======================================== navBar page ============================
=================================================================================
*/    
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container"><!-- /.container -->

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-right">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-left" href="index.php">مابلينك</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">..المزيد<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="categories.php?mod=serviceProvider">مزود الخدمة</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="categories.php?mod=callUs">أتصل بنا</a></li>                         
                </ul>
            </li>
            <li><a href="categories.php?mod=Mobile">ب.ت الموبايل</a></li>
            <li><a href="categories.php?mod=programmingDesktop">ب.ت الدسك توب</a></li>
            <li><a href="categories.php?mod=imgDesign">تصميم الرسومات</a></li>
            <li><a href="categories.php?mod=webDesign">تصميم ويب</a></li>
            <li><a href="categories.php?mod=programmingWeb">برمجه ويب <span class="sr-only">(current)</span></a></li>
          </ul>

        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>