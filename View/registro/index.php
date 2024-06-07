<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPro - Register</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="container">
        <h1 class="title">GymPro</h1>
        <div>
            <h2>Faça seu registro.</h2>
            <form>
                <div class="linha">
                    <div class="coluna">
                        <div class="input-box">
                            <input type="text" required>
                            <label>Usuário</label>
                        </div>
                        <div class="input-box">
                            <input type="password" required>
                            <label>Senha</label>
                        </div>
                        <div class="input-box">
                            <input type="text" required>
                            <label>Nome Completo</label>
                        </div>
                        <div class="input-box">
                            <input type="tel" required>
                            <label>Celular</label>
                        </div>
                        <div class="input-box">
                            <input type="email" required>
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="coluna">
                        <div class="input-box">
                            <select required>
                                <option value="" disabled selected>Serviços</option>
                                <option value="Treino Personalizado">Treino Personalizado</option>
                                <option value="Consultoria Online">Consultoria Online</option>
                                <option value="Avaliação Física">Avaliação Física</option>
                                <option value="Hipertrofia">Hipertrofia</option>
                                <option value="Condicionamento">Condicionamento</option>
                                <option value="Emagrecimento">Emagrecimento</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label>Biografia</label><br><br>
                            <textarea cols="25" rows="5"></textarea>
                        </div>
                        <div class="input-box">
                            <label>Frase</label><br><br>
                            <textarea cols="25" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="linha">
                    <button>Registrar</button>
                </div>


            </form>
        </div>
    </div>
</body>
</html>
