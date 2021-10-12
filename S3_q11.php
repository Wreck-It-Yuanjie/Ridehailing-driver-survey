

<?php
session_start();
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

            <br>

            <tr>
              <center>
            <div class="progress" style = "width:40%" >
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 48.7%">
              20/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q11add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>10. Which category best describes your <b><i> household </i></b> income  before taxes from the last calendar year?</h2></center>
             <center><h3>Your household includes yourself, people living with you and sharing income with you (e.g. spouse, partner, or dependents). </h3></center>
            <br/>
             <div class="row">
               <div class="col-md-1 col-sm-1 col-lg-2">
               </div>
               <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5">
                <h3><input required <?php if($_SESSION["s3q11"]== 1) echo "Checked"; ?>  name="s3q11" id="c1" type="radio" value=1 /> Under $10,000</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 2) echo "Checked"; ?>  name="s3q11" id="c2" type="radio" value=2 /> $10,000 –– $14,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 3) echo "Checked"; ?>  name="s3q11" id="c3" type="radio" value=3 /> $15,000 –– $19,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 4) echo "Checked"; ?>  name="s3q11" id="c4" type="radio" value=4 /> $20,000 –– $24,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 5) echo "Checked"; ?>  name="s3q11" id="c5" type="radio" value=5 /> $25,000 –– $34,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 6) echo "Checked"; ?>  name="s3q11" id="c6" type="radio" value=6 /> $35,000 –– $49,999</h3>
              </div>
              <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5">
                <h3><input required <?php if($_SESSION["s3q11"]== 7) echo "Checked"; ?>  name="s3q11" id="c7" type="radio" value=7 /> $50,000 –– $74,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 8) echo "Checked"; ?>  name="s3q11" id="c8" type="radio" value=8 /> $75,000 –– $99,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 9) echo "Checked"; ?>  name="s3q11" id="c9" type="radio" value=9 /> $100,000 –– $149,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 10) echo "Checked"; ?>  name="s3q11" id="c10" type="radio" value=10 /> $150,000 –– $199,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 11) echo "Checked"; ?>  name="s3q11" id="c11" type="radio" value=11 /> $200,000 –– $249,999</h3>
                <h3><input required <?php if($_SESSION["s3q11"]== 12) echo "Checked"; ?>  name="s3q11" id="c12" type="radio" value=12 /> $250,000 or more</h3>

               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q10prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 agree" >
                 <center><button type="submit"><h2>Next</h2></button></center>
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

setcookie('progress', 'S3_q11.php', time() + 365*24*3600);





?>


