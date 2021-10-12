

<?php
session_start();
// connect to the database
include('RDconnect.php');

$reponse_userlvl_worktime = $bdd->prepare('SELECT * from userlvl_worktime where used =:used');
$reponse_userlvl_worktime->execute(array('used' => 'no',)); ## assign the user status as "no"

$dd_worktime = $reponse_userlvl_worktime->fetch();
$_SESSION['userlvl_worktime']= $dd_worktime[0];

// change user to "used"
$reponse3_worktime = $bdd->prepare('update userlvl_worktime set used =:used where (userlvl =:user)'); # This part is for making sure that questions remain in
                                            #
$reponse3_worktime->execute(array('user' =>$dd_worktime[0],
              'used' => 'yes',
));


$reponse_userlvl = $bdd->prepare('SELECT * from userlvl_resp where used =:used');
$reponse_userlvl->execute(array('used' => 'no',)); ## assign the user status as "no"

$dd = $reponse_userlvl->fetch();
$_SESSION['userlvl']= $dd[0];

// change user to "used"
$reponse4 = $bdd->prepare('update userlvl_resp set used =:used where (userlvl =:user)'); # This part is for making sure that questions remain in
                                            #
$reponse4->execute(array('user' =>$dd[0],
              'used' => 'yes',
));
?>



<!DOCTYPE html>
<html>

<head>

    <title>Survey</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
           <!-- Style & bootstrap import -->
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/animate.css">
          <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
           <!-- End of inmport -->

     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

     <!-- SEO injection zone -->





     <!-- End of SEO injection zone -->

     

</head>

<body>

<!-- Header of home -->




<!-- End of Home header -->

<!-- Thanks Message -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 corp">
   
   <div class="container">

      <div class="row">

         <div class="qbloc" style="margin-top:10%;">

           <center>
               
               <br><br><br><br><br><br><br><br><br><h1 style = "font-size: 4em;"><b> Thank you very much for your interest in our study!</b> <br><br><br><br>



            </center>



         </div>

      


      </div>

   </div>

</div>



<!-- End of thanks Message -->


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