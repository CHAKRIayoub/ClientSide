<?php
	
	class Hash
	{
		/*
		*@param string $algo the algorithm (md5, sha1, whirlpool, etc)
		*@param string $data the data encode
		*@param string $salt the salt(this should be the same throughout the system probably )
		*@return string the hashed/salted data
		*/


	 	public static function create($algo,$data, $salt)
		{
		 	$con = hash_init($algo, HASH_HMAC, $salt);
		 	hash_update($con, $data);
		 	return hash_final($con);

		}
	}	 
?>