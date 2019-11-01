<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>

		<!-- Ex 1: Number of Songs (Variables) -->
		<p>
			<?php
			$song_count = 5678;
			print "I love music.
			I have ".$song_count." total songs,
			which is over ".(int)($song_count/10)." hours of music!"
			?>
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Billboard News</h2>
			<ol>
				<?php
				$news_pages=5;
				if(isset($_GET["newspages"])) {
					$news_pages=$_GET["newspages"];
				}
				for ($i=11; $i>11-$news_pages; $i--) {
					if ($i>=10) { ?>
						<li><a href=<?= "https://www.billboard.com/archive/article/2019" . $i ?>>2019-<?=$i?></a></li>
					<?php }
					else {  ?>
						<li><a href=<?= "https://www.billboard.com/archive/article/20190" . $i ?>>2019-0<?=$i?></a></li>
					<?php   }
				} ?>
			</ol>
		</div>


		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>

			<ol>
				<?php
				$favorite_artists = file("./favorite.txt");
				foreach ($favorite_artists as $favorite_artist) { ?>
					<li><a href=<?= "http://en.wikipedia.org/wiki/".str_replace(" ", "_", $favorite_artist)?>><?=$favorite_artist?></a></li>
				<?php } ?>
			</ol>
		</div>

		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
				<?php
				foreach (glob("./lab5/musicPHP/songs/*.mp3") as $filename) { ?>
					<li class="mp3item">
						<a href=<?="lab5/musicPHP/songs/".$filename?>><?=$filename?> </a>
					</li>
				<?php } ?>

				<!-- Exercise 8: Playlists (Files) -->
				<li class="playlistitem">326-13f-mix.m3u:
					<ul>
						<li>Basket Case.mp3</li>
						<li>All the Small Things.mp3</li>
						<li>Just the Way You Are.mp3</li>
						<li>Pradise City.mp3</li>
						<li>Dreams.mp3</li>
					</ul>
			</ul>
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
