
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


<form method="post" action="Sourceadd.php">

<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">
     
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">


           <div class="section">

              <table class = "table1"; style="margin-left: auto; margin-right: auto;">

              <center><h2><b>Comments</b></h2></center>
            </table>






       </div>

          <div class="qbloc">

             <center><h2>How did you hear about this survey?</h2></center>
             <br/>
             <div class="row">
              <center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
              <tbody>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Facebook") echo "Checked"; ?> onclick= "func()" required name="qsource" id="qsource0" type="radio" value="Facebook"> Facebook Ad</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Uberpeople") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource2" type="radio" value="Uberpeople"> Uberpeople.net</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Text") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource3" type="radio" value="Text"> Text messages</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Call") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource4" type="radio" value="Call"> Phone calls</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Airport") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource5" type="radio" value="Airport"> Airport</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Email") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource6" type="radio" value="Email"> Email</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "During a ride") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource7" type="radio" value="During a ride"> During a ride</h3>
              </tr>
              <tr>
                <h3><input <?php if($_SESSION["qsource"]== "Friends") echo "Checked"; ?> onclick= "func()" name="qsource" id="qsource8" type="radio" value="Friends"> Friends</h3>
              </tr>
            </tbody>
          </table>
            </div>


          </div>



          <div class="row">

               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 disagree">
                 <center><a href="commentprev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'Source.php', time() + 365*24*3600);





?>


