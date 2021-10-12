

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
<form method="post" action="S2_WTRL_RL_q4add.php">
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:89.7%">
              36/40
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
<?php if ($_SESSION['sp4modechoice0_worktime'] == "Yes")
{?>

<h3> 8. Imagine today you have been driving for <b><?php echo intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']); ?> hours <?php echo intval(60*((float)$_SESSION["ADH"]*$_SESSION['baseADH'] - intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']))); ?> minutes </b> and earned <b>$<?php echo (float)$_SESSION["ADI"]*$_SESSION['baseADI']; ?></b> so far. </h3>

  <div class="row">

    <center><h2> <b> Which neighborhood would you like to go? </b></h2></center>

    <table class = "table1"; style="margin-left: auto; margin-right: auto;">
      <tr>
        <td>
          <h3><center>Please select the neighborhood here: </center></h3> 
        </td>
        <td>
          <center>
            <select required style="height:40px; width:100%; font-size: 1.3em"  name="sp4relocation"/>
        <option value = "">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
        <option value="01" <?php if($_SESSION["sp4relocation"]== "01") echo "SELECTED"; ?>>N1</option>
        <option value="02" <?php if($_SESSION["sp4relocation"]== "02") echo " SELECTED"; ?>>N2</option>
        <option value="03" <?php if($_SESSION["sp4relocation"]== "03") echo "SELECTED"; ?>>N3</option>
        <option value="04" <?php if($_SESSION["sp4relocation"]== "04") echo " SELECTED"; ?>>N4</option>
        <option value="05" <?php if($_SESSION["sp4relocation"]== "05") echo " SELECTED"; ?>>N5</option>
        </select>
        </center>
        </td>
      </tr>
    </table>


          <div class="row">
<center>
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

</div>

<!-- Assign choice to a super global variable -->
<?php 
  $relocationchoice0= $_POST['sp4relocation'];
?>


</div>

<?php } else { ?>

  <h3> 8. Imagine today you have been driving for <b><?php echo intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']); ?> hours <?php echo intval(60*((float)$_SESSION["ADH"]*$_SESSION['baseADH'] - intval((float)$_SESSION["ADH"]*$_SESSION['baseADH']))); ?> minutes </b> and earned <b>$<?php echo (float)$_SESSION["ADI"]*$_SESSION['baseADI']; ?></b> so far.</h3>

    <center><h2> <b>When would you start your next shift? </b></h2></center>
    <br/>

          <div class="row">

    <!-- Choice scenario settings -->
    <center><table style="margin-left: auto; margin-right: auto;">
    <tr>
    <!-- <td  style="text-align: center; vertical-align: middle;font-size: 2em;"> -->
      <center>
        <select required style="height:50px; width: 50%; font-size: 1.3em"  name="sp4worktime2"/>
        <option value = "">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
        <option value="1 hour later" <?php if($_SESSION["sp4worktime2"]== "1 hour later") echo "SELECTED"; ?>>1 hour later</option>
        <option value= "2 hours later" <?php if($_SESSION["sp4worktime2"]== "2 hour later") echo " SELECTED"; ?>>2 hours later</option>
        <option value="3 hours later" <?php if($_SESSION["sp4worktime2"]== "3 hours later") echo "SELECTED"; ?>>3 hours later</option>
        <option value="4 hours later" <?php if($_SESSION["sp4worktime2"]== "4 hours later") echo " SELECTED"; ?>>4 hours later</option>
        <option value="5 hours later" <?php if($_SESSION["sp4worktime2"]== "5 hours later") echo " SELECTED"; ?>>5 hours later</option>
        <option value="6 hours later" <?php if($_SESSION["sp4worktime2"]== "6 hours later") echo " SELECTED"; ?>>6 hours later</option>
        <option value="7 hours later" <?php if($_SESSION["sp4worktime2"]== "7 hours later") echo " SELECTED"; ?>>7 hours later</option>
        <option value="8 hours later" <?php if($_SESSION["sp4worktime2"]== "8 hours later") echo " SELECTED"; ?>>8 hours later</option>
        <option value="9 hour later" <?php if($_SESSION["sp4worktime2"]== "9 hour later") echo "SELECTED"; ?>>9 hour later</option>
        <option value= "10 hours later" <?php if($_SESSION["sp4worktime2"]== "10 hour later") echo " SELECTED"; ?>>10 hours later</option>
        <option value="11 hours later" <?php if($_SESSION["sp4worktime2"]== "11 hours later") echo "SELECTED"; ?>>11 hours later</option>
        <option value="12 hours later" <?php if($_SESSION["sp4worktime2"]== "12 hours later") echo " SELECTED"; ?>>12 hours later</option>
        <option value="13 hours later" <?php if($_SESSION["sp4worktime2"]== "13 hours later") echo " SELECTED"; ?>>13 hours later</option>
        <option value="14 hours later" <?php if($_SESSION["sp4worktime2"]== "14 hours later") echo " SELECTED"; ?>>14 hours later</option>
        <option value="15 hours later" <?php if($_SESSION["sp4worktime2"]== "15 hours later") echo " SELECTED"; ?>>15 hours later</option>
        <option value="16 hours later" <?php if($_SESSION["sp4worktime2"]== "16 hours later") echo " SELECTED"; ?>>16 hours later</option>
        <option value= "17 hours later" <?php if($_SESSION["sp4worktime2"]== "17 hour later") echo " SELECTED"; ?>>17 hours later</option>
        <option value="18 hours later" <?php if($_SESSION["sp4worktime2"]== "18 hours later") echo "SELECTED"; ?>>18 hours later</option>
        <option value="19 hours later" <?php if($_SESSION["sp4worktime2"]== "19 hours later") echo " SELECTED"; ?>>19 hours later</option>
        <option value="20 hours later" <?php if($_SESSION["sp4worktime2"]== "20 hours later") echo " SELECTED"; ?>>20 hours later</option>
        <option value="21 hours later" <?php if($_SESSION["sp4worktime2"]== "21 hours later") echo " SELECTED"; ?>>21 hours later</option>
        <option value="22 hours later" <?php if($_SESSION["sp4worktime2"]== "22 hours later") echo " SELECTED"; ?>>22 hours later</option>
        <option value="23 hours later" <?php if($_SESSION["sp4worktime2"]== "23 hours later") echo " SELECTED"; ?>>23 hours later</option>
        <option value="24 hours later" <?php if($_SESSION["sp4worktime2"]== "24 hours later") echo " SELECTED"; ?>>24 hours later</option>
        </select>
      </center>
    </td>
  </tr>
    </table>
</center>
<br>
</div>

  <?php 
  $worktimechoice0= $_POST['sp4worktime2'];
?>


<?php } ?>
                                  <!-- Experimental variables -->

</div>

<div class="row">

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
<center><a href="S2_WTRL_q4prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S2_WTRL_RL_q4.php', time() + 365*24*3600);


?>




