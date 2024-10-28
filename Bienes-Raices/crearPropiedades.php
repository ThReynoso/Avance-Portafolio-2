<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include "includes/header.php";
require "includes/config/connect-db.php";

$db = connectDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $num_rooms = $_POST['num_rooms'];
    $num_wc = $_POST['num_wc'];
    $num_garage = $_POST['num_garage'];
    $created = date('Y-m-d');
    $seller_id = $_POST['seller_id'];

    $query = "INSERT INTO propiedades (titulo, precio, imagen, description, num_rooms, num_wc, num_garage, created, seller_id) VALUES ('$titulo', '$precio', '$imagen', '$descripcion', '$num_rooms', '$num_wc', '$num_garage', '$created', '$seller_id')";

    $result = mysqli_query($db, $query);

    if($result){
        echo "<br> Propiedad creada correctamente";
    } else {
        echo "<br> Error al crear la propiedad";
    }
}
?>


<section>
    <h2>Create a new property Form</h2>
    <form action="crearPropiedades.php" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" required>

    <label for="imagen">Imagen:</label>
    <input type="text" id="imagen" name="imagen" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>

    <label for="num_rooms">Número de Habitaciones:</label>
    <input type="number" id="num_rooms" name="num_rooms" required>

    <label for="num_wc">Número de Baños:</label>
    <input type="number" id="num_wc" name="num_wc" required>

    <label for="num_garage">Número de Garajes:</label>
    <input type="number" id="num_garage" name="num_garage" required>

    <label for="seller_id">ID del Vendedor:</label>
    <input type="number" id="seller_id" name="seller_id" required>

    <input type="submit" value="Crear Propiedad">
</form>


<?php
include "includes/footer.php"
?>
</html>