// script.js - Funcionalidades JavaScript para o portfólio

// Aguarda o carregamento completo da página
document.addEventListener('DOMContentLoaded', function() {
    
    // Processar formulário de contato
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Mostrar loading
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
            submitBtn.disabled = true;
            
            // Coletar dados do formulário
            const formData = new FormData(this);
            
            // Enviar dados via AJAX
            fetch('processar_contato.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro na rede');
                }
                return response.json();
            })
            .then(data => {
                // Mostrar mensagem
                if (data.success) {
                    alert('✅ ' + data.message);
                    contactForm.reset();
                } else {
                    alert('❌ ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('❌ Erro ao enviar mensagem. Verifique o console para detalhes.');
                
                // Log no console
                console.log('Dados do formulário:');
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
            })
            .finally(() => {
                // Restaurar botão
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }
    
    // ... resto do código ...
});
    
    // ===== NAVEGAÇÃO ATIVA =====
    function setActiveNavLink() {
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const linkPage = link.getAttribute('href');
            
            if (currentPage === 'index.php' || currentPage === '') {
                if (linkPage === 'index.php') {
                    link.classList.add('active');
                }
            } else if (linkPage.includes(currentPage)) {
                link.classList.add('active');
            }
        });
    }
    
    // ===== ANIMAÇÃO DE CARDS =====
    function animateCardsOnScroll() {
        const cards = document.querySelectorAll('.project-card, .summary-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });
        
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });
    }
    
    // ===== FUNÇÃO DE ALERTA =====
    function showAlert(message, type) {
        // Remove alertas anteriores
        const existingAlert = document.querySelector('.custom-alert');
        if (existingAlert) {
            existingAlert.remove();
        }
        
        // Cria o elemento do alerta
        const alertDiv = document.createElement('div');
        alertDiv.className = `custom-alert ${type}`;
        alertDiv.textContent = message;
        
        // Estilos do alerta
        alertDiv.style.position = 'fixed';
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.padding = '15px 20px';
        alertDiv.style.borderRadius = '8px';
        alertDiv.style.color = 'white';
        alertDiv.style.fontWeight = '600';
        alertDiv.style.zIndex = '10000';
        alertDiv.style.boxShadow = '0 5px 15px rgba(0,0,0,0.2)';
        alertDiv.style.animation = 'fadeIn 0.3s ease';
        
        if (type === 'success') {
            alertDiv.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
        } else {
            alertDiv.style.background = 'linear-gradient(135deg, #f44336 0%, #d32f2f 100%)';
        }
        
        // Adiciona ao corpo do documento
        document.body.appendChild(alertDiv);
        
        // Remove o alerta após 5 segundos
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.style.opacity = '0';
                alertDiv.style.transition = 'opacity 0.3s ease';
                setTimeout(() => {
                    if (alertDiv.parentNode) {
                        alertDiv.remove();
                    }
                }, 300);
            }
        }, 5000);
    }
    

    // ===== INICIALIZAÇÃO =====
    setActiveNavLink();
    animateCardsOnScroll();
    
    // Adiciona animação de fade-in para elementos com a classe fade-in
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, 100);
    });
});