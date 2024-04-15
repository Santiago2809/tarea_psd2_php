<?php

if(isset($_POST['send'])){
    $asunto    = $_POST['asunto'];
    $contenido = $_POST['contenido'];
    $header = "From: noreply@example.com" . "\r\n";
    $header .= "Reply-To: noreply@example.com" . "\r\n";
    $header .= "X-Mailer: PHP/".phpversion();
    $mail = mail("a219207418@unison.mx", $asunto, $contenido, $header);
    if($mail){
        echo "<h2>Mail enviado existosamente!</h2>";
    }
}

