<div class="barra">
    <p>Bienvenido <?php echo $nombre ?? '' ?></p>
    <a class="boton" href="/logout">Cerrar Sesión</a>
</div>

<?php if (isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a href="/admin" class="boton">Ver citas</a>
        <a href="/servicios" class="boton">Ver servicios</a>
        <a href="/servicios/crear" class="boton">Nuevo servicio</a>
    </div>
<?php } else {
    echo "No es admin"; ?>
<?php } ?>