<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <style>
        /* Configurações básicas para o footer */
        .ecommerce-footer {
            background-color: #222222;
            color: #ffffff;
            font-family: Arial, sans-serif;
            position: relative;
            line-height: 1.5;
        }

        /* Container centraliza e limita a largura do conteúdo */
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px; /* --- REDUZIDO --- */
        }

        /* Títulos das Seções (INSTITUCIONAL, DÚVIDAS, etc.) */
        .ecommerce-footer h4 {
            color: #f7931e;
            font-size: 14px;
            margin-bottom: 8px; /* --- REDUZIDO --- */
            text-transform: uppercase;
            font-weight: bold;
        }

        /* 1. Seção Superior: Pagamento e Segurança */
        .footer-top-bar {
            border-bottom: 1px solid #333333;
            padding-bottom: 10px; /* --- REDUZIDO --- */
        }

        .footer-top-bar .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-top: 15px; /* --- REDUZIDO --- */
        }

        .form-pagamento, .seguranca {
            flex-basis: 50%;
        }

        .icones-pagamento .pagamento-img {
            max-height: 28px; /* --- REDUZIDO --- */
            width: auto;
            display: block;
        }

        .selos-seguranca {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .selo-img-google {
            max-height: 35px; /* --- REDUZIDO --- */
            width: auto;
        }

        .selo-img-ebit {
            max-height: 80px; /* --- REDUZIDO (Principal mudança) --- */
            width: auto;
        }

        /* 2. Seção de Links em Colunas */
        .footer-links {
            padding: 20px 0; /* --- REDUZIDO --- */
            border-bottom: 1px solid #333333;
        }

        .main-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px; /* --- REDUZIDO --- */
        }

        .lista-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .lista-links li {
            margin-bottom: 4px; /* --- REDUZIDO --- */
        }

        .lista-links a {
            color: #b0b0b0;
            text-decoration: none;
            font-size: 12px; /* --- REDUZIDO --- */
            transition: color 0.3s;
        }

        .lista-links a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        /* 3. Seção Inferior: Redes Sociais e Powered By */
        .footer-bottom {
            padding: 15px 0; /* --- REDUZIDO --- */
        }

        .titulo-siga {
            text-align: center;
            margin-bottom: 10px; /* --- REDUZIDO --- */
        }

        .social-icons {
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            color: #ffffff;
            font-size: 22px; /* --- REDUZIDO --- */
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #f7931e;
        }

        /* Barra de Direitos Autorais */
        .footer-copyright {
            background-color: #191919;
            padding: 10px 0;
            font-size: 12px; /* Aumentei um pouco para legibilidade */
            text-align: center;
            color: #999999;
        }
        
        .copyright-text {
            margin: 0;
        }

        /* Responsividade (mantida como estava) */
        @media (max-width: 768px) {
            .footer-top-bar .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .form-pagamento, .seguranca {
                margin-bottom: 20px;
            }
            .seguranca {
                order: -1;
            }
            .main-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .main-links-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    
    
    <footer class="ecommerce-footer">

        <div class="footer-top-bar">
            <div class="footer-container">
                <div class="form-pagamento">
                    <h4>FORMAS DE PAGAMENTO</h4>
                    <div class="icones-pagamento">
                        <img src="images/forma-pagamento.png" alt="Formas de Pagamento" class="pagamento-img">
                    </div>
                </div>

                <div class="seguranca">
                    <h4>SEGURANÇA</h4>
                    <div class="selos-seguranca">
                        <img src="images/google-safe.png" alt="Google Safe Browsing" class="selo-img-google">
                        <img src="images/selo.png" alt="Selo NlQ Ebit" class="selo-img-ebit">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-links">
            <div class="footer-container main-links-grid">
                
                <div class="coluna">
                    <h4 class="coluna-titulo">INSTITUCIONAL</h4>
                    <ul class="lista-links">
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Termos e Condições de Venda</a></li>
                        <li><a href="#">Política de troca e devoluções</a></li>
                        <li><a href="#">Política de Segurança e Privacidade</a></li>
                        <li><a href="#">Política de Cookies</a></li>
                    </ul>
                </div>
                
                <div class="coluna">
                    <h4 class="coluna-titulo">DÚVIDAS</h4>
                    <ul class="lista-links">
                        <li><a href="#">Como comprar</a></li>
                        <li><a href="#">Prazos e entregas</a></li>
                        <li><a href="#">Formas de Pagamento</a></li>
                        <li><a href="#">Programa de Parceiros</a></li>
                    </ul>
                </div>
                
                <div class="coluna">
                    <h4 class="coluna-titulo">CLIENTE</h4>
                    <ul class="lista-links">
                        <li><a href="#">Minha conta</a></li>
                        <li><a href="#">Meus pedidos</a></li>
                        <li><a href="#">Meus tickets</a></li>
                    </ul>
                </div>
                
                <div class="coluna">
                    <h4 class="coluna-titulo">AJUDA</h4>
                    <ul class="lista-links">
                        <li><a href="#">Vídeo Tutoriais</a></li>
                        <li><a href="#">Manuais do Produto</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-container">
                <div class="siga-nos">
                    <h4 class="titulo-siga">SIGA-NOS</h4>
                    <div class="social-icons">
                        <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i> </a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i> </a>
                        <a href="#" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i> </a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        


    </footer>
    </body>
</html>