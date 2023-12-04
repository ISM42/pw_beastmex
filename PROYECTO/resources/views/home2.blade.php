<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .center-content {
            text-align: center;
        }

        img {
            width: 150px; /* Ajusta el tamaño según tus necesidades */
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <img src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="Logo">
        <form action="{{ route('inicio') }}" method="POST">
            @csrf
            <a href="{{route('login')}}" class="btn btn-primary" type="submit">Iniciar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
