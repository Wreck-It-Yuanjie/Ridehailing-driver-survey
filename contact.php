

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

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=440310070314497&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>



<form method="post" action="contactadd.php">





<!-- End of Home header -->

<!-- Thanks Message -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 corp">
   
   <div class="container">
    
      <div class="row">

         <div class="qbloc" style="margin-top:10%;">

           <center>
              <center> <h1>To receive the gift card this week, please enter your email address:</h1> </center>

               <center><input value="<?php echo $_SESSION['contact']; ?>" style="height:50px; "  type="text" id="contact" name="contact" placeholder = "JaneDoe@uw.edu" /></center>



         </div>

      


      </div>


             <div class="row">

              <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 previous">
                <center><a href="Sourceprev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 agree">
                 <center><a href="Thankyou_end.php"><button type="submit"><h2>Next</h2></button></center>
               </div>


             </div>


              <br/>

</div>

<!-- End of Agreement Zone -->


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