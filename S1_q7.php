

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

function func7_0(){
  document.getElementById("dailyincome").disabled = true;
  document.getElementById("dailyincome").style.borderWidth = "thin";

}

function func7(){

  document.getElementById("dailyincome").disabled = false;
  document.getElementById("dailyincome").style.borderWidth = "thick";

}
</script>

<!-- Question corp -->
<form method="post" action="S1_q7add.php">


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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20.5%">
              9/40
              </div>
            </center>
            </div>
            </tr>

            </table>




       </div>
      

     </div>

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">

             <center><h2>9. Do you usually try to earn a certain amount of money per day?</h2></center>
             <br>
                <div class= "row">

             <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
                  <tbody>
                  <tr>
                  <h3><input <?php if($_SESSION["dailyincomebinary"]== "No") echo "Checked"; ?> onclick= "func7_0()" name="dailyincomebinary" id="q2m" type="radio" value="No"> No</h3>
                  </tr>
                  <tr>
                    <td>
                  <h3><input <?php if($_SESSION["dailyincomebinary"]== "Yes") echo "Checked"; ?> 
                  onclick= "func7()" required name="dailyincomebinary" id="q2f" type="radio" value="Yes"> Yes (please specify): $</h3>
                </td>
                <td>
                  <h3><input required value="<?php session_start(); echo $_SESSION['dailyincome']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="dailyincome" name="dailyincome" disabled = "true"/> </h3>
                </td>
                  </tr>
              </tbody>
            </table>

              </div>

            </div>
          </div>




          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S1_q5prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S1_q7.php', time() + 365*24*3600);





?>


