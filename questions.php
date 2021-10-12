<!DOCTYPE html>
<html>

<head>

    <title>Survey</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
           <!-- Style & bootstrap import -->
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/animate.css">
           <!-- End of inmport -->

     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

     <!-- SEO injection zone -->





     <!-- End of SEO injection zone -->

     

</head>

<body>

<!-- Header of home -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 head">
  <div class="row">
    <div class="container">
      <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
           
          <a href="index.php"> <img src="img/logo.png" width="60%"/> </a>

      </div>

      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
          
          <div class="row">

           <a href="#"><!--<img  src="img/sticker.png" width="90%"/>--></a>

          </div>
            


          

      </div>

    </div>

  </div>
</div>


<!-- End of Home header -->



<!-- Loading questions steps-->

<div id="questionload">
<?php
error_reporting(0);
ini_set('display_errors', 0);




/*$st = $_SESSION['progress'];*/

$st = $_COOKIE['progress'];


if($st==null){

include('S0_q1.php');


}else {

include($st);

}


 

?>
</div>

<!-- End of loading questions steps-->

<!-- Start of the footer -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 footer">

  <div class="container">

     <div class="row">

        

     </div>

  </div>



</div>



<!-- End of the footer -->




<!-- JQUERY IMPORT-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- END OF JQUERY IMPORT -->
</body>

</html>