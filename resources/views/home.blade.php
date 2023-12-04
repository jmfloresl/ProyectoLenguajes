<!DOCTYPE html>
<html lang="en">
<head>

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');


      .fixed-top {
          position: absolute !important;

        }

      .text-custom{
          color:#ff600a !important;
      }

      /BUTTONS/

      /Color de las alertas/
      .bg-custom{

          background-color: #ff600a !important;
      }

      /Sombreado del Navbar/
      .navbar{
          box-shadow: 0 3px 9px 3px rgba(252, 20, 20, 0.1);
      }

      .btn:not(.nav-btns button){
          background-color: #fff;
          color: #ff600a;
          padding: 10px 28px;
          border-radius: 25px;
          border: 1px solid #ff600a;
      }

      .btn:not(.nav-btns button):hover{
          background-color: #ff600a;
          color: #fff;
          border-color: #ff600a;
      }

      /Color de los link del navbar al interactuar/
      .nav-link:hover{
          color:#ff600a !important;
      }

      /Linea de los link del navbar/
      .nav-item{
          border-bottom: 0.5px solid rgba(252, 20, 20, 0.1);
      }

      /HEADER/

      #header{
          background: url(http://localhost/Tienda/resources/images/Sala_2.jpg) top/cover no-repeat;
      }
      .carousel-inner h1{
          font-size: 60px;
      }
      .carousel-item .btn{
          border-color: #fff!important;
      }
      .carousel-item .btn:hover{
          border-color: #ff600a !important;
      }

      /* title */
      .title h2::before{
          position: absolute;
          content: "";
          width: 4px;
          height: 50px;
          background-color: #ff600a;
          left: -50px;
          top: 1%;
      }

      /* collection */
      .active-filter-btn{
          background-color: #ff600a!important;
          color: #fff!important;
          border-color: #ff600a!important;
      }
      .filter-button-group .btn:hover{
          color: #fff!important;
      }
      .collection-img span{
          top: 20px;
          right: 20px;
          width: 46px;
          height: 46px;
          border-radius: 50%;
      }

      /* special */
      .special-img span{
          top: 20px;
          right: 20px;
      }
      .special-list .btn{
          padding: 8px 20px!important;
      }
      .special-img img{
          -webkit-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease;
      }
      .special-img:hover img{
          -webkit-transform: scale(1.1);
              -ms-transform: scale(1.1);
                  transform: scale(1.1);
      }

      /* offers */
      #offers{
          background: url(http://localhost/Tienda/resources/images/Ofter.jpg) center/cover no-repeat;
      }
      #offers .row{
          min-height: 60vh;
      }
      .offers-content span{
          font-size: 28px;
      }
      .offers-content h2{
          font-size: 60px;
      }
      .offers-content .btn{
          border-color: transparent!important;
      }

      /* Sobre */
      #Sobre{
          background-color: rgba(179, 179, 179, 0.05);
      }

      /* informate */
      #informate{
          background-color: rgba(179, 179, 179, 0.05);
      }
      #informate p{
          max-width: 600px;
      }
      #informate .input-group{
          max-width: 500px;
      }
      #informate .form-control{
          border-top-left-radius: 25px;
          border-bottom-left-radius: 25px;
      }
      #informate .btn{
          background-color: #ff600a;
          color: #fff;
          border-color: #ff600a;
      }
      #informate .btn:hover{
          background-color: #000;
          border-color: #000;
      }

      /* footer */
      footer .brand{

          letter-spacing: 2px;
      }
      footer a{
          -webkit-transition: color 0.3s ease;
          -o-transition: color 0.3s ease;
          transition: color 0.3s ease;
      }
      footer a:hover{
          color: #ff600a;
      }


      @media(min-width:992px){
          .nav-item{border-bottom: none;}
      }



  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_principal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="http://localhost/Tienda/resources/images/Logo_icono.ico">
    <title>Principal | Siinbal </title>
