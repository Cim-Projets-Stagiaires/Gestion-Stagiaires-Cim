<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion des stagiaires</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
      {{-- <link rel="stylesheet" href="{{asset('/style.css')}}"> --}}
      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> --}}
      <style>
        .contact .info {
  width: 100%;
  background: #fff;
}
button {
  border: none;
  
  position: relative;
  padding: 0.7em 2.4em;
  font-size: 18px;
  background: transparent;
  cursor: pointer;
  user-select: none;
  overflow: hidden;
  color: white;
  z-index: 1;
  font-family: inherit;
  font-weight: 500;
}

button span {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  z-index: -1;
  border: 4px solid white;
}

button span::before {
  content: "";
  display: block;
  position: absolute;
  width: 8%;
  height: 500%;
  background: var(--lightgray);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-60deg);
  transition: all 0.3s;
}

button:hover span::before {
  transform: translate(-50%, -50%) rotate(-90deg);
  width: 100%;
  background: #6b9080;
}

button:hover {
  color: white;
}

button:active span::before {
  background: #2751cd;
}
.contact .info i {
  font-size: 20px;
  color: #15616d;
  float: left;
  width: 44px;
  height: 44px;
  background: #eef7ff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #45505b;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #728394;
}

.contact .info .email,
.contact .info .phone {
  margin-top: 40px;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #15616d;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email] {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #15616d;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #6b9080;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
.feature {
            width: 100px; 
            height: 100px; 
            text-align: center;
            line-height: 100px;
            font-size: 24px;
        }

        .box {
            padding: 20px;
            border: 1px solid #ddd; /* Add border styling as needed */
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease; /* Add transition for smooth hover effect */
        }

        .box:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adjust box-shadow as needed */
        }
        .bg-blue {
    background-color: #15616d;
    /* Add other styling properties as needed */
}
.rounded-circle-sm {
        width:200px; /* Adjust the width as needed */
        height: 150px; /* Adjust the height as needed */
        border-radius: 100%;
        overflow: hidden;
}
.bg-blue1 {
        background-color: #15616d;
        /* Add other styling properties as needed */
    }
   
      </style>


    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container px-0">
                        <a href="/"><img src="https://edu-cim.odoo.com/web/image/website/1/logo/My%20Website?unique=7348eb9" width=auto height="60px" ></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="navbar-nav text-center ms-auto mt-lg-0  mt-2 mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#desc">Description</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link"  href="/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->      
            <header class="bg-blue py-5">
                <div class="container px-5">                               
                    <div class="row gx-5 align-items-center justify-content-center"> 

                        <div class="col-lg-8 col-xl-7 col-xxl-6">       
                            <h1 class="display-5 fw-bolder text-white mb-2">Portail des Stagiaires de la Cité De l'Innovation de Marrakech</h1>
                            <div class="my-5 text-center text-xl-start">
                                <p class="lead fw-normal text-white-50 mb-4">Si vous êtes un stagiaire de la Cité de l'Innovation ayant déjà accompli votre période de stage 
                                    et que vous souhaitez obtenir votre attestation de stage,
                                     veuillez remplir ce formulaire et soumettre votre rapport de stage.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
 
                                          <a href="add"> <button> Formulaire
        <span></span>
      </button></a> <!-- Add this inside your header section -->
{{-- <a href="{{ route('viewProfile') }}" class="btn btn-primary">Voir mon profile</a> --}}
<a href="{{ route('viewProfile') }}"> <button> Voir mon profile
  <span></span>
