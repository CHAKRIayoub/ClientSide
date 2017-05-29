
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    
    

    
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/style/boostwatch/paper/bootstrap.min.css">
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/style/style.css">
 
<link rel="stylesheet" href="<?php echo URL; ?>public/alertifyjs/themes/default.css" />
    
    
    
    
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
  
    
    
    
</head>
<body>
    
	<?php
		if (isset($this->js)) {
			foreach ($this->js as $js) {
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>' ;
			}	
		} 
	?>
    
    
    
    
    
    
    
    
    
    
<!--header de la page----------------------------------------------------------------------------------->    
    <nav class="navbar navbar-default fixedintop">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LocVoi</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            
            <?php  
                    $logged = Session::get('loggedIn');
                    $role = Session::get('role');
                    $login = Session::get('login');
              
                    if($logged == true):  ?>
              
                            <li class="active"><a href="<?php echo URL; ?>index">Principale</a></li>
                            <li><a href="<?php echo URL; ?>voitures">Voitures</a></li>
                            <li><a href="<?php echo URL; ?>dashboard">Locations</a></li>
          
                            <?php if($role == 'administrateur'):  ?>
          
                                <li><a href="<?php echo URL; ?>user">Utilisateurs</a></li>
          
                            <?php endif ?>
          
                            </ul>
            
                            <ul class="nav navbar-nav navbar-right">
                                 
                                <li><a><b><?php echo $login; ?></b> - <?php echo $role; ?></a></li>
                                <li><a href="<?php echo URL; ?>dashboard/logout">Deconnexion</a></li> 
                                <li><img src=<?php echo URL; ?>public/img/man.png id="logimg" ></li>
                                  
                            </ul>

                    <?php else: ?>

                        <li class="active"><a href="<?php echo URL; ?>index">principale</a></li>
                        <li><a href="<?php echo URL; ?>voitures">Voitures</a></li>
            </ul>
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo URL ; ?>login">Connexion</a></li>
                            <li><a href="<?php echo URL ; ?>login/inscr">Inscription</a></li>
                        </ul>

                    <?php endif ?>
          
        </div>
      </div>
    </nav>
<!--fin header de la page----------------------------------------------------------------------------------->    


    
    
    
    
    
    
    




	


<div class="container bd">
