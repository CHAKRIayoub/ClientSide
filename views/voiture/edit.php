
<?php
    $Id = $this->voiture['Id'];
	$Carburant = $this->voiture['Carburant'];
	$Description = $this->voiture['Description'];
	$Image = $this->voiture['Image'];
    $Marque = $this->voiture['Marque'];
    $Matricule = $this->voiture['Matricule'];
    $Modele = $this->voiture['Modele'];
    $Options = $this->voiture['Options'];
    $Passagers = $this->voiture['Passagers'];
    $Prix = $this->voiture['Prix'];
    $Ville = $this->voiture['Ville'];


?>
<H1>Modifier Une Voiture</H1>
<hr>
<br><br>
    


<form  method="post" action="../../voiture/edit_save/<?php echo $Id; ?>">
        
        <div class="col-lg-8  col-lg-offset-2">
            
        
            <div class="form-group">
                <div class="col-lg-12">
                    <input name="marque" type="text" class="form-control" placeholder="Marque" value="<?php echo $Marque; ?>">
                    
                    <br><br>
                    
                    <input name="modele" type="text" class="form-control" placeholder="Model" value="<?php echo $Modele; ?>">
                    
                    <br><br>
                    
                    <input name="image" type="text" class="form-control" placeholder="image" value="<?php echo $Image; ?>">
                    
                    <br><br>
                    
                    <input name="ville" type="text" class="form-control" placeholder="ville" value="<?php echo $Ville; ?>" >
                    
                    <br><br>
                    
                    <input name="prix" type="text" class="form-control" placeholder="prix" value="<?php echo $Prix; ?>">
                    
                    <br><br>
                                        
                    <input name="carburant" type="text" class="form-control" placeholder="carburant" value="<?php echo $Carburant; ?>">
                    
                    <br><br>
                    
                    <input name="desciption" type="text" class="form-control" placeholder="desciption" value="<?php echo $Description; ?>">
                    
                    <br><br>
                    
                    <input name="matricule" type="text" class="form-control" placeholder="matricule" value="<?php echo $Matricule; ?>">
                    
                    <br><br>
                    
                    <input name="passagers" type="text" class="form-control" placeholder="nombre de matricule" value="<?php echo $Passagers; ?>">
                    
                    <br><br>
                    
                    <input name="Options" type="text" class="form-control" placeholder="climat, wifi , ..." value="<?php echo $Options; ?>">
                    
                    <br><br>
                    
                    <div class="col-lg-10  col-lg-offset-4  ">
                        <button class="btn btn-success" type="submit" name="btn" >modifier</button>
                        <button class="btn btn-default" type="reset" id="annl" >anuler</button>
                    </div>
                    <br><br>	
        
                </div>
            </div>
        </div>
</form>