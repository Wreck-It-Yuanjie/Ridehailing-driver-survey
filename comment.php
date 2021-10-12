

<?php


session_start();

?>

<div class="col-md-12 col-xs-12 col-sm-12 corp">
   <div class="container">

     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
           
           <div class="section">

              <table class = "table1"; style="margin-left: auto; margin-right: auto;">

              <center><h2><b>Comments</b></h2></center>
            </table>



           </div>
 



       </div>


   


     </div>
       <form method="post" action="commentadd.php">
     <div class="row">

       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

          <div class="qbloc">
             
             <center><h2>Please let us know if you have any questions or comments about the survey.</h2></center>
             
			<center><input value="<?php echo $_SESSION['comment']; ?>" style="height:50px; "  type="text" id="comment" name="comment" placeholder = "Questions or comments" /></center>

          
<br/><br/>
             



           </div>



       </div>

	   
	    <div class="row">
               <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 previous">
                <center><a href="S2_WTRL_RL_q6prev.php"><button type="button"><h2>Previous</h2></button></a></center>
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

setcookie('progress', 'comment.php', time() + 365*24*3600); 



?>

