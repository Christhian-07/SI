<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
   body {
    background: url('https://img.freepik.com/premium-photo/serene-animated-cartoon-landscape-with-mountains-glaciers_899449-42041.jpg') center center fixed;
    background-size: cover;
    font-family: 'Arial', sans-serif;
    color: #333; /* Changed text color for better visibility */
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

#login-box {
    background-color: rgba(255, 255, 255, 0.7); /* Slight transparency */
    box-shadow: 0 0 90px rgba(0, 0, 0, 0.5); /* Added a subtle box shadow for a 3D effect */
    padding: 40px;
    border-radius: 40px;
    width: 1000px; /* Set a wider width for the login box */
}

h3 {
    color: #2885a7;
    text-align: center; /* Center the heading */
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

.btn-success {
    background-color: #289fa7;
    border: 1px solid #289fa7;
    width: 100%; /* Make the button full-width */
}

.btn-success:hover {
    background-color: #5086c1;
    border: 1px solid #5086c1;
}
</style>



</head>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <h3 class="text-center">Iniciar Sesión</h3>
                        <form action="_functions.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Usuario:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <input type="hidden" name="accion" value="acceso_user">
                            </div>
                            <div class="form-group">
                                <center>
                                    <input type="submit" class="btn btn-success" value="Ingresar">
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
