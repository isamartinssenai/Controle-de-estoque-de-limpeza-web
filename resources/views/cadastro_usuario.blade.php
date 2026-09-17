<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Usuário</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JavaScript do cadastro -->
    @vite('resources/js/cadastro_usuario.js')


    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }


        /* =====================================
           FUNDO AZUL ESCURO ANIMADO
        ===================================== */

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


        /* =====================================
           CONTAINER
        ===================================== */

        .site-container {

            width: 100vw;
            height: 100vh;

            position: relative;

            overflow: hidden;

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


        /* =====================================
           PAINEL DE BOAS-VINDAS
        ===================================== */

        .welcome-panel {

            width: 55%;
            height: 100vh;

            position: absolute;

            top: 0;
            right: 0;

            display: flex;

            align-items: center;

            padding: 0 9%;

            color: white;

            background: transparent;

            z-index: 2;

            /* ANIMAÇÃO DE TROCA */
            transition:
                right 0.9s cubic-bezier(.77, 0, .18, 1);
        }


        /* =====================================
           CONTEÚDO
        ===================================== */

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


        /* =====================================
           PAINEL DO FORMULÁRIO
        ===================================== */

        .form-panel {

            width: 45%;
            height: 100vh;

            position: absolute;

            top: 0;
            left: 0;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;

            background: transparent;

            /* ANIMAÇÃO DE TROCA */
            transition:
                left 0.9s cubic-bezier(.77, 0, .18, 1);
        }


        /* =====================================
           CARD
        ===================================== */

        .form-card {

            width: 100%;

            max-width: 520px;

            padding: 40px;

            background: #ffffff;

            border-radius: 20px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.35);
        }


        /* =====================================
           TÍTULO
        ===================================== */

        .form-card h2 {

            text-align: center;

            color: #333;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 30px;
        }


        /* =====================================
           LABELS
        ===================================== */

        .form-label {

            color: #444;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 7px;
        }


        /* =====================================
           INPUTS
        ===================================== */

        .form-control {

            min-height: 48px;

            border: 1px solid #ddd;

            border-radius: 8px;

            font-size: 15px;

            padding: 10px 14px;
        }

        .form-control:focus {

            border-color: #0875c9;

            box-shadow:
                0 0 0 0.2rem rgba(8, 117, 201, 0.15);
        }


        /* =====================================
           BOTÃO
        ===================================== */

        .btn-site {

            min-height: 48px;

            border: none;

            border-radius: 8px;

            background: #0875c9;

            color: white;

            font-size: 15px;

            font-weight: 700;

            transition: 0.25s;
        }

        .btn-site:hover {

            background: #005ca8;

            color: white;

            transform: translateY(-2px);
        }


        /* =====================================
           TEXTO INFERIOR
        ===================================== */

        .bottom-text {

            color: #666;

            font-size: 14px;

            text-align: center;
        }

        .bottom-text a {

            color: #0875c9;

            text-decoration: none;
        }

        .bottom-text a:hover {

            text-decoration: underline;
        }


        /* =====================================
           🔄 ANIMAÇÃO DE TROCA DE TELA
        ===================================== */

        .register-layout.change-page .welcome-panel {

            right: 45%;
        }

        .register-layout.change-page .form-panel {

            left: 55%;
        }


        /* =====================================
           SWEET ALERT
        ===================================== */

        .swal-site {

            border-radius: 20px !important;

            padding: 35px !important;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.20) !important;
        }

        .swal-site-title {

            color: #333333 !important;

            font-size: 27px !important;

            font-weight: 700 !important;

            margin-top: 10px !important;
        }

        .swal-site-text {

            color: #666666 !important;

            font-size: 15px !important;

            line-height: 1.6 !important;
        }

        .swal-site-button {

            border-radius: 8px !important;

            padding: 12px 28px !important;

            font-size: 14px !important;

            font-weight: 700 !important;

            box-shadow:
                0 5px 15px rgba(8, 117, 201, 0.25) !important;

            transition: 0.2s !important;
        }


        /* =====================================
           ÍCONE DE SUCESSO AZUL
        ===================================== */

        .swal2-icon.swal2-success {

            border-color: #0875c9 !important;

            color: #0875c9 !important;
        }

        .swal2-icon.swal2-success
        .swal2-success-line-tip,
        .swal2-icon.swal2-success
        .swal2-success-line-long {

            background-color: #0875c9 !important;
        }

        .swal2-icon.swal2-success
        .swal2-success-ring {

            border-color: rgba(8, 117, 201, 0.25) !important;
        }


        /* =====================================
           ÍCONE DE ERRO AZUL
        ===================================== */

        .swal2-icon.swal2-error {

            border-color: #0875c9 !important;

            color: #0875c9 !important;
        }

        .swal2-icon.swal2-error
        .swal2-x-mark-line-left,
        .swal2-icon.swal2-error
        .swal2-x-mark-line-right {

            background-color: #0875c9 !important;
        }


        /* =====================================
           RESPONSIVO
        ===================================== */

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


        /* =====================================
           CELULAR PEQUENO
        ===================================== */

        @media (max-width: 500px) {

            .welcome-panel {

                padding: 40px 20px;
            }

            .welcome-content h1 {

                font-size: 30px;
            }

            .welcome-content p {

                font-size: 15px;
            }

            .form-panel {

                padding: 20px 15px;
            }

            .form-card {

                padding: 30px 20px;

                border-radius: 16px;
            }

            .form-card h2 {

                font-size: 26px;

                margin-bottom: 25px;
            }

        }

    </style>

</head>


<body>


<div class="site-container register-layout">


    <!-- =====================================
         FORMULÁRIO
    ====================================== -->

    <section class="form-panel">

        <div class="form-card">

            <h2>
                CADASTRO DE USUÁRIO
            </h2>


            <form>

                <!-- NOME -->

                <div class="mb-3">

                    <label
                        for="nome"
                        class="form-label">

                        Nome

                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome">

                </div>


                <!-- EMAIL -->

                <div class="mb-3">

                    <label
                        for="email"
                        class="form-label">

                        Email

                    </label>

                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Digite seu email">

                </div>


                <!-- SENHA -->

                <div class="mb-3">

                    <label
                        for="senha"
                        class="form-label">

                        Senha

                    </label>

                    <input
                        type="password"
                        class="form-control"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha">

                </div>


                <!-- DATA -->

                <div class="mb-3">

                    <label
                        for="data_nascimento"
                        class="form-label">

                        Data de nascimento

                    </label>

                    <input
                        type="date"
                        class="form-control"
                        id="data_nascimento"
                        name="data_nascimento">

                </div>


                <!-- CPF -->

                <div class="mb-4">

                    <label
                        for="cpf"
                        class="form-label">

                        CPF

                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="cpf"
                        name="cpf"
                        placeholder="Digite seu CPF">

                </div>


                <!-- BOTÃO -->

                <button
                    id="cadastro_usuario"
                    type="button"
                    class="btn btn-site w-100">

                    Cadastrar

                </button>

            </form>


            <!-- LOGIN -->

            <div class="bottom-text mt-4">

                Já possui uma conta?

                <a
                    href="/login"
                    id="irLogin"
                    class="fw-bold">

                    Entrar

                </a>

            </div>

        </div>

    </section>


    <!-- =====================================
         PAINEL DE BOAS-VINDAS
    ====================================== -->

    <section class="welcome-panel">

        <div class="welcome-content">

            <h1>
                CRIE SUA CONTA
            </h1>

            <p>
                Cadastre-se para ter acesso ao sistema
                e utilizar todas as suas funcionalidades.
            </p>

        </div>

    </section>


</div>


</body>

</html>
