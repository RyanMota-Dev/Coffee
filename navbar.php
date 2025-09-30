<head>
<style>
header { 
    /* Cor de fundo primária: #1a1a1a */
    background-color: var(--primary-bg); 
    /* Espaçamento vertical */
    padding: 1rem 0; 
    /* Borda inferior sutil */
    border-bottom: 1px solid var(--border-color); 
}

.navbar { 
    /* Layout flexível */
    display: flex; 
    /* Distribui logo à esquerda e links/botões à direita */
    justify-content: space-between; 
    /* Alinhamento vertical centralizado */
    align-items: center; 
    /* Largura máxima centralizada */
    max-width: 1200px; 
    margin: 0 auto; 
    padding: 0 1.5rem; 
}

.logo { 
    font-size: 1.8rem; 
    font-weight: 700; 
    /* Cor do título: #e0e0e0 */
    color: var(--heading-color); 
    text-decoration: none; 
}

.nav-links { 
    list-style: none; 
    display: flex; 
    /* Espaçamento entre os links */
    gap: 2.5rem; 
}

.nav-links a { 
    /* Cor do texto: #f0f0f0 */
    color: var(--text-color); 
    text-decoration: none; 
}

.auth-buttons { 
    display: flex; 
    gap: 1rem; 
}

.auth-buttons .btn { 
    padding: 0.7rem 1.5rem; 
    border-radius: 5px; 
    text-decoration: none; 
    font-weight: 600; 
}

.auth-buttons .btn-login { 
    background-color: transparent; 
    /* Borda sutil */
    border: 1px solid var(--border-color); 
    color: var(--text-color); 
}

.auth-buttons .btn-cadastro { 
    /* Cor de fundo secundária: #2a2a2a */
    background-color: var(--secondary-bg); 
    color: var(--text-color); 
    border: none; 
}

/* Nota: Faltam os estilos de hover, mas usei o que estava no seu código original. */


</style>

</head>


<header>
    <nav class="navbar">
            <a href="index.html" class="logo">Coffee</a>
            <ul class="nav-links">
                <li><a href="catalogo.php">Loja</a></li>
                <li><a href="cursos.php" class="active">Aulas</a></li>
                <li><a href="planos.php">Planos</a></li>
                <li><a href="blog.php">Blog</a></li>
                <a href="carrinho.php">
                <li><i class="fa-solid fa-cart-shopping"></i></li>
                </a>
            </ul>
            <div class="auth-buttons">
                <a href="#" class="btn btn-login">Login</a>
                <a href="#" class="btn btn-cadastro">Cadastro</a>
            </div>
        </nav>
</header>
