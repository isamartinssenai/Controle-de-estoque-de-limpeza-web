$(document).ready(function () {

    $('#pesquisaProduto').on('input', function () {

        // Pega o texto digitado
        let pesquisa = $(this).val().toLowerCase().trim();

        let encontrou = false;

        // Percorre todos os produtos
        $('.produto-item').each(function () {

            // Pega o nome do produto
            let nomeProduto = $(this)
                .find('.product-name')
                .text()
                .toLowerCase()
                .trim();

            // Verifica se o nome corresponde à pesquisa
            if (nomeProduto.includes(pesquisa)) {

                $(this).show();

                encontrou = true;

            } else {

                $(this).hide();

            }

        });


        // Se não digitou nada,
        // mostra todos os produtos
        if (pesquisa === '') {

            $('.produto-item').show();

            $('#nenhumProdutoPesquisa').hide();

            return;
        }


        // Se não encontrou nenhum produto
        if (!encontrou) {

            $('#nenhumProdutoPesquisa').show();

        } else {

            $('#nenhumProdutoPesquisa').hide();

        }

    });

});