<?php
/**
 *	Single use download variables
 *	Defines where the actual download location is
 *	Defines the path to the download file (download.php)
 *	Sets a fake files name to show to users (should not be the same name as the real file)
 *	Sets the admin password to generate a new download link
 *	Sets a date when the file will expire (examples: +1 year, +5 days, +13 hours)
 */	
 	
	// Arrays of content type, suggested names and protected names
	$PROTECTED_DOWNLOADS = array(
		array(
			'content_type' => 'application/zip', 
			'suggested_name' => 'computing.zip', 
			'protected_path' => 'secret/file1.zip'
		),
		array(
			'content_type' => 'application/zip', 
			'suggested_name' => 'star.zip', 
			'protected_path' => 'secret/file2.zip'
		)
	);

	// The path to the download.php file (probably same dir as this file)
 	define('DOWNLOAD_PATH','/singleuse/download.php');
	
	// The admin password to generate a new download link
	define('ADMIN_PASSWORD','1234');
	
	// The expiration date of the link (examples: +1 year, +5 days, +13 hours)
	define('EXPIRATION_DATE', '+1 month');
	
	// Don't worry about this
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: ".date('U', strtotime(EXPIRATION_DATE)));
?>