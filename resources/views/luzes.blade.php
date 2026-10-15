<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luzes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/luzes.js'])
</head>
<body>
    <h2 class="text-center">Luzes</h2>
    <div class="container row justify-content-center d-flex">
        <div class="col-3">
            <button class="btn btn-success w-100" id="ligar_verde">Ligar luz verde</button>
            <button class="btn btn-secondary w-100 mt-2" id="desligar_verde">Desligar luz verde</button>
        </div>
        <div class="col-3">
            <button class="btn btn-warning w-100" id="ligar_amarela">Ligar luz amarela</button>
            <button class="btn btn-secondary w-100 mt-2" id="desligar_amarela">Desligar luz amarela</button>
        </div>
        <div class="col-3">
            <button class="btn btn-danger w-100" id="ligar_vermelha">Ligar luz vermelha</button>
            <button class="btn btn-secondary w-100 mt-2" id="desligar_vermelha">Desligar luz vermelha</button>
        </div>
    </div>
</body>
</html>