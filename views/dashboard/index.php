
<ul class="breadcrumb">
  <li class="active">
    <h2>Liste des Locations</h2>
  </li>
</ul>

<div class="col-md-12">
        
    <?php
			
        foreach ($this->locationsList as $key => $value) {
                
            echo '<div class="panel panel-default" >';
                   
                echo '<div class="panel-body" > ';//----------------------body---------------
                
                            $time = strtotime($value['Date_d']);
                            $time1 = strtotime($value['Date_f']);
                            $newformat = date('Y-m-d',$time);
                            $newformat1 = date('Y-m-d',$time1);
                            echo '<h3> les dates de resérvation : </h3>';
                            echo '  date de debut de resérvation :<h4> '.$newformat.'</h4>';
                            echo '  date de fin de resérvation :<h4> '.$newformat1.'</h4> <hr> ';
                            echo '<h3> les caractéristique du voiture : <h3>';
                            echo '<h6> - Marque :'.$value['voiture']['Marque'].'</h6>';
                            echo '<h6> - Model :'.$value['voiture']['Modele'].'</h6>';
                            echo '<h6> - Ville '.$value['voiture']['Ville'].'</h6>';
                            echo '<h6> - Prix  '.$value['voiture']['Prix'].' DHs/Jour </h6>';
            
                            echo '<h3> l\' etat de resérvation : </h3>';
                            if(Session::get('role') == 'Client' ){
                                if($value['Etat'] == 'initiale'){
                                    
                                     
                                    echo '<p>
                                    NOUS AVONS BIEN REÇU VOTRE DEMANDE ET NOUS VOUS EN REMERCIONS.
                                    </p>
                                    <p>
                                    NOUS VOUS CONTACTERONS DANS LES 24 HEURES QUI SUIVENT POUR VOUS CONFIRMER VOTRE RÉSERVATION.

                                    </p>

                                    <h5>CORDIALEMENT,</h5>';
                                }else if($value['Etat'] == 'confirmee') {
                                    echo '<p>
                                        VOTRE DEMANDE ET BIEN CONFIRMER <a href="'.URL.'ToPdf.php?id='.$value['Id'].'" > Imrimer votre recu </a>
                                    </p>

                                    <h5>CORDIALEMENT,</h5>';
                                   
                                }
                            }else if(Session::get('role') == 'Manager'){
                                if($value['Etat'] == 'initiale'){
                                    
                                     
                                    echo '<p>
                                        VEILLEZ CONTACTEZ LE CLIENT POUR QUI IL DOIT CONFIRMER LEUR DEMANDE
                                    </p>

                                    <h5>CORDIALEMENT,</h5>';
                                }else if($value['Etat'] == 'confirmee') {
                                    echo 'Si le client a retourné la voiture';
                                    echo ' <a class="btn btn-danger"                    href="'.URL.'location/terminer/'.$value['Id'].'" >terminer </a> ';
                                   
                                }
                                echo '<h3> les informations du client : <h3>';
                                echo '<h6> - Nom & Prenom :'.$value['user']['Nom'].' '.$value['user']['Prenom'].'</h6>';
                                echo '<h6> - CIN  '.$value['user']['Cin'].'</h6>';
                                echo '<h6> - Adresse :'.$value['user']['Adresse'].'</h6>';
                                echo '<h6> - Tel :'.$value['user']['Tel'].'</h6>';
            
                            }
                            
            
            
            
                echo '</div>';
                
                    echo '<div class="panel-footer" style="height : 60px;"  > ';//---------footer-----------
                        if(Session::get('role') == 'Manager' && $value['Etat'] == 'initiale' ){
                            echo '<div style="float : right;" >';
            echo ' <a class="btn btn-success" href="'.URL.'location/accepter/'.$value['Id'].'" >Confirmer</a> ';
            echo ' <a class="btn btn-danger" href="'.URL.'location/refuser/'.$value['Id'].'" >Annuler</a> ';
                            echo '</div>';
                        }
                    
                    echo '</div>';
                        
            echo '</div>';
                
            
                
                
              

            }
		?>
			
        </div>



