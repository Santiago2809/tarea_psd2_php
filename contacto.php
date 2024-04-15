<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/index.css">
    <title>Tarea 06</title>
</head>
<body class="container p-4">

<header class="d-flex flex-column">
    <div class="d-flex mb-5 g-3 fs-3 align-items-center justify-content-between">
        <img src="https://www.unison.mx/wp-content/uploads/2018/08/escudo-med-lema.gif" alt="Logo unison" id="logo-unison" class="mx-3">
        <p>Practicas de Desarrollo de Sistemas II</p>
        <p>Ingenieria en Sistemas de Informacion</p>
        <p>219207418 - Ceceña Campbell Santiago</p>
    </div>
    <nav class="d-flex w-100 justify-content-evenly align-items-center my-4 fs-3">
        <img src="https://www.unison.mx/wp-content/uploads/2018/08/escudo-med-lema.gif" alt="logo unison pequeño" id="logo-unison-small"/>
        <a href="bienvenida.php">Bienvenida</a>
        <a href="contacto.php">Contacto</a>
    </nav>
</header>
<hr>
<main>
<form class="mt-5" method="post">
    <h2>Redacta tu correo y hazmelo llegar:</h2>
    <br>
    <div class="input-block mt-4">
        <label for="asunto" class="form-label fs-3">Asunto:</label>
        <input autocomplete="off" id="asunto" value="" type="text" class="form-control fs-3" placeholder="Duda sobre..." name="asunto" required/>
    </div>
    <div class="input-block mt-4">
        <label for="contenido" class="form-label fs-3">Contenido:</label>
        <textarea autocomplete="off" id="contenido" name="contenido" class="form-control fs-3" placeholder="Buenos dias, por este medio..." style="max-height: 250px"></textarea>
    </div>
    <div class="button-group mt-4 d-flex w-100 justify-content-end gap-3">
        <button class="btn btn-danger fs-4" type="reset">Borrar formulario</button>
        <button class="btn btn-success fs-4" type="submit" name="send">Enviar correo</button>
    </div>
</form>
</main>
<?php include 'send_email.php';?>
</body>

<?php include 'footer.php'; ?>