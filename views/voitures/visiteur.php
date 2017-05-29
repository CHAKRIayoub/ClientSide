
    <h1>LocVoi</h1>
    <hr>


        <div class="col-md-8">
        
             <?php
        if(isset($this->voituressList)){

			foreach ($this->voituressList as $key => $value) {
                echo '<div class="panel panel-default" >';
                
                if(Session::get('loggedIn') == true){
                    
                    echo '
                    <div class="panel-heading" >
                        <a href="'.URL.'location/louer/'.$value['Id'].'" class="btn btn-primary btn-block .btn-locvoi "  >
                            <h4 style="color: white;">
                                Louer <span class="nvgf glyphicon glyphicon glyphicon-paste" aria-hidden="true"></span>
                            </h4>
                        </a>
                    </div>
                    ';
                }
                   
       
                
                
                    echo '<div class="panel-body" > ';//----------------------body---------------
                
                        echo '<div class="img_voi col-md-6 " ';
                        echo 'style="';
                        echo "background-image: url('".URL."/public/img/". $value['Image'] ."'); ";
                        echo '" >';
                        echo '</div>';
                
                        echo '<div class="desc_voi col-md-6 ">';
                            echo '<h3>'.$value['Marque'].'</h3><hr>';
                            echo '<h4>'.$value['Modele'].'</h4><hr>';
                            echo '<h5>'.$value['Description'].'</h5>';
                        echo '</div>';
                
                
                    echo '</div>';
                
                
                
                    echo '<div class="panel-footer" style="height : 80px;" > ';//---------footer---------------
                
                        echo '<div class="col-md-6">'; 
                        
                            echo '<span class="nvgf glyphicon glyphicon-map-marker" aria-hidden="true"></span>' . $value['Ville'] ;
                            echo '<br><span class="nvgf glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>'.$value['Prix'].' DHs/jour';  
                            echo '<br><span class="nvgf glyphicon glyphicon-tint" aria-hidden="true"></span> ' . $value['Carburant']; 
                
                        echo '</div>'; 
                    
                        echo '<div class="col-md-6">';
                            echo '<span class="nvgf glyphicon glyphicon-user" aria-hidden="true"></span> '.$value['Passagers'].' Passagers';
                            echo '<br><span class="nvgf glyphicon glyphicon-list" aria-hidden="true"></span> '.$value['Options'];
                        echo '</div>';
                    
                    echo '</div>';
            
                echo '</div>';
                
            
                
                
              
                }
            }
		?>
			
        </div>


<div class="col-md-4" >
    
  <a href="<?php echo URL; ?>/chercher/" class="btn btn-default btn-lg btn-block" ><h5><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Chercher</h5></a><br><br>
	   
    
    
</div>


</div>
<script>
    $(document).ready(function(){
        $('.btn-locvoi').each(function(){
            $(this).click(function(){
                var idpost = $(this).attr('rel');
                idpost = "http://localhost/LocVoi/location/louer/"+idpost;
                window.location = idpost;
            });
        });
        $('#chercher').click(function(){
            window.location = "http://localhost/BlogJs/chercher";
        });
    });
</script>