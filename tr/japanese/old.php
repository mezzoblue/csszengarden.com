<?php

$loadCSS = "/001/001-jp.css";
include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=shift_jis" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display, デザイン, スタイルシート, グラフィックデザイン, ウェブスタンダード, ビジュアル" />
	<meta name="description" content="CSS を使って視覚的にどんなデザインができるかの例" />
	<meta name="robots" content="all" />
	<title>css Zen Garden：CSS デザインの美</title>

	<!-- 一瞬スタイルシートの適用されていない HTML が見えてしまうのを防ぐため。 http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	この xhtml 文書はデザイナーに最大限の柔軟性を与えるように書かれています。
	だから、必要以上に classes や tagが指定してあります。実際にはもっとコンパクトなコードにできる可能性が高いけど、余分なタグがあるにしたってテーブルを使った場合よりずっとましっていうのはうなずいてもらえるんじゃないかな？


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span><acronym title="カスケーディング・スタイルシート">CSS</acronym> デザインの美</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span><acronym title="カスケーディング・スタイルシート">CSS</acronym> を使ったデザインで視覚的にどんなことができるかの例です。リストからスタイルシートを選択してこのページに適用してみてください。</span></p>
			<p class="p2"><span><a href="/zengarden-sample.html" title="このページの HTML ソースコード、改変不可">html文書</a>と<a href="/zengarden-sample.css" title="このページのサンプル CSS、改変可">サンプルcss文書</a>をダウンロード。</span></p>
		</div>

		<div id="preamble">
			<h3><span>悟りへの道</span></h3>
			<p class="p1"><span>あるブラウザ特定のタグ、互換性のない <acronym title="ドキュメント・オブジェクトモデル">DOM</acronym>、使えない <acronym title="カスケーディング・スタイルシート">CSS</acronym> サポートといった過去の遺物が暗く荒涼としたウェブの小道を散らかしているのが現在の状態です。</span></p>
			<p class="p2"><span>今日、私たちは過去のやりかたを頭から消し去らなければいけません。ウェブの悟りは、<acronym title="ワールドワイドウェブ・コンソーシアム">W3C</acronym>、<acronym title="ウェブスタンダード・プロジェクト">WaSP</acronym>、そして大手ブラウザメーカーといった人たちの絶えまざる努力のおかげで達成に至りました。</span></p>
			<p class="p3"><span>css Zen Garden は達人の大事な教えについてゆったりと瞑想することをおすすめします。澄んだ心でものごとを見、新しくパワフルな（未来の）伝統的技術を学びましょう。ウェブと一体化するのです。</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>このサイトって何のためにあるの？</span></h3>
			<p class="p1"><span>グラフィックデザイナーが <acronym title="カスケーディング・スタイルシート">CSS</acronym> を真剣にとらえる必要性が確実に存在します。Zen Garden の狙いは、みんなを感化し、創作意欲をかきたて、参加を励ますこと。とりあえず、すでにリストにのっているデザインを見てみてください。クリックすると、そのスタイルシートがこのページそのものに直接適用されます。ページ自体のコードはそのままで、リンクされたスタイルシートが変わるだけ。いや、ホントに。</span></p>
			<p class="p2"><span><acronym title="カスケーディング・スタイルシート">CSS</acronym> はハイパーテキスト文書の完全でトータルなコントロールをもたらしてくれる。これを説明するのにみんなをうきうきさせるような方法といったら、実際やってみせるしかない。このサイトは、構造から美を生み出すことのできる人たちの手にかかったら、ウェブの真の姿がどんなものになり得るかのデモンストレーションです。
今日まで、かっこいい技とかテクニックの多くは、構造だのコードだのを専門にする人々によって紹介されてきています。デザイナーの出番はまだのようです。この事実は変えなきゃいけません。
</span></p>
		</div>

		<div id="participation">
			<h3><span>参加</span></h3>
			<p class="p1"><span>グラフィックアーティスト以外はお断り。 
