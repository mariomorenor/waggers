<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restablecimiento de @lang('Password') </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h2>Hey!</h2>
    <p>Estás intentando restablecer tu @lang('password')</p>
    <p>Para continuar por favor da click en el siguiente botón</p>
    <a href="{{ route('password.reset', ['token'=>$token]) }}?email={{$email}}" type="button" role="button" class="btn btn-primary">Confirmar Cuenta</a>

    <br>
    <br>

    <p>Si tienes problemas con el botón de arriba, intenta copiar y pegar este enlace en tu navegador: </p>
    <a href="{{ route('password.reset', ['token'=>$token]) }}?email={{$email}}">{{ route('password.reset', ['token'=>$token])}}</a>
</body>
</html>