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

<!-- Header of home -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 head">
  <div class="row">
    <div class="container">
      <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
           
          <a href="index.php"> <img src="../img/logo.png" width="60%"/> </a>

      </div>

      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4" style="margin-top:2%;">
          
        
            
       <a href="acces.php"><h3 style="float:right;"><font color="#FFFFFFF">Back</font></h3></a>

          

      </div>

    </div>

  </div>
</div>


<!-- Loading Survey Results  -->

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

<div class="container">



<?php


include('../connect.php');


$user = $_POST['user'];


                       $reponse = $bdd->prepare('SELECT * FROM quest1 where user=:user'); 

                         $reponse->execute(array('user' => $user));
                                 
                                 ?>


                                    <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 1 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3> Do you have a valid driving license?</h3></center></div>
                                   </div>
                                   </div>
                      
 
                                <?php

                               while ($donnees = $reponse->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }



$reponse2 = $bdd->prepare('SELECT * FROM quest2 where user=:user'); 

                         $reponse2->execute(array('user' => $user));

     ?>

                            <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 2 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3> Do you have any alcohol- or drug-related violations on your driver’s abstract?</h3></center></div>
                                   </div>
                                   </div>                 


<?php

                               while ($donnees = $reponse2->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


   $reponse3 = $bdd->prepare('SELECT * FROM quest3 where user=:user'); 

                         $reponse3->execute(array('user' => $user));

?>

<div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 3 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3> What is your age?</h3></center></div>
                                   </div>
                                   </div>


<?php                      



                               while ($donnees = $reponse3->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                   

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Age : <?php echo $value;  ?> &nbsp years old</h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


   $reponse4 = $bdd->prepare('SELECT * FROM quest4 where user=:user'); 

                         $reponse4->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 4 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Do you have regular access to a working bicycle?</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse4->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


   $reponse5 = $bdd->prepare('SELECT * FROM quest5 where user=:user'); 

                         $reponse5->execute(array('user' => $user));
                                 ?>
                      

                                <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 5 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>How many motor vehicles are licensed and insured in your household?</h3></center></div>
                                   </div>
                                   </div>

                                <?php
                               while ($donnees = $reponse5->fetch()){ 

                                   $year = $donnees['year']; 
                                   $make = $donnees['make'];
                                   $model = $donnees['model'];
                                   $engine = $donnees['engine'];  
                                   $date = $donnees['date'];
                                   


                                   ?>
                                   
                                  <div class="row">

                                     <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                                        
                                        <div class="section">

                                            <center> <h2> Car informations </h2></center>

                                        </div>

                                     </div>


                                  </div>

                                   <div class="row">

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <center><h2>Year : <?php echo $year;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <center><h2>Make : <?php echo $make;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <center><h2>Model : <?php echo $model;  ?></h2></center>
                                         </div>
                                      </div>

                                     


                                   </div>

                                    <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Engine : <?php echo $engine;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>

                                   

                                     


                                   </div>








                            <?php
                             }





   $reponse6a = $bdd->prepare('SELECT * FROM quest6a where user=:user'); 

                         $reponse6a->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 6a </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>I feel it very necessary to own a car.</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse6a->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }



$reponse6b = $bdd->prepare('SELECT * FROM quest6b where user=:user'); 

                         $reponse6b->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 6b </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>It would be helpful to add another motor vehicle into my household.</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse6b->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }



 $reponse7 = $bdd->prepare('SELECT * FROM quest7 where user=:user'); 

                         $reponse7->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 7 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Do you have a valid monthly or annual transit pass?</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse7->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


 $reponse8 = $bdd->prepare('SELECT * FROM quest8 where user=:user'); 

                         $reponse8->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 8 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Are you a member of any car-sharing programs? Please indicate your relationship with all of the car-sharing programs listed below. Provide the name of your car-sharing program if it is not listed.</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse8->fetch()){ 

                                   $q8a = $donnees['q8avalue']; 
                                   $q8ads = $donnees['q8ads'];
                                   $q8ade = $donnees['q8ade'];
                                   $q8b = $donnees['q8bvalue']; 
                                   $q8bds = $donnees['q8bds'];
                                   $q8bde = $donnees['q8bde'];
                                   $q8c = $donnees['q8cvalue']; 
                                   $q8cds = $donnees['q8cds'];
                                   $q8cde = $donnees['q8cde'];
                                   $q8d = $donnees['q8dvalue']; 
                                   $q8dds = $donnees['q8dds'];
                                   $q8dde = $donnees['q8dde'];
                                   $q8e = $donnees['q8evalue']; 
                                   $q8eds = $donnees['q8eds'];
                                   $q8ede = $donnees['q8ede'];
                                   $q8f = $donnees['q8fvalue']; 
                                   $q8fds = $donnees['q8fds'];
                                   $q8fde = $donnees['q8fde'];
                                   $q8g = $donnees['q8gvalue']; 
                                   $q8gds = $donnees['q8gds'];
                                   $q8gde = $donnees['q8gde'];
                                   $q8h = $donnees['q8hvalue']; 
                                   $q8hds = $donnees['q8hds'];
                                   $q8hde = $donnees['q8hde'];
                                   $q8hother = $donnees['q8hother'];
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Zipcar</b></h3><br/>
                                          <p><b>Choice :</b> <?php echo $q8a; ?> </p> <br/>
                                          <p><b> Start date  : </b> <?php echo $q8ads; ?> </p><br/>
                                          <p><b> End date : </b> <?php  echo $q8ade ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Car2Go</b></h3><br/>
                                          <p><b>Choice : </b><?php echo $q8b; ?> </p><br/>
                                          <p> <b>Start date : </b> <?php echo $q8bds; ?></p><br/>
                                          <p><b> End date : </b>   <?php echo $q8bde; ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>RelayRides</b></h3>
                                          <p><b>Choice : </b> <?php echo $q8c; ?> </p><br/>
                                          <p><b> Start date : </b>  <?php echo $q8cds; ?> </p><br/>
                                          <p><b> End date : </b>  <?php echo $q8cde; ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Lyft</b></h3><br/>
                                          <p><b>Choice : </b> <?php echo $q8d; ?></p><br/>
                                          <p><b> Start date : </b>  <?php echo $q8dds; // ?> </p><br/>
                                          <p><b> End date  : </b>  <?php echo $q8dde; ?> </p><br/>
                                         </div>
                                      </div>



                                   </div>



                                   <div class="row">

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Sidecar</b></h3><br/>
                                          <p><b>Choice : </b> <?php echo $q8e; ?> </p><br/>
                                          <p><b> Start date : </b> <?php echo $q8eds; ?> </p> <br/>
                                          <p><b> End date : </b>  <?php echo $q8ede; ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Uber</b></h3><br/>
                                          <p><b>Choice : </b> <?php echo $q8f; ?> </p><br/>
                                          <p><b> Start date : </b>  <?php echo $q8fds; ?> </p><br/>
                                          <p><b> End date : </b>  <?php echo $q8fds; ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Enterprise</b></h3><br/>
                                          <p><b>Choice : </b> <?php echo $q8g;  ?></p><br/>
                                          <p><b> Start date : </b>   <?php echo $q8gds; ?></p><br/>
                                          <p><b> End date : </b> <?php echo $q8gds; ?> </p><br/>
                                         </div>
                                      </div>

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                          <h3><b>Other</b></h3><br/>
                                          <p><b>Choice : </b><?php echo $q8h; ?></p> <br/>
                                          <p><b>Value : </b>  <?php echo $q8hother; ?> </p><br/>
                                          <p><b> Start date : </b>   <?php echo $q8hds; ?></p><br/>
                                          <p><b> End date : </b>  <?php echo $q8hde; ?> </p><br/>
                                         </div>
                                      </div>



                                   </div>








                            <?php
                             }



 $reponse9 = $bdd->prepare('SELECT * FROM quest9 where user=:user'); 

                         $reponse9->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 9 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Where is your home and work located? Please indicate the nearest crossing streets, city and zip code.</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse9->fetch()){ 

                                   $hst1 = $donnees['hst1']; 
                                   $hst2 = $donnees['hst2']; 
                                   $hcity = $donnees['hcity'];
                                   $hzip = $donnees['hzip'];
                                   $wst1 = $donnees['wst1']; 
                                   $wst2 = $donnees['wst2']; 
                                   $wcity = $donnees['wcity'];
                                   $wzip = $donnees['wzip'];
                                   $w2st1 = $donnees['w2st1']; 
                                   $w2st2 = $donnees['w2st2']; 
                                   $w2city = $donnees['w2city'];
                                   $w2zip = $donnees['w2zip'];    
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h3>Home</h3><br/>
                                         <p><b>Street 1  :  </b><?php echo $hst1;  ?></p>
                                         <p><b>Street 2  :  </b><?php echo $hst2;  ?></p>
                                         <p><b>City  :  </b><?php echo $hcity;  ?></p>
                                         <p><b>Zip  :  </b><?php echo $hzip;  ?></p>
                                         </div>
                                      </div>

                                       <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h3>Work 1</h3><br/>
                                         <p><b>Street 1  :  </b><?php echo $wst1;  ?></p>
                                         <p><b>Street 2  :  </b><?php echo $wst2;  ?></p>
                                         <p><b>City  :  </b><?php echo $wcity;  ?></p>
                                         <p><b>Zip  :  </b><?php echo $wzip;  ?></p>
                                         </div>
                                      </div>

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h3>Work 2</h3><br/>
                                         <p><b>Street 1  :  </b><?php echo $w2st1;  ?></p>
                                         <p><b>Street 2  :  </b><?php echo $w2st2;  ?></p>
                                         <p><b>City  :  </b><?php echo $w2city;  ?></p>
                                         <p><b>Zip  :  </b><?php echo $w2zip;  ?></p>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


 $reponse10 = $bdd->prepare('SELECT * FROM quest10 where user=:user'); 

                         $reponse10->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 10 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Is the following statement true?</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse10->fetch()){ 

                                   $valuea = $donnees['textvaluea'];
                                   $valueb = $donnees['textvalueb']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <h4><b>I stayed at home and did not make any trips yesterday.</b></h4>
                                         <h4><b>Answer :</b> <?php echo $valuea;  ?></h4>
                                         <h4><b>Time :</b> <?php echo $date;  ?></h4>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <h4><b>I was travelling out of the Seattle Metropolitan Area yesterday.</b></h4>
                                         <h4><b>Answer :</b> <?php echo $valueb;  ?></h4>
                                         <h4><b>Time :</b> <?php echo $date;  ?></h4>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


 $reponse11 = $bdd->prepare('SELECT * FROM quest11 where user=:user'); 

                         $reponse11->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 11 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Please try to recall your home-to-home travel schedule of yesterday. Describe where, when and how you went to each location, by naming the closest intersection, selecting the means of transportation. Note that “yesterday” starts from 3am yesterday to 2:59am on today’s morning.</h3></center></div>
                                   </div>
                                   </div>

                                   <div class="row">
                                      
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                     
                                    <div class="question"> <h3>Origin</h3></div>

                                   </div>

                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                     
                                    <div class="question"><h3>Destination</h3></div>

                                   </div>


                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                     
                                    <div class="question"> <h3>Mode</h3> </div>

                                   </div>


                                   </div>
                               
                               <?php

                               while ($donnees = $reponse11->fetch()){ 

                                   $ost = $donnees['ost'];
                                   $ost1 = $donnees['ost1'];
                                   $ost2 = $donnees['ost2'];
                                   $ocity = $donnees['ocity'];
                                   $ozip = $donnees['ozip'];

                                   $dst = $donnees['dst'];
                                   $dst1 = $donnees['dst1'];
                                   $dst2 = $donnees['dst2'];
                                   $dcity = $donnees['dcity'];
                                   $dzip = $donnees['dzip'];

                                   $mode = $donnees['mode'];
                                   $pass = $donnees['pass'];


                                    
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h4><b>Street : </b> <?php echo $ost; ?></h4>
                                         <h4><b>Street 1 : </b> <?php echo $ost1; ?></h4>
                                         <h4><b>Street 2 : </b> <?php echo $ost2; ?></h4>
                                         <h4><b>City : </b> <?php echo $ocity; ?></h4>
                                         <h4><b>Zip : </b> <?php echo $ozip; ?></h4>
                                         
                                         </div>
                                      </div>

                                       <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h4><b>Street : </b> <?php echo $dst; ?></h4>
                                         <h4><b>Street 1 : </b> <?php echo $dst1; ?></h4>
                                         <h4><b>Street 2 : </b> <?php echo $dst2; ?></h4>
                                         <h4><b>City : </b> <?php echo $dcity; ?></h4>
                                         <h4><b>Zip : </b> <?php echo $dzip; ?></h4>
                                         
                                         </div>
                                      </div>


                                       <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                                         <div class="qbloc">
                                         <h4><b>Mode : </b> <?php echo $mode; ?></h4>
                                         <h4><b>N° passengers: </b> <?php echo $pass; ?></h4>
                                         <h4><b>Time: </b> <?php echo $date; ?></h4>
                                         
                                         
                                         </div>
                                      </div>

                                      

                                   </div>








                            <?php
                             }


 $reponse12 = $bdd->prepare('SELECT * FROM quest12 where user=:user'); 

                         $reponse12->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 12 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Which of the following best describes your role in the UW community:</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse12->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }


 $reponse13 = $bdd->prepare('SELECT * FROM quest13 where user=:user'); 

                         $reponse13->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 13 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Which of the following best describes your role in the UW community:</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse13->fetch()){ 

                                   $q13a = $donnees['q13a']; 
                                   $q13b = $donnees['q13b']; 
                                   $q13c = $donnees['q13c'];
                                   $q13d = $donnees['q13d']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                        <h3>0-15 years</h3>
                                        <p><b> Answer : </b><?php echo $q13a;  ?> </p>
                                         </div>
                                      </div>

                                       <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                        <h3>16-20 years</h3>
                                        <p><b> Answer : </b><?php echo $q13b;  ?> </p>
                                         </div>
                                      </div>

                                       <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                        <h3>21-64 years</h3>
                                        <p><b> Answer : </b><?php echo $q13c;  ?> </p>
                                         </div>
                                      </div>

                                       <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                         <div class="qbloc">
                                        <h3>65 years and above</h3>
                                        <p><b> Answer : </b><?php echo $q13d;  ?> </p>
                                        <p> <b> Time : </b> <?php echo $date ; ?> </p>
                                         </div>
                                      </div>

                                    


                                   </div>








                            <?php
                             }



 $reponse14 = $bdd->prepare('SELECT * FROM quest14 where user=:user'); 

                         $reponse14->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 14 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>What is your gender?</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse14->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }



 $reponse15 = $bdd->prepare('SELECT * FROM quest15 where user=:user'); 

                         $reponse15->execute(array('user' => $user));

                      

                                  ?>
                                
                                  <div class="row">
                                   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4" style="margin-top:2%;">
                                   <div class="section"><center><h3> Question 14 </h3></center></div>
                                   </div>

                                   <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                                   <div class="question"><center><h3>Approximately how much was your pre-tax household income in 2014? Your household includes people living with you and sharing income with you.</h3></center></div>
                                   </div>
                                   </div>
                               
                               <?php

                               while ($donnees = $reponse15->fetch()){ 

                                   $value = $donnees['textvalue']; 
                                   $date = $donnees['date'];  
                                   


                                   ?>
                                   
                                 

                                   <div class="row">

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Answer : <?php echo $value;  ?></h2></center>
                                         </div>
                                      </div>

                                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                                         <div class="qbloc">
                                         <center><h2>Time : <?php echo $date;  ?></h2></center>
                                         </div>
                                      </div>


                                   </div>








                            <?php
                             }



?>




</div>

</div>




<!-- End of the footer -->




<!-- JQUERY IMPORT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- END OF JQUERY IMPORT -->
</body>

</html>