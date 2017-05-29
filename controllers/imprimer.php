<?php
 

	/**
	 * 
	 */
	 class imprimer extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct()
	 	{
	 		parent::__construct();
	 		Session::init();
	 	}
	 	//_____________________________________________________
		public function index(){
			
		}
         
         public function recu($id){
             
             require_once 'libs/dompdf/autoload.inc.php';
             require_once  'libsdompdfsrc
             //use Dompdf\Dompdf;
             
            
             
            $tab =  $this->model->get_res($id);
            $time = strtotime($tab['Date_d']);
            $time1 = strtotime($tab['Date_f']);
            $newformat = date('Y-m-d',$time);
            $newformat1 = date('Y-m-d',$time1);
             
             
            

            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $dompdf->loadHtml('
                <div class="panel panel-default" >
                    <div class="panel-body" >
                    
                        <h1> reçu de reservation - LocVoi </h1>
                    
                        <hr>
                        
                    
                        <h3> les dates de resérvation : </h3>
                          date de debut de resérvation :<h4> '.$newformat.'</h4>
                          date de fin de resérvation :<h4> '.$newformat1.'</h4> <hr>
                          
                          <hr>
                          
                        <h3> les caractéristique du voiture : <h3>
                        <h6> - Marque :'.$tab['voiture']['Marque'].'</h6>
                        <h6> - Model :'.$tab['voiture']['Modele'].'</h6>
                        <h6> - Ville '.$tab['voiture']['Ville'].'</h6>
                        <h6> - Prix  '.$tab['voiture']['Prix'].' DHs/Jour </h6>
                        
                        <hr>
                        
                        <h3> l\' etat de resérvation : </h3>
                        <p>
                            VOTRE DEMANDE ET BIEN CONFIRMER
                        </p>
                        <h5>CORDIALEMENT,</h5>
                                   
                               <hr> 
                          
                               <h3> votre informations : <h3>
                               <h6> - Nom & Prenom :'.$tab['user']['Nom'].' '.$value['user']['Prenom'].'</h6>
                               <h6> - CIN  '.$tab['user']['Cin'].'</h6>
                               <h6> - Adresse :'.$tab['user']['Adresse'].'</h6>
                               <h6> - Tel :'.$tab['user']['Tel'].'</h6>
            
                            
                            
            
            
            
               </div></div>');
                
             
             $dompdf->render();
                 $dompdf->stream();

             
         }
		//_____________________________________________________
		//_____________________________________________________

	 } 

?>