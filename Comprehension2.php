
<?php
session_start();
// connect to the database
include('RDconnect.php');

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

table.table2 tr{
  width:300px;
}

table.table2 td {
  height: 120px;
  border: 5px solid lightgrey;
  border-collapse: collapse;
  padding: 5px;
}
.normal{background-color: white; color: black;}
.highlight{background-color: #baa4ff; color: white;}

</style>
<!------------------------------------------------------------------------------------------->

<form method="post" action="Comprehension2add.php">
<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">

     <div class="row">

     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="section">

              <table class = "table1"; style="margin-left: auto; margin-right: auto;">

                <tr>

              <center><h2><b>Section 3 of 3: Choice experiments</b></h2></center>

            </tr>

            <br>

            <tr>
              <center>
            <div class="progress" style = "width:40%" >
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:69.2%">
              28/40
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

    <div class="row">

    </div>


<!-- Present the choice scenario -->
<!-- Introduction -->
<center><h3>Please answer the following question carefully. You must answer the question correctly to continue the survey.</h3></center>

<div class="row">

<center><h2><b>What does the <span style = "color:red">red text </span> in the map mean? </b></h2></center>

<div class="row">

<!-- Choice scenario settings -->
<center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
<tbody>
                                  <!-- Choice: accept or reject? -->
<tr>
  <div class="radio" style="text-align: center; vertical-align: middle;font-size: 1.5em;">
    <!-- <img class = "travelerday" src="img/solo.png" width="300" height="190" /> <br> -->
    <label><input required  <?php if($_SESSION["comp2"]== "Yes") echo "Checked"; ?> type="radio" name="comp2" value = "Yes" >&nbsp; The current surge price in the neighborhood where I am is $0 &nbsp;</label>
  </div>
  <div class="radio" style="text-align: center; vertical-align: middle;font-size: 1.5em;">
    <!-- <img class = "travelerday" src="img/pooled.png" width="260" height="200" /><br> -->
    <label><input required  <?php if($_SESSION["comp2"]== "No_1") echo "Checked"; ?> type="radio" name="comp2" value = "No_1" >&nbsp; I will not be paid in the neighborhood where I am &nbsp;</label>
  </div>
  <div class="radio" style="text-align: center; vertical-align: middle;font-size: 1.5em;">
    <!-- <img class = "travelerday" src="img/pooled.png" width="260" height="200" /><br> -->
    <label><input required  <?php if($_SESSION["comp2"]== "No_2") echo "Checked"; ?> type="radio" name="comp2" value = "No_2" >&nbsp; I wait on average 0 minutes to get a trip request &nbsp;</label>
  </div>
  <div class="radio" style="text-align: center; vertical-align: middle;font-size: 1.5em;">
    <!-- <img class = "travelerday" src="img/pooled.png" width="260" height="200" /><br> -->
    <label><input required  <?php if($_SESSION["comp2"]== "No_3") echo "Checked"; ?> type="radio" name="comp2" value = "No_3" >&nbsp; The surge price in the neighborhood N1 is $0 &nbsp;</label>
  </div>
</tr>
                                  <!-- Experimental variables -->
<!-- Ride hailing demand in the current neighborhood -->
</tr>
</tbody>
</table>

<br>

<table class = "table2"; style = "width: 80%">
<tr>
  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td style = "border: none;"> </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n11" name="n11" onclick="func1(this.innerHTML)" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;" >&nbsp; <b>N1</b> <br> $4  <br> 0 min <br> 4 min </td>
  <td style = "border: none;"> </td>
  
</tr>

<tr>

  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n12" onclick="func2()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N2</b> <br> $0  <br> 8 min <br></b> 12 min</td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n15" onclick="func5()" style="width: 18%; text-align: center; vertical-align: middle; font-size: 1.3em; ">&nbsp; <b>N3</b> <span style = "color:red"><b><br>$0  <br></b></span> 0 min <br><b> You are here! </b></td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n13" onclick="func3()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N4</b> <br>$8  <br> 0 min <br> 12 min</td>
</tr>

<tr>
  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td style = "border: none;"> </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n14" onclick="func4()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N5</b> <br>$8  <br> 0 min <br> 4 min</td>
  <td style = "border: none;"> </td>
</tr>

</tbody>
</table>

<br/>

</center>

</div>

<!-- Assign choice to a super global variable -->
<?php 
  $comp2= $_POST['comp2'];
?>


</div>
</div>

<div class="row">

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
<center><a href="Comprehension1prev.php"><button type="button"><h2>Previous</h2></button></a></center>
</div>

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 agree">
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

setcookie('progress', 'Comprehension2.php', time() + 365*24*3600);


?>




