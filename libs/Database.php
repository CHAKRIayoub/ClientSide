<?php


	class Database 
	{
        public $clientWS;
		//_____________________________________________________
		function __construct(){
            $this->clientWS = new nusoap_client(WEB_SERVICE_PATH, 'wsdl');
            $this->clientWS -> setCredentials("testusername","testpassword","basic");
            $this->clientWS->soap_defencoding = 'UTF-8';
            $this->clientWS->decode_utf8 = false;
		}
		
		//_____________________________________________________
	}