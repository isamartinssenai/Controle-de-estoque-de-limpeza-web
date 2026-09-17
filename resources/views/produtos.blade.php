<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos - Controle de estoque</title>

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

    <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- JavaScript da página -->

    @vite('resources/js/produto.js')


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
           FUNDO ANIMADO
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


        /* =====================================
           MENU
        ===================================== */

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


        /* =====================================
           BOTÃO SAIR
        ===================================== */

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
           CABEÇALHO
        ===================================== */

        .page-header {

            width: 100%;
            max-width: 1250px;

            margin: 35px auto 0;

            color: white;
        }


        .page-header h1 {

            margin: 0 0 8px;

            font-size: 36px;

            font-weight: 700;
        }


        /* =====================================
           CONTAINER
        ===================================== */

        .products-container {

            width: 100%;
            max-width: 1250px;

            margin: 30px auto 0;

            padding: 25px;

            background: white;

            border-radius: 18px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.15);
        }


        /* =====================================
           TOPO
        ===================================== */

        .products-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 20px;
        }


        .products-title {

            margin: 0;

            font-size: 21px;

            font-weight: 700;

            color: #222;
        }


        .products-count {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 7px 11px;

            border-radius: 20px;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 12px;

            font-weight: 700;
        }


        /* =====================================
           PESQUISA
        ===================================== */

        .search-container {

            width: 100%;

            margin-bottom: 20px;
        }


        .search-box {

            position: relative;

            width: 100%;

            max-width: 500px;

            display: flex;

            align-items: center;
        }


        .search-icon {

            position: absolute;

            left: 15px;

            color: #0875c9;

            font-size: 17px;

            pointer-events: none;
        }


        .search-input {

            width: 100%;

            height: 45px;

            padding: 0 15px 0 45px;

            border: 1px solid #dce8ef;

            border-radius: 9px;

            background: #ffffff;

            color: #333;

            font-size: 14px;

            outline: none;

            transition: 0.2s;
        }


        .search-input::placeholder {

            color: #999;
        }


        .search-input:focus {

            border-color: #0875c9;

            box-shadow:
                0 0 0 3px rgba(8, 117, 201, 0.10);
        }


        /* =====================================
           GRID DE CARDS
        ===================================== */

        .products-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;
        }


        /* =====================================
           ITEM DO PRODUTO
        ===================================== */

        .produto-item {

            min-width: 0;
        }


        /* =====================================
           CARD DO PRODUTO
        ===================================== */

        .product-card {

            background: #ffffff;

            border: 1px solid #e2edf4;

            border-radius: 12px;

            padding: 14px;

            box-shadow:
                0 3px 10px rgba(0, 0, 0, 0.06);

            transition: 0.2s;
        }


        .product-card:hover {

            transform: translateY(-2px);

            box-shadow:
                0 6px 15px rgba(0, 0, 0, 0.10);

            border-color: #cfe8f7;
        }


        /* =====================================
           CABEÇALHO DO CARD
        ===================================== */

        .product-card-header {

            display: flex;

            align-items: center;

            gap: 8px;

            padding-bottom: 10px;

            border-bottom: 1px solid #e8eef2;
        }


        .product-main {

            display: flex;

            align-items: center;

            gap: 10px;

            min-width: 0;
        }


        .product-icon {

            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 17px;

            flex-shrink: 0;
        }


        /* =====================================
           NOME
        ===================================== */

        .product-name {

            font-size: 16px;

            font-weight: 700;

            color: #222;

            margin-bottom: 3px;

            word-break: break-word;
        }


        /* =====================================
           CÓDIGO
        ===================================== */

        .product-code {

            font-size: 11px;

            color: #777;
        }


        /* =====================================
           INFORMAÇÕES
        ===================================== */

        .product-info {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 10px;

            padding: 13px 0;
        }


        .info-item {

            display: flex;

            flex-direction: column;

            gap: 3px;

            min-width: 0;
        }


        .info-label {

            font-size: 10px;

            color: #888;

            font-weight: 700;

            text-transform: uppercase;
        }


        .info-value {

            font-size: 13px;

            color: #333;

            font-weight: 600;

            word-break: break-word;
        }


        /* =====================================
           OBSERVAÇÃO
        ===================================== */

        .observation {

            padding: 9px;

            background: #f7fbfe;

            border-radius: 7px;

            margin-bottom: 11px;
        }


        .observation .info-label {

            margin-bottom: 4px;
        }


        .observation .info-value {

            font-weight: 400;

            line-height: 1.4;
        }


        /* =====================================
           AÇÕES
        ===================================== */

        .card-footer {

            display: flex;

            justify-content: flex-end;

            gap: 6px;

            padding-top: 10px;

            border-top: 1px solid #e8eef2;
        }


        .btn-action {

            width: 32px;
            height: 32px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 6px;

            border: none;

            text-decoration: none;

            transition: 0.2s;
        }


        /* =====================================
           EDITAR
        ===================================== */

        .btn-edit {

            background: #e5f4fd;

            color: #0875c9;
        }


        .btn-edit:hover {

            background: #0875c9;

            color: white;
        }


        /* =====================================
           EXCLUIR
        ===================================== */

        .btn-delete {

            background: #f1f1f1;

            color: #666;
        }


        .btn-delete:hover {

            background: #555;

            color: white;
        }


        /* =====================================
           CADASTRAR
        ===================================== */

        .btn-cadastrar {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 10px 16px;

            border-radius: 8px;

            background: #0875c9;

            color: white;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: 0.2s;
        }


        .btn-cadastrar:hover {

            background: #005ca8;

            color: white;

            transform: translateY(-1px);
        }


        /* =====================================
           SEM PRODUTOS
        ===================================== */

        .empty {

            padding: 50px 20px;

            text-align: center;

            color: #777;
        }


        .empty-icon {

            width: 60px;
            height: 60px;

            margin: 0 auto 15px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 25px;
        }


        .empty h3 {

            margin-bottom: 8px;

            font-size: 19px;

            color: #333;
        }


        .empty p {

            margin-bottom: 18px;

            font-size: 13px;
        }


        /* =====================================
           NENHUM RESULTADO
        ===================================== */

        .search-empty {

            width: 100%;

            padding: 45px 20px;

            text-align: center;

            color: #777;
        }


        .search-empty-icon {

            width: 60px;
            height: 60px;

            margin: 0 auto 15px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #e5f4fd;

            color: #0875c9;

            font-size: 25px;
        }


        .search-empty h3 {

            margin-bottom: 8px;

            font-size: 19px;

            color: #333;
        }


        .search-empty p {

            margin: 0;

            font-size: 13px;
        }


        /* =====================================
           RESPONSIVO
        ===================================== */

        @media (max-width: 1000px) {

            .products-grid {

                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 900px) {

            .menu {

                display: none;
            }


            .products-container {

                padding: 20px;
            }


            .products-top {

                align-items: flex-start;

                flex-direction: column;
            }


            .search-box {

                max-width: 100%;
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


            .page-header {

                margin-top: 25px;
            }


            .page-header h1 {

                font-size: 30px;
            }


            .products-container {

                margin-top: 25px;

                padding: 15px;

                border-radius: 15px;
            }


            .product-info {

                grid-template-columns: 1fr;

                gap: 8px;
            }


            .product-card {

                padding: 13px;
            }


            .product-name {

                font-size: 16px;
            }


            .info-value {

                font-size: 13px;
            }


            .search-input {

                height: 43px;

                font-size: 13px;
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


        <a href="/login" class="btn-sair">
            Sair
        </a>

    </header>


    <!-- =====================================
         CABEÇALHO
    ====================================== -->

    <div class="page-header">

        <h1>
            Produtos cadastrados
        </h1>

    </div>


    <!-- =====================================
         LISTA
    ====================================== -->

    <section class="products-container">


        <!-- TOPO -->

        <div class="products-top">

            <h2 class="products-title">
                Lista de produtos
            </h2>


            <div>

                <span class="products-count">

                    <i class="bi bi-box-seam"></i>

                    {{ isset($produtos) ? $produtos->count() : 0 }}

                    produtos

                </span>


                <a
                    href="/cadastro_estoque"
                    class="btn-cadastrar ms-2"
                >

                    <i class="bi bi-plus-lg"></i>

                    Cadastrar produto

                </a>

            </div>

        </div>


        <!-- =====================================
             PESQUISA
        ====================================== -->

        <div class="search-container">

            <div class="search-box">

                <i class="bi bi-search search-icon"></i>

                <input
                    type="text"
                    id="pesquisaProduto"
                    class="search-input"
                    placeholder="Pesquisar produto pelo nome..."
                    autocomplete="off"
                >

            </div>

        </div>


        @if(isset($produtos) && $produtos->count() > 0)


            <!-- =====================================
                 CARDS
            ====================================== -->

            <div class="products-grid">


                @foreach($produtos as $produto)


                    <div class="produto-item">


                        <div class="product-card">


                            <!-- CABEÇALHO -->

                            <div class="product-card-header">

                                <div class="product-main">


                                    <div class="product-icon">

                                        <i class="bi bi-box-seam"></i>

                                    </div>


                                    <div>

                                        <div class="product-name">

                                            {{ $produto->nome_produto }}

                                        </div>


                                        <div class="product-code">

                                            Código:

                                            {{ $produto->codigo_produto }}

                                        </div>

                                    </div>


                                </div>

                            </div>


                            <!-- INFORMAÇÕES -->

                            <div class="product-info">


                                <!-- CATEGORIA -->

                                <div class="info-item">

                                    <span class="info-label">
                                        Categoria
                                    </span>

                                    <span class="info-value">

                                        {{ $produto->categoria }}

                                    </span>

                                </div>


                                <!-- MARCA -->

                                <div class="info-item">

                                    <span class="info-label">
                                        Marca
                                    </span>

                                    <span class="info-value">

                                        {{ $produto->marca ?? 'Não informada' }}

                                    </span>

                                </div>


                                <!-- UNIDADE -->

                                <div class="info-item">

                                    <span class="info-label">
                                        Unidade
                                    </span>

                                    <span class="info-value">

                                        {{ $produto->unidade }}

                                    </span>

                                </div>


                                <!-- VALIDADE -->

                                <div class="info-item">

                                    <span class="info-label">
                                        Data de validade
                                    </span>

                                    <span class="info-value">

                                        {{ $produto->data_validade ?? 'Não informada' }}

                                    </span>

                                </div>


                                <!-- FORNECEDOR -->

                                <div class="info-item">

                                    <span class="info-label">
                                        Fornecedor
                                    </span>

                                    <span class="info-value">

                                        {{ $produto->fornecedor ?? 'Não informado' }}

                                    </span>

                                </div>


                            </div>


                            <!-- OBSERVAÇÃO -->

                            <div class="observation">

                                <div class="info-label">
                                    Observação
                                </div>

                                <div class="info-value">

                                    {{ $produto->observacao ?? 'Nenhuma observação' }}

                                </div>

                            </div>


                            <!-- AÇÕES -->

                            <div class="card-footer">


                                <a
                                    href="/editar_produto/{{ $produto->id }}"
                                    class="btn-action btn-edit"
                                    title="Editar"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a
                                    href="/excluir_produto/{{ $produto->id }}"
                                    class="btn-action btn-delete"
                                    title="Excluir"
                                >

                                    <i class="bi bi-trash"></i>

                                </a>


                            </div>


                        </div>


                    </div>


                @endforeach


            </div>


            <!-- =====================================
                 MENSAGEM DE PESQUISA
            ====================================== -->

            <div
                id="nenhumProdutoPesquisa"
                class="search-empty"
                style="display: none;"
            >

                <div class="search-empty-icon">

                    <i class="bi bi-search"></i>

                </div>


                <h3>
                    Nenhum produto encontrado
                </h3>


                <p>
                    Não encontramos nenhum produto com esse nome.
                </p>

            </div>


        @else


            <!-- =====================================
                 NENHUM PRODUTO
            ====================================== -->

            <div class="empty">


                <div class="empty-icon">

                    <i class="bi bi-box-seam"></i>

                </div>


                <h3>
                    Nenhum produto cadastrado
                </h3>


                <p>
                    Cadastre um produto para começar a organizar seu estoque.
                </p>


                <a
                    href="/cadastro_estoque"
                    class="btn-cadastrar"
                >

                    <i class="bi bi-plus-lg"></i>

                    Cadastrar primeiro produto

                </a>


            </div>


        @endif


    </section>


</div>

</body>

</html>