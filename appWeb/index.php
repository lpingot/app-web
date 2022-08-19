<!DOCTYPE html>
<HTML lang="fr">
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/style.css">

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.bundle.min.js"></scrip>
		
		
		<title> Projet WebDev Louis Pingot</title> <!-- Très important pour le référencement. Google fera un lien vers votre page avec ceci. C'est aussi le titre donné quand on met la page dans les favoris. Ne doit pas dépasser 70 caractères (pas une règle absolue, mais Google par exemple coupe les titres trop longs entre 65 et 70 caractères dans les pages de résultat). -->
		<meta name="Description" content="Description du site"/> <!-- Utilisé pour le référencement. Ne pas dépasser 200 caractères. -->
		<meta name="author" content="Louis Pingot" />

		<!-- déclaration des fichiers de scripts -->
		<script type="text/javascript" src="/js/commonscripts.js"></script>

	</HEAD>
	<BODY>
		<?php 
			include ("includes/headers.php"); 
		?>

		<div id="bloc_page">

			<section>
				<article>
					<h1 class="h3" >Découvrez les fonctionnalités de ce site :</h1>
						<h2 class="h4"> En tant qu'utilisateur, vous pouvez : </h2>
							<ul>
							<li> Vous identifier à l'aide de votre compte </li>
							<li> Modifier votre profil </li>
							</ul>
						<h2 class="h4"> En tant que visiteur, vous pouvez : </h2>
							<ul>
							<li> Vous inscrire sur notre site !</li>
							</ul>
				</article>
				<aside>
					
				</aside>
			</section>

			<footer>
				<div id="divLiensSociaux">
					<p>Copyright Louis Pingot, tous droits réservés</p>
				</div>
			</footer>
		</div> <!-- div bloc_page -->
	</BODY>
</HTML>