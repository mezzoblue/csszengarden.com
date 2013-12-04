<?php

// kludgy hack, but it works
// (adapted from http://php.net/manual/en/function.readfile.php)


// kick in output buffering
ob_start();

// pull in the source file for output, assign to $file variable
include($SERVER_ROOT . "src.php");
$file = ob_get_contents();

// close up buffering
ob_end_clean();

if ($file) {

    // set headers for a download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=index.html');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($file));

    // not sure why these guys are necessary
    ob_clean();
    flush();

    // anyway, dump the string contents to the download buffer and finish up
    print $file;
    exit;
}

?>