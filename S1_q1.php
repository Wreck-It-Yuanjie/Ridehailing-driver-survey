
<!-- Question corp -->
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


<form method="post" action="S1_q1add.php">

<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">
     
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">


           <div class="section">

            <table class = "table1"; style="margin-left: auto; margin-right: auto; ">
            	<tr>

              <center><h2><b>Section 1 of 3: Basic driving information</b></h2></center>
          </tr>
          <tr>
                <center>
                <div class="progress" style = "width:40%" >
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:13%">
              4/40
        </div>
      </center>
      </div>
              </tr>
            </table>






       </div>

          <div class="qbloc">

             <center><h2>4. Do you work as a ride-sharing driver during COVID-19 pandemic?</h2></center>
             <br/>
             <div class="row">
              <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
              <tbody>
              <tr>
                <h3><input <?php if($_SESSION["q2"]== "Yes") echo "Checked"; ?> onclick= "func()" required name="q2" id="q2f" type="radio" value="Yes"> Yes, I work during the pandemic</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["q2"]== "No") echo "Checked"; ?> onclick= "func()" name="q2" id="q2m" type="radio" value="No"> No, I stopped working during the pandemic, and I am not working now</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["q2"]== "Vaccine") echo "Checked"; ?> onclick= "func()" name="q2" id="q2m" type="radio" value="Vaccine"> I stopped working at the beginning, but start working again after getting vaccinated</h3>
              </tr>
            </tbody>
          </table>
            </div>


          </div>



          <div class="row">

               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 disagree">
                 <center><a href="S0_q3prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 agree" onClick = >
                 <center><button type="submit"><h2>Next</h2></button></center>
               </div>
			   <div class="col-md-2 col-sm-2 col-lg-2">
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

setcookie('progress', 'S1_q1.php', time() + 365*24*3600);





?>


