<?php
require '_init.php';
Layout::i()->header();
Layout::i()->nav();
?>

	<div class="grid grid-cols-6 gap-6 w-full">

		<a href="/articles/positive-some.php">
			<div class="rounded-lg h-full">

				<img src="https://cdn.iconscout.com/icon/free/png-512/facebook-262-721949.png" alt="">
			</div>
		</a>

		<a href="/articles/mental-health.php">
			<div class="bg-gray-300 rounded-lg shadow-lg p-3">

				<strong>
					Sociale mediers betydning for unges mentale sundhed
				</strong>
				<p>
					Børn og unge bruger i gennemsnit op imod flere timer på sociale medier om dagen, så det har en kæmpe betydning for, hvordan de har det mentalt.
				</p>


			</div>
		</a>

	</div>

<?php
Layout::i()->footer();
?>