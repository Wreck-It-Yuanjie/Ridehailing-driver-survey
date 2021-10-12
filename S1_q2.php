
<?php
session_start();
?>

<!-- Question corp -->

<!------------------------------------------- Style ------------------------------------------->
<style>
table.table1 {
  border: none;
  border-collapse: collapse;
}
table.table1 tr {
  border: none;
}
table.table1 td:first-child, th:first-child {
 border: none;
}

table.table1 td:nth-child(2) {
  border: none;
}

table.table1 td:nth-child(4) {
  border: none;
}

</style>

<script>

function func0(){

  document.getElementById("dailystartworkingtime").disabled = true;

}

function func1(){

  document.getElementById("dailystartworkingtime").disabled = false;

}
</script>


<!------------------------------------------- Style ------------------------------------------->
<form method="post" action="S1_q2add.php">


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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:16%">
              6/40
        </div>
      </center>
      </div>
              </tr>

            </table>

           </div>
        

          <div class="qbloc">

             <center><h2>6. Do you start driving at around the same time every day?</h2></center>
             <br>
                <div class= "row">

                  <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
                  <tbody>
                  <tr>
                  <h3><input onclick= "func0()" required <?php if($_SESSION["dailystarttimebinary"]== "No") echo "Checked"; ?> name="dailystarttimebinary" id="dailystarttimebinary" type="radio" value="No"> No</h3>
                  </tr>
                  <tr>
                  <h3><input onclick= "func1()" <?php if($_SESSION["dailystarttimebinary"]== "Yes") echo "Checked"; ?> required name="dailystarttimebinary" id="dailystarttimebinary" type="radio" value="Yes"> Yes, I start working at <input required value="<?php echo $_SESSION['dailystartworkingtime']; ?>" style = "border: none" type="time" id="dailystartworkingtime" name="dailystartworkingtime" min="00:00" max="24:00" disabled = "true"></h3>
                  </tr>
              </tbody>
            </table>

              </div>

            

          </div>
        </div>



          <div class="row">

                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q8prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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
<script>
func();
</script>



<!-- End of question corp -->

<?php

setcookie('progress', 'S1_q2.php', time() + 365*24*3600);



?>


