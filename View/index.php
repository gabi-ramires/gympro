<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>WhatsMark</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <header>
        <div class='logo'>
            <img src="../img/fox.png" width="100px">
            <a href='/'><span style='color: #f7800a; font-size:20px'>GymPro</span></a>
        </div>
        <nav>
            <ul>
                <li><a href="/">Página Inicial</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <?php if(!$taLogado): ?>                
                <li><a class='btnLaranja'href="registro">Registrar-se</a></li>
                <li><a class='btnLaranja'href="login">Login</a></li>
                <?php else: ?>
                <li><a href="/painel">Painel&nbsp; <i class="bi bi-box-arrow-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main id="main">
        <div class="container tela-login index-site">
            <div class='slogan'>
                <span>
                Gerencie seus alunos, agende aulas facilmente e expanda seus ganhos!
                </span>
            </div>
            <div class="produtos">
                <div class="card">
                    <h2>GymPro I</h2>
                    <p><i class="bi bi-check-lg"></i> Portfólio profissional</p>
                    <p><i class="bi bi-check-lg"></i> Gestão de alunos</p>
                    <p><i class="bi bi-check-lg"></i> Agendamentos de aulas</p>
                    <p><i class="bi bi-check-lg"></i> Treinos por aluno no app</p>
                    <p><i class="bi bi-check-lg"></i> Até <strong>15 alunos</strong></p>

                    <div class='preco'>
                        <span><strong>R$ 9,90</strong> / mês</span>
                    </div>

                    <div class='contratar'>
                        <button id='whats-i'>Contratar</button>
                    </div>
                </div>
                <div class="card">
                    <h2>GymPro II</h2>
                    <p><i class="bi bi-check-lg"></i> Portfólio profissional</p>
                    <p><i class="bi bi-check-lg"></i> Gestão de alunos</p>
                    <p><i class="bi bi-check-lg"></i> Agendamentos de aulas</p>
                    <p><i class="bi bi-check-lg"></i> Treinos por aluno no app</p>
                    <p><i class="bi bi-check-lg"></i> Até <strong>50 alunos</strong></p>

                    <div class='preco'>
                        <span><strong>R$ 19,90</strong> / mês</span>
                    </div>

                    <div class='contratar'>
                        <button id='whats-ii'>Contratar</button>
                    </div>
                    
                </div>
                <div class="card">
                    <h2>GymPro III</h2>
                    <p><i class="bi bi-check-lg"></i> Portfólio profissional</p>
                    <p><i class="bi bi-check-lg"></i> Gestão de alunos</p>
                    <p><i class="bi bi-check-lg"></i> Agendamentos de aulas</p>
                    <p><i class="bi bi-check-lg"></i> Treinos por aluno no app</p>
                    <p><i class="bi bi-check-lg"></i> Até <strong>200 alunos</strong></p>

                    <div class='preco'>
                        <span><strong>R$ 39,90</strong> / mês</span>
                    </div>

                    <div class='contratar'>
                        <button id='whats-iii'>Contratar</button>
                    </div>
                </div>
            </div>
        </div>

</main>

<footer>
    &copy; 2024 GymPro - Todos os direitos reservados
</footer>

</body>
</html>


