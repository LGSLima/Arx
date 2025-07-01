<!-- Verificação de Sessão -->
<?php
    session_start();
    if (empty($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}
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
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="d-flex flex-column justify-content-center bg-dark text-light">
        <!-- Navbar -->
        <nav class="navbar bg-dark navbar-expand-lg sticky-top navi-border py-3">
            <div class="container">
                <a class="navbar-brand link-light d-flex align-items-center gap-2" href="../index.html">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle link-light" href="#" id="login-button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i> Perfil
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark text-light" aria-labelledby="login-button">
                                <li><a class="dropdown-item text-light" href="#">Configurações</a></li>
                                <li><hr class="dropdown-divider text-light"></li>
                                <li>
                                    <a class="dropdown-item text-light" href="/Github/Arx/php/logout.php">
                                        <i class="bi bi-box-arrow-left"></i> Sair
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Conteúdo Principal -->
        <main class="flex-grow-1">
            <div class="container my-5">
                <div class="row">
                    <!-- Coluna de boas-vindas e informações do usuário -->
                    <div class="col-lg-8 mx-auto">
                        <div class="welcome-card p-4 p-md-5 mb-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-back-color me-3">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div>
                                    <h2 class="mb-0">Bem-vindo, <span><?php echo $_SESSION['user']; ?></span>!</h2>
                                    <p class="mb-0 text-light">Gerencie suas informações de segurança</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="stat-card p-3 h-100">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-shield-lock fs-1 me-3 text-gradient"></i>
                                            <div>
                                                <h5 class="mb-1">Senhas Salvas</h5>
                                                <p class="mb-0 fs-4">12</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="stat-card p-3 h-100">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-star fs-1 me-3 text-gradient"></i>
                                            <div>
                                                <h5 class="mb-1">Favoritos</h5>
                                                <p class="mb-0 fs-4">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Seção de Atividade Recente -->
                        <div class="activity-section p-4 mb-5">
                            <h4 class="mb-4 section-title">Atividade Recente</h4>
                            
                            <div>
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="icon-back-color icon-size">
                                            <i class="bi bi-key"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Nova senha adicionada</h6>
                                        <p class="mb-1 text-light">Conta do Google - hoje às 14:30</p>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-dark text-light me-2">Senhas</span>
                                            <small class="text-light">Força: <span class="text-success">Forte</span></small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="icon-back-color icon-size">
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Site favoritado</h6>
                                        <p class="mb-1 text-light">GitHub - ontem às 09:15</p>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-dark text-light me-2">Favoritos</span>
                                            <a href="#" class="text-decoration-none small">github.com</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="icon-back-color icon-size">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Senha atualizada</h6>
                                        <p class="mb-1 text-light">Netflix - 2 dias atrás</p>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-dark text-light me-2">Senhas</span>
                                            <small class="text-light">Força: <span class="text-warning">Média</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Coluna de status de segurança -->
                    <div class="col-lg-4">
                        <div class="security-status p-4 mb-4">
                            <h4 class="mb-4 section-title">Status de Segurança</h4>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Pontuação de Segurança</span>
                                    <span>78/100</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="check1" checked>
                                    <label class="form-check-label" for="check1">
                                        Autenticação de dois fatores ativada
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="check2" checked>
                                    <label class="form-check-label" for="check2">
                                        Senha mestra definida
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="check3">
                                    <label class="form-check-label" for="check3">
                                        Backup das senhas realizado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check4">
                                    <label class="form-check-label" for="check4">
                                        Verificação de senhas vazadas
                                    </label>
                                </div>
                            </div>
                            
                            <hr class="my-4" style="border-color: #333;">
                            
                            <div>
                                <h5 class="mb-3">Dicas de Segurança</h5>
                                <div class="mb-3">
                                    <i class="bi bi-lightbulb text-gradient me-2"></i>
                                    <span>Atualize suas senhas a cada 3 meses</span>
                                </div>
                                <div class="mb-3">
                                    <i class="bi bi-lightbulb text-gradient me-2"></i>
                                    <span>Use autenticação de dois fatores sempre que possível</span>
                                </div>
                                <div>
                                    <i class="bi bi-lightbulb text-gradient me-2"></i>
                                    <span>Evite usar a mesma senha em múltiplos sites</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="quick-actions p-4">
                            <h4 class="mb-4 section-title">Ações Rápidas</h4>
                            <button class="btn btn-login w-100 mb-3">
                                <i class="bi bi-plus-circle me-2"></i> Adicionar Nova Senha
                            </button>
                            <button class="btn btn-login w-100 mb-3" data-bs-toggle="modal" data-bs-target="#createCardModal">
                                <i class="bi bi-star me-2"></i> Adicionar aos Favoritos
                            </button>
                            <button class="btn btn-login w-100">
                                <i class="bi bi-shield-check me-2"></i> Verificar Segurança
                            </button>
                        </div>
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

        <!-- Modal de Criação de Card -->
        <div class="modal fade" id="createCardModal" tabindex="-1" aria-labelledby="createCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-bottom border-secondary">
                        <h5 class="modal-title text-gradient" id="createCardModalLabel">Adicionar Novo Card</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="cardForm">
                            <div class="mb-3">
                                <label for="cardTitle" class="form-label">Título do Card</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary" id="cardTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="cardLink" class="form-label">Link de Destino</label>
                                <input type="url" class="form-control bg-dark text-light border-secondary" id="cardLink" placeholder="https://exemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="cardImage" class="form-label">URL da Imagem</label>
                                <input type="url" class="form-control bg-dark text-light border-secondary" id="cardImage" placeholder="https://exemplo.com/imagem.jpg">
                                <div class="form-text text-muted">Opcional - deixe em branco para usar ícone padrão</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border-top border-secondary">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" form="cardForm" class="btn btn-login">
                            <i class="bi bi-plus-circle me-2"></i>Criar Card
                        </button>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <!-- JS Personalizado -->
        <script src="../js/script.js"></script>
    </body>
</html>