
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30.7%">
              13/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q3add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

          <center><h2>3. Are you of Hispanic, Latino, or Spanish origin?</h2></center>
             <br/>
             <div class="row">
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-4 col-xs-6 col-sm-4 col-lg-4">
               <h3><input required <?php if($_SESSION["s3q3"]== "Y") echo "Checked"; ?>  name="s3q3" id="s3q3y" type="radio" value="Y"/> Yes</h3>


               <h3><input name="s3q3" <?php if($_SESSION["q3"]== "N") echo "Checked"; ?> id="s3q3n" type="radio" value="N"/> No</h3>

               <h3><input name="s3q3" <?php if($_SESSION["q3"]== "Prefer not to answer") echo "Checked"; ?> id="s3q3n" type="radio" value="Prefer not to answer"/> Prefer not to answer</h3>



               </div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q2prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S3_q3.php', time() + 365*24*3600);





?>


