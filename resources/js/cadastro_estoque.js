$(document).ready(function () {

    $('#cadastro_estoque').click(function () {

        $.ajax({

            url: 'api/cadastra_estoque',

            method: 'POST',

            data: {

                codigo_produto: $('#codigo_produto').val(),

                nome_produto: $('#nome_produto').val(),

                categoria: $('#categoria').val(),

                marca: $('#marca').val(),

                unidade: $('#unidade').val(),

                quantidade: $('#quantidade').val(),

                estoque_minimo: $('#estoque_minimo').val(),

                data_validade: $('#data_validade').val(),

                fornecedor: $('#fornecedor').val(),

                observacao: $('#observacao').val(),

            },


            success: function (response) {

                console.log(response);

                console.log(response['erro']);


                if (response['erro'] == 'n') {

                    Swal.fire({

                        icon: 'success',

                        title: 'Sucesso!',

                        text: 'Produto cadastrado com sucesso!',

                        confirmButtonText: 'OK'

                    }).then(() => {

                        window.location.href = '/produto';

                    });

                }


                else {

                    Swal.fire({

                        icon: 'error',

                        title: 'Erro!',

                        text: response['message']

                    });

                }

            },


            error: function (xhr) {

                console.log(xhr);

                console.log(xhr.responseText);


                Swal.fire({

                    icon: 'error',

                    title: 'Erro!',

                    text: 'Não foi possível cadastrar o produto.'

                });

            }

        });

    });

});