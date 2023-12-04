<!DOCTYPE html>
<html>
    <head>
        <title>PDF generado con Dompdf</title>
        <!-- Estilos CSS adicionales si es necesario -->
    </head>
    <body>
        <h1>Mi PDF generado con Dompdf y MySQL</h1>
        <?php foreach ($data as $row): ?>
        <p>
            <?php echo $row['cantidad_vendida']; ?>
            -
            <?php echo $row['precio_unitario']; ?>
        </p>
        <?php endforeach; ?>
    </body>
</html>
