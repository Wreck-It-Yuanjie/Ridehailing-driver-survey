

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

<script>

function func_0(){

  document.getElementById("s0q1_Anotherspecify").disabled = true;
  document.getElementById("s0q1_Anotherspecify").style.borderWidth = "thin";

}

function func(){

  document.getElementById("s0q1_Anotherspecify").disabled = false;
  document.getElementById("s0q1_Anotherspecify").style.borderWidth = "thick";

}
</script>

<form method="post" action="S0_q1add.php">

<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">
     
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">


           <div class="section">

            <table class = "table1"; style="margin-left: auto; margin-right: auto;">

              <tr><center><h2><b>Section 1 of 3: Basic driving information</b></h2></center></tr>
              <tr><center><h3>In this section, we ask questions about your basic driving information, including your working time, target earnings, and how you respond to trip requests.</h3></center></tr>
          <br>
            </table>






       </div>

          <div class="qbloc">

             <center><h2>1. Which ride-sharing companies are you driving for? Check all that apply.</h2></center>
             <br/>
             <div class="row">

             <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
              <tbody>
              <tr>
              <td><h3><input <?php if($_SESSION["s0q1_Uber"]== "Uber") echo "Checked"; ?> onclick= "func_0()" name="s0q1_Uber" id="q2f" type="checkbox" value="Uber"> Uber</h3></td>
              </tr>
              <tr>
                <td><h3><input <?php if($_SESSION["s0q1_Lyft"]== "Lyft") echo "Checked"; ?> onclick= "func_0()" name="s0q1_Lyft" id="q2m" type="checkbox" value="Lyft"> Lyft</h3></td>
              </tr>
              <tr>
                <td><h3><input <?php if($_SESSION["s0q1_Wingz"]== "Wingz") echo "Checked"; ?> onclick= "func_0()" name="s0q1_Wingz" id="q2m" type="checkbox" value="Wingz"> Wingz</h3></td>
              </tr>
              <tr>
                <td>
                  <h3><input <?php if($_SESSION["s0q1_Another"]== "Another") echo "Checked"; ?> onclick= "func()" name="s0q1_Another" id="s0q1another" type="checkbox" value="Another"> Another (please specify): &nbsp; </h3>
                </td>
                <td>
                  <h3> <input required value="<?php session_start(); echo $_SESSION['s0q1_Anotherspecify']; ?>" type="text" id="s0q1_Anotherspecify" name="s0q1_Anotherspecify" disabled/></h3>
                </td>
              </tr>
              </tbody>
              </table>
            </center>


            </div>


          </div>



          <div class="row">

               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 disagree">
                 <center><a href="thanks.php"><button type="button"><h2>Cancel</h2></button></a></center>
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

setcookie('progress', 'S0_q1.php', time() + 365*24*3600);





?>


