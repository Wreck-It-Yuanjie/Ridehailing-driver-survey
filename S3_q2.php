
<?php
session_start();
?>

</script>
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

<form method="post" action="S3_q2add.php">

<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">

     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

           <div class="section">

              <table class = "table1"; style="margin-left: auto; margin-right: auto;">

                <tr>

              <center><h2><b>Section 2 of 3: Background information</b></h2></center>

            </tr>

            <br>

            <tr>
              <center>
            <div class="progress" style = "width:40%" >
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:28.2%">
              12/40
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

             <center><h2>2. What is your gender?</h2></center>
             <br/>
             <div class="row">
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
               <div class="col-md-8 col-xs-12 col-sm-8 col-lg-4">
                <h3><input <?php if($_SESSION["s3q2"]== "F") echo "Checked"; ?> onclick= "func()" required name="s3q2" id="s3q2f" type="radio" value="F"> Female</h3>
                 <h3><input <?php if($_SESSION["s3q2"]== "M") echo "Checked"; ?> onclick= "func()" name="s3q2" id="s3q2m" type="radio" value="M"> Male</h3>
                 <h3><input <?php if($_SESSION["s3q2"]== "Another") echo "Checked"; ?> onclick= "func()" name="s3q2" id="s3q2oth" type="radio" value="Another"> Another</h3>
                 <h3><input <?php if($_SESSION["s3q2"]== "Prefer not to answer") echo "Checked"; ?> onclick= "func()" name="s3q2" id="s3q2oth" type="radio" value="Prefer not to answer"> Prefer not to answer</h3>

                 <div id= "oth"></div></div>
               <div class="col-md-2 col-sm-2 col-lg-2">
               </div>
            </div>

</div>
</div>





          <div class="row">
              <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 previous">
                <center><a href="S3_q1prev.php"><button type="button"><h2>Previous</h2></button></a></center>
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 agree" >
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

setcookie('progress', 'S3_q2.php', time() + 365*24*3600);





?>


