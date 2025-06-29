<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: /Github/Arx/index.html");
        exit();
    }
    $_SESSION['user'] = $_SESSION['user'] ?? 'Convidado';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arx</title>
        <link rel="shortcut icon" href="/Github/Arx/image/favicon16.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <!-- CSS Personalizado -->
        <link rel="stylesheet" href="/Github/Arx/css/style.css">
    </head>
    <body class="bg-dark text-light">
        <nav class="navbar bg-dark navbar-expand-lg sticky-top navi-border py-3">
            <div class="container">
                <a class="navbar-brand link-light d-flex align-items-center gap-2" href="#">
                    <img src="/Github/Arx/image/arx_logo.png" alt="Logomarca da Arx" class="img-fluid" style="max-width: 60px;">
                    <h1 class="fw-bold">Arx</h1>
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll p-lg-0 p-2 d-flex gap-3">
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#"><span>Favoritos</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#"><span>Senhas</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" id="login-button" data-bs-toggle="modal" data-bs-target="#loginmodal" role="button">
                                <span><i class="bi bi-person"></i> Perfil</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <img src="/Github/Arx/image/presentation.png" class="img-fluid" alt="" style="width: 50%; height: auto;">
        </main>

        <!-- Decoração SVG -->
        <div class="svg-decor decor-left">
            <svg width="500" height="100%" viewBox="0 0 500 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="left-light1" cx="30%" cy="20%" r="80%">
                        <stop offset="0%" stop-color="#A259FF" stop-opacity="0.35"/>
                        <stop offset="100%" stop-color="#A259FF" stop-opacity="0"/>
                    </radialGradient>
                    <radialGradient id="left-light2" cx="40%" cy="70%" r="90%">
                        <stop offset="0%" stop-color="#4FC3FF" stop-opacity="0.3"/>
                        <stop offset="100%" stop-color="#4FC3FF" stop-opacity="0"/>
                    </radialGradient>
                </defs>

                <ellipse class="pulse" cx="150" cy="250" rx="320" ry="190" fill="url(#left-light1)" />
                <ellipse class="pulse" cx="100" cy="750" rx="350" ry="240" fill="url(#left-light2)" />
            </svg>
        </div>

        <div class="svg-decor decor-right">
            <svg width="500" height="100%" viewBox="0 0 500 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="right-light1" cx="70%" cy="30%" r="80%">
                        <stop offset="0%" stop-color="#4FFFD2" stop-opacity="0.4"/>
                        <stop offset="100%" stop-color="#4FFFD2" stop-opacity="0"/>
                    </radialGradient>
                    <radialGradient id="right-light2" cx="60%" cy="80%" r="90%">
                        <stop offset="0%" stop-color="#A259FF" stop-opacity="0.35"/>
                        <stop offset="100%" stop-color="#A259FF" stop-opacity="0"/>
                    </radialGradient>
                </defs>

                <ellipse class="pulse" cx="350" cy="300" rx="320" ry="190" fill="url(#right-light1)" />
                <ellipse class="pulse" cx="400" cy="800" rx="350" ry="240" fill="url(#right-light2)" />
            </svg>
        </div>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <!-- JS Personalizado -->
        <script src="js/script.js">
            
        </script>
    </body>
</html>