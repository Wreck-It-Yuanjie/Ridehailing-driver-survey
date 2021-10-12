

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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 38.5%">
             16/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q6add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>6. What is the highest degree or level of school you have <b><i>completed</i></b>?</h2></center>
             <br/>
             <div class="row">
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                <h3><input required <?php if($_SESSION["s3q6"]== 1) echo "Checked"; ?>  name="s3q6" id="c1" type="radio" value=1 /> Less than High School</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 2) echo "Checked"; ?>  name="s3q6" id="c2" type="radio" value=2 /> High School Graduate or GED</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 3) echo "Checked"; ?>  name="s3q6" id="c3" type="radio" value=3 /> Some College/Technical school training</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 4) echo "Checked"; ?>  name="s3q6" id="c4" type="radio" value=4 /> 2-Year College Degree (Associates)</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 5) echo "Checked"; ?>  name="s3q6" id="c5" type="radio" value=5 /> 4-Year College Degree (BA, BS)</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 6) echo "Checked"; ?>  name="s3q6" id="c6" type="radio" value=6 /> Master’s Degree</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 7) echo "Checked"; ?>  name="s3q6" id="c7" type="radio" value=7 /> Doctoral Degree</h3>
                <h3><input required <?php if($_SESSION["s3q6"]== 8) echo "Checked"; ?>  name="s3q6" id="c8" type="radio" value=8 /> Professional Degree (MD, JD)</h3>

               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q5prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S3_q6.php', time() + 365*24*3600);





?>


