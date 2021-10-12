

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

function func1(){

  document.getElementById("dailystopworkingtime").disabled = true;

}

function func2(){

  document.getElementById("dailystopworkingtime").disabled = false;

}
</script>

<!------------------------------------------- Style ------------------------------------------->
<form method="post" action="S1_q3add.php">


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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:17%">
              7/40
              </div>
            </center>
            </div>

            </tr>


            </table>

           </div>
        

          <div class="qbloc">

              <center><h2>7. Do you stop driving at around the same time every day?</h2></center>
              <br>
                  <div class= "row">

                  <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
                  <tbody>
                  <tr>
                  <h3><input onclick= "func1()" required <?php if($_SESSION["dailystoptimebinary"]== "No") echo "Checked"; ?> name="dailystoptimebinary" id="dailystoptimebinary1" type="radio" value="No"> No</h3>
                  </tr>
                  <tr>
                  <h3><input required onclick= "func2()" <?php if($_SESSION["dailystoptimebinary"]== "Yes") echo "Checked"; ?> name="dailystoptimebinary" id="dailystoptimebinary2" type="radio" value="Yes"> Yes, I stop working at <input required value="<?php echo $_SESSION['dailystopworkingtime']; ?>" style = "border: none" type="time" id="dailystopworkingtime" name="dailystopworkingtime" min="00:00" max="24:00" disabled = "true"></h3>
                  </tr>
                </tbody>
              </table>

              </div>

            

          </div>
        </div>



          <div class="row">

                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S1_q2prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S1_q3.php', time() + 365*24*3600);



?>


