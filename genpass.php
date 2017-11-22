<?php 
require('database/set.connect.php');
echo $base_url;
print_r(BASE_URL);
function generate_pass($text){
		return trim(md5(sha1(addslashes($text))));	
	}

	echo "412ae24226e51f77f95062cf85c58ede"."<br/>";
	echo generate_pass('administrator');
 ?>