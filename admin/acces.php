<!DOCTYPE html>
<html>

<head>

    <title>Survey</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
           <!-- Style & bootstrap import -->
          <link rel="stylesheet" href="../css/bootstrap.css">
          <link rel="stylesheet" href="../css/style.css">
          <link rel="stylesheet" href="../css/animate.css">
           <!-- End of inmport -->

     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

     <!-- SEO injection zone -->





     <!-- End of SEO injection zone -->

     

</head>

<body class="bg">

<?php

include('../connect.php');

session_start();
$login = $_SESSION['login'];
$password = $_SESSION['password'];


$reponselog = $bdd->prepare('SELECT * FROM admin where user=:login and password=:password'); 


$reponselog->execute(array('login' => $login,'password'=>$password));




$rows = $reponselog->fetch(PDO::FETCH_NUM);

if($rows > 0) {



}
else{

header("location: index.php");

}






?>

<!-- Header of home -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 head">
  <div class="row">
    <div class="container">
      <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
           
          <a href="index.php"> <img src="../img/logo.png" width="60%"/> </a>

      </div>

      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
          
        
            


          

      </div>

    </div>

  </div>
</div>


<!-- Loading Survey Results  -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

<div class="container">

<div class="row">


<?php





 $user = $_COOKIE['user'];

                       $reponse = $bdd->query('SELECT * FROM users GROUP BY email2 order by date DESC  '); 



                      


                               while ($donnees = $reponse->fetch()){ 

                                   $email = $donnees['email2']; 
                                   $date = $donnees['date'];  
                                   $user = $donnees['user'];
                                  

                                    ?>

                              <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

                                  <div class="section">
                                  
                                  <form method="post" action="view.php">

                                   <h4><span class="glyphicon glyphicon-envelope"></span> &nbsp <?php echo $email;   ?> </h4>


                                  </div>

                                  <div class="qbloc">



                                    <h5><span class="glyphicon glyphicon-time"></span> &nbsp <?php echo $date;   ?> </h5>
                                    
                                    <input type="hidden" name="user" value="<?php echo $user; ?>"/>


                                 

                                   <div class="agree" style="margin-top:4%;">


                                         <button><h4>View</h4></button>
                                    


                                    </div>



                                     </div>

                                     </form>

                              </div>
                                        
                                 
                                 <?php

                                 } 




?>



</div>

</div>

</div>




<!-- End of the footer -->




<!-- JQUERY IMPORT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- END OF JQUERY IMPORT -->
</body>

</html>