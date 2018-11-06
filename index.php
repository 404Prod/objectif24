<?php include_once 'includes/header.php' ?>

	<section class="title">
		<h1>Bienvenue sur le site officiel d'Objectif24 !</h1>
	</section>
	<section class="team">
		<p class="bigger">
		<br>
			Pour en savoir plus sur l'événement, rendez-vous sur la page <a href="about.php">Informations</a><br>
			Pour vous inscrire, ça se passe <a href="inscription.php">ici</a> ! <br>
			Pour vous tenir informés, consultez régulièrement notre page facebook, ainsi que le site. <br>
		</p>
	</section>
	<!--<section class="bold_announcement">
		<p class="counter">Le rallye est terminé depuis
			<span class="d"></span> jours,
			<span class="h"></span> heures,
			<span class="m"></span> minutes et
			<span class="s"></span> secondes ! <br> Merci à toutes les équipes !
		</p>
		<p class="counter">Il reste
			<span class="h"></span> heures,
			<span class="m"></span> minutes et
			<span class="s"></span> secondes <br> pour plancher sur votre vidéo !git
		</p>
		<p class="counter">Le rallye débute dans
			<span class="h"></span> heures,
			<span class="m"></span> minutes et
			<span class="s"></span> secondes <br> !git
		</p>-->
		<script>
			var target = new Date(2017, 0, 12, 18, 0, 0, 0);
			function tick() {
				var now = new Date();
				var diff = Math.floor((now.getTime() - target.getTime())/1000);

				var seconds = diff % 60;
				var minutes = Math.floor(diff%3600 / 60);
				var hours = Math.floor(diff%86400 / 3600);
				var days = Math.floor(diff / (60 * 60 * 24));

				$('.counter .d').html(days);
				$('.counter .h').html(hours<10?"0"+hours:hours);
				$('.counter .m').html(minutes<10?"0"+minutes:minutes);
				$('.counter .s').html(seconds<10?"0"+seconds:seconds);
			}

			$(document).ready(function() {
				window.setInterval(tick, 1000);
				tick();
			});
		</script>

	<br>

	<section>
		<article class="sn_container">
			<p><a class="sn" href="https://www.facebook.com/objectif24Grenoble" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a> <!--&emsp; <a class="sn" href="https://twitter.com/RallyeVideo2017" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a> &emsp; <a class="sn" href="https://www.instagram.com/lerallyecontreattaque/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a> &emsp; <a class="sn" href="https://www.youtube.com/channel/UCFqYHHqm3yayXSJWs2qTLNA" target="_blank"><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i></a>--></p>
		</article>

		<br>

		<!-- <article>
			<iframe width="500" height="262" src="https://www.youtube.com/embed/98YoGbCjr7M" frameborder="0" allowfullscreen></iframe>
		</article> -->
	</section>


	<?php include_once 'includes/footer.php'; ?>
</body>
