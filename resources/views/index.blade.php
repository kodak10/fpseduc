<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- 
        ###################     Referencement    ##############
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPS EDUC | Bourse d'études en Chypre du Nord et en Turquie</title>
    <link rel="icon" type="image/jpg" href="{{ asset('assets/img/logo.png') }}" />
    
    <!-- 
        ###################     Fin Referencement    ##############
    -->
    
    <!-- 
        ###################     Style    ##############
    -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- 
        ###################     Lien Cdn    ##############
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

</head>

<body>
    
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container m-auto">
                    <img src=" {{asset('assets/img/logo.png') }}" alt="Logo fps educ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#about-section">Qui sommes-nous ?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#ours_services">Nos Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#facultes">Nos Facultés</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#contact_us">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>  
        
        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid animate__bounceInDown" src="{{ asset('assets/img/carousel/1.jpg') }}" alt="carousel 1">
                        <div class="cover">
                            <div class="container header-content">
                                <div class="line"></div>
                                <h2 data-aos="fade-up">Êtes-vous intéressé pour des études à l'étranger ?</h2>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid animate__bounceInDown" src="{{ asset('assets/img/carousel/2.jpg') }}" alt="carousel 1">
                        <div class="cover">
                            <div class="container header-content">
                                <div class="line"></div>
                                <h2 data-aos="fade-up">Bénéficier d'une bourse d'études à l'étranger grâce à FPS EDUC</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid animate__bounceInDown" src="{{ asset('assets/img/carousel/3.jpg') }}" alt="carousel 1">
                        <div class="cover">
                            <div class="container header-content">
                                <div class="line"></div>
                                <h2 data-aos="fade-up">Obtenez une bourse d'études allant de 50% à 100%.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

    <section id="about-section" class="pt-5 pb-5">
        <div class="container wrapabout">
            <div class="red"></div>
            <div class="row">
                <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0">
                    <div class="blockabout-inner text-center text-sm-start">
                        <div class="title-big pb-3 mb-3">
                            <h3 class="title">Qui sommes-nous ?</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            <span>FPS EDUC</span>, basée en Côte D'Ivoire, est spécialisé dans l'octroi des bourses d'études à destination de la Chypre du Nord et la Turquie. <br>
                            Nos bourses d'études, sont destinées aux élèves et étudiants de toutes les nationalités.<br>
                            Pour les bourses d'études de 50%, il faut s'adresser à <span>FPS EDUC</span>, et présenter les documents d'inscription requis.<br>
                            Quant aux bourses allant de 60% à 100%, les universités en collaboration avec <span>FPS EDUC</span>, les octroient
                            sur la base d'un test en anglais et en français, auquel les élèves et étudiants s'inscrivent et participent.
                        </p>
                        <div class="row m-auto d-flex justify-content-center align-items-center">
                            <a href="#" class="btn"><i class="mr-3 fa-solid fa-pen"></i> Demander une bourse</a>
                            <a href="#" class="btn"><i class="mr-3 fa-solid fa-download"></i> Télécharger la Brochure</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <figure class="photo_about">
                        <img src="assets/img/about.jpg" alt="potoabout" class="w-100"/>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="ours_services ">
        <h3 class="title">Nos Services</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box active text-center">
                        <div class="content-box">
                           <div class="icon-box">
                                <span><i class="fas fa-graduation-cap"></i></span>
                           </div> 
                           <div class="text-box">
                               <span>Octroie de bourse d'études</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box text-center">
                        <div class="content-box">
                           <div class="icon-box">
                                <span><i class="far fa-file"></i></span>
                           </div> 
                           <div class="text-box">
                               <span>Traduction de documents</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box text-center">
                        <div class="content-box">
                           <div class="icon-box">
                            <span><i class="fas fa-file"></i></span>
                           </div> 
                           <div class="text-box">
                               <span>Montage et traitement de dossiers</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box text-center">
                        <div class="content-box">
                           <div class="icon-box">
                                 <span><i class="fas fa-user-plus"></i></span>
                           </div> 
                           <div class="text-box">
                                <span>Inscription et suivis de dossiers auprès des universités</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box text-center">
                        <div class="content-box">
                           <div class="icon-box">
                                <span><i class="fas fa-language"></i></span>
                           </div> 
                           <div class="text-box">
                               <span>Formation linguistique des étudiants avant le voyage</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box text-center">
                        <div class="content-box">
                           <div class="icon-box">
                                <span><i class="fas fa-bed"></i></span>
                           </div> 
                           <div class="text-box">
                               <span>Recherche et réservation des logements des étudiants</span>
                           </div>
                           <div class="detail-box">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa velit consequatur quibusdam, dolorum veniam nam dolore magnam, repellat iste autem ipsum deue?</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <section class="facultes">
          
        <div class="container">
            <h3 class="title">Facultes</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="faculte communication text-center">
                        <div class="box-content">
                            <h3 class="">Falculte de <br><span class="detail-faculte">Communication</span></h3>
                        </div>
                        <a href="Facultes/Communication.html"><i class="fas fa-plus-circle"></i></a>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte architecture text-center">
                        <div class="box-content  ">
                            <h3 class="">Falculte <br><span class="detail-faculte">d'Architecture</span></h3>
                        </div>
                        <a href="Facultes/architecture.html"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte art_science text-center">
                        <div class="box-content  ">
                            <h3 class="">Falculte des <br><span class="detail-faculte">Arts & Sciences</span></h3>
                            <a href="Facultes/art_science.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte droit text-center">
                        <div class="box-content  ">
                            <h3 class="">Falculte de <br><span class="detail-faculte">Droit</span></h3>
                            <a href="Facultes/droit.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte ingenierie text-center">
                        <div class="box-content">
                            <h3 class="">Falculte <br><span class="detail-faculte">d'Ingénierie</span></h3>
                            <a href=""><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte economie text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte <br><span class="detail-faculte">Economie & Sciences adm</span></h3>
                            <a href=""><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte sante text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte des <br><span class="detail-faculte">Sciences de la santé</span></h3>
                            <a href="Facultes/science_sante.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte medecine text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte de <br><span class="detail-faculte">Medecine</span></h3>
                            <a href="Facultes/medecine.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte pharmacie text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte de <br><span class="detail-faculte">Pharmacie</span></h3>
                            <a href="Facultes/pharmacie.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte infirmerie text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte de <br><span class="detail-faculte">l'Infirmerie</span></h3>
                            <a href="Facultes/infirmerie.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte veterinaire text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte de <br><span class="detail-faculte">Vétérinaire</span></h3>
                            <a href="Facultes/veterinaire.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="faculte tourisme text-center">
                        <div class="box-content ">
                            <h3 class="">Falculte de <br> <span class="detail-faculte">Tourisme</span></h3>
                            <a href="Facultes/tourisme.html"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parralax">

    </section>

    <section class="testimonial-partenaire content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="title mb-3">Temoignages</h3>
        
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road.
                                </span>
            
                                <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="Images">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Kouassi Atchin Parfait</h3>
                                    <span class="quote-subtext">Parent d'étudiants</span>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road.
                                </span>
            
                                <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="Images">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Kouassi Atchin Parfait</h3>
                                    <span class="quote-subtext">Parent d'étudiants</span>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road.
                                </span>
            
                                <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="Images">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Kouassi Atchin Parfait</h3>
                                    <span class="quote-subtext">Parent d'étudiants</span>
                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
        
                <div class="col-lg-5 mt-5 mt-lg-0">
        
                    <h3 class="title mb-3">Nos Partenaires</h3>
        
                    <div class="row all-clients text-center">
                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/final_university.jpg') }}" alt="clients-logo" />
                                <p>Final International University</p>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/akadeniz.png') }}" alt="clients-logo" />Akadeniz University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/american.jpg') }}" alt="clients-logo" />American University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/bau.webp') }}" alt="clients-logo" />BAU University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/cyprius.png') }}" alt="clients-logo" />Cyprius University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/european_lekfe.webp') }}" alt="clients-logo" />European Lekfe University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/kyrenia.png') }}" alt="clients-logo" />kyrenia University</a>
                            </figure>
                        </div>

                        <div class="col-lg-4">
                            <figure class="clients-logo">
                                <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/img/partenaire/near.png') }}" alt="clients-logo" />Near University</a>
                            </figure>
                        </div>


        
                    </div>
        
                </div>
        
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/blog.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'évènement</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/blog.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'évènement</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/blog.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'évènement</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/blog.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'évènement</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <a href="" class="text-center mt-3 btn_more">Voir le Blog Complet <i class="ml-3 fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <section class="contact_us">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section title">Contactez-Nous</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Demande de bourse</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group mb-3">
													<label class="label" for="name">Nom et Prénoms</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Nom et Prénoms">
												</div>
											</div>
											<div class="col-md-6 "> 
												<div class="form-group mb-3">
													<label class="label" for="email">Numéro de téléphone</label>
													<input type="text" class="form-control" name="tel" id="tel" placeholder="Numéro de téléphone">
												</div>
											</div>

                                            <div class="col-md-6">
												<div class="form-group mb-3">
													<label class="label" for="name">Niveau actuelle</label>
                                                    <select class="form-select" aria-label="">
                                                        <option value="1">Baccalauréat</option>
                                                        <option value="2">Licence</option>
                                                        <option value="3">Master</option>
                                                    </select>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group mb-3">
													<label class="label" for="email">Filiere Souhaitée</label>
													<input type="text" class="form-control" name="filiere" id="filiere" placeholder="Filiere Souhaitée en Chypre du nord ou en Turquie">
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Demander la bourse" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
                                    maps
			                    </div>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-md-4">
								<div class="content-infos w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="text">
                                        <p>Abidjan, Riviera palmeraie au programme 4 en face du supermarché CDCI</p>
                                    </div>
                                </div>
							</div>
							<div class="col-md-3">
								<div class="content-infos w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="text">
                                        <p><span>Téléphone:</span> <a href="tel://1234567920">+225 0574271227</a></p>
                                    </div>
                                </div>
							</div>
							<div class="col-md-3">
								<div class="content-infos w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:fpsinforation@gmail.com">fpsinforation@gmail.com</a></p>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="footer text-center p-2">
        <span>FPS EDUC - Bourse d'études à destination de la Chypre du Nord et la Turquie.</span>
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:false
                }
            }
        })
    </script>
    
</body>
</html>