$(document).ready(function () {

    $('#cadastro_usuario').click(function () {


        let nome = $('#nome').val();
        let email = $('#email').val();
        let senha = $('#senha').val();
        let data_nascimento = $('#data_nascimento').val();
        let cpf = $('#cpf').val();



        if (senha.length < 5) {

            Swal.fire({

                icon: 'warning',

                title: 'Senha muito curta!',

                text: 'Sua senha precisa ter pelo menos 5 caracteres.',

                confirmButtonText: 'Entendi',

                confirmButtonColor: '#0875c9',

                background: '#ffffff',

                color: '#333333',

                width: '420px',

                customClass: {

                    popup: 'swal-site',

                    icon: 'swal-site-icon-warning',

                    title: 'swal-site-title',

                    htmlContainer: 'swal-site-text',

                    confirmButton: 'swal-site-button'

                }

            });

            return;
        }


        let cpfNumeros = cpf.replace(/\D/g, '');


        if (cpfNumeros.length > 11) {

            Swal.fire({

                icon: 'warning',

                title: 'CPF inválido!',

                text: 'O CPF não pode ter mais de 11 dígitos.',

                confirmButtonText: 'Entendi',

                confirmButtonColor: '#0875c9',

                background: '#ffffff',

                color: '#333333',

                width: '420px',

                customClass: {

                    popup: 'swal-site',

                    icon: 'swal-site-icon-warning',

                    title: 'swal-site-title',

                    htmlContainer: 'swal-site-text',

                    confirmButton: 'swal-site-button'

                }

            });

            return;
        }



        $('#cadastro_usuario')
            .prop('disabled', true)
            .html(
                '<span class="spinner-border spinner-border-sm me-2"></span>Cadastrando...'
            );



        $.ajax({

            url: 'api/cadastra_usuario',

            method: 'POST',

            data: {

                nome: nome,

                email: email,

                senha: senha,

                data_nascimento: data_nascimento,

                cpf: cpf

            },


            success: function (response) {

                console.log(response);

                console.log(response['erro']);


                if (response['erro'] == 'n') {

                    Swal.fire({

                        icon: 'success',

                        title: 'Cadastro realizado!',

                        text: 'Seu usuário foi cadastrado com sucesso.',

                        confirmButtonText: 'Ir para o login',

                        confirmButtonColor: '#0875c9',

                        background: '#ffffff',

                        color: '#333333',

                        allowOutsideClick: false,

                        width: '450px',

                        customClass: {

                            popup: 'swal-site',

                            icon: 'swal-site-icon',

                            title: 'swal-site-title',

                            htmlContainer: 'swal-site-text',

                            confirmButton: 'swal-site-button'

                        }

                    }).then((result) => {

                        if (result.isConfirmed) {

                            window.location.href = '/login';

                        }

                    });


                } else {

                    Swal.fire({

                        icon: 'error',

                        title: 'Não foi possível cadastrar',

                        text: response['mensagem'],

                        confirmButtonText: 'Entendi',

                        confirmButtonColor: '#0875c9',

                        background: '#ffffff',

                        color: '#333333',

                        width: '450px',

                        customClass: {

                            popup: 'swal-site',

                            icon: 'swal-site-icon-error',

                            title: 'swal-site-title',

                            htmlContainer: 'swal-site-text',

                            confirmButton: 'swal-site-button'

                        }

                    });

                }



                $('#cadastro_usuario')
                    .prop('disabled', false)
                    .html('Cadastrar');

            },



            error: function (xhr) {

                console.log(xhr);

                Swal.fire({

                    icon: 'error',

                    title: 'Ops!',

                    text: 'Ocorreu um erro ao tentar realizar o cadastro.',

                    confirmButtonText: 'Tentar novamente',

                    confirmButtonColor: '#0875c9',

                    background: '#ffffff',

                    color: '#333333',

                    width: '450px',

                    customClass: {

                        popup: 'swal-site',

                        icon: 'swal-site-icon-error',

                        title: 'swal-site-title',

                        htmlContainer: 'swal-site-text',

                        confirmButton: 'swal-site-button'

                    }

                });



                $('#cadastro_usuario')
                    .prop('disabled', false)
                    .html('Cadastrar');

            }

        });

    });

});