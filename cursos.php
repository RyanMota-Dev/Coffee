<?php
session_start();
include 'conexao.php';
$sql = "SELECT titulo, descricao, duracao, nivel, categoria FROM cursos ORDER BY id DESC";
$result = mysql_query($sql);
$num_rows = $result ? mysql_num_rows($result) : 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee - Cursos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles/cursos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include'navbar.php'?>

    <main>
        <section class="secao_principal">
            <div class="container">
                <h1>Aprenda com Especialistas, Apaixone-se ainda mais por Café</h1>
                <p>Seja você um iniciante curioso ou um barista experiente em busca de aprimoramento, nossos cursos foram desenhados para aprofundar sua conexão com o universo do café.</p>
            </div>
        </section>
                <section class="container" style="text-align: right; padding-top: 0; padding-bottom: 1rem;">
            <button id="btn-container" class="btn1" style="padding: 0.7rem 1.5rem; margin-top: 0; font-size: 1rem;">
                + Adicionar Novo Curso
            </button>
        </section>

        <section class="container">
            <h2 class="titulo-secao">Nossos Cursos</h2>
            <p class="section-subtitle">Explore a nossa biblioteca completa de aulas para todos os níveis.</p>

            <?php if ($result): ?>
                <?php if ($num_rows > 0): ?>
                    <ul class="courses-grid" id="allCoursesList">
                        <?php while($row = mysql_fetch_assoc($result)): ?>
                            <li class="course-item">
                                <h4><?php echo htmlspecialchars($row["titulo"]); ?></h4>
                                <p><?php echo htmlspecialchars($row["descricao"]); ?></p>
                                <div class="detalhes">
                                    <span><strong>Duração:</strong> <?php echo htmlspecialchars($row["duracao"]); ?></span>
                                    <span><strong>Nível:</strong> <?php echo htmlspecialchars($row["nivel"]); ?></span>
                                    <span><strong>Categoria:</strong> <?php echo htmlspecialchars($row["categoria"]); ?></span>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else: ?>
                    <p style="text-align: center; font-size: 1.2rem; margin-top: 2rem;">Nenhum curso cadastrado ainda.</p>
                <?php endif; ?>
            <?php else: ?>
                <p style="text-align: center; color: red; font-size: 1.2rem; margin-top: 2rem;">Erro ao executar a consulta: <?php echo mysql_error(); ?></p>
            <?php endif; ?>

            <?php mysql_close(); ?>

            <div style="text-align: center; margin-top: 4rem;">
                <a href="#" class="btn1">Ver Calendário e Inscrições</a>
            </div>
        </section>
    </main>

    
    <div id="addCourseModal" class="modal-overlay">
        <div class="modal-content">
            <h2>Criar Novo Curso</h2>
            <form id="newCourseForm" action="processar_curso.php" method="POST">
                <div class="form-group">
                    <label for="courseTitle">Título do Curso</label>
                    <input type="text" id="courseTitle" name="courseTitle" required>
                </div>
                <div class="form-group">
                    <label for="courseDescription">Descrição Curta</label>
                    <textarea id="courseDescription" name="courseDescription" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="courseDuration">Duração (ex: 3 horas)</label>
                    <input type="text" id="courseDuration" name="courseDuration" required>
                </div>
                <div class="form-group">
                    <label for="courseLevel">Nível</label>
                    <select id="courseLevel" name="courseLevel" required>
                        <option value="Iniciante">Iniciante</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                        <option value="Todos os níveis">Todos os Níveis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="courseCategory">Tag/Categoria (Para identificação)</label>
                    <select id="courseCategory" name="courseCategory" required>
                        <option value="Essencial">Essencial</option>
                        <option value="Métodos">Métodos de Preparo</option>
                        <option value="Barista">Barista</option>
                        <option value="História">História</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-secondary" id="closeModalBtn">Cancelar</button>
                    <button type="submit" class="btn1 btn-add-course">Adicionar Curso</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('addCourseModal');
            const openBtn = document.getElementById('btn-container');
            const closeBtn = document.getElementById('closeModalBtn');
            const form = document.getElementById('newCourseForm');

            openBtn.addEventListener('click', () => modal.classList.add('open'));
            closeBtn.addEventListener('click', () => { modal.classList.remove('open'); form.reset(); });
            modal.addEventListener('click', e => { if (e.target === modal) { modal.classList.remove('open'); form.reset(); } });
        });
    </script>
        <?php include'footer.php'?>
</body>
</html>
