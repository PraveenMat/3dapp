<?PHP
// Specify the part to the thumbnail images
$directory = '../assets/images';
// Only load files with the following extension
$allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
// in the rain used to separate the extension from each file
$file_parts = array();
// response message
$response = "";
// opens the directory to parse the images
$dir_handle = opendir($directory);
// iterate through the files
while ($file = readdir($dir_handle)) {
    // first check the hidden files
    if (substr($file, 0, 1) != '.') {
        // Split each file name to extract the file extension
        $file_components = explode('.', $file);
        // Grab the extension token
        $extension = strtolower(array_pop($file_components));
        // is the file a valid image. If so, add it to the response
        if (in_array($extension, $allowed_extensions)) {
            
            // Build a response string using the ~ symbol as a string sepaaarator
            $response .= $directory . '/' . $file . '~';
        }
    }
}
closedir($dir_handle);
// Return response while removing the last ~ separator
echo substr_replace($response,"",-1);
?>