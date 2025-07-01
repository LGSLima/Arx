<?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger text-center">
        <?php
            switch ($_GET['error']) {
                case 'senha':
                    echo "As senhas não coincidem.";
                    break;
                case 'duplicado':
                    echo "Usuário, e-mail ou telefone já estão cadastrados.";
                    break;
                case 'bd':
                    echo "Erro ao cadastrar usuário. Tente novamente.";
                    break;
                default:
                    echo "Erro desconhecido.";
            }
        ?>
    </div>
<?php endif; ?>
<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success text-center">
        Conta criada com sucesso! Você pode fazer login agora.
    </div>
<?php endif; ?>

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
                                <span>
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
                    
                    <form action="user_cad.php" method="POST" enctype="multipart/form-data">
                        <!-- Seção de Informações Obrigatórias -->
                        <div class="form-section">
                            <h4 class="form-section-title">Informações de Acesso</h4>
                            <div class="mb-3">
                                <label for="user_nickname" class="form-label required">Nome de Usuário</label>
                                <input type="text" class="form-control bg-dark text-light" id="user_nickname" name="user_nickname" required>
                                <div class="form-note">Este será o seu nome de exibição na plataforma, caso não queira inserir seu nome.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="user_email" class="form-label required">Email</label>
                                <input type="email" class="form-control bg-dark text-light" id="user_email" name="user_email" oninput="validateEmail()" required>
                                <div class="form-note">Usaremos este email para contato e recuperação de conta.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="user_password" class="form-label required">Senha</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control bg-dark text-light" id="user_password" name="user_password" oninput="strengthBar()" required>
                                </div>
                                <div id="pass_bar" class="mt-1">
                                    <div id="pass_strength"></div>
                                </div>
                                <span class="form-note" id="feedback-text"></span>
                                <div class="form-note">Sua senha deve conter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label required">Confirmar Senha</label>
                                <input type="password" class="form-control bg-dark text-light" id="confirm_password" name="confirm_password" oninput="passwordConfirmation()" required>
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
                                <div class="form-note">Apenas pessoas maiores de 13 anos podem criar conta na plataforma.</div>
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
                                <div class="form-note">Formatos suportados: JPG, PNG, GIF (máx. 2MB).</div>
                            </div>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label" for="terms">
                                Li e concordo com os <a href="#" class="link-cad-reg">Termos de Uso</a> e <a href="#" class="link-cad-reg">Política de Privacidade</a>.
                            </label>
                        </div>
                        
                        <button type="submit" id="button_reg" class="btn btn-register" disabled>Criar Conta</button>
                    </form>
                    
                    <div class="login-link">
                        Já tem uma conta? <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="link-cad-reg">Faça login</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5 class="mb-4">
                            <img src="../image/favicon64.ico" alt="Logo Arx" class="img-fluid" style="max-width: 40px;">
                            Arx
                        </h5>
                        <p>Protegendo seus dados e simplificando sua vida digital com soluções de segurança premium desde 2023.</p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <h5 class="mb-4">Produto</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#favoritos" class="text-light text-decoration-none">Favoritos</a></li>
                            <li class="mb-2"><a href="#senhas" class="text-light text-decoration-none">Senhas</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Extensões</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Preços</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <h5 class="mb-4">Recursos</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Blog</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Tutoriais</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Suporte</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-4">Assine nossa newsletter</h5>
                        <p>Receba as últimas novidades sobre segurança digital e atualizações do Arx.</p>
                        <div class="input-group mb-3">
                            <label for="email-contato" class="input-group-text fw-bold rounded-0">E-mail</label>
                            <input type="email" id="email-contato" class="form-control text-light">
                            <button class="btn btn-login" type="button">Assinar</button>
                        </div>
                    </div>
                </div>
                <hr class="mt-5 mb-4" style="border-color: #333;">
                <div class="d-flex justify-content-center align-items-end">
                    <div class="text-center text-md-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class="text-light text-decoration-none">Termos de Uso</a></li>
                            <li class="list-inline-item"><a href="#" class="text-light text-decoration-none">Política de Privacidade</a></li>
                            <li class="list-inline-item"><a href="#" class="text-light text-decoration-none">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Seção Desenvolvedor -->
        <div class="w-100 developer-section mb-0 py-3 text-center text-dark">
                <span class="fw-bold">
                    &copy; 2025 Luís Lima <a href="https://github.com/LGSLima" class="link-dark"><i class="bi bi-github"></a></i> 
                    | <a href="https://www.linkedin.com/in/lgslima" class="link-dark"><i class="bi bi-linkedin"></i></a>
                    & 
                    Lucas Goebel <a href="https://github.com/lgoebel" class="link-dark"><i class="bi bi-github"></a></i> 
                    | <a href="https://www.linkedin.com/in/lucas-a-goebel" class="link-dark"><i class="bi bi-linkedin"></i></a>
                    <br>
                    Todos os direitos reservados.
                </span>
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
                                <form action="verify.php" method="POST">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="user_nickname" id="login_nickname" class="form-control bg-dark text-light" placeholder="Nome de Usuário" required>
                                        <label for="login_nickname" class="text-light">Nome de Usuário</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="user_password" id="login_password" class="form-control bg-dark text-light" placeholder="Senha" required>
                                        <label for="login_password" class="text-light">Senha</label>
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

        <!-- Modal de Erro -->
        <div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-danger text-light">
                    <div class="modal-header">
                        <h5 class="modal-title">Erro ao cadastrar</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p id="modalErrorMessage"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <!-- JS Personalizado -->
        <script src="/Github/Arx/js/script.js"></script>
    </body>
</html>