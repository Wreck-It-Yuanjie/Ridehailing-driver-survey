

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

              <center><h2><b>Section 1 of 3: Basic driving information</b></h2></center>

            </tr>

            <br>

            <tr>
              <center>
            <div class="progress" style = "width:40%" >
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:12%">
              3/40
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

             <center><h2>3. Please enter your King County for-hire driver permit number.</h2></center>
             <br/>
             <form method="post" action="S0_q3add.php">
             <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-6 col-sm-4 col-lg-4">
                <center><h2><input required value="<?php session_start(); echo $_SESSION['s0q3']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="s0q3" name="s0q3"/></h2></center>
               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">


			   <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S0_q2prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S0_q3.php', time() + 365*24*3600);





?>

