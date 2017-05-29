
<?php
	$id = $this->post['0']['id_post'];
    $titre = $this->post['0']['titre_post'];
	$description = $this->post['0']['description_post'];
    $text = $this->post['0']['text_post'];
    $editeur = $this->post['0']['nom'];
    $date = $this->post['0']['date_post'];
    $nb_vue = $this->post['0']['nb_vue'];
    $image = $this->post['0']['image'];
    $demo = $this->post['0']['demo'];
    $code = $this->post['0']['code'];
?>


<script>
    
    $(document).ready(function(){
        $('#code').parent().parent().hide();
        $('#demo').parent().parent().hide();
        
         $(document).on('click','.close', function(){
                $(this).parent().hide(800);
            });
            
    });
    
</script>


<div class="container bd">
<h1><?php echo "$titre"; ?></h1>
    <hr>
     <div class="col-md-10 col-md-offset-1">
         <p><?php echo $description; ?> </p>
          <h4> ennoncé image</h4>
       <img src="<?php echo URL.$image; ?>">
         
          <h4> correction </h4>
         <p><?php echo $description; ?> </p>
          <div class="panel panel-info" >
           <div class="panel-heading" > sourcs code</div>
           <div class="panel-body" >
                    <div id="code"> </div>
           </div>
          </div>
          <div class="panel panel-primary" >
           <div class="panel-heading " > demo</div>
           <div class="panel-body" >
                    <div id="demo" class="col-md-12" > </div>
           </div>
          </div>
     </div>
<?php



echo "<script type='text/javascript'>";
echo "    $(document).ready(function(){";

if(!empty($code)) echo  " $('#code').parent().parent().show(); $('#code').load('".URL.$code."'); ";
    
if(!empty($demo)) echo  " $('#demo').parent().parent().show(); $('#demo').load('".URL.$demo."');  ";         
    
echo "});</script>";

?>


    
    
