# OneTimeDownloadLink
Easilly generate a protected, one time single use download with an expiration. Allows for a file to be downloaded only once. 
# Brief

This script was written to be a very easy way for non-programmers to be able to create a secure way to share a single file. It is ideal for bands looking to give a single song to a single person, and invalidating the link once the song has been downloaded. However, it will work for any type of file.

#Description

This script allows you to generate a unique link to download a file. This file will only be allowed to download one time. This link will also have also have an expiration date set on it.

#Usage
All files must be uploaded to a directory on your server. This directory's permissions MUST be ```chmod 755``` (Also known as) ```User: read/write/execute Group: read/execute World: read/execute```

The directory called secret must also have the same permissions set as the parent directory.

You will need to modify the ```variables.php``` file and set your file specific info.
```
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
define('DOWNLOAD_PATH','/OneTimeDownloadLink/download.php');

// The admin password to generate a new download link
define('ADMIN_PASSWORD','1234');

// The expiration date of the link (examples: +1 year, +5 days, +13 hours)
define('EXPIRATION_DATE', '+1 month');
```

Once this is in place, you are ready to generate a new download key. To do this, you will need to use the password you set in the variables file. In the example above, that is 1234

Navigate to example.com/onetimedownloadlink/generate.php?1234 (Notice the ?1234 a the end — that is your password)

Copy the link that is generated and send it off. Voila! Done.
