<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmación de Cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h2>Hola!</h2>
    <h4>Gracias por Registrarte en waGGers</h4>
    <p>Para verificar tu cuenta por favor da click en el siguiente botón</p>
    <a href="{{ url('/register/verify/' . $confirmation_code) }}" type="button" role="button" class="btn btn-primary">Confirmar Cuenta</a>
    {{-- <a href="{{ route('verification.verify', ['id'=>1]) }}"></a> --}}
    <br>
    <br>

    <p>Si tienes problemas con el botón de arriba, intenta copiar y pegar este enlace en tu navegador: </p>
    <a href="{{ url('/register/verify/' . $confirmation_code) }}">{{ url('/register/verify/' . $confirmation_code) }}</a>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>