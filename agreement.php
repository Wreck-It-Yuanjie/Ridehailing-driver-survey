<!DOCTYPE html>
<html>

<head>
<?php
// session_start();

if(empty ($user)){
include('user.php'); }

$user = $_COOKIE['user'];

?>
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

          <a href="index.php"> <img src="img/logo.png" width="60%"/></a>

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

<!-- Start of the home survey corp -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 corp">

  <div class="row">
    <div class="container">

       <br/>
<h3 style = "color:white"><b> Please scroll down and review the consent materials, then click Agree or Disagree: </b></h3>
<h3><b>  </b></h3>
           <!-- Agreement Div Zone -->

             <div class="agreement" id="consent" onscroll="if(2>1){/*enable the button*/ document.getElementById('agreebtn').disabled=false; document.getElementById('disagreebtn').disabled=false; }">


  <center> <h1><b>Consent Form</b></h1> </center>

               <center><h3><i><b>Ride-sharing Driver Behavior Study
               </b></i></h3></center>
               <br/><br/>
               <h4><b><u>Researchers</u></b></h4>
               <br/>
               <h4>Don MacKenzie, Associate Professor, Civil & Environmental Engineering, dwhm@uw.edu, 206-685-7198</h4>
               <h4>Yuanjie Tu, PhD Student, Civil & Environmental Engineering, yuanjt2@uw.edu</h4>
               <h4>Moein Khaloei, PhD Student, Civil & Environmental Engineering, moeinkh@uw.edu</h4>
               <br/>
               <h4><b><u>Researchers’ statement</u></b></h4>
               <br/>
               <h4>We are asking you to be in a research study.  The purpose of this consent form is to give you the information you will need to help you decide whether to be in the study or not.  Please read the form carefully. This process is called “informed consent.”  You should keep a copy of this form for your records.</h4>
               <br/>
               <center><h3><b><i>You should only complete this form if you understand it in full. If you have any questions about this form, please contact the researchers listed above.</i></b></h3></center>
               <br/>
               <center><h2><b>PURPOSE OF THE STUDY</b></h2></center>
               <br/>
               <h4>This study is intended to learn how policy changes might affect drivers' choices when working as a ride-sharing driver. <b>Please answer the questions based on your <u>current feelings and attitudes.</u></b></h4>
               <br/>
               <center><h2><b>STUDY PROCEDURES</b></h2></center>
               <br/>
               <h4>If you volunteer to participate in this study, we would ask you to do the following things:</h4>
               <h4><b><u>Your background information</u></b></h4>
               <h4>We will ask you questions via an online questionnaire about you, your household characteristics, and your driving habits.</h4>
               <h4><b><u>Simulation of travel scenarios</u></b></h4>
               <h4> Then we will present you several travel scenarios, and ask you to choose whether to stop/continue working, pull over and wait/go to another place, and whether to accept or reject the trip request. </h4>
               <h4><b><u>Cessation of Participation</u></b></h4>
               <h4>Your participation in this study is voluntary and you can stop participating at any time if you do not wish to answer a question or for any other reason. </h4>
               <br/>
               <center><h2><b>CONFIDENTIALITY OF RESEARCH INFORMATION</b></h2></center>
               <br/>
               <h4>Any information that is obtained in connection with this study and that can be identified with you will remain confidential and will be disclosed only with your permission or as required by law. For any location information (including home location and work place locations) you have the choice to provide the crossroads instead of street address. No system for protecting confidentiality is completely secure and the information about you could be inadvertently accessed or seen by someone outside the research team.
              
               Government or university staffs review studies such as this one to make sure they are being done safely and legally.  If a review of this study takes place, your records may be examined.  The reviewers will protect your privacy.  The study records will not be used to put you at legal risk of harm.
               The data collected in this study may be made available for use by other researchers. If this happens, none of your identifying information will be shared.
               </h4>
               <br/>
               <center><h2><b>RESEARCH-RELATED INJURY</b></h2></center>
               <br/>
               <h4>

                 If you think you have a medical problem or illness related to this research, contact Don MacKenzie at <b>206-794-0189</b> or <b>dwhm@uw.edu</b> right away. He will refer you for treatment.

               </h4>
               <h4><u>Subject’s statement</u></h4>
               <h4>I volunteer to take part in this research. If I have questions later about the research, or if I have been harmed by participating in this study, I can contact one of the researchers listed on this consent form. If I have questions about my rights as a research subject, I can call the Human Subjects Division at (206) 543-0098.
               </h4>
               <br/>
               <h4><b>ELECTRONIC CONSENT: Please select your choice below.</b></h4>
               <br/>
               <h4>Clicking on the "agree" button below indicates that:</h4>
               <ul>
                 <li><h4>You are currently a ridesharing driver</h4></li>
                 <li><h4>You understand the information above</h4></li>
                 <li><h4>You voluntarily agree to participate, and have not been pressured to do so</h4></li>
                 <li><h4>You can only participate once.</h4></li>
                 <li><h4>You are at least 18 years of age</h4></li>
               </ul>
               <br/>
               <h4><b><i>If you do not wish to participate in the research study, please decline participation by clicking on the "disagree" button</i></b></h4>




             </div>

           <!-- End of Agreement Zone -->
             <br/>
             <div class="row">

               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 disagree" onClick="checkdisagree()">
               <button  id="disagreebtn" disabled type="button" onClick="location.href='sorry.php';"><h3><b>Disagree</b></h3></button>
               </div>
               <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 agree" onClick="checkagree()" >
               <button id="agreebtn" disabled type="button"  onClick="location.href='questions.php';"><h3><b>Agree</b></h3></button>
               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>


             </div>


       <br/>

    </div>
  </div>
</div>

<!-- Start of the footer -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 footer">

  <div class="container">

     <div class="row">


     </div>

  </div>



</div>


<script type="text/javascript">






function checkagree(){



if(document.getElementById('agreebtn').disabled==true){

alert(' ”Please scroll down and review the consent form before clicking Agree or Disagree!” ?');



}


}



function checkdisagree(){


if(document.getElementById('disagreebtn').disabled==true){


alert(' ”please go through the consent form before you continue the survey!” ?');


}


}




</script>

<!-- End of the footer -->




<!-- JQUERY IMPORT-->
<script src="js/agree.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- END OF JQUERY IMPORT -->
</body>

</html>

