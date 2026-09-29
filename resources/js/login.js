$(document).ready(function () {

    $("#entrar").click(function () {

        $.ajax({

            url: 'api/login',
            method: 'POST',

            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },

            success: function (response) {

                console.log(response);

                // LOGIN REALIZADO COM SUCESSO
                if (response['erro'] == 'n') {

                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Login realizado com sucesso!',
                        confirmButtonText: 'Continuar',
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
                            window.location.href = '/inicio';
                        }

                    });

                    // alert("Token: " + response['token']);
                    $.cookie("token_usuario", response['token'], { expires: 7, path:'/'});

                    setTimeout(function () {
                        window.location.href = '/inicio';
                    }, 2000);

                } else {

                    // ERRO NO LOGIN
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
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

            },

            // ERRO DE CONEXÃO COM O LARAVEL
            error: function (xhr) {

                console.log(xhr);

                Swal.fire({
                    icon: 'error',
                    title: 'Ops!',
                    text: 'Não foi possível conectar com o servidor.',
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

            }

        });

    });

});
