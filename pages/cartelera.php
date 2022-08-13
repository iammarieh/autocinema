<!--
=========================================================
Equipo: Cartelera
=========================================================

* Itzel Alejandra Barbosa Cazares.
* Mariela Hernández Flores.
* Jalil Manuel López Ceniceros.
* Paola Elizabeth Rosales Verdín.

=========================================================
-->
<?php
// Conexión a BD
include("../php/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Cartelera | Autocinema
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ../pages/dashboard.html" target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Auto Cinema</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Dashboard</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                        </path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/cartelera.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Cartelera</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(603.000000, 0.000000)">
                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                        </path>
                        <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z">
                        </path>
                        <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Cartelera</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/cliente.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Perfil</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                        </path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                        </path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/productos.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Productos</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(603.000000, 0.000000)">
                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                        </path>
                        <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z">
                        </path>
                        <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Productos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/promociones.html">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Promociones</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(154.000000, 300.000000)">
                          <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                          <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Promociones</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/factura.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Facturación</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                        </path>
                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Facturación</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/observaciones.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Observaciones</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                        </path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Observaciones</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Secciones</a></li>
            <li class="breadcrumb-item text-sm text-dark" aria-current="page">Cartelera</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Cartelera</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Escriba aquí...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/cliente.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Perfil</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3 d-flex justify-content-between">
              <div>
                <div class="col-12 d-flex align-items-center">
                  <h6 class="mb-0">Películas agregadas recientemente</h6>
                </div>
                <p class="text-sm">Echa un vistazo a los más recientes lanzamientos</p>
              </div>
              <div>
              <a class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#agregarPeli"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar película</a>
                <!-- Modal para agregar película -->
                <div class="modal fade" id="agregarPeli" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar película</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="formAgregar" method="POST">
                          <div class="row">
                            <div class="col-12 mb-3">
                              <label for="tituloPelicula" class="form-label">Título de la película</label>
                              <input type="text" class="form-control" id="tituloPelicula" aria-describedby="Titulo Película" name="tituloPelicula" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 mb-3">
                              <label for="imgAñadir" class="form-label">Póster de la Película</label>
                              <input class="form-control" type="file" accept="image/*" id="imgAñadir" data-error="Ingresa un archivo con formato válido." data-success="Válido" name="img" required>
                              <small id="textAyuda" class="text-muted">Imagen a cargar para película. (Formato JPG, PNG, JPEG)</small>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <label for="generoPelicula" class="form-label">Genero de la película</label><br>
                                <small id="textAyuda" class="text-muted">Seleccione genero (s)</small><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox1" value="Acción">
                                  <label class="form-check-label" for="inlineCheckbox1">Acción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox2" value="Aventura">
                                  <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox3" value="Ciencia Ficción">
                                  <label class="form-check-label" for="inlineCheckbox3">Ciencia Ficción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox4" value="Comedia">
                                  <label class="form-check-label" for="inlineCheckbox4">Comedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox5" value="Documental">
                                  <label class="form-check-label" for="inlineCheckbox5">Documental</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox6" value="Drama">
                                  <label class="form-check-label" for="inlineCheckbox6">Drama</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox7" value="Fantasía">
                                  <label class="form-check-label" for="inlineCheckbox7">Fantasía</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox8" value="Musical">
                                  <label class="form-check-label" for="inlineCheckbox8">Musical</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox9" value="Romance">
                                  <label class="form-check-label" for="inlineCheckbox9">Romance</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox10" value="Supenso">
                                  <label class="form-check-label" for="inlineCheckbox10">Supenso</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox11" value="Terror">
                                  <label class="form-check-label" for="inlineCheckbox11">Terror</label>
                                </div>
                                <br><small id="resp" class="text-muted"></small>
                                <input type="hidden" name="generoPelicula" id="generoPelicula">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <label for="horarioPelicula" class="form-label">Horario</label>
                                <input type="text" class="form-control" id="horarioPelicula" aria-describedby="horarioPelícula" name="horarioPelicula" required>
                              </div>
                              <div class="col mb-3">
                                <label for="idiomaPelicula" class="form-label">Idioma</label>
                                <select name="idiomaPelicula" id="idiomaPelicula" class="form-control" required>
                                  <option selected disabled>Elija idioma</option>
                                  <option value="Original">Original</option>
                                  <option value="Español">Español</option>
                                  <option value="Subtitulos">Subtitulos</option>
                                </select>
                              </div>
                              <div class="col mb-3">
                                <label for="duracionPelicula" class="form-label">Duración</label>
                                <input type="text" class="form-control" id="duracionPelicula" aria-describedby="Duracion Película" name="duracionPelicula" required>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 mb-3">
                                <label for="sinopsisPelicula" class="form-label">Sinópsis</label>
                                <textarea class="form-control" id="sinopsisPelicula" name="descripcion" rows="5" required></textarea>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm mb-0" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" id="btnAgregar" class="btn btn-primary btn-sm mb-0">Agregar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Mostrar películas-->
            <div class="card-body p-3">
              <div class="row">
                <?php
                $sql = "SELECT * FROM cartelera";
                if ($result = mysqli_query($conn, $sql)) {
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                      <div class="col-xl-3 col-md-2 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain shadow p-2">
                          <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                              <img src="../assets/img/cartelera/<?php echo $row['imagen']; ?>" alt='<?php echo $row['imagen']; ?>' class='img-fluid shadow border-radius-xl'>
                            </a>
                          </div>
                          <div class="card-body px-1 pb-0">
                            <p class="text-muted mb-2 text-sm"><b>Género: </b> <?php echo $row['genero']; ?> </p>
                            <a href="javascript:;">
                              <h5>
                                <?php echo $row['nombre']; ?>
                              </h5>
                            </a>
                            <div class="row">
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"><b>Horario: </b></p>-->
                              </div>
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"></p>-->
                              </div>
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"></p>-->
                              </div>
                            </div>
                            <p class="mb-2 text-sm"><b>Sinópsis</b></p>
                            <p class="mb-2 text-sm"><?php echo $row['descripcion']; ?></p>
                            <div class="ms-auto text-end">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="eliminar('<?php echo $row['id_cartelera'] ?>')" ><i class="far fa-trash-alt me-2"></i>Eliminar</a>
                              <a class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#editar<?php echo $row['id_cartelera']; ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal para editar películas -->
                      <div class="modal fade" id="editar<?php echo $row['id_cartelera']; ?>" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Editar <?php echo $row['nombre']; ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form id="formEditar" method="POST">
                                <input type="hidden" value="<?php echo $row['id_cartelera'] ?>" name="id">
                                <div class="row">
                                  <div class="col-12 mb-3">
                                    <label for="formFile" class="form-label">Título de la imagen</label>
                                    <input class="form-control" class="form-control" id="tituloPelicula" name="nombre" rows="8" value="<?php echo $row['nombre'] ?>" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-12 mb-3 text-center">
                                  <img id="imgPrev_editar" style="width: 300px !important; height: 250px !important;" accept="image/*" id="img_editar_foto" class="card-img-top" src="../assets/img/cartelera/<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre'] ?>">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-12 mb-3">
                                    <label for="formFile" class="form-label">Selecciona una imagen</label>
                                    <input class="form-control" type="file" accept="image/*" id="img_editar" title="Agrega una imagen" name="img" required>
                                    <small id="textAyuda" class="text-muted">(Formato JPG, PNG, JPEG)</small>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-12 mb-3">
                                    <label for="generoPelicula" class="form-label">Genero de la película</label><br>
                                    <small id="textAyuda" class="text-muted">Seleccione genero (s)</small><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox1" value="Acción">
                                  <label class="form-check-label" for="inlineCheckbox1">Acción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox2" value="Aventura">
                                  <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox3" value="Ciencia Ficción">
                                  <label class="form-check-label" for="inlineCheckbox3">Ciencia Ficción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox4" value="Comedia">
                                  <label class="form-check-label" for="inlineCheckbox4">Comedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox5" value="Documental">
                                  <label class="form-check-label" for="inlineCheckbox5">Documental</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox6" value="Drama">
                                  <label class="form-check-label" for="inlineCheckbox6">Drama</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox7" value="Fantasía">
                                  <label class="form-check-label" for="inlineCheckbox7">Fantasía</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox8" value="Musical">
                                  <label class="form-check-label" for="inlineCheckbox8">Musical</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox9" value="Romance">
                                  <label class="form-check-label" for="inlineCheckbox9">Romance</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox10" value="Supenso">
                                  <label class="form-check-label" for="inlineCheckbox10">Supenso</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox11" value="Terror">
                                  <label class="form-check-label" for="inlineCheckbox11">Terror</label>
                                </div>
                                <br><small id="resp" class="text-muted"></small>
                                <input type="hidden" name="generoPeliculaEditar" id="generoPeliculaEditar">
                                  </div>
                                </div>
                                <div class="row">
                              <div class="col mb-3">
                                <label for="horarioPelicula" class="form-label">Horario</label>
                                <input type="text" class="form-control" id="horarioPelicula" aria-describedby="horarioPelícula" name="horarioPelicula" required>
                              </div>
                              <div class="col mb-3">
                                <label for="idiomaPelicula" class="form-label">Idioma</label>
                                <select id="idiomaPelicula" class="form-control" required>
                                  <option selected disabled>Elija idioma</option>
                                  <option value="original">Original</option>
                                  <option value="espanol">Español</option>
                                  <option value="subtitulos">Subtitulos</option>
                                </select>
                              </div>
                              <div class="col mb-3">
                                <label for="duracionPelicula" class="form-label">Duración</label>
                                <input type="text" class="form-control" id="duracionPelicula" aria-describedby="Duracion Película" name="duracionPelicula" required>
                              </div>
                            </div>
                                <div class="row">
                                  <div class="col-12 mb-3">
                                    <label for="descripcionInput" class="form-label">Sinópsis</label>
                                    <textarea class="form-control" id="descripcionInput" name="descripcion" rows="8"><?php echo $row['descripcion'] ?></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm mb-0" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnEditar" class="btn btn-primary btn-sm mb-0">Actualizar</button>
                              </div>
                              </form>
                          </div>
                        </div>
                      </div>
                <?php
                    }
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                Todos los derechos reservados © <script>
                  document.write(new Date().getFullYear())
                </script>.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Auto Cinema</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Acerca de</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Términos y condiciones</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link pe-0 text-muted" target="_blank">Licencia</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <!-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a> -->
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Personalización</h5>
          <p class="text-sm">Vea nuestras opciones de panel de control</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Tema</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <p class="text-sm">Elija entre 2 tipos diferentes de sidenav.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparente</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Blanco</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Puede cambiar el tipo de guardado lateral solo en la vista de escritorio.</p>
        <!-- Navbar Fixed -->
       <div class="mt-3">
          <h6 class="mb-0">Ver Navegador</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="../assets/js/agregarPelicula.js"></script>
  <script src="../assets/js/editar_eliminar.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
  <script src="../assets/js/checkbox.js"></script>
</body>

</html>