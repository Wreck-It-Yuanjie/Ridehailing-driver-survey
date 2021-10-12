

<?php
session_start();
// connect to the database
include('RDconnect.php');

$_SESSION["donnees"]=$_SESSION["sp4"]; # defined senario 1

// echo "1"

$user = $_COOKIE['user'];

$_SESSION["DMS"]= $_SESSION["donnees"]["DMS"];
$_SESSION["DMW"]= $_SESSION["donnees"]["DMW"];
$_SESSION["RT"]= $_SESSION["donnees"]["RT"];
$_SESSION["LT"]= $_SESSION["donnees"]["LT"];
$_SESSION["PR"]= $_SESSION["donnees"]["PR"];
$_SESSION["MD"]= $_SESSION["donnees"]["MD"];

// $datab=$reponse2->fetch();

// write the extracted levels data into spdata_resp table
$reponse2 = $bdd->prepare('insert into spdata_resp (user, date, DMS, DMW, RT, LT, PR, MD, person, scenario)
values(:user, CURRENT_TIMESTAMP, :DMS, :DMW, :RT, :LT, :PR, :MD, :p, :scenario)');

$reponse2->execute(array(
             'p' => $_SESSION['userlvl'],
             'scenario' => 4,
             'user' => $user,
             'DMS' => $_SESSION["DMS"],
             'DMW' => $_SESSION["DMW"],
             'RT' => $_SESSION["RT"],
             'LT' => $_SESSION["LT"],
             'PR' => $_SESSION["PR"],
             'MD' => $_SESSION["MD"],
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
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
</style>
<!------------------------------------------------------------------------------------------->
<form method="post" action="S2_RESP_q4add.php">
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
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:64.1%">
              26/40
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
<center><h3> 16. Suppose you just recieved a trip request. The trip information is shown below. </h3></center>

<div class="row">

<center><h2><b> Will you accept or reject the trip? </b></h2></center>

      <div class="row">

<!-- Choice scenario settings -->
<center><table class = "table1"; style="margin-left: auto; margin-right: auto; width: 40%">
<tbody>
                                  <!-- Choice: accept or reject? -->
<tr>
<td  style="text-align: right; vertical-align: middle;font-size: 1.3em;">&nbsp;  &nbsp;</td>
<td  style="text-align: center; vertical-align: middle;font-size: 1.3em;">
  <div class="radio">
    <!-- <img class = "travelerday" src="img/solo.png" width="300" height="190" /> <br> -->
    <h3><input required  <?php if($_SESSION["sp4modechoice0"]== "Accept") echo "Checked"; ?> type="radio" name="sp4modechoice0" value = "Accept" >&nbsp; Accept &nbsp;</h3>
  </div>
</td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td  style="text-align: center; vertical-align: middle;font-size: 1.3em;">
  <div class="radio">
    <!-- <img class = "travelerday" src="img/pooled.png" width="260" height="200" /><br> -->
    <h3><input required  <?php if($_SESSION["sp4modechoice0"]== "Reject") echo "Checked"; ?> type="radio" name="sp4modechoice0" value = "Reject" >&nbsp; Reject &nbsp;</h3>
  </div>
</td>
</tr>

<br>
                                  <!-- Experimental variables -->
<!-- Ride hailing demand in the current neighborhood -->
</tr>

</tbody>
</table>

<br>

<table class = "table1" style = "width: 85%;">
<tbody>
<tr>
    <h3>Surge price: <?php echo $_SESSION["DMS"]; ?><br></h3>
    <h3>Expected waiting time until next request (if you decline): <?php echo $_SESSION["DMW"]; ?><br></h3>
    <h3>Passenger rating: <?php echo $_SESSION["PR"]; ?>/5.0 <br></h3>
    <h3>Driving time to passenger's location: <?php echo $_SESSION["RT"]; ?>  min<br></h3>
    <h3>Long trip (over 45 minutes): <?php echo $_SESSION["LT"]; ?><br></h3>
    <h3>Solo or Shared/Pooled: <?php echo $_SESSION["MD"]; ?><br></h3>
  
</tr>

</tbody>
</table>

</center>
<br/>

</div>

<!-- Assign choice to a super global variable -->
<?php 
  $modechoice0= $_POST['sp1modechoice0'];
?>


</div>
</div>

<div class="row">

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
<center><a href="S2_RESP_q3prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'S2_RESP_q4.php', time() + 365*24*3600);


?>




