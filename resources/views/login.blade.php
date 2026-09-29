<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.min.js "></script>

    @vite('resources/js/login.js')

    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        /* ==========================
           FUNDO ÚNICO ANIMADO
        ========================== */

        body {
            font-family: Arial, Helvetica, sans-serif;

            background: linear-gradient(
                120deg,
                #020b1c,
                #06285c,
                #0a438f,
                #06285c,
                #020b1c
            );

            background-size: 400% 400%;

            animation: fundoAnimado 12s ease infinite;

            overflow: hidden;
        }

        @keyframes fundoAnimado {

            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }

        }

        /* ==========================
           CONTAINER
        ========================== */

        .site-container {

            width: 100vw;
            height: 100vh;

            position: relative;

            overflow: hidden;

            /* MESMO FUNDO DA TELA INTEIRA */
            background: linear-gradient(
                120deg,
                #020b1c,
                #06285c,
                #0a438f,
                #06285c,
                #020b1c
            );

            background-size: 400% 400%;

            animation: fundoAnimado 12s ease infinite;
        }

        /* ==========================
           PAINEL DE BOAS-VINDAS
        ========================== */

        .welcome-panel {

            width: 55%;
            height: 100vh;

            position: absolute;

            top: 0;
            left: 0;

            display: flex;

            align-items: center;

            padding: 0 9%;

            color: white;

            /* SEM OUTRO FUNDO */
            background: transparent;

            z-index: 2;

            transition:
                left 0.9s cubic-bezier(.77, 0, .18, 1);
        }

        /* CONTEÚDO */

        .welcome-content {
            max-width: 520px;
        }

        .welcome-content h1 {

            font-size: 52px;

            font-weight: 700;

            margin-bottom: 20px;
        }

        .welcome-content p {

            font-size: 18px;

            line-height: 1.7;

            margin: 0;
        }

        /* ==========================
           FORMULÁRIO
        ========================== */

        .form-panel {

            width: 45%;
            height: 100vh;

            position: absolute;

            top: 0;
            right: 0;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;

            /* MESMO FUNDO */
            background: transparent;

            transition:
                right 0.9s cubic-bezier(.77, 0, .18, 1);
        }

        /* ==========================
           CARD
        ========================== */

        .form-card {

            width: 100%;

            max-width: 420px;

            padding: 45px;

            background: #ffffff;

            border-radius: 20px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.35);
        }

        /* TÍTULO */

        .form-card h2 {

            text-align: center;

            color: #333;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 30px;
        }

        /* INPUTS */

        .form-control {

            min-height: 48px;

            border: 1px solid #ddd;

            border-radius: 8px;

            font-size: 15px;
        }

        .form-control:focus {

            border-color: #0875c9;

            box-shadow:
                0 0 0 0.2rem rgba(8, 117, 201, 0.15);
        }

        /* CHECKBOX */

        .form-check-input:checked {

            background-color: #0875c9;

            border-color: #0875c9;
        }

        /* LINKS */

        .form-card a {

            color: #0875c9;

            text-decoration: none;
        }

        .form-card a:hover {

            text-decoration: underline;
        }

        /* BOTÃO */

        .btn-site {

            min-height: 48px;

            border: none;

            border-radius: 8px;

            background: #0875c9;

            color: white;

            font-weight: 700;

            transition: 0.25s;
        }

        .btn-site:hover {

            background: #005ca8;

            color: white;

            transform: translateY(-2px);
        }

        /* TEXTO INFERIOR */

        .bottom-text {

            color: #666;

            font-size: 14px;

            text-align: center;
        }

        /* ==========================
           ANIMAÇÃO DE TROCA
        ========================== */

        .login-layout.change-page .welcome-panel {

            left: 45%;
        }

        .login-layout.change-page .form-panel {

            right: 55%;
        }

        /* ==========================
           RESPONSIVO
        ========================== */

        @media (max-width: 768px) {

            body {
                overflow-y: auto;
            }

            .site-container {

                height: auto;

                min-height: 100vh;

                display: flex;

                flex-direction: column;
            }

            .welcome-panel,
            .form-panel {

                position: relative;

                width: 100%;

                height: auto;

                left: auto;

                right: auto;
            }

            .welcome-panel {

                min-height: 35vh;

                padding: 50px 30px;

                text-align: center;

                justify-content: center;
            }

            .welcome-content h1 {

                font-size: 36px;
            }

            .welcome-content p {

                font-size: 16px;
            }

            .form-panel {

                min-height: 65vh;

                padding: 30px 20px;
            }

            .form-card {

                max-width: 520px;

                padding: 35px 25px;
            }
        }

    </style>

</head>

<body>

    <div class="site-container login-layout">

        <!-- PAINEL DE BOAS-VINDAS -->

        <section class="welcome-panel">

            <div class="welcome-content">

                <h1>
                    SEJA BEM-VINDO
                </h1>

                <p>
                    Acesse sua conta para continuar
                    e aproveitar todas as funcionalidades
                    do nosso sistema.
                </p>

            </div>

        </section>


        <!-- FORMULÁRIO -->

        <section class="form-panel">

            <div class="form-card">

                <h2>
                    ACESSE SUA CONTA
                </h2>

                <div class="mb-3">

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nome de usuário"
                        id="email"
                        required>

                </div>

                <div class="mb-3">

                    <input
                        type="password"
                        class="form-control"
                        placeholder="Senha"
                        id="senha"
                        required>

                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="lembrar">

                        <label
                            class="form-check-label"
                            for="lembrar">

                            Lembrar de mim

                        </label>

                    </div>

                    <a href="#">
                        Esqueci minha senha
                    </a>

                </div>

                <button
                    type="button"
                    class="btn btn-site w-100"
                    id="entrar">

                    Entrar

                </button>

                <div class="bottom-text mt-4">

                    Ainda não possui uma conta?

                    <a
                        href="/cadastro_usuario"
                        id="irCadastro"
                        class="fw-bold">

                        Cadastre-se

                    </a>

                </div>

            </div>

        </section>

    </div>

</body>

</html>