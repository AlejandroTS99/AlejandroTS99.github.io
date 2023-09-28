<?php

$name = $_POST['name']
$email = $_POST['email']
$asunto = $_POST['asunto']
$phone = $_POST['phone']
$user_message = $_POST['message']

$recipient = "alejandrotallante@gmail.com";

$subject = "Nueva Solicitud de Alquiler - Alquiler de Instrumentos Musicales Infrecuentes";

$message = "Nombre:".$name."\r\n
Email:".$email."\r\n
Teléfono:".$phone."\r\n\r\n
Asunto:".$asunto."\r\n".$user_message;

$mail_header = "From:".$name."<".$email.">\r\n";

mail($recipient, $subject, $message, $mail_header)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3ef2fdc583.js" crossorigin="anonymous"></script>
    <title>Información y Contacto</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../index_carrousel_styles.css">
    <link rel="stylesheet" href="contact_form_styles.css">
    <script defer src="../index_carrousel_functions.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
    <header>
        <div>
            <img class="logo" src="../Assets/Logo.png" alt="Alquiler Instrumentos Musicales Infrecuentes">
        </div>
        <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../Instrumentos en Alquiler/instrumentos_en_alquiler.html">Instrumentos en Alquiler</a></li>
            <li><a href="../Instrumentos en Venta/instrumentos_en_venta.html">Instrumentos en Venta</a></li>
            <li><a href="../Nuestros Usuarios Clientes/nuestros_usuarios_clientes.html">Nuestros Usuarios / Clientes</a></li>
            <li><a href="../Servicios/servicios.html">Servicios</a></li>
            <li><a href="#">Información y Contacto</a></li>
        </ul>
    </header>
    <main>
        <article>
            <div class="confirmation">
                <h3>Email enviado</h3>
                <p><br>Muchas gracias por contactarnos - haremos todo lo posible para contestar lo antes posible.<br><br>Muchas gracias,<br><br>Miguel Ángel Tallante</p>
            </div>
                                    

            
        </article>
    </main>
    <footer>
        <div class="quick_access">
            <h3>Acceso Rápido</h3>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../Instrumentos en Alquiler/instrumentos_en_alquiler.html">Instrumentos en Alquiler</a></li>
                <li><a href="../Instrumentos en Venta/instrumentos_en_venta.html">Instrumentos en Venta</a></li>
                <li><a href="../Nuestros Usuarios Clientes/nuestros_usuarios_clientes.html">Nuestros Usuarios / Clientes</a></li>
                <li><a href="../Servicios/servicios.html">Servicios</a></li>
                <li><a href="../Información y Contacto/información_y_contacto.html">Información y Contacto</a></li>
            </ul>
        </div>
        <div class="contact_info">
            <h3>Contacto</h3>
            <ul>
                <li><i class="fa-solid fa-user"></i><b>Miguel Ángel Tallante</b></li>
                <li><i class="fa-solid fa-envelope"></i>info@alquiler-instrumentos-musicales.com</li>
                <li><i class="fa-solid fa-mobile"></i>639 56 56 23</li>
                <li><i class="fa-solid fa-phone"></i>91 539 37 22</li>
                <li><i class="fa-solid fa-phone"></i>91 539 75 30</li>
                <li><i class="fa-solid fa-location-dot"></i>Las Delicias, Madrid</li>
            </ul>
        </div>
        <div class="social_media">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="https://www.youtube.com/@matallante"><i class="fa-brands fa-youtube"></i>@matallante</a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>

'

?>