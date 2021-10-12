
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 46.2%">
              19/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q10add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>9. How many people live in your household <b><i>including yourself?</i></b> </h2></center>
             <center><h3>Your household includes yourself, people living with you and sharing income with you (e.g. spouse, partner, or dependents). </h3></center>
             <br/>
             <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <center><h2><input required value="<?php session_start(); echo $_SESSION['s3q10_1']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="s3q10" name="s3q10_1" placeholder="Example : 3"/></h2></center>
               </div>
               <div class="col-md-4  col-sm-4 col-lg-4">

               </div>

            </div>
            <br/>
            <br/>
            <center><h2>Of these, how many are children under the age of 18?</h2></center>
            <div class="row">
               <div class="col-md-4 col-sm-4 col-lg-4">
               </div>
               <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <center><h2><input required value="<?php session_start(); echo $_SESSION['s3q10_2']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text"  id="s3q10c" name="s3q10_2" placeholder="Example : 1"/></h2></center>
               </div>
               <div class="col-md-4  col-sm-4 col-lg-4">

               </div>

            </div>



          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q9prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S3_q10.php', time() + 365*24*3600);





?>


