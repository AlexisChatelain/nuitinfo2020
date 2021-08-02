
    <?php
        function testrequete($req){
            $db=new mysqli('localhost','nom_utilisateur','mot_de_passe','nom_du_projet');//essaie d'ouvir la connexion
            $db->set_charset("utf8"); 
            if($db->connect_error){//ça ne marche pas
                $msg="echec lors de la co :(";
                $msg.=$db->connect_errno;
                $msg.=")";
                $msg.=$db->connect_error;
                die($msg);
            }
            else{//ça marche   
                $data=$db->query($req);//execute
                return $data;//retour du resultat
            }
        }
    ?>