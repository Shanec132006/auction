<?php 
	$key = '';
	// generate new hash key and store it in variable key
	for ($i=0;$i<10;$i++) {
	    $key =  $key .md5(uniqid(rand(), TRUE)) . "\n";
	}

	//store the has key in the configuration folder
	$file_content = '<?php define(\'HASH_KEY\',\''.$key.'\');?>';
	$file = fopen("hash-key.php", "w");
	fwrite($file, $file_content);
	fclose($file);
	echo "Hash key was generated succesfully";

?>