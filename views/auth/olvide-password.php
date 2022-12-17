<h1 class="nombre-pagina">Recuperar cuenta</h1>
<p class="descripcion-pagina">Introduzca su email para recupear su cuenta ya existente</p>

<?php
include_once __DIR__ . "/../templates/alertas.php"
?>
<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" value="Enviar instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tiene una cuenta? Iniciar sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
</div>