<?php

?>
<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPro - Login</title>
    <link rel="stylesheet" href="login.css">
    <!-- Inclua Vue.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div>
        <a class='link' href='../'><i class="bi bi-arrow-left"></i> Voltar</a>
        <div id='app' class="container">
            <h1 class="title">GymPro</h1>
            <div class="login-box">
                <h2>Login</h2>
                <form>
                    <div class="input-box">
                        <input type="text" v-model="username" required>
                        <label>Usuário</label>
                    </div>
                    <div class="input-box">
                        <input type="password" v-model="password" required>
                        <label>Senha</label>
                    </div>
                    <button type='button' @click="login">Acessar</button>
                    <div class="register-text">
                        <p>Não possui conta?</p>
                        <a class='link' href="../registro/">Registrar-se</a>
                    </div>

                </form>
            </div>
        </div>        
    </div>


    <script>
new Vue({
    el: '#app',
    data: {
        username: '',
        password: ''
    },
    methods: {
        login() {
            // Verifica se os campos estão preenchidos
            if (!this.username || !this.password) {
                alert("Por favor, preencha todos os campos.");
                return;
            }

            // Requisição fetch
            fetch("../../Controller/LoginController.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    action: 'login',
                    username: this.username,
                    password: this.password
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Erro na requisição");
                }
                return response.json();
            })
            .then(data => {
                console.log("Resposta do servidor:", data);
            })
            .catch(error => {
                console.error("Erro:", error);
                alert("Erro ao processar a requisição. Por favor, tente novamente.");
            });
        }
    }
});

  </script>
</body>
</html>