このページをいじくっているんだから、<acronym title="カスケーディング・スタイルシート">CSS</acronym> は使いこなせないとダメだけど、デザイン例はわかりやすくコメントが入れてあるから <acronym title="カスケーディング・スタイルシート">CSS</acronym> 初心者でもここから始められるようになっています。<acronym title="カスケーディング・スタイルシート">CSS</acronym> に関しての上級テクニックチュートリアルとかコツについては <a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS 関係のリンク集"><acronym title="カスケーディング・スタイルシート">CSS</acronym> 関連情報ガイド</a>をぜひ見てみてください。</span></p>
			<p class="p2"><span>スタイルシートはどれだけいじってもかまわないけど、<acronym title="ハイパーテキスト・マークアップ言語">HTML</acronym> は触らないで欲しい。これってやったことのない人は初めは手強いと思うかもしれない。でも、紹介しているリンクを参考に、知らないことをどんどん学んで、サンプルを生かして色々試してみてください。</span></p>
			<p class="p3"><span>サンプル <a href="zengarden-sample.html" title="このページの HTML ソースコード、改変不可">html 文書</a> と <a href="zengarden-sample.css" title="このページのサンプル CSS、改変可">css 文書</a> をダウンロードして、コピーを作って遊んでみてください。傑作が完成したら、（お願い：未完成なものは提出しないでね。）.css 文書を自分のサーバーにアップロードします。そうしたらそのファイルへの<a href="http://www.mezzoblue.com/zengarden/submit/" title="コンタクト・フォームを使って css 文書を送ってください。">リンクを送ってください</a>。もしそのデザインが選ばれたら、関連の画像に検索をかけます。最終的には私たちのサーバーへ置かせてもらいます。</span></p>
			<p class="p4"><span>アップデート：翻訳してくれる人を募集しています。英語とその他の言語に流暢なあなた、翻訳することもこのプロジェクトに参加するひとつの方法です。詳しくは（英語で）<a href="http://www.mezzoblue.com/contact/" title="どの言語に翻訳できるか、メールで知らせてください。">メールをください</a> 。日本語訳：<a href="http://www.myudesign.com/contact/" title="翻訳者、清水麻遊のサイトへ">清水麻遊（まゆう）</a> Japanese Translation by <a href="http://www.myudesign.com" title="Go to the translator's site">Mayu Shimizu</a></span></p>
		</div>

		<div id="benefits">
			<h3><span>特典</span></h3>
			<p class="p1"><span>何のために参加するか？名前を売るため、感化を受けるため、そして <acronym title="カスケーディング・スタイルシート">CSS</acronym> を使ったデザインの促進のため、みんなの情報源となる場を作るため。
			これは今現在でもまだ必要です。スタイルシートを使ったデザインへと移行する大企業もどんどん増えてはいますが、まだまだ少なすぎる。いつかこのギャラリーも、こんな試みもそういえばあったよね、と言われるものに変わる日がくるでしょう。でもそれはまだ先のこと。</span></p>
		</div>

		<div id="requirements">
			<h3><span>必要条件：</span></h3>
			<p class="p1"><span>できるだけ <acronym title="カスケーディング・スタイルシート、レベル1">CSS1</acronym> を活用してください。
			<acronym title="カスケーディング・スタイルシート、レベル2">CSS2</acronym> は広くサポートされている要素のみに抑えましょう。
			css Zen Garden の目的は機能的で実用的な <acronym title="カスケーディング・スタイルシート">CSS</acronym> を使うことで、ここはサイトユーザーの2%しか見ることのできない最先端技術を見せるための場所ではありません。
			唯一の実際の必要条件は、<acronym title="カスケーディング・スタイルシート">CSS</acronym> がスタンダードに準拠していることです。</span></p>
			<p class="p2"><span>残念なことに、このやり方でデザインすることは <acronym title="カスケーディング・スタイルシート">CSS</acronym> の様々なサポートの欠陥を浮きだたせることにつながります。違ったブラウザは違った表示をするし、スタンダードにちゃんと準拠している <acronym title="カスケーディング・スタイルシート">CSS</acronym> でさえ、時にはブラウザによって異なった表示をします。ひとつの壊れた部分の修理が他の故障につながる時、これはどうしようもない状態になります。 解決策のいくつかについては、<a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS 関連の資料リスト">関連情報ガイド</a>ページをご覧ください。完璧なブラウザ準拠はいまだに夢のまた夢ということもあるし、すべてのマシンで一ピクセルのずれもない完全なコードを期待しているわけでもありません。でも、できるだけ多くのブラウザでテストして欲しい。少なくとも IE5+ウィンドウズ版と Mozilla （あわせて人口の90%以上が使用、）でうまく表示されないデザインは、ここでは受けつけられません。</span></p>
			<p class="p3"><span>オリジナルの作品を提出するようお願いします。著作権を守りましょう。きわどいものは最小限におさえてください。例えば芸術的なヌードはセーフですが、あからさまなポルノは却下されます。</span></p>
			<p class="p4"><span>ここは実演の場であるとともに学習の場、練習するための場所でもあります。
			提出された画像の著作権はすべてあなたに属しますが、<acronym title="カスケーディング・スタイルシート">CSS</acronym> の著作権は他の人があなたの作品から学ぶことができるように、Creative Commons のライセンスの元に放棄することをお願いしています。
