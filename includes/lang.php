<?php
    // Check for translations
    if( isset($_GET['lang']) && !empty($_GET['lang']) ) {

        // Here we look for older, full names of languages from the URL.
        // If none are found, we will just serve up the 2-letter code.
        // TODO: check for length to skip this if the lang is only 2 letters.
        switch($_GET['lang']) {
            case 'francais':
                $lang = 'fr';
                break;
            default:
                $lang = $_GET['lang'];
        }

        // Create URL prepend for links
        $langURL = '/tr/' . $lang;
    }

  // Check for language file
  if(isset($lang)) {
      if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/lang/$lang.php")) {
      	  include($_SERVER['DOCUMENT_ROOT'] . "/lang/$lang.php");
      }
	} else {
	    include($_SERVER['DOCUMENT_ROOT'] . "/lang/en.php"); // default language
	}
?>
