<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Início - Controle de estoque</title>

    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        /* =====================================
           FUNDO
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

            color: #222;
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
           PÁGINA
        ===================================== */

        .page {
            min-height: 100vh;

            padding: 25px 5% 50px;

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
           NAVBAR
        ===================================== */

        .navbar {
            width: 100%;
            max-width: 1250px;

            margin: auto;

            padding: 18px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: white;

            border-radius: 15px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.12);
        }

        /* LOGO */

        .logo {
            display: flex;
            align-items: center;

            gap: 9px;

            color: #222;

            text-decoration: none;

            font-size: 24px;

            font-weight: 700;
        }

        .logo-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 3px solid #0875c9;

            border-radius: 7px;

            color: #0875c9;

            font-size: 17px;
        }

        /* MENU */

        .menu {
            display: flex;
            align-items: center;

            gap: 35px;
        }

        .menu a {
            color: #555;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            transition: 0.2s;
        }

        .menu a:hover {
            color: #0875c9;
        }

        /* BOTÃO SAIR */

        .btn-sair {
            padding: 11px 25px;

            border-radius: 7px;

            background: #0875c9;

            color: white;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            transition: 0.2s;
        }

        .btn-sair:hover {
            background: #005ca8;

            color: white;
        }

        /* =====================================
           HERO
        ===================================== */

        .hero {
            width: 100%;
            max-width: 1250px;

            min-height: 450px;

            margin: 35px auto 0;

            display: flex;

            overflow: hidden;

            border-radius: 22px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* ÁREA AZUL */

        .hero-blue {
            width: 100%;

            padding: 65px;

            display: flex;

            align-items: center;

            background: transparent;

            color: white;
        }

        .hero-content {
            max-width: 650px;
        }

        .welcome {
            display: inline-block;

            margin-bottom: 18px;

            padding: 8px 15px;

            border-radius: 20px;

            background: rgba(255, 255, 255, 0.16);

            font-size: 13px;

            font-weight: 600;
        }

        .hero h1 {
            margin: 0 0 20px;

            font-size: 53px;

            line-height: 1.05;

            font-weight: 700;
        }

        .hero h1 span {
            color: #bde7ff;
        }

        .hero p {
            max-width: 570px;

            margin-bottom: 30px;

            font-size: 17px;

            line-height: 1.7;

            color: #edf8ff;
        }

        /* BOTÃO ESTOQUE */

        .btn-estoque {
            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding: 14px 28px;

            border-radius: 8px;

            background: white;

            color: #0875c9;

            text-decoration: none;

            font-size: 15px;

            font-weight: 700;

            transition: 0.25s;
        }

        .btn-estoque:hover {
            background: #eaf6fd;

            color: #005ca8;

            transform: translateY(-2px);
        }

        /* =====================================
           ESTATÍSTICAS
        ===================================== */

        .statistics {
            width: 100%;
            max-width: 1250px;

            margin: 30px auto 0;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;
        }

        .stat-card {
            padding: 25px;

            background: white;

            border-radius: 15px;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.10);

            display: flex;

            align-items: center;

            gap: 15px;
        }

        .stat-icon {
            width: 50px;
            height: 50px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 10px;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 22px;
        }

        .stat-card h3 {
            margin: 0;

            font-size: 27px;

            font-weight: 700;

            color: #222;
        }

        .stat-card p {
            margin: 2px 0 0;

            color: #777;

            font-size: 12px;
        }

        /* =====================================
           FUNCIONALIDADES
        ===================================== */

        .section {
            width: 100%;
            max-width: 1250px;

            margin: 45px auto 0;
        }

        .section-title {
            margin-bottom: 20px;

            color: white;

            font-size: 28px;

            font-weight: 700;
        }

        .section-subtitle {
            margin-top: -12px;

            margin-bottom: 25px;

            color: #dff2ff;

            font-size: 14px;
        }

        .feature-card {
            height: 100%;

            padding: 28px;

            background: white;

            border-radius: 15px;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.10);

            transition: 0.25s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 52px;
            height: 52px;

            margin-bottom: 18px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background: #0875c9;

            color: white;

            font-size: 23px;
        }

        .feature-card h3 {
            margin-bottom: 10px;

            font-size: 18px;

            font-weight: 700;
        }

        .feature-card p {
            margin: 0;

            color: #777;

            font-size: 14px;

            line-height: 1.6;
        }

        /* =====================================
           ALERTA
        ===================================== */

        .alert-stock {
            margin-top: 25px;

            padding: 18px 22px;

            display: flex;

            align-items: center;

            gap: 15px;

            border-radius: 12px;

            background: white;

            color: #333;
        }

        .alert-icon {
            width: 45px;
            height: 45px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 20px;
        }

        .alert-stock strong {
            display: block;

            margin-bottom: 3px;
        }

        .alert-stock span {
            color: #777;

            font-size: 13px;
        }

        /* =====================================
           RESPONSIVO
        ===================================== */

        @media (max-width: 900px) {

            .menu {
                display: none;
            }

            .hero {
                flex-direction: column;
            }

            .hero-blue {
                width: 100%;
            }

            .hero-blue {
                padding: 50px 35px;
            }

            .hero h1 {
                font-size: 43px;
            }

            .statistics {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }

        @media (max-width: 550px) {

            .page {
                padding: 15px;
            }

            .navbar {
                padding: 15px;
            }

            .logo {
                font-size: 20px;
            }

            .btn-sair {
                padding: 9px 17px;
            }

            .hero {
                margin-top: 20px;
            }

            .hero-blue {
                padding: 40px 25px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero p {
                font-size: 15px;
            }

            .statistics {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="page">

    <!-- =====================================
         MENU
    ====================================== -->

    <header class="navbar">

        <a href="/inicio" class="logo">

            <span class="logo-icon">
                ✓
            </span>

            Controle de estoque

        </a>

        <nav class="menu">

            <a href="/inicio">
                Início
            </a>

            <a href="/cadastro_estoque">
                Estoque
            </a>

            <a href="/produto">
                Produtos
            </a>

        </nav>

        <!-- SAIR -->

        <a href="/login" class="btn-sair">
            Sair
        </a>

    </header>


    <!-- =====================================
         BEM-VINDO
    ====================================== -->

    <section class="hero">

        <!-- ÁREA AZUL -->

        <div class="hero-blue">

            <div class="hero-content">

                <div class="welcome">

                    <i class="bi bi-stars"></i>

                    Bem-vindo!

                </div>

                <h1>

                    Controle seu

                    <span>estoque</span>

                    de forma simples.

                </h1>

                <p>

                    Organize os produtos de limpeza,

                    acompanhe as quantidades disponíveis

                    e saiba quando é necessário realizar

                    uma reposição.

                </p>

                <!-- ACESSAR ESTOQUE -->

                <a
                    href="/cadastro_estoque"
                    class="btn-estoque"
                >

                    Acessar Estoque

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>


    <!-- =====================================
         FUNCIONALIDADES
    ====================================== -->

    <section class="section">

        <h2 class="section-title">

            Funcionalidades

        </h2>

        <p class="section-subtitle">

            Tudo para facilitar o controle dos produtos de limpeza.

        </p>


        <div class="row g-4">

            <!-- CARD 1 -->

            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">

                        <i class="bi bi-box-seam"></i>

                    </div>

                    <h3>

                        Controle de estoque

                    </h3>

                    <p>

                        Acompanhe a quantidade dos

                        produtos disponíveis e mantenha

                        o estoque sempre organizado.

                    </p>

                </div>

            </div>


            <!-- CARD 2 -->

            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">

                        <i class="bi bi-bell"></i>

                    </div>

                    <h3>

                        Alertas de estoque

                    </h3>

                    <p>

                        Identifique rapidamente quais

                        produtos estão acabando e precisam

                        ser repostos.

                    </p>

                </div>

            </div>


            <!-- CARD 3 -->

            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">

                        <i class="bi bi-calendar-check"></i>

                    </div>

                    <h3>

                        Controle de validade

                    </h3>

                    <p>

                        Consulte as datas de validade

                        dos produtos e evite manter

                        itens vencidos no estoque.

                    </p>

                </div>

            </div>

        </div>


        <!-- ALERTA -->

        <div class="alert-stock">

            <div class="alert-icon">

                <i class="bi bi-info-circle"></i>

            </div>

            <div>

                <strong>

                    Controle mais fácil e organizado

                </strong>

                <span>

                    O sistema ajuda a reduzir a falta de produtos

                    e facilita o trabalho das funcionárias.

                </span>

            </div>

        </div>

    </section>

</div>

</body>

</html>