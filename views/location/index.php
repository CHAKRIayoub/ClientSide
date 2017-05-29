
<?php

    $Id = $this->voiture['Id'];
	$Carburant = $this->voiture['Carburant'];
	$Description = $this->voiture['Description'];
    $Marque = $this->voiture['Marque'];
    $Matricule = $this->voiture['Matricule'];
    $Modele = $this->voiture['Modele'];
    $Options = $this->voiture['Options'];
    $Passagers = $this->voiture['Passagers'];
    $Prix = $this->voiture['Prix'];
    $Ville = $this->voiture['Ville'];

?>
<H2>Reservés Une Voiture</H2>
<hr>
<br><br>
    


<form  method="post" action="../../location/save/<?php echo $Id; ?>">
        
        <div class="col-lg-8  col-lg-offset-2">
            
        
            <div class="form-group">
                <div class="col-lg-12">
                    <input disabled="true" name="marque" type="text" class="form-control" placeholder="Marque" value="<?php echo $Marque; ?>">
                    
                    <br><br>
                    
                    <input disabled="true" name="modele" type="text" class="form-control" placeholder="Model" value="<?php echo $Modele; ?>">
                    
                    <br><br>
                    
                    <input disabled="true" name="ville" type="text" class="form-control" placeholder="ville" value="<?php echo $Ville; ?>" >
                    
                    <br><br>
                    
                    <input disabled="true" name="prix" type="text" class="form-control" placeholder="prix" value="<?php echo $Prix; ?>">
                    
                    <br><br>
                                        
                    <input disabled="true" name="carburant" type="text" class="form-control" placeholder="carburant" value="<?php echo $Carburant; ?>">
                    
                    <br><br>
                    
                    <input disabled="true" name="desciption" type="text" class="form-control" placeholder="desciption" value="<?php echo $Description; ?>">
                    
                    <br><br>
                    
                    <input disabled="true" name="matricule" type="text" class="form-control" placeholder="matricule" value="<?php echo $Matricule; ?>">
                    
                    <br><br>
                    
                    <input disabled="true" name="passagers" type="text" class="form-control" placeholder="nombre de matricule" value="<?php echo $Passagers; ?>">
                    
                    <br><br>
                    
                    <input  name="Options" type="text" class="form-control" placeholder="climat, wifi , ..." value="<?php echo $Options; ?>" disabled=true >
                    
                    <br><br>
                    
                    <input  name="date_d" type=date class="form-control">
                    
                    <br><br>
                    
                    <input  name="date_r" type=date class="form-control">
                    
                    <br><br>
                    
                    <div class="col-lg-10  col-lg-offset-4  ">
                        <button class="btn btn-success" type="submit" name="btn" >Louer</button>
                        <button class="btn btn-default" type="reset" id="annl" >anuler</button>
                    </div>
                    <br><br>	
        
                </div>
            </div>
        </div>
</form>