<a href="http://creativecommons.org/licenses/sa/1.0/" title="Zen Garden の著作権情報を見る。">Zen Garden の著作権</a>もこれに基づいています。 </span></p>
			<p class="p5"><span>バンドウィズは <a href="http://www.mediatemple.net/" lang="en">mediatemple</a>からありがたくいただいています。</span></p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="このサイトの XHTML のスタンダード準拠度をチェック">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="このサイトの CSS のスタンダード準拠度をチェック">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Creative Commons に基づくこのサイトの著作権の詳細を見る">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="このサイトの U.S. セクション508に従ったアクセシビリティ度をチェック">508</a> &nbsp;
			<a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="このサイトの  WAI コンテントガイドライン1に従ったアクセシビリティ度をチェック">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!-- フレキシブルにするための余分な div …このリストがたぶん一番やりにくいとこじゃないかな -->
		<div id="linkList2">

		<!-- リンクの後の余分な &nbsp; は、 WCAG 1 アクセシビリティをクリアするためのトリックです -->
		<!-- こんなことしたくはないけど、これは視覚的な遊びの場だから、こういった妥協も仕方ないよね -->
			<div id="lselect">
				<h3 class="select"><span>デザインを選択：</span></h3>
				<!-- リンクのリストはここから。一ページにつきリンクは8個以下 -->
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"アクセスキー： ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> by <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}

?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Archives:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"次のデザインセットを見る。アクセスキー：n\" accesskey=\"n\">次のデザインを見る &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {

						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Zen Garden の作品すべてを見る。アクセスキー：w" accesskey="w">全デザインを見る</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resources:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"今選んでいるデザインの CSS ソースを見る。アクセスキー：v\" accesskey=\"v\">このデザインの <acronym title=\"カスケーディング・スタイルシート\">CSS</acronym> を見る</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="CSS に関するおすすめ情報サイトへのリンク。アクセスキー：r" accesskey="r"><acronym title="カスケーディング・スタイルシート">CSS</acronym> 関連情報ガイド</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Zen Garden に関してよく訊かれる質問集。アクセスキー：q" accesskey="q"><acronym title="よくある質問と回答">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li>
					<li><a href="http://www.mezzoblue.com/zengarden/sendfile/" title="オリジナル CSS 文書を送ろう。アクセスキー：s" accesskey="s">デザインを送付</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="このページの翻訳されたバージョンを見る。アクセスキー：t" accesskey="t">翻訳</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- These extra divs/spans may be used as catch-alls to add extra imagery. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>