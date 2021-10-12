

<?php
session_start();

include('RDconnect.php');
?>

<!-- Question corp -->



<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">

     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

           <div class="section">

             <table class = "table1"; style="margin-left: auto; margin-right: auto;">

                <tr>

              <center><h2><b>Section 2 of 3: Background information</b></h2></center>

            </tr>
            <tr>
              <center><h3>This section asks some questions about you and your household. The answers you provide will help us to project the information from this small study to a larger population.</h3></center>
            </tr>

            <br>

            <tr>
              <center>
            <div class="progress" style = "width:40%" >
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:25.6%">
              11/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>

     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>1. What is your age?</h2></center>
             <br/>
             <form method="post" action="S3_q1add.php">
             <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-6 col-sm-4 col-lg-4">
                <center><h2><input required value="<?php session_start(); echo $_SESSION['s3q1']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="s3q1" name="s3q1" placeholder="Example: 25"/></h2></center>
               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">


			   <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S1_q9prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 agree" >
                 <center><button type="submit"><h2>Next</h2></button></center>
               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>



          </div>

          </form>

          <br/><br/>





       </div>



     </div>

  </div>
</div>


<!-- End of question corp -->


<?php

setcookie('progress', 'S3_q1.php', time() + 365*24*3600);





?>

