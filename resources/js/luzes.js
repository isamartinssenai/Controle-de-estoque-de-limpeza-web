$(document).ready(function() {
    $("#ligar_vermelha").click(function() {
        $.ajax({
            url: 'http://10.122.42.148/led/ligarvermelho',
            method: 'POST',
            success: function(response) {
                alert("Luz vermelha ligada com sucesso!");
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error('Erro na requisição:', error);
            }
        });
    });

    $("#desligar_vermelha").click(function() {
        $.ajax({
            url: 'http://10.122.42.148/led/desligarvermelho',
            method: 'POST',
            success: function(response) {
                alert("Luz vermelha desligada com sucesso!");
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error('Erro na requisição:', error);
            }
        });
    });
});