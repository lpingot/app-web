<!DOCTYPE html>
<!-- voici la source 
https://bootstrap-ecommerce.com/#:~:text=Bootstrap%20ecommerce%20is%20a%20collection,commerce%20projects%20on%20the%20web.
https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-1.html
-->
<HTML lang="fr">
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></scrip>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/alert.js"></script>

		
		
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

        <!-- ================ SECTION PRODUCTS ================ -->
        <section class="padding-y">
        <div class="container">

            <header class="section-heading">
                <h2 class="section-title">Notre produits</h2>
            </header> 

        <!-- ================ SECTION PRODUCTS INFORMATIQUE ================ -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-md">
                    <a class="navbar-brand" href="#">Informatique</a>
                </div>
            </nav>
        </section>
        <section class="produit-informatique">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <img src="assets/image/gopro.jpg"> 
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">500€</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">GoPro HERO6 4K Action Camera - Black Edition</p>
                            
                            <button id="button-a" class="btn btn-outline-success" >Add to cart</button>
                            <script type="text/javascript">
                                $('#button-a').click(function(){
                                    swal('Hello World');
                                });
                            </script>

                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <img src="assets/image/canon.jpg"> 
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">320€</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Canon camera  20x zoom, Black color EOS 2000</p>
                            
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <img src="assets/image/xiaomi.jpg"> 
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">120€</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Xiaomi Redmi 8 Original Global Version 4GB</p>
                            
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <img src="assets/image/iphone.jpg"> 
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">900€</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</p>
                            
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </figcaption>
                    </figure>
                </div> 
            </section>
            <!-- ================ SECTION PRODUCTS LIVRE ================ -->
            <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-md">
                        <a class="navbar-brand" href="#">Livres</a>
                    </div>
                </nav>
            </section>
            <section class="produit-informatique">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/livre1.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">30€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Algorith Illustrated : A visual guide to 26 algorithms</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/livre2.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">20€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Machine Learning for Finance : New Edition</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/livre3.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">45€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Programmer en java : couvre Java 10 à 14</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/livre4.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">25€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Iphone 13 and Iphone 13 Pro : The guide</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> 
            </section>
            <!-- ================ SECTION PRODUCTS Hi-FI ================ -->
            <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-md">
                        <a class="navbar-brand" href="#">Hi-FI</a>
                    </div>
                </nav>
            </section>
            <section class="produit-informatique">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/hifi1.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">100€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Philips Micromuzieksysteem MCM2300/12</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/hifi2.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">220€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Panasonic SC-HC412 Home audio-microsysteem</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/hifi3.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">70€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Denver TSP-150 15W Trolley met PA-geluidssysteem</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img src="assets/image/hifi4.jpg"> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price">200€</span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2">Audio Pro A10 Systeme micro audio domestique</p>
                                
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </figcaption>
                        </figure>
                    </div> 
            </section>
        
	</BODY>
</HTML>