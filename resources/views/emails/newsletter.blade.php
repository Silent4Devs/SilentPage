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
            <td style="text-align: center;">
                <img src="https://silent4business.com/storage/images/logo-white.png" alt="Logo S4B">
            </td>
        </tr>
        <tr class="tr-content">
            <td>
                <span class="title-terd"> Newsletter</span>

                <p style="text-align: center;">
                    Suscripción a newsletter:
                </p>
                <p style="text-align: center; margin-top: 40px;">
                    <strong> {{ $correo }} </strong>
                </p>
            </td>
        </tr>
        <tr class="tr-footer">
            <td style="text-align: right;">
                {{Carbon\Carbon::now()->format('d / m / Y')}}
            </td>
        </tr>
    </table>
</body>

</html>
