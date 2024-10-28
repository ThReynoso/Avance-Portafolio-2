<?php
include "includes/header.php";
require "includes/config/connect-db.php";
    connectdb();
    var_dump($x);

    $db = connectdb();

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $id = $_POST ['id'];
    $name = $_POST ("name");
    $email = $_POST("email");
    $phone = $_POST("phone");

    $query = "insert into sellers (name,email,phone) VALUES('$name','$email','$phone');";
    $response = mysqli_query($db, $query);

    if ($response) {
        echo "registro completado.";
        } else {
            echo "fallo en el registro.";
        }

        
?>

<section>
    <h2>Crear Selller Form</h2>
    <div>
        <form method = "POST" action="crearSellers.php">
            <fieldset>
                <div>
                    <legend>Fill all form fields to create a new seller.</legend>
                </div>
            <div>
                <label for="id">ID</label>
                <input type="number" id="id" name="id">
            </div>

            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>

            <div>
                <button type="submit">Create a new seller</button>
            </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
include "includes/footer.php"
?>