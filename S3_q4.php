
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%">
              14/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q4add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>4. What is your race?</h2></center>
             <br/>
             <div class="row">
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-10 col-xs-12 col-sm-10 col-lg-10">
                 <h3><input <?php if($_SESSION["s3q4"]== 1) echo "Checked"; ?> onclick= "func()" required name="s3q4" id="c1" type="radio" value=1> White</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 2) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c2" type="radio" value=2> Black or African American</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 3) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c3" type="radio" value=3> American Indian or Alaska Native</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 4) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c4" type="radio" value=4> Asian</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 5) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c5" type="radio" value=5> Native Hawaiian or Other Pacific Islander</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 6) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c6" type="radio" value=6> Another</h3>
                 <h3><input <?php if($_SESSION["s3q4"]== 7) echo "Checked"; ?> onclick= "func()" name="s3q4" id="c7" type="radio" value=7> Prefer not to answer</h3>

         <div id= "oth"></div></div>

               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>




          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q3prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S3_q4.php', time() + 365*24*3600);





?>


