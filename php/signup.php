<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arx</title>
        <link rel="shortcut icon" href="/github/arx/image/favicon16.ico" type="image/x-icon">

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
        <link rel="stylesheet" href="/github/arx/css/style.css">
    </head>
    <body class="bg-dark text-light">
        <nav class="navbar bg-dark navbar-expand-lg sticky-top navi-border py-3">
            <div class="container">
                <a class="navbar-brand link-light d-flex align-items-center gap-2" href="/github/arx/index.html">
                    <img src="/github/arx/image/arx_logo.png" alt="Logomarca da Arx" class="img-fluid" style="max-width: 60px;">
                    <h1 class="fw-bold">Arx</h1>
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll p-lg-0 p-2 d-flex gap-3">
                        <li class="nav-item">
                            <a class="nav-link link-light px-2 px-lg-0" href="#"><span>Favoritos</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light px-2 px-lg-0" href="#"><span>Senhas</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" id="login-button" data-bs-toggle="modal" data-bs-target="#loginmodal" role="button">
                                <span class="ms-1">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Entrar
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <!-- Conteúdo de Cadastro -->
            <div class="container">
                <div class="signup-container">
                    <div class="signup-header">
                        <h2>Crie sua conta</h2>
                        <p>Preencha os campos abaixo para criar sua conta no Arx</p>
                    </div>
                    
                    <form action="user_cad.php" method="POST">
                        <!-- Seção de Informações Obrigatórias -->
                        <div class="form-section">
                            <h4 class="form-section-title">Informações de Acesso</h4>
                            <div class="mb-3">
                                <label for="user_nickname" class="form-label required">Nome de Usuário</label>
                                <input type="text" class="form-control bg-dark text-light" id="user_nickname" name="user_nickname" required>
                                <div class="form-note">Este será o seu nome de exibição na plataforma</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="user_email" class="form-label required">Email</label>
                                <input type="email" class="form-control bg-dark text-light" id="user_email" name="user_email" required>
                                <div class="form-note">Usaremos este email para contato e recuperação de conta</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="user_password" class="form-label required">Senha</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control bg-dark text-light" id="user_password" name="user_password" required>
                                </div>
                                <div class="form-note">Sua senha deve conter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label required">Confirmar Senha</label>
                                <input type="password" class="form-control bg-dark text-light" id="confirm_password" name="confirm_password" required>
                            </div>
                        </div>
                        
                        <!-- Seção de Informações Pessoais -->
                        <div class="form-section">
                            <h4 class="form-section-title">Informações Pessoais</h4>
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control bg-dark text-light" id="user_name" name="user_name">
                            </div>
                            
                            <div class="mb-3">
                                <label for="birthday_date" class="form-label required">Data de Nascimento</label>
                                <input type="date" class="form-control bg-dark text-light" id="birthday_date" name="birthday_date" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="user_tel" class="form-label">Telefone</label>
                                <input type="tel" class="form-control bg-dark text-light" id="user_tel" name="user_tel">
                            </div>
                        </div>
                        
                        <!-- Seção de Imagem de Perfil -->
                        <div class="form-section">
                            <h4 class="form-section-title">Imagem de Perfil</h4>
                            <div class="mb-3">
                                <label for="user_img" class="form-label">Foto de Perfil</label>
                                <input type="file" class="form-control bg-dark text-light" id="user_img" name="user_img" accept="image/*">
                                <div class="form-note">Formatos suportados: JPG, PNG, GIF (máx. 2MB)</div>
                            </div>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label" for="terms">
                                Li e concordo com os <a href="#" class="link-cad-reg">Termos de Uso</a> e <a href="#" class="link-cad-reg">Política de Privacidade</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-register">Criar Conta</button>
                    </form>
                    
                    <div class="login-link">
                        Já tem uma conta? <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="link-cad-reg">Faça login</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Decoração SVG -->
        <div class="svg-decor decor-left">
            <svg width="350" height="100%" viewBox="0 0 350 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="glow-left1" cx="30%" cy="30%" r="70%">
                        <stop offset="0%" stop-color="#FF4FD8" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#FF4FD8" stop-opacity="0" />
                    </radialGradient>
                    <radialGradient id="glow-left2" cx="40%" cy="60%" r="70%">
                        <stop offset="0%" stop-color="#A259FF" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#A259FF" stop-opacity="0" />
                    </radialGradient>
                    <radialGradient id="glow-left3" cx="20%" cy="80%" r="70%">
                        <stop offset="0%" stop-color="#4FC3FF" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#4FC3FF" stop-opacity="0" />
                    </radialGradient>
                </defs>
                
                <!-- Luzes pulsantes -->
                <ellipse class="pulse" cx="50" cy="200" rx="180" ry="100" fill="url(#glow-left1)" />
                <ellipse class="pulse" cx="150" cy="500" rx="220" ry="150" fill="url(#glow-left2)" />
                <ellipse class="pulse" cx="80" cy="800" rx="180" ry="100" fill="url(#glow-left3)" />
                
                <!-- Raios de luz flutuantes -->
                <path class="float" d="M0,150 C100,50 150,250 50,400" fill="none" stroke="#A259FF" stroke-opacity="0.05" stroke-width="80" />
                <path class="float" d="M50,600 C150,500 100,750 0,900" fill="none" stroke="#4FC3FF" stroke-opacity="0.05" stroke-width="60" />
                
                <!-- Brilho central -->
                <circle class="glow" cx="100" cy="500" r="250" fill="#A259FF" fill-opacity="0.05" />
            </svg>
        </div>

        <!-- Luzes de fundo animadas - Lado Direito -->
        <div class="svg-decor decor-right">
            <svg width="350" height="100%" viewBox="0 0 350 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="glow-right1" cx="70%" cy="30%" r="70%">
                        <stop offset="0%" stop-color="#4FC3FF" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#4FC3FF" stop-opacity="0" />
                    </radialGradient>
                    <radialGradient id="glow-right2" cx="60%" cy="60%" r="70%">
                        <stop offset="0%" stop-color="#4FFFD2" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#4FFFD2" stop-opacity="0" />
                    </radialGradient>
                    <radialGradient id="glow-right3" cx="80%" cy="80%" r="70%">
                        <stop offset="0%" stop-color="#A259FF" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#A259FF" stop-opacity="0" />
                    </radialGradient>
                </defs>
                
                <!-- Luzes pulsantes -->
                <ellipse class="pulse" cx="300" cy="150" rx="180" ry="100" fill="url(#glow-right1)" />
                <ellipse class="pulse" cx="200" cy="550" rx="220" ry="150" fill="url(#glow-right2)" />
                <ellipse class="pulse" cx="270" cy="850" rx="180" ry="100" fill="url(#glow-right3)" />
                
                <!-- Raios de luz flutuantes -->
                <path class="float" d="M350,200 C250,100 200,300 300,450" fill="none" stroke="#4FFFD2" stroke-opacity="0.05" stroke-width="80" />
                <path class="float" d="M300,650 C200,550 250,800 350,950" fill="none" stroke="#A259FF" stroke-opacity="0.05" stroke-width="60" />
                
                <!-- Brilho central -->
                <circle class="glow" cx="250" cy="500" r="250" fill="#4FC3FF" fill-opacity="0.05" />
            </svg>
        </div>

        <!-- Modal de Login -->
        <div class="modal fade" tabindex="-1" id="loginmodal" aria-labelledby="loginmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light shadow">
                    <div class="modal-body">
                        <div>
                            <div class="text-center">
                                <h3>Entrar</h1>
                                <span class="text-white">Faça o <span>login</span> para entrar na plataforma</span>                                
                            </div>                            
                            <div class="container">
                                <hr>
                            </div> 
                            <div class="container">
                                <form action="php/verify.php" method="POST">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="user_nickname" id="user_nickname" class="form-control bg-dark text-light" placeholder="Nome de Usuário" required>
                                        <label for="user_nickname" class="text-light">Nome de Usuário</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="user_password" id="user_password" class="form-control bg-dark text-light" placeholder="Senha" required>
                                        <label for="user_password" class="text-light">Senha</label>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-login w-100 mb-2">Entrar</button>
                                        <button type="button" class="btn btn-secondary w-100 fw-bold" data-bs-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>                                
                            </div>
                            <div class="container">
                                <hr class="mb-0">
                            </div>
                            <div class="container d-flex justify-content-between small mb-2">
                                <a href="#" class="link-pass">Esqueci minha senha</a>
                                <span>
                                    Não tem conta? 
                                    <a href="php/signup.php">
                                        <span class="link-cad-reg">Cadastre-se</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <!-- JS Personalizado -->
        <script src="js/script.js">
    </body>
</html>