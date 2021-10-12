
<?php
session_start();
// connect to the database
include('RDconnect.php');

$_SESSION["donnees_worktime"]=$_SESSION["sp4_worktime"]; # defined senario 1

// echo "1"

$user = $_COOKIE['user'];

$_SESSION["ADI"]= $_SESSION["donnees_worktime"]["ADI"];
$_SESSION["ADH"]= $_SESSION["donnees_worktime"]["ADH"];
$_SESSION["DMLS"]= $_SESSION["donnees_worktime"]["DMLS"];
$_SESSION["DMLW"]= $_SESSION["donnees_worktime"]["DMLW"];

$_SESSION["DMDS_1"]= $_SESSION["donnees_worktime"]["DMDS_1"];
$_SESSION["DMDS_2"]= $_SESSION["donnees_worktime"]["DMDS_2"];
$_SESSION["DMDS_3"]= $_SESSION["donnees_worktime"]["DMDS_3"];
$_SESSION["DMDS_4"]= $_SESSION["donnees_worktime"]["DMDS_4"];

$_SESSION["DMDW_1"]= $_SESSION["donnees_worktime"]["DMDW_1"];
$_SESSION["DMDW_2"]= $_SESSION["donnees_worktime"]["DMDW_2"];
$_SESSION["DMDW_3"]= $_SESSION["donnees_worktime"]["DMDW_3"];
$_SESSION["DMDW_4"]= $_SESSION["donnees_worktime"]["DMDW_4"];

$_SESSION["RTD_1"]= $_SESSION["donnees_worktime"]["RTD_1"];
$_SESSION["RTD_2"]= $_SESSION["donnees_worktime"]["RTD_2"];
$_SESSION["RTD_3"]= $_SESSION["donnees_worktime"]["RTD_3"];
$_SESSION["RTD_4"]= $_SESSION["donnees_worktime"]["RTD_4"];
// $datab=$reponse2->fetch();

// write the extracted levels data into spdata_resp table
$reponse2_worktime = $bdd->prepare('insert into spdata_worktime (user, date, ADI, ADH, DMLS, DMLW, DMDS_1, DMDS_2, DMDS_3, DMDS_4, DMDW_1, DMDW_2, DMDW_3, DMDW_4, RTD_1, RTD_2, RTD_3, RTD_4, person, scenario)
values(:user, CURRENT_TIMESTAMP, :ADI, :ADH, :DMLS, :DMLW, :DMDS_1, :DMDS_2, :DMDS_3, :DMDS_4, :DMDW_1, :DMDW_2, :DMDW_3, :DMDW_4, :RTD_1, :RTD_2, :RTD_3, :RTD_4, :p, :scenario)');

$reponse2_worktime->execute(array(
             'p' => $_SESSION['userlvl_worktime'],
             'scenario' => 4,
             'user' => $user,
             'ADI' => (float)$_SESSION["ADI"]*$_SESSION['baseADI'],
             'ADH' => (float)$_SESSION["ADH"]*$_SESSION['baseADH'],
             'DMLS' => $_SESSION["DMLS"],
             'DMLW' => $_SESSION["DMLW"],
             'DMDS_1' => $_SESSION["DMDS_1"],
             'DMDS_2' => $_SESSION["DMDS_2"],
             'DMDS_3' => $_SESSION["DMDS_3"],
             'DMDS_4' => $_SESSION["DMDS_4"],
             'DMDW_1' => $_SESSION["DMDW_1"],
             'DMDW_2' => $_SESSION["DMDW_2"],
             'DMDW_3' => $_SESSION["DMDW_3"],
             'DMDW_4' => $_SESSION["DMDW_4"],
             'RTD_1' => $_SESSION["RTD_1"],
             'RTD_2' => $_SESSION["RTD_2"],
             'RTD_3' => $_SESSION["RTD_3"],
             'RTD_4' => $_SESSION["RTD_4"],
              ));

// echo $_SESSION['userlvl'].",".$_SESSION['DM']

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

<form method="post" action="S2_WTRL_q4add.php">

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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:87.8%">
              35/40
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

<center><h3> 7. Imagine today you have been driving for <b><?php echo intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']); ?> hours <?php echo intval(60*((float)$_SESSION["ADH"]*$_SESSION['baseADH'] - intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']))); ?> minutes </b> and earned <b>$<?php echo (float)$_SESSION["ADI"]*$_SESSION['baseADI']; ?></b> so far. The map below shows the information in your current location and surrounding neighborhoods. </h3></center>

