
    <h3>Les Voitures Disponible</h3>
    <hr>


<?php if(isset($_GET['result'])): ?>

    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4> <span style="margin-right : 20px" class="glyphicon glyphicon-ok" aria-hidden="true"> </span> <?php echo  $_GET['result']; ?>  </h4>
    </div>

<?php endif ?>


    <div class="col-md-8">
        <?php
            if(isset($this->voituressList)){
			foreach ($this->voituressList as $key => $value) {
                
                echo '<div class="panel panel-default" >';
                    echo '<div class="panel-heading" > ';//----------------------head---------------
                
                        echo '<a href="'.URL.'voiture/edit/'.$value['Id'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> modifier </a>';
                
                        echo '<a style="padding-left : 20px;" href="'.URL.'voiture/del/'.$value['Id'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> supprimer </a>';
                
                        echo '<a style="padding-left : 20px;" href="'.URL.'voiture/history/'.$value['Id'].'"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> historique </a>';
                
                    echo '</div>';
                
                
                
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
                
            
                
                
              

            }}
		?>
        
     
        
       
        

</div>
<div class="col-md-4" >
    
    
    <a href="<?php echo URL; ?>/voitures/vl" class="btn btn-primary btn-lg btn-block" ><h5><img src="<?php echo URL; ?>/public/img/4.png" style="
    height: 35px;
        " > Voitures louée </h5></a><br><br>
    
    
    
     <a href="<?php echo URL; ?>/chercher/" class="btn btn-default btn-lg btn-block" ><h5><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Chercher</h5></a><br><br>

    
    
    
     <button  id="btn-aff-form" class="btn btn-success btn-lg btn-block" ><h5 style="color : white;" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter Une Voiture</h5></button><br><br>
	   
        
        
        <form id="form-add-user" method="post" action="voiture/add" enctype="multipart/form-data" >
        
        <div class="col-lg-12 ">
            
        <div class="form-group">
                <div class="col-lg-12">
                    <input name="marque" type="text" class="form-control" placeholder="Marque" >
                    
                    <br><br>
                    
                    <input name="modele" type="text" class="form-control" placeholder="Model" >
                    
                    <br><br>
                    
                    <input type="text" class="form-control"  name="image" placeholder="image" >
                    
                    <br><br>
                    
                    <input name="ville" type="text" class="form-control" placeholder="ville"  >
                    
                    <br><br>
                    
                    <input name="prix" type="text" class="form-control" placeholder="prix" >
                    
                    <br><br>
                                        
                    <input name="carburant" type="text" class="form-control" placeholder="carburant">
                    
                    <br><br>
                    
                    <input name="desciption" type="text" class="form-control" placeholder="desciption">
                    
                    <br><br>
                    
                    <input name="matricule" type="text" class="form-control" placeholder="matricule" >
                    
                    <br><br>
                    
                    <input name="passagers" type="text" class="form-control" placeholder="nombre de matricule" >
                    
                    <br><br>
                    
                    <input name="options" type="text" class="form-control" placeholder="climat, wifi , ..." >
                    
                    <br><br>
                    
                    <div class="col-lg-10  col-lg-offset-1  ">
                        <button class="btn btn-success" type="submit" name="btn" >Ajouter</button>
                        <button class="btn btn-default" type="reset" id="annl" >anuler</button>
                    </div>
                    <br><br>	
        
                </div>
            </div>
        </div>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Random post pour vous</h3>
    </div>
    <div class="panel-body">
        <div class="list-group">
            
            <?php
                /*foreach($this->randomPostsList as $key => $value){
                   echo '<a href="http://localhost/BlogJs/post/p/'.$value['id_post'].'" class="list-group-item">
                            <h4 class="list-group-item-heading">'.$value['titre_post'].'</h4>
                            <p class="list-group-item-text">'.$value['description_post'].'</p>
                        </a>'; 
                }
                */
            ?>
            
        </div>
    </div>
</div>
    
    
    
    
    
    <div class="list-group">
      <h4 class="list-group-item active success">Categories</h4>
      <a href="<?php //echo URL.'posts/js/'; ?>" class="list-group-item">JavaScript</a>
      <a href="<?php //echo URL.'posts/php/'; ?>" class="list-group-item">PHP</a>
      <a href="<?php //echo URL.'posts/jquery/'; ?>" class="list-group-item">JQuery</a>    
    </div>
  <div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">les plus visitées</h3>
    </div>
    <div class="panel-body">
     <ul class="list-group">
    <?php
            /*
                foreach($this->topPostsList as $key => $value ){
                     echo '<a href="http://localhost/BlogJs/post/p/'.$value['id_post'].'" class="list-group-item ">
                        <span class="badge">'.$value['nb_vue'].'</span>
                        '.$value['titre_post'].'
                    </a>';
                }
              */     
                
            ?>
  </ul>
    </div>
</div>
-->
</div>




<script>
    $(document).ready(function(){
        $('.btn-post').each(function(){
            $(this).click(function(){
                var idpost = $(this).attr('rel');
                idpost = "http://localhost/BlogJs/post/p/"+idpost;
                window.location = idpost;
            });
        });
        $("#btn-aff-form").click(function(){
            $("#form-add-user").toggle(800);
            return false;
        });
    
        $(".deluser").each(function(){
            $(this).click(function(e){
                var b = window.confirm("voulez vous vraiment supprimer !!");
                if(b){

                }else{
                    e.preventDefault();
                }
            });
        });
   
    
        $("#annl").click(function(){
            $("#form-add-user").hide(800);
            return false;
        });
        
         $(".close").each( function(){
            
            $(this).click(function(){
                $(this).parent().hide(800);
            });
            
        });
    });
</script>
    