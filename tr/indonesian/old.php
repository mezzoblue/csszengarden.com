<?php

include '../../includes/masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="in" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>Taman Zen css: Keindahan Desain CSS</title>
	
	<!-- untunk menghilangkan efek Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
<?php

if($isNN4) {
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
	echo $isNN4;
	echo "\" />";
}

?>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--

	Dokumen xhtml ini diberi 'mark up' agar dapat dimanfaatkan desainer dengan kemungkinan fleksibilitas maksimum.
	Terdapat 'class' dan 'tags' yang lebih banyak daripada yang dibutuhkan yang dalam situasi sebenarnya seharusnya dapat menjadi lebih sedikit.

	Tetapi, saya berpikir kita dapat setuju bahwa kita jauh lebih baik daripada membuatnya menggunakan tabel.

-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>Taman Zen css</span></h1>
			<h2><span>Keindahan Desain <acronym title="Cascading Style Sheets">CSS</acronym></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>Sebuah demonstrasi berbagai macam pencapaian visual dengan desain berdasarkan <acronym title="Cascading Style Sheets">CSS</acronym>. Pilihlah <em>style sheet</em> dari daftar untuk ditampilkan di halaman ini.</span></p>
			<p class="p2"><span>Download contoh file <a href="zengarden-sample.html" title="Kode HTML halaman ini, bukan untuk dimodifikasi.">html</a> dan <a href="zengarden-sample.css" title="Kode contoh CSS halaman ini, file inilah yang dapat anda modifikasi.">css</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>Jalan Menuju Pencerahan</span></h3>
			<p class="p1"><span>Mengotori jalan gelap dan suram berserakan peninggalan masa lalu berupa tag-tag khusus browser tertentu, <acronym title="Document Object Model">DOM</acronym> yang bertentangan, dan dukungan <acronym title="Cascading Style Sheets">CSS</acronym> yang tidak lengkap .</span></p>
			<p class="p2"><span>Hari ini, kita harus membersihkan pikiran akan praktek-praktek masa lalu. Pencerahan dunia Web telah dapat dicapai berkat kerja tiada lelah dari kelompok seperti <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Accessibility Standards Project">WASP</acronym> dan para pencipta browser web.</span></p>
			<p class="p3"><span>Taman Zen css mengundang anda untuk bersantai dan bermeditasi pada pelajaran-pelajarn terpenting dari para ahli. Memulai melihat dengan jelas. Belajar menggunakan teknik (yang akan menjadi) penghematan waktu dengan gaya yang baru dan menyegarkan. Menjadi satu kesatuan dengan web.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>Mengenai Apakah Ini?</span></h3>
			<p class="p1"><span>Keseriusan para artis grafis mengenai <acronym title="Cascading Style Sheets">CSS</acronym> telah menjadi kebutuhan yang jelas. Taman Zen bertujuan untuk membangkitkan, menginspirasikan dan mendorong partisipasi. Untuk memulai, lihatlah beberapa desain yang telah ada dalam daftar. Memilih salah satunya akan menampilkan <em>style sheet</em> di halaman ini. Tidak ada perubahan dalam kode, satu-satunya perubahan adalah file .css eksternal. Percayalah.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> memungkinkan kendali lengkap dan penuh atas tampilan atau gaya dari sebuah dokumen hiperteks. Satu-satunya cara mengilustrasikannya sehingga dapat membuat orang-orang tertarik adalah dengan menunjukkan apakah yang sebenarnya dapat dicapai pada saat kendali diletakkan di tangan orang-orang yang mampu menciptakan keindahan dari struktur. Hingga saat ini, mayoritas contoh dari trik dan hack hanya didemonstrasikan oleh para strukturis dan pembuat kode. Desainer masih harus menunjukkan kemampuannya. Hal ini harus berubah.</span></p>
		</div>

		<div id="participation">
			<h3><span>Partisipasi</span></h3>
			<p class="p1"><span>Hanya untuk artis grafis saja. Anda memodifikasi halaman ini, sehingga kemampuan <acronym title="Cascading Style Sheets">CSS</acronym> yang  uat sangat dibutuhkan, tetapi file contoh telah dibubuhi komentar yang sangat jelas sehingga para pemula <acronym title="Cascading Style Sheets">CSS</acronym> dapat menggunakannya sebagai titik awal dan acuan. Bacalah <a href="http://www.mezzoblue.com/zengarden/resources/" title="Daftar beberapa nara sumber CSS">Panduan Nara Sumber <acronym title="Cascading Style Sheets">CSS</acronym></a> untuk tutorial tingkat lanjut dan tip-tip bekerja dengan <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>Anda dapat memodifikasi <em>style sheet</em> halaman ini dengan cara apapun, tetapi jangan melakukan modifikasi apapun pada <acronym title="HyperText Markup Language">HTML</acronym>-nya. al ini pada awalnya terlihat mengecilkan hati apabila anda belum ernah melakukannya sebelumnya, tetapi ikutilah link-link yang tertulis i daftar untuk belajar lebih banyak dan gunakanlah file contoh sebagai emandu.</span></p>
			<p class="p3"><span>Ambillah contoh file <a href="zengarden-sample.html" title="Kode HTML halaman ini, bukan untuk dimodifikasi.">html</a> dan <a href="zengarden-sample.css" title="Kode contoh CSS halaman ini, file inilah yang dapat anda modifikasi.">css</a> ntuk dimodifikasi di komputer anda sendiri. Apabila adikarya anda telah elesai dikerjakan (mohon tidak mengirimkan hasil yang setengah elesai) letakkan file .css anda ke server web anda sendiri. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Gunakan formulir kontak untuk mengirimkan link file CSS anda">Kirim kami link</a> ile tersebut dan apabila kamu memilih untuk menggunakannya, kami akan engambil sendiri file-file gambar yang dibutuhkannya dan akan ipindahkan ke server kami.</span></p>
			<p class="p4"><span>update: Saya mencari penerjemah. Bila anda mahir berbahasa Inggris dan bahasa lainnya, ini adalah cara lain untuk terlibat dengan proyek ini. Silakan <a href="http://www.mezzoblue.com/contact/" title="Kirimi saya e-mail menerangkan bahasa apakah yang sangat anda kuasai.">hubungi saya</a> untuk keterangan rinci. Terjemahan Bahasa Indonesia oleh <a href="http://www.avianto.com/" title="Avianto">Avianto</a></span></p>
		</div>

		<div id="benefits">
			<h3><span>Manfaat</span></h3>
			<p class="p1"><span>Mengapa berpartisipasi? Untuk menjadi lebih dikenal, menjadi inspirasi dan menjadi nara sumber yang dapat menjadi acuan pada saat menjelaskan desain berbasis <acronym title="Cascading Style Sheets">CSS</acronym>. Hal ini sangat dibutuhkan, bahkan hingga hari ini. Jumlah situs yang mengambil langkah ini bertambah seiring majunya waktu tetapi jumlah tersebut belumlah cukup. Suatu hari nanti galeri ini akan menjadi bagian dari sejarah keingintahuan; tetapi hari itu bukanlah hari ini.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Persyaratan</span></h3>
			<p class="p1"><span>Kami ingin melihat sebanyak mungkin penggunaan <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> apabila dimungkinkan. Penggunaan <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> dibatasi pada elemen-elemen yang mendapat banyak dukungan. Visi Taman Zen css adalah fungsional, pemakaian <acronym title="Cascading Style Sheets">CSS</acronym> praktis dan bukan trik terbaru paling mutakhir yang hanya dapat dilihat oleh 2% dari masyarakat umum. Satu-satunya persyaratan mutlak adalah <acronym title="Cascading Style Sheets">CSS</acronym> anda valid.</span></p>
			<p class="p2"><span>Sayangnya, mendesain dengan cara ini justru memperlihatkan kelemahan-kelemahan dalam berbagai implementasi <acronym title="Cascading Style Sheets">CSS</acronym>. Browser yang berbeda menampilkan bahkan <acronym title="Cascading Style Sheets">CSS </acronym> yang valid dengan berbeda-beda pula dan hal ini bertambah buruk ketika sebuah perbaikan di satu tempat justru merusak di tempat lain. Bacalah halaman <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources">Nara Sumber</a> untuk informasi berbagai perbaikan yang tersedia. Kesesuaian penuh antar browser masih menjadi impian dan kami tidak mengharapkan anda untuk menyajikan desain yang sempurna dan sama persis hingga ke ukuran pixel di semua browser dan sistem operasi. Tetapi tetaplah menguji sebanyak yang anda bisa. Bila desain anda tidak dapat tampil sebagaimana harusnya paling tidak di browser IE5+/Win dan Mozilla (browser yang digunakan oleh 90% pengguna) maka kemungkinan besar kami tidak akan menerimanya. </span></p>
			<p class="p3"><span>Kami meminta anda untuk mengirimkan karya yang orisinal. Mohon hormatilah hukum hak cipta. Mohon pula menggunakan material yang dapat dipermasalahkan secara minimal, erotisme yang berkelas dan berselera tinggi masih diperbolehkan tetapi pornografi dan hal-hal vulgar pasti akan langsung ditolak.</span></p>
			<p class="p4"><span>Ini adalah latihan pembelajaran sekaligus juga sebuah demonstrasi. Anda tetap memegang hak cipta secara penuh untuk grafis ciptaan anda, tetapi kami meminta anda menggunakan lisensi <em>Creative Commons</em> yang identik dengan <a href="http://creativecommons.org/licenses/sa/1.0/" title="Melihat informasi lisensi Taman Zen">situs ini</a> untuk karya <acronym title="Cascading Style Sheets">CSS</acronym> anda agar orang lain dapat belajar dari karya anda.</span></p>
			<p class="p5"><span>Donasi bandwidth oleh <a href="http://www.mediatemple.net/">mediatemple</a></span></p>
		</div>



		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Memeriksa validasi XHTML situs ini">xhtml</a>   
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Memeriksa validasi CSS situs ini">css</a>   
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="Melihat detail lisensi situs ini, oleh Creative Commons">cc</a>  
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.csszengarden.com%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Memeriksa aksesibilitas situs ini mengacu pada Bagian 508 U.S.">508</a>  
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.csszengarden.com%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Memeriksa aksesibilitas situs ini mengacu pada WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<!-- div tambahan untuk fleksibilitas - daftar ini mungkin menjadi bagian paling sulit yang akan anda hadapi -->
		<div id="linkList2">
		<!-- Apabila anda bertanya-tanya mengenai tanda &nbsp; ekstra di akhir link, itu adalah hack untuk memenuhi persyaratan WCAG 1 Accessibility. -->
		<!-- Saya tidak suka melakukannya, tetapi ini adalah latihan visual. Hal tersebut merupakan jalan tengah. -->
			<div id="lselect">
				<h3 class="select"><span>Pilihan Desain:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"?cssfile=/${tempLink}/${tempLink}.css&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> oleh <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<!--
				Bagian ini tidak akan ditampilkan sampai arsip bertambah lebih banyak. Tetapi rencanakanlah. Bila anda banyak memodifikasi bagian h3 dari 'pilihan desain' maka bagian ini harus pula dimodifikasi.
			<div id="lfavorites">
				<h3 class="favorites"><span>Favorit:</span></h3>
				<ul>
					<li><a href="#">filename</a> oleh <a href="" class="c">submitter</a>&nbsp;</li>
					<li><a href="#">filename</a> oleh <a href="" class="c">submitter</a>&nbsp;</li>
				</ul>
			</div>
			-->			

			<div id="larchives">
				<h3 class="archives"><span>Arsip:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"Lihat desain-desain selanjutnya. AccessKey: n\" accesskey=\"n\">desai<span class=\"accesskey\">n</span> selanjutny &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"Lihat desain-desain sebelumnya. AccessKey: p\" accesskey=\"p\">&laquo; desain sebelumnya</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="Lihat semua submisi desain untuk Taman Zen. AccessKey: w" accesskey="w">Lihat Semua Desain</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Nara Sumber:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"Lihat kode CSS halaman ini, AccessKey: v\" accesskey=\"v\">Lihat kode <acronym title=\"Cascading Style Sheets\">CSS</acronym> halaman ini</a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Link ke situs-situs bagus mengenai penggunaan CSS. AccessKey: r" accesskey="r">Nara Sumber <acronym title="Cascading Style Sheets">CSS</acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="Pertanyaan yang sering ditanyakan. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FAQ</acronym></a> </li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Mengirim desain CSS anda. AccessKey: s" accesskey="s">Mengirim Desain</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="Melihat terjemahan halaman ini. AccessKey: t" accesskey="t">Terjemahan</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>


<!-- Tag div dan span ini dapat digunakan sebagai bantuan untuk menambah gambar/foto tambahan. -->
<!-- Tambahkan sebuah gambar/foto latar belakang untuk masing-masing dan gunakan lebar dan tinggi untuk mengendalikan ukuran, letakkan dengan menggunakan posisi absolut -->
<!-- Ada bug yang mengakibatkan perubahan warna cukup drastis pada GIF transparan di Netscape 6/7 dan Mozilla v1.0 sampai v1.3 (yang telah diperbaiki di versi selanjutnya)
		jadi pastikanlah untuk mengujicoba karya anda di browser-browser tersebut. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>