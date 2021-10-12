

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

<!------------------------------------------- Style ------------------------------------------->
<form method="post" action="S0_q2add.php">

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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:11%">
              2/40
        </div>
      </center>
      </div>
              </tr>
            </table>




           </div>

        


          <div class="qbloc">

             <center><h2>2. How long have you been an active ride-sharing driver?</h2></center>
             <center><h3>"Active" means the time between two rides should be no longer than a month.</h3></center>
             <div class="row">

              <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
              <tbody>
              <tr>
                <h3><input required <?php if($_SESSION["s0q2"]== "2 years or more") echo "Checked"; ?>  name="s0q2" id="q2y" type="radio" value="2 years or more"/> 2 years or more</h3>
              </tr>

              <tr>
                <h3><input required <?php if($_SESSION["s0q2"]== "1.5 years - less than 2 years") echo "Checked"; ?>  name="s0q2" id="q2y" type="radio" value="1.5 years - less than 2 years"/> 1.5 years - less than 2 years</h3>
              </tr>

              <tr>
                <h3><input required <?php if($_SESSION["s0q2"]== "1 year - less than 1.5 years") echo "Checked"; ?>  name="s0q2" id="q2y" type="radio" value="1 year - less than 1.5 years"/> 1 year - less than 1.5 years</h3>
              </tr>

              <tr>
                <h3><input required <?php if($_SESSION["s0q2"]== "6 months - less than 1 year") echo "Checked"; ?>  name="s0q2" id="q2y" type="radio" value="6 months - less than 1 year"/> 6 months - less than 1 year</h3>
              </tr>

              <tr>
                <h3><input name="s0q2" <?php if($_SESSION["s0q2"]== "Less than 6 months") echo "Checked"; ?> id="q2n" type="radio" value="Less than 6 months"/> Less than 6 months</h3>
              </tr>
              </tbody>
              </table>


          </div>
        </div>
      </center>
    </div>



          <div class="row">

             <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S0_q1prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S1_q3.php', time() + 365*24*3600);





?>


