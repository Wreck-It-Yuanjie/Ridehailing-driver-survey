
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:53.8%">
              22/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>

        <form method="post" action="S3_q13add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>12. What is your health status? </h2></center>
             <br/>
             <div class="row">
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                 <h3><input <?php if($_SESSION["s3q13"]== "Very good") echo "Checked"; ?> onclick= "func()" required name="s3q13" id="c1" type="radio" value="Very good"> Very good</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "Good") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c2" type="radio" value="Good"> Good</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "Fair") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c3" type="radio" value="Fair"> Fair</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "Poor") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c4" type="radio" value="Poor"> Poor</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "Very poor") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c5" type="radio" value="Very poor"> Very poor</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "I don't know") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c6" type="radio" value="I don't know"> I don't know</h3>
                 <h3><input <?php if($_SESSION["s3q13"]== "Prefer not to answer") echo "Checked"; ?> onclick= "func()" name="s3q13" id="c7" type="radio" value="Prefer not to answer"> Prefer not to answer</h3>

               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q12prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 agree" >
                 <center><button type="submit"><h2>Submit</h2></button></center>
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

setcookie('progress', 'S3_q13.php', time() + 365*24*3600);





?>


