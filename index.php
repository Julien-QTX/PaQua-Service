<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PaQua'Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>

    <?php
    
    include_once 'Includes/header.php';

    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="img/Sprinter_1.avif" alt="" />
          <div
            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(0, 0, 0, 0.4)"
          >
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-10 col-lg-8">
                  <h5
                    class="text-white text-uppercase mb-3 animated slideInDown"
                  >
                    Services de mecanique automobile
                  </h5>
                  <h1 class="display-3 text-white animated slideInDown mb-4">
                    Préstation a domicile
                  </h1>
                  <p class="fs-5 fw-medium text-white mb-4 pb-2">
                    Nous nous deplaçons pour vous servire dans toute la Bretagne.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="img/téléchargement (1).jpg" alt="" />
          <div
            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(0, 0, 0, 0.4)"
          >
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-10 col-lg-8">
                  <h5
                    class="text-white text-uppercase mb-3 animated slideInDown"
                  >
                    Services de mecanique automobile
                  </h5>
                  <h1 class="display-3 text-white animated slideInDown mb-4">
                    Préstation en agence
                  </h1>
                  <p class="fs-5 fw-medium text-white mb-4 pb-2">
                    Vous souhaitez vous déplacer? Nous sommes prêts a vous accueillir.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div
            class="col-lg-4 col-md-6 service-item-top wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="overflow-hidden">
              <img
                class="img-fluid w-100 h-100"
                src="img/service-1.jpg"
                alt=""
              />
            </div>
            <div
              class="d-flex align-items-center justify-content-between bg-light p-4"
            >
              <h5 class="text-truncate me-3 mb-0">Entretien automobie</h5>
              <a
                class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                href=""
                ><i class="fa fa-arrow-right"></i
              ></a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 service-item-top wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="overflow-hidden">
              <img
                class="img-fluid w-100 h-100"
                src="img/service-2.jpg"
                alt=""
              />
            </div>
            <div
              class="d-flex align-items-center justify-content-between bg-light p-4"
            >
              <h5 class="text-truncate me-3 mb-0">Déplacement</h5>
              <a
                class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                href=""
                ><i class="fa fa-arrow-right"></i
              ></a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 service-item-top wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="overflow-hidden">
              <img
                class="img-fluid w-100 h-100"
                src="img/service-3.jpg"
                alt=""
              />
            </div>
            <div
              class="d-flex align-items-center justify-content-between bg-light p-4"
            >
              <h5 class="text-truncate me-3 mb-0">Services d'Urgence</h5>
              <a
                class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                href=""
                ><i class="fa fa-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">About Us</h6>
            <h1 class="mb-4">Entreprise de Mécanique et Entretien automobile depuis 2022</h1>
            <p class="mb-4">
              Entreprise jeune, dynamique et ambitieuse de Mécanique et Entretien Autombile.
              Toujours souriant notre objectif est de vous satisfaire au maximum.
              votre bonheur fait le notre.
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Mécanicien agréé
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Services de Qualité a un prix abordable
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Urgences Immédiate 18H/20H
            </p>
            <div class="bg-primary d-flex align-items-center p-4 mt-5">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                style="width: 60px; height: 60px"
              >
                <i class="fa fa-phone-alt fa-2x text-primary"></i>
              </div>
              <div class="ms-3">
                <p class="fs-5 fw-medium mb-2 text-white">Urgences 18H/20H</p>
                <h3 class="m-0 text-secondary">+33 7 89 59 72 32</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pt-4" style="min-height: 500px">
            <div
              class="position-relative h-100 wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <img
                class="position-absolute img-fluid w-100 h-100"
                src="img/about-1.jpg"
                style="object-fit: cover; padding: 0 0 50px 100px"
                alt=""
              />
              <img
                class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                src="img/about-2.jpg"
                style="object-fit: cover"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
      <div class="container">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-check fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
            <p class="text-white mb-0">Année d'Experience</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1</h2>
            <p class="text-white mb-0">Expert Techniciens</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-users fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">9825</h2>
            <p class="text-white mb-0">Client Satisfait</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-wrench fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">10368</h2>
            <p class="text-white mb-0">Project Completé</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
      <div class="row g-0">
        <div class="col-lg-3 d-none d-lg-flex">
          <div
            class="d-flex align-items-center justify-content-center bg-primary w-100 h-100"
          >
            <h1
              class="display-3 text-white m-0"
              style="transform: rotate(-90deg)"
            >
              10 Année d'Experience
            </h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="ms-lg-5 ps-lg-5">
            <div
              class="text-center text-lg-start wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <h6 class="text-secondary text-uppercase">Nos Services</h6>
              <h1 class="mb-5">Explorer Nos Services</h1>
            </div>
            <div
              class="owl-carousel service-carousel position-relative wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-water fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Pneumatique</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-toilet fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Vidange</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-shower fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Disque/Plaquette de frein</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-tint fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Courroie Accessoire</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-tint fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Lustrage Optique</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="bg-light p-4">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-tint fa-2x text-primary"></i>
                </div>
                <h4 class="mb-3">Passage Valise</h4>
                <p>
                  Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                  lorem diam justo.
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Service de Qualité
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Satisfaction Client
                </p>
                <p class="text-primary fw-medium">
                  <i class="fa fa-check text-success me-2"></i>Urgences 18h/20H
                </p>
                <a href="" class="btn bg-white text-primary w-100 mt-2"
                  >En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Booking Start -->
    <div class="booking container-fluid my-5 px-0 ">
      <div
        class="container position-relative wow fadeInUp"
        data-wow-delay="0.1s"
        style="margin-top: -6rem"
      >
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="bg-light text-center p-5">
              <h1 class="mb-4">Résérvation</h1>
              <form>
                <div class="row g-3">
                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Votre nom"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="email"
                      class="form-control border-0"
                      placeholder="Votre Email"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <select class="form-select border-0" style="height: 55px">
                      <option selected>Selectionner un Service</option>
                      <option value="1">Pneumatique</option>
                      <option value="2">Vidange</option>
                      <option value="3">Disque/Plaquettes de frein</option>
                      <option value="4">Courroie Accesoire</option>
                      <option value="5">Lustrage Optique</option>
                      <option value="6">Valise</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="date" id="date1" data-target-input="nearest">
                      <input
                        type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Date"
                        data-target="#date1"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea
                      class="form-control border-0"
                      placeholder="Requête Spécial"
                    ></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">
                      Réserver
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking End -->

    <?php
    
    include_once 'Includes/footer.php';

    ?>

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>