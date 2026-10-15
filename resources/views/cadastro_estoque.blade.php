<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Estoque</title>

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
        crossorigin="anonymous"
    ></script>

    <!-- jQuery -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>

    <!-- SweetAlert2 -->
    <script
        src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- JavaScript da página -->
    @vite('resources/js/cadastro_estoque.js')


    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }


        /* =====================================
           FUNDO
        ====================================== */

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
           FUNDO DA PÁGINA
        ====================================== */

        .page {

            width: 100%;

            min-height: 100vh;

            padding: 35px 5%;

            display: flex;

            align-items: center;

            justify-content: center;

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
           CONTAINER
        ====================================== */

        .container-cadastro {

            width: 100%;

            max-width: 1150px;

            min-height: 650px;

            display: flex;

            overflow: hidden;

            border-radius: 22px;

            background: white;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.20);
        }


        /* =====================================
           LADO CADASTRO DE ESTOQUE
           AZUL SÓLIDO
        ====================================== */

        .lado-azul {

            width: 38%;

            padding: 55px;

            display: flex;

            align-items: center;

            color: white;

            background: #06285c;
        }


        .conteudo-azul {

            width: 100%;
        }


        /* =====================================
           ÍCONE
        ====================================== */

        .icone-produto {

            width: 70px;

            height: 70px;

            margin-bottom: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 16px;

            background: rgba(255, 255, 255, 0.15);

            font-size: 35px;
        }


        /* =====================================
           TÍTULO
        ====================================== */

        .lado-azul h1 {

            margin-bottom: 20px;

            font-size: 42px;

            font-weight: 700;

            line-height: 1.1;
        }


        .lado-azul h1 span {

            color: #bde7ff;
        }


        /* =====================================
           TEXTO
        ====================================== */

        .lado-azul p {

            margin-bottom: 30px;

            color: #e8f7ff;

            font-size: 16px;

            line-height: 1.7;
        }


        /* =====================================
           INFORMAÇÕES
        ====================================== */

        .info-box {

            padding: 18px;

            border-radius: 12px;

            background: rgba(255, 255, 255, 0.12);
        }


        .info-box div {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 13px;

            font-size: 14px;
        }


        .info-box div:last-child {

            margin-bottom: 0;
        }


        .info-box i {

            color: #bde7ff;

            font-size: 18px;
        }


        /* =====================================
           LADO DO FORMULÁRIO
        ====================================== */

        .lado-form {

            width: 62%;

            padding: 45px 55px;

            background: white;
        }


        /* =====================================
           CABEÇALHO
        ====================================== */

        .form-header {

            margin-bottom: 28px;
        }


        .form-header h2 {

            margin: 0 0 8px;

            color: #222;

            font-size: 30px;

            font-weight: 700;
        }


        .form-header p {

            margin: 0;

            color: #777;

            font-size: 14px;
        }


        .linha {

            width: 50px;

            height: 4px;

            margin-top: 15px;

            border-radius: 5px;

            background: #0875c9;
        }


        /* =====================================
           LABEL
        ====================================== */

        .form-label {

            margin-bottom: 7px;

            color: #333;

            font-size: 14px;

            font-weight: 600;
        }


        /* =====================================
           CAMPOS
        ====================================== */

        .form-control,
        .form-select {

            min-height: 46px;

            border: 1px solid #d9d9d9;

            border-radius: 8px;

            font-size: 14px;
        }


        .form-control:focus,
        .form-select:focus {

            border-color: #0875c9;

            box-shadow:
                0 0 0 0.2rem rgba(8, 117, 201, 0.12);
        }


        /* =====================================
           OBSERVAÇÕES
        ====================================== */

        textarea.form-control {

            min-height: 95px;

            resize: vertical;
        }


        /* =====================================
           BOTÕES
        ====================================== */

        .botoes {

            display: flex;

            justify-content: flex-end;

            gap: 12px;

            margin-top: 25px;
        }


        .btn-cancelar {

            min-height: 46px;

            padding: 0 25px;

            border: 1px solid #ddd;

            border-radius: 8px;

            background: white;

            color: #555;

            font-weight: 600;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: 0.2s;
        }


        .btn-cancelar:hover {

            background: #f5f5f5;

            color: #333;
        }


        .btn-salvar {

            min-height: 46px;

            padding: 0 28px;

            border: none;

            border-radius: 8px;

            background: #0875c9;

            color: white;

            font-weight: 700;

            transition: 0.2s;
        }


        .btn-salvar:hover {

            background: #005ca8;

            color: white;

            transform: translateY(-2px);
        }


        /* =====================================
           RESPONSIVO
        ====================================== */

        @media (max-width: 900px) {

            .container-cadastro {

                flex-direction: column;
            }


            .lado-azul,
            .lado-form {

                width: 100%;
            }


            .lado-azul {

                padding: 40px;
            }


            .lado-azul h1 {

                font-size: 35px;
            }


            .lado-form {

                padding: 40px;
            }

        }


        @media (max-width: 600px) {

            .page {

                padding: 15px;
            }


            .lado-azul {

                padding: 35px 25px;
            }


            .lado-form {

                padding: 30px 25px;
            }


            .lado-azul h1 {

                font-size: 30px;
            }


            .botoes {

                flex-direction: column;
            }


            .btn-cancelar,
            .btn-salvar {

                width: 100%;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <div class="container-cadastro">


        <!-- =====================================
             LADO AZUL
        ====================================== -->

        <section class="lado-azul">


            <div class="conteudo-azul">


                <div class="icone-produto">

                    <i class="bi bi-box-seam"></i>

                </div>


                <h1>

                    Cadastro de

                    <span>Estoque</span>

                </h1>


                <p>

                    Cadastre os produtos de limpeza
                    para manter o estoque organizado
                    e facilitar o acompanhamento
                    dos materiais.

                </p>


                <!-- INFORMAÇÕES -->

                <div class="info-box">


                    <div>

                        <i class="bi bi-check-circle-fill"></i>

                        Controle dos produtos

                    </div>


                    <div>

                        <i class="bi bi-box-seam"></i>

                        Controle da quantidade

                    </div>


                    <div>

                        <i class="bi bi-exclamation-triangle"></i>

                        Alerta de estoque baixo

                    </div>


                    <div>

                        <i class="bi bi-calendar-check"></i>

                        Acompanhamento da validade

                    </div>


                    <div>

                        <i class="bi bi-building"></i>

                        Registro dos fornecedores

                    </div>


                </div>


            </div>

        </section>


        <!-- =====================================
             FORMULÁRIO
        ====================================== -->

        <section class="lado-form">


            <div class="form-header">

                <h2>
                    Cadastrar produto
                </h2>

                <p>
                    Preencha os dados do produto de limpeza.
                </p>

                <div class="linha"></div>

            </div>


            <form action="#" method="post">


                <div class="row g-3">


                    <!-- CÓDIGO -->

                    <div class="col-md-4">

                        <label
                            for="codigo_produto"
                            class="form-label"
                        >
                            Cód. do produto
                        </label>

                        <input
                            type="text"
                            id="codigo_produto"
                            name="codigo"
                            class="form-control"
                            placeholder="Ex.: 001"
                            required
                        >

                    </div>


                    <!-- NOME -->

                    <div class="col-md-8">

                        <label
                            for="nome_produto"
                            class="form-label"
                        >
                            Nome do produto
                        </label>

                        <input
                            type="text"
                            id="nome_produto"
                            name="nome"
                            class="form-control"
                            placeholder="Ex.: Detergente"
                            required
                        >

                    </div>


                    <!-- CATEGORIA -->

                    <div class="col-md-6">

                        <label
                            for="categoria"
                            class="form-label"
                        >
                            Categoria
                        </label>

                        <select
                            id="categoria"
                            name="categoria"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Selecione uma categoria
                            </option>

                            <option value="limpeza-geral">
                                Limpeza geral
                            </option>

                            <option value="higiene">
                                Higiene
                            </option>

                            <option value="desinfeccao">
                                Desinfecção
                            </option>

                            <option value="outros">
                                Outros
                            </option>

                        </select>

                    </div>


                    <!-- MARCA -->

                    <div class="col-md-6">

                        <label
                            for="marca"
                            class="form-label"
                        >
                            Marca
                        </label>

                        <input
                            type="text"
                            id="marca"
                            name="marca"
                            class="form-control"
                            placeholder="Ex.: Veja"
                            required
                        >

                    </div>


                    <!-- UNIDADE -->

                    <div class="col-md-6">

                        <label
                            for="unidade"
                            class="form-label"
                        >
                            Unidade
                        </label>

                        <select
                            id="unidade"
                            name="unidade"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Selecione a unidade
                            </option>

                            <option value="litros">
                                Litros (L)
                            </option>

                            <option value="kg">
                                Quilogramas (kg)
                            </option>

                            <option value="ml">
                                Mililitros (ml)
                            </option>

                            <option value="gramas">
                                Gramas (g)
                            </option>

                        </select>

                    </div>


                    <!-- VALIDADE -->

                    <div class="col-md-6">

                        <label
                            for="data_validade"
                            class="form-label"
                        >
                            Data de validade
                        </label>

                        <input
                            type="date"
                            id="data_validade"
                            name="data_validade"
                            class="form-control"
                            required
                        >

                    </div>


                    <!-- FORNECEDOR -->

                    <div class="col-12">

                        <label
                            for="fornecedor"
                            class="form-label"
                        >
                            Fornecedor
                        </label>

                        <input
                            type="text"
                            id="fornecedor"
                            name="fornecedor"
                            class="form-control"
                            placeholder="Nome do fornecedor"
                            required
                        >

                    </div>


                    <!-- OBSERVAÇÕES -->

                    <div class="col-12">

                        <label
                            for="observacao"
                            class="form-label"
                        >
                            Observações
                        </label>

                        <textarea
                            id="observacao"
                            name="observacao"
                            class="form-control"
                            placeholder="Digite alguma observação sobre o produto..."
                        ></textarea>

                    </div>


                </div>


                <!-- =====================================
                     BOTÕES
                ====================================== -->

                <div class="botoes">


                    <a
                        href="/produto"
                        class="btn-cancelar"
                    >
                        Cancelar
                    </a>


                    <button
                        type="button"
                        class="btn-salvar"
                        id="cadastro_estoque"
                    >

                        <i class="bi bi-check-lg"></i>

                        Cadastrar produto

                    </button>


                </div>


            </form>


        </section>


    </div>

</div>


</body>

</html>