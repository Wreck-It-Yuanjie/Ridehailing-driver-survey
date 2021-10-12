

<?php
session_start();
?>

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

<!------------------------------------------- Style ------------------------------------------->

<script>

function func5_0(){

  document.getElementById("dailyhours").disabled = true;
  document.getElementById("dailyhours").style.borderWidth = "thin";

}

function func5(){

  document.getElementById("dailyhours").disabled = false;
  document.getElementById("dailyhours").style.borderWidth = "thick";

}
</script>

<!-- Question corp -->
<form method="post" action="S1_q5add.php">


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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:19%">
              8/40
              </div>
            </center>
            </div>
            </tr>

            </table>



           </div>




       </div>
      

     </div>

     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>8. Do you usually try to work a certain number of hours per day?</h2></center>
             <br>
                <div class= "row">

             <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
                  <tbody>
                  <tr>
                  <h3><input <?php if($_SESSION["dailyhoursbinary"]== "No") echo "Checked"; ?> onclick= "func5_0()" name="dailyhoursbinary" id="q51" type="radio" value="No"> No</h3>
                  </tr>
                  <tr>
                    <td>
                  <h3><input <?php if($_SESSION["dailyhoursbinary"]== "Yes") echo "Checked"; ?> onclick= "func5()" required name="dailyhoursbinary" id="q52" type="radio" value="Yes"> Yes (please specify): </h3>
                </td>
                <td>
                  <h3><input required value="<?php session_start(); echo $_SESSION['dailyhours']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="dailyhours" name="dailyhours" disabled = "true"/> </h3>
                </td>
                <td>
                  <h3>hours</h3>
                </td>
                  </tr>
              </tbody>
            </table>

              </div>

            </div>
          </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S1_q3prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S1_q5.php', time() + 365*24*3600);





?>


