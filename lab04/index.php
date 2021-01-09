<!DOCTYPE html>
<html>

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/4/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/pResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>
		
		<!-- Ex 1: Number of Songs (Variables) -->
		<?php
			$song_count=5678;
		?>
		<p>
			I love music.
			I have <?=$song_count?> total songs,
			which is over <?=(int)($song_count/10)?>  hours of music!
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Yahoo! Top Music News</h2>
		
			<ol>
				<?php 
				if(isset($_GET["newspages"])) {$newspages=$_GET["newspages"];}
				else {$newspages=5;}
				?>
				<?php for($news_pages=1;$news_pages<=$newspages;$news_pages++){ ?>
				<li><a href="http://music.yahoo.com/news/archive/?page=<?= $news_pages ?>">Page <?=$news_pages?></a></li>
				<?php } ?>
			</ol>
		</div>

		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
					<?php 
					$lines = file("favorite.txt", FILE_IGNORE_NEW_LINES); ?>
			<ol>
			<?php foreach($lines as $line ){ ?>
				<li><a href="http://en.wikipedia.org/wiki/<?=$line?>"><?=$line?></a></li>
				<?php }?>
			</ol>
		</div>
		
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>
			<?php 
			$songs=glob("problem4/musicPHP/songs/*.mp3"); 
			$playlists=glob("problem4/musicPHP/songs/*.m3u");
			?>
			<ul id="musiclist">
				<?php foreach($songs as $song){ ?>
				<li class="mp3item">
					<a href="problem4/musicPHP/songs/<?=$song?>.mp3"><?=basename($song)?></a>(<?=(int)(filesize($song)/1024)?> KB)
				</li>
				<?php }?>

				<!-- Exercise 8: Playlists (Files) -->
				<?php 
				$playlists = array_reverse($playlists);
				foreach($playlists as $playlist) {?>
				<li class="playlistitem"><?=basename($playlist)?>:
					<ul>
						<?php 
						$playtexts=file($playlist);
						shuffle($playtexts);
						foreach($playtexts as $playtext){
							if(strpos($playtext,"#")===FALSE){  #못 찾으면 FALSE를 출력
						?>
						<li><?=$playtext?></li>
						<?php 
							}
						}
						?>
					</ul>
				</li>
				<?php }?>
			</ul>
		</div>

		<div>
			<a href="http://validator.w3.org/check/referer">
				<img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
