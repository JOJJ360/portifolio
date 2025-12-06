<!DOCTYPE html>
<html lang="pt-br">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Isabella Feitosa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="site-header">
        <div class="container">
            <h1 class="site-title">Portfólio - Isabella Feitosa</h1>
        </div>
    </header>

    <!-- Navegação -->
    <nav class="site-nav">
        <div class="container nav-container">
            <a href="index.php" class="nav-link active"><i class="fas fa-home"></i> Início</a>
            <a href="paginas/chsa.html" class="nav-link"><i class="fas fa-globe-americas"></i> Humanas</a>
            <a href="paginas/cnt.html" class="nav-link"><i class="fas fa-leaf"></i> Natureza</a>
            <a href="paginas/matematica.html" class="nav-link"><i class="fas fa-calculator"></i> Matemática</a>
            <a href="paginas/linguagens.html" class="nav-link"><i class="fas fa-language"></i> Linguagens</a>
            <a href="paginas/tendencias.html" class="nav-link"><i class="fas fa-chart-line"></i> Tendências</a>
            <a href="paginas/ti.html" class="nav-link"><i class="fas fa-laptop-code"></i> TI</a>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <div class="container">
            <div class="page-container fade-in">
                <h2 class="page-title">Bem-vinda ao meu Portfólio!</h2>
                <img src="../imagens/eu.png" alt="minha foto" class="img">
                <p class="page-subtitle">
                    Olá! Meu nome é Isabella. Aqui apresento meu portfólio online, produzido para compor a atividade avaliativa. 
                    Neste espaço você encontra minhas experiências, produções e reflexões sobre as diversas áreas do conhecimento 
                    e as principais tendências da tecnologia.
                </p>

                <!-- Habilidades -->
                <h3 class="section-title">Minhas Habilidades</h3>
                <div class="skills-grid">
                    <div class="skill-item">Gestão de Redes Sociais</div>
                    <div class="skill-item">Estratégias de Marketing</div>
                    <div class="skill-item">Organização</div>
                    <div class="skill-item">Comunicação</div>
                    <div class="skill-item">Trabalho em Equipe</div>
                </div>

                <!-- Projetos -->
                <h3 class="section-title">Minha Jornada</h3>
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-content">
                            <h4 class="project-title">1º Ano - Descobertas</h4>
                            <p class="project-description">
                                Descobertas, novas amizades e o início de um novo ciclo pessoal e profissional, 
                                em relação à minha carreira. Foi um ano de adaptação e aprendizado fundamental.
                            </p>
                        </div>
                    </div>
                    
                    <div class="project-card">
                        <div class="project-content">
                            <h4 class="project-title">2º Ano - Evolução</h4>
                            <p class="project-description">
                                Mais maturidade, evolução, novas responsabilidades e experiência em projetos. 
                                Um período de crescimento significativo tanto pessoal quanto acadêmico.
                            </p>
                        </div>
                    </div>
                    
                    <div class="project-card">
                        <div class="project-content">
                            <h4 class="project-title">3º Ano - Decisões</h4>
                            <p class="project-description">
                                Novos desafios, decisões importantes, encerramento de uma etapa e prontidão 
                                para novos caminhos. Momento de consolidar conhecimentos e projetar o futuro.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formulário de Contato -->
                <h3 class="section-title">Entre em Contato</h3>
                <div class="contact-form">
                    <form id="contactForm" action="processar_contato.php" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="name">Nome</label>
                            <input type="text" id="name" class="form-input" placeholder="Seu nome" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">E-mail</label>
                            <input type="email" id="email" class="form-input" placeholder="Seu e-mail" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message">Mensagem</label>
                            <textarea id="message" class="form-textarea" placeholder="Sua mensagem" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                © 2025 — Isabella Feitosa Fernandes Afonso | Portfólio Acadêmico
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>