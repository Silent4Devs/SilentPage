<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="supported-color-schemes" content="light dark">

    <title>Document</title>

    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-spacing: 0;
            margin: auto;
            margin-top: 100px;
        }

        .content {
            width: 500px;
            max-width: 500px;
            min-width: 500px;
            background-color: #f3f3f3;
            color: #444;
        }

        .tr-header td,
        .tr-footer td {
            background-color: #2375a6;
            color: #fff;
            padding: 20px;
            vertical-align: middle;
        }

        .tr-header td *,
        .tr-header td * {
            vertical-align: middle;
        }

        .tr-header img {
            height: 50px;
            margin-right: 15px;
            filter: grayscale(100%) invert(50%) brightness(500%);
        }

        .tr-content td {
            padding: 20px;
        }

        h3 {
            text-align: center;
            margin-bottom: 70px;
        }
    </style>
</head>

<body>
    <table class="content">
        <tr class="tr-header">
            <td>
                <img src="https://tabantaj.silent4business.com/storage/images/Logo%20silent-color.png" alt="Logo S4B">
                Portal &nbsp;<strong> Silent4Business</strong>
            </td>
        </tr>
        <tr class="tr-content">
            <td>
                <span class="title-terd"> Nuevo Talento </span>

                <p>
                    Nombre: <strong>{{ $data['nombre'] }}</strong>
                </p>
                <p>
                    Perfil: <strong>{{ $data['tipo'] }}</strong>
                </p>
                <p>
                    Email: <strong>{{ $data['email'] }}</strong>
                </p>
                <p>
                    Teléfono: <strong>{{ $data['telefono'] }}</strong>
                </p>
            </td>
        </tr>
        <tr class="tr-footer">
            <td>
                2023
            </td>
        </tr>
    </table>
</body>

</html>
