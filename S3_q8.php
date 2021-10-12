
<?php
session_start();
?>

<!-- Question corp -->

<script>
function func_38_0(){

  document.getElementById("s3q8_Anotherspecify").disabled = true;
  document.getElementById("s3q8_Anotherspecify").style.borderWidth = "thin";

}

function func_38(){

  document.getElementById("s3q8_Anotherspecify").disabled = false;
  document.getElementById("s3q8_Anotherspecify").style.borderWidth = "thick";

}
</script>

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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:14%">
              5/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
     </div>
      

     </div>
        <form method="post" action="S3_q8add.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>5. Do you have another job besides ride-sharing driver?</h2></center>
             <br/>
             <div class="row">
               
              <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
              <tbody>
              <tr>
              <h3><input <?php if($_SESSION["s3q8"]== 1) echo "Checked"; ?> onclick= "func_38_0()" required name="s3q8" id="c1" type="radio" value=1> Yes, employed, full-time (35+ hours/week)</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["s3q8"]== 2) echo "Checked"; ?> onclick= "func_38_0()" name="s3q8" id="c2" type="radio" value=2> Yes, employed, part-time (Fewer than 35 hours/week)</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["s3q8"]== 3) echo "Checked"; ?> onclick= "func_38_0()" name="s3q8" id="c3" type="radio" value=3> Yes, homemaker</h3>
              </tr>

              <tr>
                <h3><input <?php if($_SESSION["s3q8"]== 4) echo "Checked"; ?> onclick= "func_38_0()" name="s3q8" id="c3" type="radio" value=4> No, and I do not plan to find another job</h3>
              </tr>

              <tr>
                <h3><input <?php if($_SESSION["s3q8"]== 5) echo "Checked"; ?> onclick= "func_38_0()" name="s3q8" id="c3" type="radio" value=5> No, but I plan to find another job</h3>
              </tr>

              <tr>
                <td>
                  <h3><input <?php if($_SESSION["s3q8"]== 6) echo "Checked"; ?> onclick= "func_38()" name="s3q8" id="s3q8" type="radio" value=6> Another</h3>
                </td>
                <td>
                  <h3> <input required value="<?php session_start(); echo $_SESSION['s3q8_Anotherspecify']; ?>" type="text" id="s3q8_Anotherspecify" name="s3q8_Anotherspecify" disabled/></h3>
                </td>
              </tr>
              </tbody>
              </table>
            </center>

               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>


          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S1_q1prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S3_q8.php', time() + 365*24*3600);





?>


