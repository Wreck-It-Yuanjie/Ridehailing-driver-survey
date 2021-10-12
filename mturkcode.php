<!DOCTYPE html>

<?php
include('RDconnect.php');
$user = $_COOKIE['user'];
$reponse = $bdd->prepare('select mturkid FROM users where userid =:user' );

$reponse->execute(array(
	'user' =>$user,
	));


$donnees2 = $reponse->fetch();
#print_r($donnees2);
$mturkid =  $donnees2['mturkid']; 
#print_r($mturkid);
?>
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




<!-- End of Home header -->

<!-- Thanks Message -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 corp">
   
   <div class="container">

      <div class="row">

         <div class="qbloc" style="margin-top:10%;">

           <center>
               
               <h2> Your response was submitted successfully.
<br/></br>
Thank you for your participation!</h2>
<br/></br>
<h2><b><i>Important: As the final step, please enter the following survey code in Mturk and submit the response to get paid!</i></b> </h2>
<br/></br></h4>

<h1><?php echo $mturkid; ?> </h1>




            </center>



         </div>

      

         <br/>

       <!--  <div class="agree" style="margin-bottom:10%;">

           


             <a href="index.php"> <button><h2><span class="glyphicon glyphicon-repeat"></span> Back</h2></button></a>




           




         </div>-->





      </div>

   </div>

</div>



<!-- End of thanks Message -->


<!-- End of loading questions steps-->

<!-- Start of the footer -->




<!-- End of the footer -->




<!-- JQUERY IMPORT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- END OF JQUERY IMPORT -->
</body>

</html>