</button></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="/images/bag.jpg" alt="hhhh" /></div>
                    </div>
                </div>
            </header><br><br>
            <!-- Features section-->
            <section class="py-5" id="features">
              <div class="container px-5 my-5">
                  <div class="row gx-5">
                      <div class="col-lg-4 d-flex align-items-center mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">les  4 Pôles du service  d’innovation</h2></div>
                      <div class="col-lg-8">
                          <div class="row gx-5 row-cols-1 row-cols-md-2">
                              {{-- <div class="col mb-5 h-100"> --}}
                            <div class="container">
                              
                                  {{-- <div class="row">
                                      <div class="col mb-5 h-100"> --}}
                                          <div class="box"><div  class=" text-center"><svg xmlns="http://www.w3.org/2000/svg"  width="50" height="50" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg></div>&nbsp;
                                            
                                              <h2 class="h5">Pôle Recherche & valorisation</h2>
                                              <p class="mb-0">• 4 halles technologiques <br> • Salles et laboratoires <br> • Contrats de Recherche <br> • Gestion de la production intellectuelle <br> • Locations de matériels <br> • Analyses, caractérisations et prototypage <br> • Conseils technologiques</p>
                                          </div>
                                      </div>
                              {{-- <div class="col mb-5 h-100"> --}}
                              
                                <div class="box"><div class=" text-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                  </svg></div>&nbsp;
                                  <h2 class="h5">Pôle Formation</h2>
                                  <p class="mb-0">• Formation continue <br> • Formation des Doctorants (spécial de formation) <br> • Amphithéàtre </p>
                                  </div>
                                
                                  {{-- <div class="col mb-5 mb-md-0 h-100"> --}}
                                    <div class="container">
                                      
                                    <div class="box">
                                      <div class=" text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                                      </svg></div>&nbsp;
                                      <h2 class="h5">Pôle incubation et entreprises</h2>
                                      <p class="mb-0">•Incubateur de 20 places par cycles de 12 à 24 mois <br> • Services d'incubation : coaching, encadrement, services partagés, bureautique, hébergement web ... <br> •Pépiniére pour 15 entreprises par cycles de 6 à 18 mois <br> • Plateaux de bureaux pour l'accueil des PME technologiques st des grands groupes  </p>
                                  </div>
                                    </div>
                                  {{-- <div class="col h-100"> --}}
                                 
                                    <div class="box">
                                    <div  class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                      <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                    </svg></div>&nbsp;&nbsp;
                                      <h2 class="h5">Pôle services transverses</h2>
                                      <p class="mb-0">• Guichet administratratif <br> • Services de proximité <br> • Business Center <br> • Médiathéque <br> • Centre de conférences <br> • Restauration sur site ...</p>
                                  </div>
                                
                          </div>
                      </div>
                  </div>
              </div>
             
          </section>
            <!-- Testimonial section-->

            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6" id="desc">
                            <div class="text-center">
                                <u><h2 class="fw-bolder">Description</h2></u>
                                <p class="lead fw-normal text-muted mb-5">Une petite desctiption sur les principaux  </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/images/image2.jpeg" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Qu'est-ce que la Cité de  l'Innovation ?</h5></a>
                                    <p class="card-text mb-0">La Cité d'Innovation de Marrakech est une plateforme technologique, mise en place par l'UCA dans le cadre de son programme de développement de sa recherche scientifique.

                                        Son rôle essentiel est de :
                                        
                                        Favoriser le transfert technologiques entre les centres de Recherches et le monde de l'entreprise
                                        Développer le secteur de la haute technologie et de la R&D dans les régions cibles
                                        Donner des orientations pour les priorités de recherche
                                        Attirer des savoirs-faires à même de renforcer la compétitivité régionale
                                        Favoriser la création d'entreprises technologiques innovantes
                                        Valoriser la production scientifique et intellectuelle de l'UCA
                                        Faciliter l'insertion professionnelle des chercheurs et des doctorants et stimuler la création d'emplois
                                        Accueillir la formation d'excellence des masters et Ingénieurs</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/images/image3.jpeg" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">"Les Rendez-vous d'Excellence à la Cité de l'Innovation"</h5></a>
                                    <p class="card-text mb-0">La Cité de l'Innovation est bien plus qu'un simple espace. C'est un écosystème vivant, un lieu de rencontre pour des esprits brillants venant de divers horizons. Ici, des conférences animées par des directeurs et experts de renom dans leurs domaines respectifs s'organisent régulièrement, offrant des perspectives pointues sur les défis du monde moderne.

                                        En parallèle, la Cité vibre au rythme d'événements culturels et artistiques qui stimulent la créativité et l'inspiration. Des expositions d'art contemporain aux performances musicales, chaque coin de la cité respire l'effervescence de l'innovation.
                                        
                                        Les portes de cette cité sont grandes ouvertes à ceux et celles qui ont l'audace de penser différemment. C'est un véritable creuset de l'innovation, un espace propice au développement et à l'expression des idées novatrices qui façonneront l'avenir de notre société.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/images/image4.jpeg" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">La Cité de l'Innovation, c'est bien plus qu'un lieu d'innovation, c'est une véritable famille</h5></a>
                                    <p class="card-text mb-0">La Cité de l'Innovation va bien au-delà d'un simple lieu. C'est un véritable écosystème qui rassemble des esprits brillants venus de tous horizons. Elle se distingue par son engagement envers l'épanouissement professionnel des étudiants et jeunes talents. À cet effet, elle propose un programme de stages couvrant un vaste éventail de domaines tels que le développement digital, les réseaux, le marketing, Photoshop, ainsi que des laboratoires de pointe.

                                        Dans cet environnement, l'apprentissage va de pair avec l'expérience concrète, offrant aux stagiaires une chance unique de développer leurs compétences et de se familiariser avec les dernières tendances et technologies de leur secteur d'intérêt. La Cité de l'Innovation ne se limite pas à être un incubateur d'idées novatrices, elle incarne une véritable famille où chacun est encouragé à s'épanouir, à apprendre et à grandir au sein d'une communauté dynamique et collaborative.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <!-- Call to action-->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                  
                          <div class="text-center" id="contact">
                            <u><h2 class="fw-bolder">Contact</h2><br><br></u>
                          
                        </div><br>
                  
                          <div class="row mt-1">
                  
                            <div class="col-lg-4">
                              <div class="info">
                                <div class="address">
                                  <i class="bi bi-geo-alt"></i>
                                  <h4>Location:</h4>
                                  <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                  
                                <div class="email">
                                  <i class="bi bi-envelope"></i>
                                  <h4>Email:</h4>
                                  <p>tahaelbal010101@gmail.com</p>
                                </div>
                  
                                <div class="phone">
                                  <i class="bi bi-phone"></i>
                                  <h4>Call:</h4>
                                  <p>+212 625 383 772</p>
                                </div>
                  
                              </div>
                  
                            </div>
                  
                            <div class="col-lg-8 mt-5 mt-lg-0">
                  
                              {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> --}}
                                <form action="https://usebasin.com/f/38df9ab0d33e" method="POST" enctype="multipart/form-data" id="form" class="php-email-form">
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                  </div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                  </div>
                                </div>
                                <div class="form-group mt-3">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                  <div class="loading">Loading</div>
                                  <div class="error-message"></div>
                                  <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                              </form>
                  
                            </div>
                  
                          </div>
                  
                        </div>
                      </section>
                </div>
            </section>
        </main>



       


      {{-- @include('footer'); --}}
      @include('scrol');


       
      
      
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>