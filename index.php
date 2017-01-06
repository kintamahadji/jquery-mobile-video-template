<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery Mobiule Video Template</title>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>

		<!-- jquery mobile -->
		<script src="assets/js-library/jquery-mobile/jquery.mobile-1.4.5.min.js"></script>
		<link rel="stylesheet" href="assets/js-library/jquery-mobile/jquery.mobile-1.4.5.min.css">

		<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>

	<!-- page -->
	<div data-role="page">
		
		<!-- header -->
		<div data-role="header">

			<a href="#left-panel" id="header-menu-button" class="ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon">Menu</a>

			<a href="#" id="header-search-button" class="ui-alt-icon ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-nodisc-icon">Search</a>

			<h1>Warung Ustadz</h1>
			
			<!-- header search form -->
			<div data-role="navbar" id="header-search">
				<form>
					<input type="search" name="s" id="header-search-form">
				</form>
			</div><!-- end header search form -->

		</div><!-- /header -->
	
		<!-- content -->
		<div role="main" id="wrap-main-content" class="ui-content">

			<div id="main-content">

			<!-- list video -->
			<div class="wrap-video">
				<?php for( $i=1; $i<=10; $i++): ?>
			
				<div class="video">

					<div class="video-img">
						<div class="video-img-thumbnail">
						<a href="#">
							<img src="http://i.ytimg.com/vi/BOiZeJdAoNQ/maxresdefault.jpg" alt="maher zein">
						</a>
						</div>
						<div class="video-time">
							<span>4:38</span>
						</div>
					</div>

					<div class="video-title">
						<h2>
							<a href="#">ماهر زين ومصطفى جيجيلي - بِكَ مُلهِمي | Maher Zain &amp; Mustafa Ceceli - Bika Moulhimi</a>
						</h2>
					</div>

					<div class="video-meta">
						<ul>
							<li>Awakening Records</li>
							<li>3.7M views</li>
							<li>6 months ago</li>
						</ul>						
					</div>
					<div class="clear-fix"></div>
				</div>

				<?php endfor; ?>
			</div>
			<!-- end list video -->

			<hr>

			<h1>Heading One</h1>
			<h2>Heading Two</h2>
			<h3>Heading Three</h3>

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <a href="foo.html">aliquam</a> erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ulliam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem veleum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel willum lunombro dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p> 

			<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc., li tot Europa usa li sam vocabularium. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilitá de un nov lingua franca: on refusa continuar payar custosi traductores. It solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.</p>

			<p>And to make your view-source easier, here's a link to the <a href="css/nn4.css">nn4.css</a> and the <a href="css/real.css">real.css</a>. Enjoy.</p>

			<h4>Heading Four</h4>
			<h5>Heading Five</h5>
			<h6>Heading Six</h6>
			<h6>HEADING SIX</h6>

			<p>Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental: in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.</p>

			<img src="assets/images/foto-pkh.jpg" alt="foto pesantren pkh" class="img-responsive">

			<ul>
				<li>First Item</li>
				<li>Second Item
					<ul>
					<li>First Item</li>
					<li>Second Item</li>
					<li>Third Item</li>
					<li>Fourth Item</li>
					<li>Fifth Item</li>
					</ul>
				</li>
				<li>Third Item</li>
				<li>Fourth Item</li>
				<li>Fifth Item</li>
			</ul>

			<ul>
			<li><a href="#">First item link</a></li>
			<li><a href="#">Second item link</a></li>
			<li><a href="#">Third item link</a></li>
			</ul>

			<pre>Preformatted code text. La la la.</pre>

			<p>I suppose I should put in a line with <em>emphasis</em> and <strong>strong words</strong>, too.</p>

			<blockquote>This paragraph uses a blockquote.</blockquote>
			
			</div><!-- end main content -->

		</div><!-- /end wrap main content -->

		<div data-role="footer">
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-icon="home" class="ui-btn-active">Beranda</a></li>
					<li><a href="#" data-icon="grid">Daftar Ustadz</a></li>
					<li><a href="#" data-icon="eye">Terbaru</a></li>
				</ul>
			</div>
		</div>
	
		<!-- panel left -->
		<div data-role="panel" id="left-panel" data-position="left" data-display="push">

			<div id="left-panel-page-menu">
				<ul data-role="listview" data-icon="false">
					<li data-role="list-divider">Halaman</li>
					<li><a href="#">Video terbaru</a></li>
					<li><a href="#">Daftar ustadz</a></li>
				</ul>
			</div>			

			<br>
			
			<div id="left-panel-page-menu">
				<ul data-role="listview" data-icon="false">
					<li data-role="list-divider">Halaman</li>
					<li><a href="#">Beranda</a></li>
					<li><a href="#">Tentang PKH</a></li>
					<li><a href="#">Hubungi Kami</a></li>
					<li><a href="#">Donasi/a></li>
				</ul>
			</div>
		</div><!-- /panel left -->
	
	</div><!-- /page -->

	<script>
	$(document).ready(function(){
		$('#header-search').hide();
		
		$('#header-search-button').on('click', function(){
			$('#header-search').toggle();
		});
	});
	</script>

	</body>
</html>