<div class="row">

<center><h2><b>Will you continue working now? </b></h2></center>

      <div class="row">

<!-- Choice scenario settings -->
<center><table class = "table1"; style="margin-left: auto; margin-right: auto;">
<tbody>
                                  <!-- Choice: accept or reject? -->
<tr>
<td>&nbsp;</td>
<td  style="text-align: right; vertical-align: middle;font-size: 1.3em;">&nbsp;  &nbsp;</td>
<td  style="text-align: center; vertical-align: middle;font-size: 1.3em;">
  <div class="radio">
    <!-- <img class = "travelerday" src="img/solo.png" width="300" height="190" /> <br> -->
    <label><input required  <?php if($_SESSION["sp4modechoice0_worktime"]== "Yes") echo "Checked"; ?> type="radio" name="sp4modechoice0_worktime" value = "Yes" >&nbsp; Yes, keep working &nbsp;</label>
  </div>
</td>
<td  style="text-align: center; vertical-align: middle;font-size: 1.3em;">
  <div class="radio">
    <!-- <img class = "travelerday" src="img/pooled.png" width="260" height="200" /><br> -->
    <label><input required  <?php if($_SESSION["sp4modechoice0_worktime"]== "No") echo "Checked"; ?> type="radio" name="sp4modechoice0_worktime" value = "No" >&nbsp; No, stop working for now &nbsp;</label>
  </div>
</td>

</tr>
<!-- Ride hailing demand in the current neighborhood -->
</tr>
</tbody>
</table>

<br>

<table class = "table2"; style = "width: 80%">
<tr>
  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td style = "border: none;"> </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n11" name="n11" onclick="func1(this.innerHTML)" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;" >&nbsp; <b>N1</b> <br> $<?php echo $_SESSION["DMDS_1"]; ?>  <br> <?php echo $_SESSION["DMDW_1"]; ?> min <br> <?php echo $_SESSION["RTD_1"]; ?> min </td>
  <td style = "border: none;"> </td>
  
</tr>

<tr>

  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n12" onclick="func2()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N2</b> <br> $<?php echo $_SESSION["DMDS_2"]; ?>  <br> <?php echo $_SESSION["DMDW_2"]; ?> min <br> <?php echo $_SESSION["RTD_2"]; ?> min</td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n15" onclick="func5()" style="width: 18%; text-align: center; vertical-align: middle; font-size: 1.3em; ">&nbsp; <b>N3</b> <br>$<?php echo $_SESSION["DMLS"]; ?>  <br> <?php echo $_SESSION["DMLW"]; ?> min <br><b> You are here! </b></td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n13" onclick="func3()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N4</b> <br>$<?php echo $_SESSION["DMDS_3"]; ?>  <br> <?php echo $_SESSION["DMDW_3"]; ?> min <br> <?php echo $_SESSION["RTD_3"]; ?> min</td>
</tr>

<tr>
  <td style="width: 18%; text-align: right; vertical-align: middle; font-size: 1.3em; border: none;"><br>Surge price: <br>Waiting time: <br>Travel time: </td>
  <td style = "border: none;"> </td>
  <td onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'" id="n14" onclick="func4()" style="width: 18%; text-align: center; vertical-align: middle;font-size: 1.3em;">&nbsp; <b>N5</b> <br>$<?php echo $_SESSION["DMDS_4"]; ?>  <br> <?php echo $_SESSION["DMDW_4"]; ?> min <br> <?php echo $_SESSION["RTD_4"]; ?> min</td>
  <td style = "border: none;"> </td>
</tr>

</tbody>
</table>

</center>
<br/>

</div>

<!-- Assign choice to a super global variable -->
<?php 
  $modechoice0= $_POST['sp4modechoice0_worktime'];
?>


</div>
</div>

<div class="row">

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
<center><a href="Attentionprev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S2_WTRL_q4.php', time() + 365*24*3600);


?>




