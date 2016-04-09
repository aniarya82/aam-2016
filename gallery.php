<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Gallery</title>
  <?php include 'topHead.php'; ?>
  <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
  <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/fancybox.css" type="text/css" media="screen" />

<style type="text/css">
img
{
    margin-left: 1px;
    margin-bottom: 1px;
}
img.two
{
    width: 200px;
    height: 150px;
}
img.four
{
    width: 410px;
    height: 300px;
}
div.row
{
    margin-bottom: 5px;
}
.col-lg-2{height: 150px; width: 210px;}
.col-lg-4{height:300px;width:420px;}
</style>
<link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.js" ></script>
     <script>
              new WOW().init();
              </script>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <div class="jumbotron">
      <!-- <form class="form-inline">
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox">Borderless
          </label>
          <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox">Fullscreen
          </label>
        </div>
      </form> -->
      <br>
      <div class="container-fluid">
<div class="wow fadeIn">
<div class="row">
    
    <div class="col-lg-6">
        <div class="col-lg-2">
              <a id="single_2" href="images/1.JPG"><img class="two" src="images/1.JPG"></a><br>
               <a id="single_2" href="images/50.JPG">
                <img class="two" src="images/50.JPG"></a>
        </div>
        <div class="col-lg-2">
            <a id="single_2" href="images/2.jpg"><img class="two" src="images/2.jpg"></a><br>
                        <a id="single_2" href="images/60.JPG"><img class="two" src="images/60.JPG"></a>

        </div>
        <div class="col-lg-2">
            <a id="single_2" href="images/7.JPG"><img class="two" src="images/7.JPG"></a><br>
                        <a id="single_2" href="images/85.JPG"><img class="two" src="images/85.JPG"></a>

        </div>
    </div>

    
    <div class="col-lg-6">
        <div class="col-lg-4">
            <a id="single_2" href="images/44.JPG">
            <img class="four" src="images/44.JPG">
        </a>
        </div>
        <div class="col-lg-2">
            <a id="single_2" href="images/9.JPG">
                <img class="two" src="images/9.JPG"></a>
        <br>
            <a id="single_2" href="images/35.JPG"><img class="two" src="images/35.JPG"></a>
        </div>
    </div>
</div>
<div class="row">
   
    <div class="col-lg-6">
        <div class="col-lg-2">
            <a id="single_2" href="images/63.JPG"><img class="two" src="images/63.JPG"></a>
            <br>
            <a id="single_2" href="images/57.JPG"><img class="two" src="images/57.JPG"></a>
        </div>

        <div class="col-lg-4">
            <a id="single_2" href="images/18.JPG">
            <img class="four" src="images/18.JPG">
        </a>
        </div>
    </div>
   
    <div class="col-lg-6">
        <div class="col-lg-2">
            <a id="single_2" href="images/66.JPG"><img class="two" src="images/66.JPG"></a><br>
                        <a id="single_2" href="images/43.JPG"><img class="two" src="images/43.JPG"></a>

        </div>
        <div class="col-lg-2">
            <a id="single_2" href="images/22.JPG"><img class="two" src="images/22.JPG"></a><br>
                        <a id="single_2" href="images/31.JPG"><img class="two" src="images/31.JPG"></a>

        </div>
        <div class="col-lg-2">
            <a id="single_2" href="images/15.JPG"><img class="two" src="images/15.JPG"></a><br>
            <a id="single_2" href="images/46.JPG">
            <img class="two" src="images/46.JPG">
        </a>
        </div>
    </div>
</div>

      </div>
  </div>


  <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
  <div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body next"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left prev">
              <i class="glyphicon glyphicon-chevron-left"></i> Previous
            </button>
            <button type="button" class="btn btn-primary next">
              Next
              <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> -->
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- <script src="js/bootstrap-image-gallery.min.js"></script> -->
<script src="js/bootstrap-image-gallery.js"></script>
<script src="js/demo.js"></script>

</html>
