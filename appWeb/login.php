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
            // Vérification des identifiants
            $q = $pdo->prepare("SELECT * FROM user WHERE mail = :mail");
            $q->execute(["mail" => $mail]);
            $result = $q->fetch();

            if ($result == true)
                {
                    echo "vous etes connecté";
                }
            else
                {
                    echo "ce compte n'existe pas";
                }
            



            /**if($_POST){
                $stm = $pdo->quer("SELECT id, mdp FROM user WHERE email=" . $_POST('mail') . "'");
                $user = $stp->fetch(PDO::FETCH_ASSO);

                if(password_verify($_POST['mdp'],$user['mdp'])){
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: http://localhost/appWeb/index.php");
                    exit();
                }else{
                    $message="Le nom ou mdp pas correct";
                }
            }
            **/
		?>

		<div id="bloc_page">

			<section>
                <div class="container">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="lmail">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
			</section>
		
		</div> <!-- div bloc_page -->
	</BODY>
</HTML>