</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-ligth py-4 fixed-top ">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="principal.html">
                <img src="http://localhost/Tienda/resources/images/Siinbal_Texto.png" alt="site icon" width="110px" >
            </a>

            <!--ICONOS DEL NAVBAR-->

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="bi bi-cart-fill"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-custom">0</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="bi bi-heart-fill"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-custom">0</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="bi bi-search"></i>
                </button>
            </div>

            <!--MENU DESPLEGABLE-->

            <button class="navbar-toggler border-0" type="button" data-bs-toggle = "collapse" data-bs-target ="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" aria-current="page" href="#header">Inicio</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" aria-current="page" href="#Catalogo">Catalogo</a>
                    </li>
                    
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" aria-current="page" href="#Blog">Blog</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" aria-current="page" href="#Sobre">Sobre nosotros</a>
                    </li>
                    
                </ul>
            </div>

        </div>
    </nav>
    <!--end navbar-->


    <!--header-->

    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">Los mejores precios</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">nuevos productos</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">comprar ahora</a>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white">Mejor precio y ofertas</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">Encuentra todo lo que deseas aqui</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">Adquirir</a>
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>

    <!--end header-->

    <!--collecion-->

    <section id = "Catalogo" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">Catálogo</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">Todo</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".belleza">Belleza</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".tecnologia">Tecnologia</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".hogar">Hogar</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".salud">Salud</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 belleza">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Belleza</p>
                            <span class = "fw-bold">$ 50.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 salud">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-half"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">pastillas</p>
                            <span class = "fw-bold">$ 12.05</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tecnologia">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Laptop HP</p>
                            <span class = "fw-bold">$ 100.00</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 hogar">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-half"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Puertas</p>
                            <span class = "fw-bold">$ 70.25</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 hogar">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">ceramica</p>
                            <span class = "fw-bold">$ 25.70</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 salud">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">tanque de oxigeno</p>
                            <span class = "fw-bold">$ 125.00</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 belleza">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">labial</p>
                            <span class = "fw-bold">$ 90.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tecnologia">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">USB 16gb</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 salud">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">mascarillas</p>
                            <span class = "fw-bold">$ 05.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 hogar">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Cortinas</p>
                            <span class = "fw-bold">$ 15.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 hogar">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">escoba</p>
                            <span class = "fw-bold">$ 07.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 salud">
                        <div class = "collection-img position-relative">
                            <img src = "http://localhost/Tienda/resources/images/general.jpeg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                                <span class = "text-custom"><i class = "bi bi-star-fill"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Vendas</p>
                            <span class = "fw-bold">$ 10.50</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end collection-->

    <!-- Vehiculos -->
    <section id = "Vehiculo" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Lo mas vendido</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "http://localhost/Tienda/resources/images/maquillajes.jpeg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-custom fs-4">
                            <i class = "bi bi-heart-fill"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Kit de sombras</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "login.html" class = "btn btn-primary mt-3">Adquirir</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "http://localhost/Tienda/resources/images/medicina.jpeg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-custom fs-4">
                            <i class = "bi bi-heart-fill"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Recipiente pastillas</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-primary mt-3">Adquirir</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "http://localhost/Tienda/resources/images/salud.jpeg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-custom fs-4">
                            <i class = "bi bi-heart-fill"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">termostato</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-primary mt-3">Adquirir</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "http://localhost/Tienda/resources/images/hogar.jpeg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-custom fs-4">
                            <i class = "bi bi-heart-fill"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Mini mesa sala</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-primary mt-3">Adquirir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->

     <!-- blogs -->
     <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Comprometidos con tu comodidad</span>
                    <h2 class = "mt-2 mb-4 text-white">Disfruta al lado de tus seres queridos</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

     <!-- blogs -->
     <section id = "Blog" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Our Latest Blog</h2>
            </div>

            <div class = "row g-3">
                <div class = "card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src = "http://localhost/Tienda/resources/images/Post1.jpg" alt = "">
                    <div class = "card-body px-0">
                        <h4 class = "card-title">Beneficios de comprar en Linea</h4>
                        <p class = "card-text mt-3 text-muted">Comodidad: La principal ventaja de comprar en línea es la comodidad, Variedad de productos: Las tiendas en línea suelen ofrecer una amplia variedad de productosComparación de precios: En línea, es fácil comparar precios entre diferentes tiendas con solo unos clics.</p>
                        <p class = "card-text">
                            <small class = "text-muted">
                                <span class = "fw-bold">Autor: </span>John Doe
                            </small>
                        </p>
                        <a href = "#" class = "btn">Saber mas</a>
                    </div>
                </div>

                <div class = "card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src = "http://localhost/Tienda/resources/images/comprar2.jpg" alt = "">
                    <div class = "card-body px-0">
                        <h4 class = "card-title">por que comprar en Linea</h4>
                        <p class = "card-text mt-3 text-muted">Comprar en línea ofrece varias ventajas que pueden hacer que sea una opción atractiva para muchas personas. Algunas de las razones más comunes por las que la gente prefiere comprar en línea.</p>
                        <p class = "card-text">
                            <small class = "text-muted">
                                <span class = "fw-bold">Autor: </span>Suamy Inestroza
                            </small>
                        </p>
                        <a href = "#" class = "btn">Saber mas</a>
                    </div>
                </div>

                <div class = "card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src = "http://localhost/Tienda/resources/images/Post3.webp" alt = "">
                    <div class = "card-body px-0">
                        <h4 class = "card-title">Donde surge la idea</h4>
                        <p class = "card-text mt-3 text-muted">La idea de compra en línea tiene sus raíces en la evolución de la tecnología y las comunicaciones. A medida que la tecnología de la información avanzó, se crearon las bases para el comercio electrónico y las transacciones en línea.</p>
                        <p class = "card-text">
                            <small class = "text-muted">
                                <span class = "fw-bold">Autor: </span>Revfine
                            </small>
                        </p>
                        <a href = "#" class = "btn">Saber mas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

      <!-- Sobre Nosotros -->
      <section id = "Sobre" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-5">Sobre Nosotros</h2>
                    </div>
                    <p class = "lead text-muted">Con Siinbal puedes comprar sin preocupaciones</p>
                    <p>En Siinbal, combinamos la conveniencia de las compras en línea con la calidad de productos que marcan la diferencia. ¡Descubre un mundo de belleza, hogar y salud con nosotros! Tu bienestar comienza aquí.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "http://localhost/Tienda/resources/images/EquipoTrabajo.jpg" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of Sobre Nosotros -->


     <!-- informate -->
     <section id = "informate" class = "py-5">
        <div class = "container">
            <div class = "d-flex flex-column align-items-center justify-content-center">
                <div class = "title text-center pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">Recibe Nueva Informacion</h2>
                </div>

                <p class = "text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus rem officia accusantium maiores quisquam dolorum?</p>
                <div class = "input-group mb-3 mt-3">
                    <input type = "text" class = "form-control" placeholder="Ingresa Tu Correo Electronico ...">
                    <button class = "btn btn-primary" type = "submit">Suscribete</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of informate -->

     <!-- footer -->
     <footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">Attire</a>
                    <p class = "text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "bi bi-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "bi bi-chevron-right me-1"></i> Casas
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "bi bi-chevron-right me-1"></i> Blogs
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "bi bi-chevron-right me-1"></i> Sobre Nosotros
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "bi bi-map"></i>
                        </span>
                        <span class = "fw-light">
                            Residencial La Hacienda, Tegucigalpa, Honduras
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "bi bi-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            siimbal.support@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "bi bi-phone"></i>
                        </span>
                        <span class = "fw-light">
                            +504 2253-1001
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Siguenos</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "bi bi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "bi bi-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "bi bi-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!--Jquery-->
    <script src="http://localhost/Tienda/resources/js/jquery-3.6.4.js"></script>

    <!--ISOTOPE JS-->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

     <!--CSS y JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!--JS Custom-->
    <script src="http://localhost/Tienda/resources/js/script.js">
    </script>

</body>
</html>