<?php

 require 'libs\nusoap_lib\nusoap.php';
 require 'libs\dompdf\autoload.inc.php';
 use Dompdf\Dompdf;

 $client = new nusoap_client('http://localhost:50917/Service1.svc?wsdl', 'wsdl');
$client-> setCredentials("testusername","testpassword","basic");
    $client->soap_defencoding = 'UTF-8';
    $client->decode_utf8 = false;

 $id = $_GET['id'];
 $params['id'] = $id;
             
             $result = $client->call('get_reservation',$params);
             
             $params['id'] = $result['get_reservationResult']['Id_u'];
             $result1 = $client->call('get_user_byId',$params);
             
             $params['id'] = $result['get_reservationResult']['Id_v'];
             $result2 = $client->call('get_voiture',$params);
             
             $result['get_reservationResult']['voiture'] = $result2['get_voitureResult'];
             $result['get_reservationResult']['user'] = $result1['get_user_byIdResult'];
             $tab = $result['get_reservationResult'];

            $time = strtotime($tab['Date_d']);
            $time1 = strtotime($tab['Date_f']);
            $newformat = date('Y-m-d',$time);
            $newformat1 = date('Y-m-d',$time1);
             
             
            

            // instantiate and use the dompdf class
          $dompdf = new Dompdf();
          $str = "
          <html>
            <head>
              <link rel='stylesheet' type='text/css' href=\"public/style/boostwatch/paper/bootstrap.min.css\">
            </head>
            <body>
              <h1> reçu de reservation - LocVoi </h1>
              <hr>
              <h3> les dates de resérvation : </h3>
              date de debut de resérvation :<h4> $newformat </h4>
              date de fin de resérvation :<h4> $newformat1 </h4> 
              <hr>
              <h3> les caractéristique du voiture : </h3>
              <h6> - Marque : ".$tab['voiture']['Marque']." </h6>
              <h6> - Model : ".$tab['voiture']['Modele']." </h6>
              <h6> - Ville :".$tab['voiture']['Ville']." </h6>
              <h6> - Prix :". $tab['voiture']['Prix']." DHs/Jour </h6>
               <hr> 
              <h3> votre informations : </h3>
              <h6> - Nom & Prenom : ".$tab['user']['Nom'].$tab['user']['Prenom']  ."</h6>
              <h6> - CIN : ". $tab['user']['Cin']  ."</h6>
              <h6> - Adresse :". $tab['user']['Adresse']  ."</h6>
              <h6> - Tel : ". $tab['user']['Tel'] ." </h6>
              <hr>
              <h3> l' état de resérvation : </h3>
              <p>
                VOTRE DEMANDE ET BIEN CONFIRMER
              </p>
              <h5>CORDIALEMENT,</h5>
             
            </body>
          </html>
                        ";
            $dompdf->loadHtml($str);
                
             
             $dompdf->render();
             $dompdf->stream();


?>
