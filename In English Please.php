    <!-- Fichier réalisé principalement par Servan Delahaies -->
  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>SurfRider2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/MyModifs.css">

  </head>
<!--
Tooplate 2113 Earth
https://www.tooplate.com/view/2113-earth
-->
  <body>
    
    <?php include("identification.php");  //fichier avec la fonction et les codes d'accès à la bd
    ?> 

<?php


            $donnée=$_POST; //on recupère les données 

            if (!empty($donnée['name']) and !empty($donnée['MDP'])){// si la personne a rempli la 1ere partie
               
                $requete="Select nom from account";
                $recu=testrequete($requete);
                $dsbase=1;
                while($row=$recu->fetch_assoc()){   // on cherche si le nom est dans la base
                    
                    if($row['nom']==$donnée['name']){
                        echo 'vous êtes ds la base <br>';
                        $dsbase=0;
                        $requete2="Select MDP, nom from account where nom='";
                        $requete2.=$donnée['name']."'";
                        $recu2=testrequete($requete2);
                        $row2=$recu2->fetch_assoc();
                        
                        if(password_verify($donnée['MDP'] ,$row2['password'] )){//on vérifie que les mots de passe correpondent
                        
                            $_SESSION['nom']=$row2['nom'];
                            $_SESSION['liste']=array();
                            //echo'Mot de passe bon <br> 
                            echo "Bonjour ".$row2['nom']."<br>Cette session vous est désormais dédié <br> Appuyer sur F5 pour actualiser votre session";}
                        else{
                         
                        }
                        break;
                    }   
                }
                if($dsbase){ 
                 
                
                } 
            }
            
            
            elseif (!empty($donnée['name1']) AND !empty($donnée['email']) and !empty($donnée['MDP2']) and !empty($donnée['MDP3'])) {/// si la deuxième partie est remplie
                //echo 'Recu donnée de registration';
                $requete="Select nom from account";
                $recu=testrequete($requete);
                $row=$recu->fetch_assoc();
                if($donnée['MDP2']==$donnée['MDP3']){//on vérifie d'abord que les deux mots de passes sont identiques
                    if(in_array ($donnée['name1'],  $row)){ // si la personne est déjà ds la base, on annule
                   
                    }
                    else{// sinon, on la fait rentrer
                        $requete3="insert into account values(NULL,'";
                        $requete3.=$donnée['name1']."','".$donnée['email']."','";
    
                        $hash=password_hash($donnée['MDP2'],PASSWORD_DEFAULT); //On crypte le mdp pour la base
                        $requete3.=$hash."')";
                        $recu3=testrequete($requete3);
                        //echo $requete3;
                      
                        echo'<br>Bonjour '.$donnée['name1'].'<br>Vous êtes désormais dans la base, essayez de vous connecter pour voir!';
                    } }
                else{
                
                }
            }
            elseif (!empty($donnée['type']) AND !empty($donnée['Danger']) and !empty($donnée['SpotName'])) {
              $requete4="Insert into problem Values(NULL, '";
              $requete4.=$donnée['type']."','".$donnée['Danger']."','".$donnée['SpotName']."'";
              if(!empty($donnée['commentary'])){
                $requete4.=",'".$donnée['commentary']."'";
              }
              $requete4.=")";
              
              $recu4=testrequete($requete4);

            }

            
            ?>




    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
        <div class="logo">
          <div class="connected"><img src="assets/images/connected.png" alt=" connecté"></div>
            
            <h1>Surfrider 2.0</h1>
            <h2>S</h2>
        </div>
        <nav>
          <ul>
            <li><a href="#1"><img src="assets/images/icon-3.png" alt=""> <em>Map</em></a></li>
            <li><a href="#2"><img src="assets/images/icon-4.png" alt=""> <em>Report an issue</em></a></li>
            <li><a href="#3"><img src="assets/images/icon-1.png" alt=""> <em>Swimming condition</em></a></li>
            <li><a href="#4"><img src="assets/images/icon-4.png" alt=""> <em>Login</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content second-content">
                  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=14Delm7s7O3AB6wFfmkfgv73JZWxY0sZH" width=80% height=80%></iframe>
            </div>
            
          </div>
     
          <div class="slide" id="2">
            <div class="content fourth-content">
                <div class="container-fluid">
              
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Report an issue</h2>
                      </div>

                      <div class="col-md-6">
                       <h4>level of the issue</h4>  <output name="result4">--</output><br>
                        (1-minor, 10-zone impracticable)
                        
                      </div>
                      <div class="col-md-6">
                        <h4>Type of the issue</h4>
                         <br>
                        <SELECT name="type" size="1">
                          <OPTION>plastics
                          <OPTION>fuel
                          <OPTION>chemical release
                          <OPTION>paiting oil
                          <OPTION>toilet seat
                        </SELECT>
                        <fieldset>
                          <h4>Name of the Spot</h4> <br>
                          <SELECT name="SpotName" size="1">
                            <OPTION>La cuzas
                            <OPTION>Ile de ré
                            <OPTION>La Rochelle
                            <OPTION>Lacanau
                            <OPTION>Quimper
                          </SELECT>                       
                        </fieldset>
                        
                      </div>

                      <div class="col-md-6">
                        <fieldset>
                        <input type="range" name="Danger" min="1" max="10" step="1" value="1" oninput="result4.value=parseInt(d.value)"/>
                        
                      </fieldset>
                  
                      </div>
                      <div class="col-md-6">
                      <label for="story"> <h4>Add a comment:</h4></label>

                        <textarea id="story" name="commentary"
                                  rows="5" cols="33">
                                  
                        </textarea>
                        
                        
                      </div>
                      <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                        <fieldset>
                          <button type="submit" id="form-submit" class="button">Send</button>
                        </fieldset>
                        
                      </div>
                      
                      <div class="col-md-6">
                        
                      </div>
                    </div>
                  </form>
                </div>  
              </div>
              
          </div>
          <div class="slide" id="3">
              <div class="content third-content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="owl-carousel owl-theme">
                              <div class="col-md-12">
                                  <div class="featured-item"> 
                                    <!-- <img src="assets/images/temp2.png" alt=""> -->
                                      <div class="down-content">
                                        <h4>Outdoor temperature</h4>
                                        <h4>Clear weather</h4>
                                       
                                        
                                        <h6>57°F </h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <a href=""><img src="assets/images/item-02.jpg" alt=""></a> -->
                                      <div class="down-content">
                                          <h4>Water temperature</h4>
                                          <h6>50°F</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <img src="assets/images/item-03.jpg" alt=""> -->
                                      <div class="down-content">
                                          <h4>wind</h4>
                                            <h6>7 KTS South South-West</h6>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <img src="assets/images/item-04.jpg" alt=""> -->
                                      <div class="down-content">
                                          <h4>Boats</h4>
                                          <h6>2 fiching boat <br> 1 transportation boat <br> 3 leisure craft <br> 0 sailboats</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Tidal hour</h4>
                                          <h6>9AM</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Tidal duration</h4>
                                          <h6>3h</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Tidal coefficients</h4>
                                          <h6>85.00</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Swimmer</h4>
                                          <h6>15</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Waterman present</h4>
                                          <h6>0</h6>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="slide" id="4">
              <div class="content fourth-content">
                  <div class="container-fluid">
                      <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <h2>Login</h2>
                            </div>

                            <div class="col-md-6">
                              <h2>Register</h2>
                            </div>

                            <div class="col-md-6">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="name1" type="text" class="form-control" id="name" placeholder="Your name" >
                              </fieldset>
                            </div>

                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP" type="text" class="form-control" id="name" placeholder="Password" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Your mail" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP2" type="password" class="form-control" id="email" placeholder="Password" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP3" type="password" class="form-control" id="email" placeholder="Confirm password" >
                              </fieldset>
                            </div>
                            
                            <div class="col-md-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="button">Send</button>
                             

                              </fieldset>
                            </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordations.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // navigation click actions 
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');         
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }
    </script>

  </body>
</html>