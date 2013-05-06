<?php

if (!strlen($loadCSS)) {$loadCSS = "/001/001.css";}

function linkMe($url) {
	return "?cssfile=${url}";
}

$numEntries = 47;

$filename = array(
	1 => "/001/001.css",
	"/002/002.css",
	"/003/003.css",
	"/004/004.css",
	"/005/005.css",
	"/006/006.css",
	"/007/007.css",
	"/008/008.css",
	"/009/009.css",
	"/010/010.css",
	"/011/011.css",
	"/012/012.css",
	"/013/013.css",
	"/014/014.css",
	"/015/015.css",
	"/016/016.css",
	"/017/017.css",
	"/018/018.css",
	"/019/019.css",
	"/020/020.css",
	"/021/021.css",
	"/022/022.css",
	"/023/023.css",
	"/024/024.css",
	"/025/025.css",
	"/026/026.css",
	"/027/027.css",
	"/028/028.css",
	"/029/029.css",
	"/030/030.css",
	"/031/031.css",
	"/032/032.css",
	"/033/033.css",
	"/034/034.css",
	"/035/035.css",
	"/036/036.css",
	"/037/037.css",
	"/038/038.css",
	"/039/039.css",
	"/040/040.css",
	"/041/041.css",
	"/042/042.css",
	"/043/043.css",
	"/044/044.css",
	"/045/045.css",
	"/046/046.css",
	"/047/047.css"
	);
	
$styleName = array(
	1 => "tranquille",
	"Salmon Cream Cheese",
	"stormweather",
	"arch4.20",
	"Blood Lust",
	"Wicked Grove",
	"deep thoughts",
	"RPM",
	"Dead or Alive",
	"A Garden Apart",
	"meliorism",
	"TechnOhm",
	"Coastal Breeze",
	"Samuraai",
	"Boddhidarma",
	"The Garden Beneath",
	"Golden Mean",
	"Wrapped in Burlap",
	"What Lies Beneath",
	"Friendly Beaches",
	"Calm &amp; Smooth",
	"viridity",
	"fleur de l&#8217;avante-garde",
	"Not So Minimal",
	"mnemonic",
	"Zunflower",
	"Gothica",
	"Atlantis",
	"Backyard",
	"Entomology",
	"Hedges",
	"Crab Apple",
	"Fleur-de-lys",
	"zengrounds",
	"Release One",
	"White Lily",
	"pr&#234;t-&#224;-porter",
	"Creepy Crawly",
	"Erratic Blue",
	"The Question Why",
	"door to my garden",
	"Stone Washed",
	"Burning",
	"si6",
	"I Dream in Colour",
	"sub:lime",
	"dusk"
	);

$styleURL = array (
	1 => "http://www.mezzoblue.com/",
	"http://www.mezzoblue.com/",
	"http://www.mezzoblue.com/",
	"http://www.mezzoblue.com/",
	"http://www.mezzoblue.com/",
	"http://www.7nights.com/asterisk/",
	"http://www.bewb.org/",
	"http://www.kaosboy.net/",
	"http://www.mikepick.com/",
	"http://www.simplebits.com/",
	"http://www.paragraphic.co.uk/",
	"http://www.visualcss.com/",
	"http://www.mezzoblue.com/",
	"http://www.minzweb.de/",
	"http://www.urlgreyhot.com/",
	"http://www.minzweb.de/",
	"http://www.stopdesign.com/",
	"http://www.royalbarrel.com/",
	"http://www.mikepick.com/",
	"http://sophie-g.net/",
	"http://www.clkm.de/",
	"http://www.tunnel-vision.org/",
	"http://propagandabydesign.com/",
	"http://www.superfluousbanter.org/",
	"http://www.mezzoblue.com/",
	"http://www.homelesspixel.de/",
	"http://redux.deviantart.com",
	"http://alazanto.org/",
	"http://www.reh3.com/",
	"http://exp.hicksdesign.co.uk/",
	"http://www.glam.ac.uk/",
	"http://www.jaiandbecky.com/",
	"http://www.tanfa.designer-nameo.uk/",
	"http://www.snooble.com/",
	"http://www.nundroo.com/",
	"http://j-k.com/",
	"http://www.minzweb.de/",
	"http://www.sonicdeath.co.uk",
	"http://www.e-lusion.com/",
	"http://www.schisma.net/",
	"http://redux.deviantart.com/",
	"http://www.mooncalf.me.uk/",
	"http://etheldavisgallery.com/",
	"http://www.shauninman.com/",
	"http://www.scribblersclub.com/",
	"http://www.andybudd.com/blog/",
	"http://exp.hicksdesign.co.uk/"
	);

$styleCreator = array(
	1 => "Dave Shea",
	"Dave Shea",
	"Dave Shea",
	"Dave Shea",
	"Dave Shea",
	"D. Keith Robinson",
	"Jason Estes",
	"Bruno Cunha",
	"Michael Pick",
	"Dan Cederholm",
	"Brett J. Gilbert",
	"Josh Ambrutis",
	"Dave Shea",
	"Minz Meyer",
	"Michael Angeles",
	"Minz Meyer",
	"Douglas Bowman",
	"John Simons",
	"Michael Pick",
	"Sophie G",
	"Cornelia Lange",
	"Laura MacArthur",
	"Michael Switzer",
	"Dan Rubin",
	"Dave Shea",
	"Radu Darvas",
	"Patrick H. Lauke",
	"Kevin Davis",
	"Ray Henry",
	"Jon Hicks",
	"Kev Mears",
	"Jai Brinkofski",
	"Claire Campbell",
	"Andrea Piernock",
	"Didier Hilhorst",
	"Jens Kristensen",
	"Minz Meyer",
	"Luke Redpath",
	"Ian Main",
	"Diane Clayton",
	"Patrick H. Lauke",
	"Andrew Hayward",
	"Kevin &#038; Ethel Davis",
	"Shaun Inman",
	"Jeff Bilen",
	"Andy Budd",
	"Jon Hicks"
	);


$tempCSS = $HTTP_GET_VARS["cssfile"]; //Request.QueryString("cssfile");
if ($tempCSS != "") {
	$loadCSS = $tempCSS;
}
$currentDesign = $loadCSS;


$listEnd = $numEntries;
$listStart = $listEnd - 8;

$thisPage = 0; $isNN4 = 0;
$thisPage = intval($HTTP_GET_VARS["page"]);
$isNN4 = $HTTP_GET_VARS["nn4"];

if ($thisPage) {
	$listEnd = ($numEntries - ($thisPage * 8));
	
	if ($listEnd < 1) $listEnd = 1;
	$listStart = $listEnd - 8;
	if ($listStart <0) $listStart = 0;
}

?>