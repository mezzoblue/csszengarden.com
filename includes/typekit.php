<?php

# URL for kit addition:
# ?submission=XXX?token=xxxxxxxx
# submission = three digit submission number
# token = Zen API token

header('Content-Type: text/plain');

require("typekit-client.php");

function getKitIdentifier($file) {
	$css = file_get_contents($file);

	if ($css !== false && preg_match("/\/\*\s*TYPEKIT_KIT_ID:\s*([0-9a-z]+)\s*\*\//i", $css, $matches)) {
		return $matches[1];
	} else {
		return null;
	}
}

function setKitIdentifier($file, $identifier) {
	$css = file_get_contents($file);

	$css = preg_replace("/(\/\*\s*TYPEKIT_KIT_ID:\s*)[0-9a-z]+(\s*\*\/)/i", "$1" . $identifier . "$2", $css);

	file_put_contents($file, $css);
}

function getCssFile($submissionId) {
	return realpath(__DIR__ . "/../" . $submissionId . "/" . $submissionId . ".css");
}

function copyKit($submissionId, $token) {
	$typekit = new Typekit();
	$cssFile = getCssFile($submissionId);
	$kitIdentifier = getKitIdentifier($cssFile);

	if ($kitIdentifier) {
		echo sprintf("INFO: Found kit identifier \"%s\" in \"%s\".\n", $kitIdentifier, $cssFile);
		$kit = $typekit->get($kitIdentifier);

		if ($kit) {
			echo sprintf("INFO: Retrieved kit with identifier \"%s\".\n", $kit["kit"]["id"]);

			$newKit = $typekit->create(Array(
				"name" => sprintf("submission %s", $submissionId),
				"domains" => Array("*.csszengarden.com"),
				"badge" => false,
				"segmented_css_names" => false,
				"families" => $kit["kit"]["families"]
			), $token);

			if ($newKit) {
				$newKitIdentifier = $newKit["kit"]["id"];

				echo sprintf("INFO: Created new kit with identifier \"%s\".\n", $newKitIdentifier);

				if ($typekit->publish($newKitIdentifier, $token)) {
					echo sprintf("INFO: Published kit with identifier \"%s\".\n", $newKitIdentifier);

					setKitIdentifier($cssFile, $newKitIdentifier);

					echo sprintf("INFO: Updated \"%s\" with new kit identifier \"%s\".\n", $cssFile, $newKitIdentifier);
				} else {
					echo sprintf("ERROR: Failed to publish kit with identifier \"%s\".\n", $newKitIdentifier);
				}
			} else {
				echo sprintf("ERROR: Failed to create a new kit.\n");
			}

		} else {
			echo sprintf("ERROR: Typekit kit \"%s\" not found.\n", $kitIdentifier);
		}
	} else {
		echo sprintf("WARNING: No Typekit kit identifier found in submission \"%s\".\n", $submissionId);
	}
}

$submission = $_GET["submission"];
$token = $_GET["token"];

if (!empty($submission) && !empty($token)) {
	copyKit($submission, $token);
} else {
	echo "ERROR: Please supply a `submission` number and `token` in the URL.";
}
?>
