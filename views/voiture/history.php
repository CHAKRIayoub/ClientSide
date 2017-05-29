
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
            
            
                            echo '<h3> les informations du client : <h3>';
                            echo '<h6> - Nom & Prenom :'.$value['user']['Nom'].' '.$value['user']['Prenom'].'</h6>';
                            echo '<h6> - CIN  '.$value['user']['Cin'].'</h6>';
                            echo '<h6> - Adresse :'.$value['user']['Adresse'].'</h6>';
                            echo '<h6> - Tel :'.$value['user']['Tel'].'</h6>';
            
            
                            echo '<h3> l\' etat de resérvation : </h3>';
                            
                            if($value['Etat'] == 'confirmee') {
                                echo '<p>
                                        Resérvation  effectuer 
                                    </p>';
                                   
                            }
                           
                            if($value['Etat'] == 'terminee') {
                                echo ' le client a retourné la voiture';
                            }
                                        
                    echo '</div></div>';

            }
		?>
			
        </div>



