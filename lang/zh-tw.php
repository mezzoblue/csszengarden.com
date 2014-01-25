<?php

	$lang = "zh-tw";

	$head = array(
		"title" => "CSS Zen Garden: CSS設計之美",
		"description" => "展示以CSS為基礎的設計方式能夠達到的視覺效果。",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	檢視原始碼是個特色 (feature)，而不是錯誤 (bug)。感謝你的好奇與樂於參與！

	請參考以下新版 csszengarden.com 的作品投稿方針：

	- 我要用 CSS3 可以嗎？當然可以！若有必要，請替 **全部** 的瀏覽器加上參數的 prefix。
	- 使用 responsive web design (可適應性網頁設計)；在不同的螢幕大小上測試你的排版。
	- 網頁測試的基本要求：IE9+、最新版本的 Chrome/Firefox/Safari、以及 iOS/Android
	- 降級支援是可被接受，甚至其實是特別鼓勵的。
	- 使用 class 做樣式，不要用 ID。
	- 你也可以使用網頁字型，但請確認你有權利分享字型給瀏覽網頁的使用者。透過將語法添加在
	  CSS 檔案提供字型的網站 (如 Google Fonts) 是可以使用的，然而大多數需要插入 HTML 的
	  網頁字型服務不能使用在 CSS Zen Garden 上。TypeKit 是可以使用的，相關步驟請參考以下
	  連結的 readme 說明: https://github.com/mezzoblue/csszengarden.com/

	另外也提供幾個建立 CSS 檔案的小技巧：

	- 使用 :first-child, :last-child, :nth-child 來取得沒有加上 class 的元素。
	- 使用 ::before 與 ::after 來建立 pseudo-element 加上額外的花樣。
	- 使用多重背景圖片，背景可以無限制的添加在任何一個元素上。
	- 若你仍有圖片取代文字的需求，請使用 Kellum Method 做文字取代。 http://goo.gl/GXxdI
	- 請不要倚賴本網頁最下面的 div。請使用 ::before 跟 ::after。

	舊版「樣式表禪意花園」翻譯由 @hlb (薛良斌) 與 李士傑 完成。超破爛的翻譯更新由
	@medicalwei (魏藥) 接手。
	The original translation was done by @hlb (Liang-Bin Hsueh) and and Ilya Eric Lee, and
	the poor update is by @medicalwei (Yao Wei).
		",
	);


	$intro = array(
		"h1" => "CSS Zen Garden",
		"h2" => '<abbr title="Cascading Style Sheets">CSS</abbr>設計之美',

		"summary-p1" => '展示以<abbr title="Cascading Style Sheets">CSS</abbr>為基礎的設計方式能夠達到的視覺效果。只要選擇列表上的任一樣式表，就可以將它載入到這個頁面。',
		"summary-p2" => '下載<a href="' . $zenUrls["example-html"] . '" title="這個頁面的HTML程式碼，不該被更動。">HTML</a>跟<a href="' . $zenUrls["example-css"] . '" title="這個頁面的CSS範例檔，你可以更改它。">CSS</a>的範例檔案。',

		"preamble-h3" => '開悟之路',
		"preamble-p1" => '各家瀏覽器的專屬標籤、低相容度的<abbr title="Document Object Model">DOM</abbr>、缺乏完整支援的<abbr title="Cascading Style Sheets">CSS</abbr>，以及被遺棄的瀏覽器等遺跡，如今都散落在闇黑而荒涼的道路上。',
		"preamble-p2" => '今日，我們必須掃除腦海裡的過時技巧。感謝<abbr title="World Wide Web Consortium">W3C</abbr>、<abbr title="Web Standards Project">WaSP</abbr>，以及瀏覽器開發者們的努力不懈，我們終於能達到網站設計技術的開悟境界。',
		"preamble-p3" => 'CSS Zen Garden邀請您放鬆身心，冥想專家們的重要課題。讓我們以清晰的心靈之眼凝視，並且用嶄新、充滿活力的方式學習這項經得起時間考驗的技術，達到天人合一的境界。',
	);


	$main = array(
		"explanation-h3" => "這是關於什麼？",
		"explanation-p1" => '我們不斷的需要展示<abbr title="Cascading Style Sheets">CSS</abbr>的力量。Zen Garden致力於推廣使用、啟發靈感和鼓勵參與。你可以從瀏覽列表裡的設計著手。只要選擇列表上的任一樣式表，就可以將它載入到這個頁面。<abbr title="HyperText Markup Language">HTML</abbr>程式碼都維持原狀，唯一改變的是使用的<abbr title="Cascading Style Sheets">CSS</abbr>檔案。沒錯，的確如此。',
		"explanation-p2" => '<abbr title="Cascading Style Sheets">CSS</abbr>具備完整控制超文字文件的能力。不過唯有當你把韁繩交給能從結構中創造美感的人們，用實例展示它的功能時，才能夠鼓舞人心。設計師與工程師已經共同為網頁之美做出了貢獻，但我們仍可以更進一步。',

		"participation-h3" => "參與",
		"participation-p1" => '良好的視覺設計永遠是我們的目標。你必須修改這個頁面，所以得要有良好的<abbr title="Cascading Style Sheets">CSS</abbr>技巧。不過這份範例檔案已經詳盡地加上註解，即使是<abbr title="Cascading Style Sheets">CSS</abbr>初學者也能夠以此為出發點。請參考<a href="' . $zenUrls["zen-resources"] . '" title="CSS相關資源列表"><abbr title="Cascading Style Sheets">CSS</abbr>資源手冊</a>，裡面有相關的進階教學與技巧說明。',
		"participation-p2" => '你可以用你希望的任何方式修改樣式表，但是別更動<abbr title="HyperText Markup Language">HTML</abbr>檔案。如果你從來都沒有這樣做過，也許會有點心生膽怯。不過你可以參考列表來深入地學習，並且拿範例檔案作為教學指南。',
		"participation-p3" => '請下載<a href="' . $zenUrls["example-html"] . '" title="這個頁面的HTML程式碼，不該被更動。">HTML</a>跟<a href="/zengarden-sample.css" title="這個頁面的CSS範例檔，你可以更改它。">CSS</a>的範例檔案，並且在自己的電腦上修改。在你完成你的傑作後（請別拿半成品投稿），將<abbr title="Cascading Style Sheets">CSS</abbr>檔案上傳到你的網頁伺服器。把該檔案以及全部使用到的素材包成壓縮檔，並<a href="' . $zenUrls["example-css"] . '" title="請用聯絡表單給我們你的CSS檔案">寄給我們連結</a>，如果我們採用你的作品，我們會將其下載並放在我們的伺服器上。',

		"benefits-h3" => "益處",
		"benefits-p1" => '你為什麼要參與這項計畫呢？因為可以展現你的實力、激發創作靈感，並作為展示<abbr title="Cascading Style Sheets">CSS</abbr>驚人效果的參考資源。本網站供給現在的網頁工作者一些靈感，給予入門者學習的工具，並提供我們所期待的未來技術的展示。',

		"requirements-h3" => "必要條件",
		"requirements-p1" => '我們希望你盡可能地使用<abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr>。<abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr>應使用已被廣泛支援的部分，或是提供瀏覽器不支援時的備援樣式。CSS Zen Garden採用的是可行、實用的<abbr title="Cascading Style Sheets">CSS</abbr>語法，而不是些只能被 2% 觀眾瀏覽的超尖端技術。實際上，我們唯一的需求就只是你的<abbr title="Cascading Style Sheets">CSS</abbr>要合乎標準。',
		"requirements-p2" => '幸好，這樣的設計可以展示現今不同的瀏覽器實作<abbr title="Cascading Style Sheets">CSS</abbr>有多完整。若你遵照方針來設計網頁，你應該可以在大多數現代瀏覽器上面看到接近一致的效果。由於現在瀏覽器種類繁多，尤其將行動裝置納入考慮時更是如此，因此不太可能在各平台上做出精準的樣式。這點沒關係，但是盡可能的測試不同瀏覽器。你的設計應該至少要在IE9+，以及最新版本的Chrome、Firefox、iOS、Android瀏覽器上運作正常（超過 90% 以上的人們使用）。',
		"requirements-p3" => '我們要求你提出原創作品；請遵守著作權法規，盡可能不要使用有爭議的素材，並納入獨特且有趣的視覺題材到你的作品中；我們不太需要另一個跟花園有關的設計。',
		"requirements-p4" => '這是個示範，也是學習用的練習題。你可以保留圖片的完整著作權（具有有限度的例外，請參考<a href="' . $zenUrls["zen-guidelines"] . '">投稿方針</a>），但我們要求你用<a href="' . $zenUrls["zen-license"] . '" title="檢視Zen Garden的版權聲明。">與本網站相同</a>的創用CC授權釋出你的<abbr title="Cascading Style Sheets">CSS</abbr>作品，讓其他人可以從中學習。',
		"requirements-p5" => '由<a href="' . $zenUrls["zen-credits-creator"] . '">Dave Shea</a>提供。頻寬由<a href="' . $zenUrls["zen-credits-hosting"] . '">mediatemple</a>慷慨贊助。<a href="' . $zenUrls["zen-credits-book"] . '">Zen Garden之書</a>，現正販售中。',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "檢查網站的HTML是否合乎標準",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "檢查網站的CSS是否合乎標準",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "檢視本網站的創用CC版權聲明：姓名標示-非商業性-相同方式分享",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "閱讀關於本網站的親和力說明",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "在GitHub建立本網站的分支",
		"zen-github-text" => "GH",
	);

	$sidebar = array(
		"design-selection-h3" => "選擇一項設計：",
		"design-selection-by" => "by",

		"design-archives-h3" => "資料彙整：",
		"design-archives-next" => "下一個設計",
		"design-archives-previous" => "前一個設計",
		"design-archives-viewall-title" => "瀏覽Zen Garden上的所有設計。",
		"design-archives-viewall-text" => "瀏覽所有設計",

		"design-resources-h3" => "資源：",
		"view-css-title" => '檢視這一個設計的CSS檔案。',
		"view-css-text" => '檢視這個設計的<abbr title=\"Cascading Style Sheets\">CSS</abbr>',
		"css-resources-title" => '連結到提供CSS相關資訊的好站台。',
		"css-resources-text" => '<abbr title="Cascading Style Sheets">CSS</abbr>相關資源',
		"zen-faq-title" => '關於Zen Garden的常見問答集。',
		"zen-faq-text" => '常見問題',
		"zen-submit-title" => '投稿你的CSS檔案。',
		"zen-submit-text" => '設計投稿',
		"zen-translations-title" => '瀏覽這個頁面的翻譯版本。',
		"zen-translations-text" => '翻譯',
	);

	$foot = array(
		"comment" => "
	這些多的 div/span 原本是設計用來添加圖片用的。
	時至今日，我們有完整的 ::before 跟 ::after 支援，請使用這些做為替代。
	以下元素只留作舊有設計的相容性，某天他們終將消失無蹤。
		",
	);


?>
