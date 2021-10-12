
<!-- Question corp -->

<form method="post" action="S1_q9add.php">

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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:23.1%">
              10/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
      

     </div>

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>10. How many trip requests did you get last week?</h2></center>
             <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <center><h2><input style = "font-size: 0.8em" required value="<?php session_start(); echo $_SESSION['q9']; ?>" type="number" id="q9" name="q9"/></h2></center>
               </div>

             </div>

               <center><h2>Out of those, how many did you reject?</h2></center>
             <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <center><h2><input style = "font-size: 0.8em" required value="<?php session_start(); echo $_SESSION['q10']; ?>" type="number" id="q10" name="q10"/></h2></center>
               </div>
               <div class="col-md-4  col-sm-4 col-lg-4">

               </div>

            </div>


          </div>



          <div class="row">

               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 disagree">
                 <center><a href="S1_q7prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 agree" onClick = >
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

setcookie('progress', 'S1_q9.php', time() + 365*24*3600);





?>


