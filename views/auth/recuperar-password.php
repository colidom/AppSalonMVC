<h1 class="nombre-pagina">Recuperar cuenta</h1>
<p class="descripcion-pagina">Indica la nueva contraseña</p>

<?php
include_once __DIR__ . "/../templates/alertas.php"
?>

<?php
if ($error) return;
?>
<form class="formulario" action="/" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Tu nuevo password" name="password">
    </div>
    <!--     <div class="campo">
        <label for="password">Confirmar contraseña</label>
        <input type="password" id="password" placeholder="Tu nuevo password" name="password">
    </div> -->

    <input type="submit" class="boton" value="Guardar nueva contraseña">
</form>

<div class="acciones">
    <a href="/">¿Ya tiene una cuenta? Iniciar sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
</div>