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
            include ("config/database.php");

            if ($_POST){
                $sql ="INSERT INTO user (mail, mdp) VALUES(?,?)";
                $a = $pdo->prepare($sql)->execute([$_POST['mail'], $_POST['mdp']]);
            }
           

            
		?>

        <section>
            <div class="container">
                <form method="post" enctype="multipart/form-data" action="">      <!-- ligne obligatoire pour retrouver les données dans mon fichier -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="postCode">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Introduisez ce même mot de passe une deuxième fois.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Je confirme avoir lu les conditions</label>
                </div>
                <button type="submit" class="btn btn-primary" a href="http://localhost/appWeb/bienvenue.php">Valider</button>
                </form>
            </div>
        </section>
			<footer>
				
			</footer>
		</div> <!-- div bloc_page -->
	</BODY>
</HTML>