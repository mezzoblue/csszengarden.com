<?php

	$lang = "nl";

	$head = array(
		"title" => "CSS Zen Garden: de schoonheid van ontwerpen met CSS",
		"description" => "Een demonstratie van wat men visueel kan bereiken met CSS gebaseerde ontwerpen.",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "
	Nederlandse vertaling door: Niels Dequeker

	Bekijk Broncode is een kenmerk, geen fout. Bedankt voor uw nieuwsgierigheid en
	interesse om deel te nemen!

	Richtlijnen bij het insturen van een nieuwe en verbeterde csszengarden.com:
	- CSS3? Natuurlijk! Gebruik vendor-prefixed voor ALLE browsers waar nodig.
	- responsive? test uw layout voor verschillende scherm groottes.
	- minimale browsertests: IE9+, recente versie van Chrome/Firefox/Safari, en iOS/Android
	- Graceful degradation is aanvaardbaar en erg aanbevolen.
	- gebruik classes bij het opmaken, geen ids.
	- web fonts zijn cool, zorg er voor dat u de juiste licentie hebt om de bronbestanden te mogen delen

	Enkele tips tijdens het aanmaken van uw CSS bestand:
	- gebruik :first-child, :last-child en :nth-child om elementen zonder class aan te spreken
	- gebruik ::before en ::after om pseudo-elementen aan te maken voor extra opmaak
	- gebruik zoveel achtergrond afbeeldingen als u zelf wil
	- gebruik de Kellum Methode indien nodig voor image replacement. http://goo.gl/GXxdI
	- voeg geen extra divs toe aan het eind van het document, beter om ::before en ::after te gebruiken.
		",
	);


	$intro = array(
		"h1" => "CSS Zen Garden",
		"h2" => 'De schoonheid van ontwerpen met <abbr title="Cascading Style Sheets">CSS</abbr> design',

		"summary-p1" => 'Een demonstratie van wat men visueel kan bereiken met <abbr title="Cascading Style Sheets">CSS</abbr> gebaseerde ontwerpen. Kies &eacute;&eacute;n van de style sheets (ontwerpen) uit de lijst om te gebruiken voor deze pagina.',
		"summary-p2" => 'Download een voorbeeld <a href="' . $zenUrls["example-html"] . '" title="Het HTML voorbeeld bestand, deze mag niet aangepast worden.">html bestand</a> en <a href="' . $zenUrls["example-css"] . '" title="Het css voorbeeld bestand, deze mag aangepast worden.">css bestand</a>',

		"preamble-h3" => 'De weg naar verlichting',
		"preamble-p1" => 'We laten achter ons een duistere weg van overblijfselen van browser specieke tags, incompatibele <abbr title="Document Object Model">DOM</abbr>s, niet werkende <abbr title="Cascading Style Sheets">CSS</abbr> ondersteuning en verouderde browsers.',
		"preamble-p2" => 'Hedentendaage moeten we ons hoofd leeg maken en ontdoen van de technieken uit het verleden. Web Verlichting is mogelijk gemaakt door de onvermoeibare inspanningen van de mensen van de <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Standards Project">WaSP</abbr>, en de grote browser producenten.',
		"preamble-p3" => 'De css Zen Garden nodigt u uit om te relaxen en te mediteren op de belangrijke lessen van de meesters. Begin met het zuiver zien. Leer om nieuwe (binnekort) tijd-winnende technieken op versterkende wijze te gebruiken. Wordt &eacute;&eacute;n met het web.',
	);


	$main = array(
		"explanation-h3" => "Waar gaat dit over?",
		"explanation-p1" => 'Er is een duidelijke noodzaak voor het serieus nemen van <abbr title="Cascading Style Sheets">CSS</abbr> door grafische ontwerpers. De Zen Garden richt zich op het enthousiast maken, inspireren en aanmoedigen van het gebruiken van CSS door grafische ontwerpers. Kijk om te beginnen in de lijst met aanwezige ontwerpen. Door te klikken op een ontwerp wordt het ontwerp in deze pagina ingeladen. De <abbr title="HyperText Markup Language">HTML</abbr> blijft hetzelfde, het enige wat verandert is het externe <abbr title="Cascading Style Sheets">CSS</abbr> bestand. Ja, echt waar!',
		"explanation-p2" => '<abbr title="Cascading Style Sheets">CSS</abbr> stelt ons in staat om complete en totale controle uit te oefenen over de opmaak van een hypertext document. De enige wijze waarop dit ge&iuml;llustreerd kan worden, op een manier dat dit mensen enthousiast maakt, is door middel van een demonstratie van wat CSS echt betekent in de handen van diegene die schoonheid cre&euml;eren vanuit structuur. Tot op heden, zijn de meeste voorbeelden van mooie trucs en hacks gedemonstreerd door \'structureerders\' en programmeurs. Grafische ontwerpers moeten hier echter nog hun stempel drukken. Dit moet dus snel gaan gebeuren.',

		"participation-h3" => "Deelname",
		"participation-p1" => 'Bij voorkeur enkel grafische ontwerpers. U past deze pagina aan, dus goede vaardigheden op het gebied van <acronym title="Cascading Style Sheets">CSS</acronym> zijn noodzakelijk. Echter, de voorbeeld bestanden zijn zodanige voorzien van commentaar dat zelfs beginnende CSS-ers ze kunnen gebruiken als startpunt. Zie ook de <a href="http://www.mezzoblue.com/zengarden/resources.asp" title="Een lijst met CSS gerelateerde bronnen"><acronym title="Cascading Style Sheets">CSS</acronym> Bronnen</a> voor geavanceerde handleidingen en tips voor het werken met CSS.',
		"participation-p2" => 'U mag de style sheet wijzigen zoals u wilt, echter niet de HTML! Dit komt misschien wat vreemd over als u nog nooit op deze wijze gewerkt heeft, maar volg de links op deze pagina om meer te leren en gebruik de voorbeeld bestanden als een richtlijn.',
		"participation-p3" => 'Download het voorbeeld <a href="' . $zenUrls["example-html"] . '" title="De HTML mag van dit bestand niet aangepast worden">html bestand</a> en <a href="' . $zenUrls["example-css"] . '" title="Het CSS voorbeeld bestand, deze mag aangepast worden.">CSS bestand</a> om er lokaal eraan te kunnen werken. Op het moment dat u uw meesterwerk klaar heeft (en alstublieft, stuur geen half afgemaakt werk) kunt u uw .css bestand&nbsp; uploaden naar een web server waar u toegang tot heeft. Stuur ons het adres van uw bestand en als we besluiten om het te gaan gebruiken zullen we de bijbehorende plaatjes er bij downloaden. Uiteindelijk zullen toegezonden aanmeldingen op onze server geplaatst worden.',

		"benefits-h3" => "Voordelen",
		"benefits-p1" => 'Waarom deelnemen? Voor de (h)erkenning, inspiratie en het meewerken aan een bron waar we allemaal naar kunnen verwijzen om het gebruik van <acronym title="Cascading Style Sheets">CSS</acronym> gebaseerd ontwerpen te promoten. Dit is zeer noodzakelijk, zelfs hedentendaage. Steeds meer grote web sites nemen de stap naar <acronym title="Cascading Style Sheets">CSS</acronym> gebaseerd ontwerp, maar velen hebben dat nog niet gedaan. Ooit zal deze galerij een historische curiositeit zijn, maar die moet nog komen.',

		"requirements-h3" => "Vereisten",
		"requirements-p1" => 'We zouden graag zoveel mogelijk <acronym title="Cascading Style Sheets, versie 1 en 2">CSS1 en 2</acronym> willen zien. <acronym title="Cascading Style Sheets, versie 3 en 4">CSS2</acronym> moet beperkt blijven tot breed ondersteunde elementen. De CSS Zen Garden gaat over functioneel, praktische CSS en niet over de laatste high-tech mogelijkheden die alleen zichtbaar zijn voor 2% van het surfende publiek. De enige echte vereiste is dat u uw CSS valideert.',
		"requirements-p2" => 'Deze manier van ontwerpen toont aan hoe goed de verschillende browsers <abbr title="Cascading Style Sheets">CSS</abbr> op dit moment hebben ge&#239;mplementeerd. Als u zich aan de richtlijnen houd zou het resultaat behoorlijk consistent moeten zijn tussen de verschillende moderne browsers. Door het grote aantal user agents op het web &#8212; zeker als u ook mobiel mee rekend &#8212; zullen pixel-perfecte ontwerpen niet altijd mogelijk zijn voor elk platform. Dat is geen probleem, maar test wel in zoveel mogelijk verschillende browsers. Uw design zou op zijn minst moeten werken voor IE9+, de laatste Chrome, Firefox, iOS en Android browsers (gebruikt door meer dan 90% van de bevolking).',
		"requirements-p3" => 'We vragen u om alleen ontwerpen die door u zelf zijn gemaakt op te sturen. Houd hierbij alstublieft rekening met de auteursrechten. Beperk mogelijk bezwaarlijk materiaal tot een minimum; probeer zo veel mogelijk unieke en interessante ontwerpen te gebruiken voor uw werk. We zijn al een heel eind voorbij het punt dat we een nieuw tuin-gerelateerd ontwerp nodig hebben.',
		"requirements-p4" => 'Dit is een oefening alsmede een demonstratie. U behoudt uw auteursrecht over de beeldmaterialen, maar we vragen u om uw CSS vrij te geven onder een "Creative Commons" licentie identiek aan de degene van deze site, zodat anderen van uw werk kunnen leren.',
		"requirements-p5" => 'Door <a href="' . $zenUrls["zen-credits-creator"] . '">Dave Shea</a>. Bandbreedte is gedoneerd door <a href="' . $zenUrls["zen-credits-hosting"] . '">mediatemple</a>. Nu beschikbaar: <a href="' . $zenUrls["zen-credits-book"] . '">Zen Garden, het boek</a>.',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "Bekijk de validatie van deze website&#8217;s HTML",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "Bekijk de validatie van deze website&#8217;s CSS",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "Bekijk de Creative Commons licentie van deze website: Attribution-NonCommercial-ShareAlike.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "Lees over de toegankelijkheid van deze website",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Fork deze website op GitHub",
		"zen-github-text" => "GH",
	);

	$sidebar = array(
		"design-selection-h3" => "Kies een ontwerp:",
		"design-selection-by" => "door",

		"design-archives-h3" => "Archief:",
		"design-archives-next" => "Volgende ontwerpen",
		"design-archives-previous" => "Vorige ontwerpen",
		"design-archives-viewall-title" => "Bekijk elke inzending van de Zen Garden.",
		"design-archives-viewall-text" => "Bekijk alle ontwerpen",

		"design-resources-h3" => "Bronnen:",
		"view-css-title" => 'Bekijk het CSS bestand van dit ontwerp',
		"view-css-text" => 'Bekijk de <abbr title="Cascading Style Sheets">CSS</abbr> van dit ontwerp',
		"css-resources-title" => 'Links naar de site over het gebruik van CSS.',
		"css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> Resources',
		"zen-faq-title" => 'Een lijst met veelgevraagde vragen en antwoorden over de CSS Zen Garden.',
		"zen-faq-text" => '<abbr title="Frequently Asked Questions">FAQ</abbr>',
		"zen-submit-title" => 'Verstuur uw eigen CSS bestand.',
		"zen-submit-text" => 'Stuur een ontwerp in',
		"zen-translations-title" => 'Bekijk vertaalde varianten van deze pagina.',
		"zen-translations-text" => 'Vertalingen',
	);

	$foot = array(
		"comment" => "
	Deze extra span/div tags kunnen gebruikt worden om extra beeldmateriaal te gebruiken
	De dag van vandaag hebben we volledige ondersteuning voor ::before en ::after, gebruik deze bij voorkeur.
	Deze blijven enkel voor compatibiliteit met eerdere ontwerpen. Deze zullen ooit verdwijnen.
		",
	);


?>
