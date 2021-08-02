  <!-- Fichier réalisé principalement par Servan Delahaies -->
  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>SurfRider 2.0</title>

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
    include("jeu.php");
    
    ?> 

<?php


            $donnée=$_POST; //on recupère les données 

            if (!empty($donnée['name']) and !empty($donnée['MDP'])){// si la personne a rempli la 1ere partie
              loading();
              $hidden=1;
              echo "<input type='hidden'  id='the_end' value=1>";
               
                $requete="Select nom from account";
                $recu=testrequete($requete);
                $dsbase=1;
                while($row=$recu->fetch_assoc()){   // on cherche si le nom est dans la base
                    
                    if($row['nom']==$donnée['name']){
                        echo '<span style="margin-left: 300px">vous êtes dans la base <br></span>';
                        $dsbase=0;
                        $requete2="Select password, nom from account where nom='";
                        $requete2.=$donnée['name']."'";
                        $recu2=testrequete($requete2);
                        $row2=$recu2->fetch_assoc();
                        
                        if(password_verify($donnée['MDP'] ,$row2['password'] )){//on vérifie que les mots de passe correpondent
                        
                            $_SESSION['nom']=$row2['nom'];
                            $_SESSION['liste']=array();
                            //echo'Mot de passe bon <br> 
							echo "<span style='margin-left: 300px'>
							Bonjour ".$row2['nom']."
							<br></span><span style='margin-left: 300px'>
							Cette session vous est désormais dédié 							
							<br></span><span style='margin-left: 300px'>
							Appuyer sur F5 pour actualiser votre session
							</span>";
							}
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
                if($donnée['MDP2']==$donnée['MDP3']){//on vérifie d'abord que les deux mots de passe sont identiques
                    if(in_array ($donnée['name1'],  $row)){ // si la personne est dejà ds la base, on annule
                   
                    }
                    else{// sinon, on la fait rentrer
                        $requete3="insert into account values(NULL,'";
                        $requete3.=$donnée['name1']."','".$donnée['email']."','";
    
                        $hash=password_hash($donnée['MDP2'],PASSWORD_DEFAULT); //On crypte le mdp pour la base
                        $requete3.=$hash."')";
                        $recu3=testrequete($requete3);
                      						
						echo "<span style='margin-left: 200px'><br>Bonjour ".$donnée['name1']."<br>Vous êtes désormais dans la base, essayez de vous connecter pour voir!</span>";
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
           <a href="In English Please.php"><img src='en.jpg' width=20></a>
            <h1>Surfrider 2.0</h1>
            <h2>S</h2>
        </div>
        <nav>
          <ul>
            <li><a href="#1"><img src="assets/images/icon-3.png" alt=""> <em>Map</em></a></li>
            <li><a href="#2"><img src="assets/images/icon-4.png" alt=""> <em>Signaler un problème</em></a></li>
            <li><a href="#3"><img src="assets/images/icon-1.png" alt=""> <em>Condition du spot</em></a></li>
            <li><a href="#4"><img src="assets/images/icon-4.png" alt=""> <em>Connexion</em></a></li>
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
                        <h2>Recenser un problème</h2>
                      </div>

                      <div class="col-md-6">
                       <h4>Importance du problème</h4>  <output name="result4">--</output><br>
                        (1-mineur, 10-zone impraticable)
                        
                      </div>
                      <div class="col-md-6">
                        <h4>Type de problème</h4>
                         <br>
                        <SELECT name="type" size="1">
                          <OPTION>plastique
                          <OPTION>fuel
                          <OPTION>Rejet chimique
                          <OPTION>peinture
                          <OPTION>cuvette de toilette
                        </SELECT>
                        <fieldset>
                          <h4>Nom du Spot</h4> <br>
                          <SELECT name="SpotName" size="1">
                            <OPTION>Biscarrosse
                            <OPTION>Ile de Ré
                            <OPTION>La Rochelle
                            <OPTION>Cap Ferret
                            <OPTION>Lacanau
                          </SELECT>                       
                        </fieldset>
                        
                      </div>

                      <div class="col-md-6">
                        <fieldset>
                        <input type="range" name="Danger" min="1" max="10" step="1" value="1" oninput="result4.value=parseInt(d.value)"/>
                        
                      </fieldset>
                  
                      </div>
                      <div class="col-md-6">
                      <label for="story"> <h4>Ajouter un commentaire:</h4></label>

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
                          <button type="submit" id="form-submit" class="button">Envoyer</button>
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
                                        <h4>Température extérieur</h4>
                                        <h4>Ciel Dégagé</h4>
                                       
                                        
                                        <h6>14 </h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <a href=""><img src="assets/images/item-02.jpg" alt=""></a> -->
                                      <div class="down-content">
                                          <h4>Température de l'eau</h4>
                                          <h6>10</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <img src="assets/images/item-03.jpg" alt=""> -->
                                      <div class="down-content">
                                          <h4>Vent</h4>
                                            <h6>7 KTS Sud Sud-ouest</h6>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <!-- <img src="assets/images/item-04.jpg" alt=""> -->
                                      <div class="down-content">
                                          <h4>Bateaux présents</h4>
                                          <h6>2 pèche <br> 1 commerciaux <br> 3 loisirs <br> 0 voiles</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Heure de marée</h4>
                                          <h6>9h</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Durée de marée</h4>
                                          <h6>$75.00</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Coefficient de marée</h4>
                                          <h6>85.00</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Baigneurs présents</h4>
                                          <h6>15</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="featured-item">
                                      <div class="down-content">
                                          <h4>Waterman présent</h4>
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
                              <h2>Se connecter</h2>
                            </div>

                            <div class="col-md-6">
                              <h2>S'inscrire</h2>
                            </div>

                            <div class="col-md-6">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Votre nom" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="name1" type="text" class="form-control" id="name" placeholder="Votre nom" >
                              </fieldset>
                            </div>

                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP" type="password" class="form-control" id="name" placeholder="Votre mot de passe" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Votre email" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP2" type="password" class="form-control" id="email" placeholder="mot de passe" >
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <input name="MDP3" type="password" class="form-control" id="email" placeholder="Confirmer mot de passe" >
                              </fieldset>
                            </div>
                            
                            <div class="col-md-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="button">Envoyer</button>
                               

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
		function load(){
			if (the_end.value=1)
				table_game.hidden=true;
		}
		setTimeout(load, 6000); //milliseconds
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