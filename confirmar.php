<?php
$conn = mysqli_connect("localhost","root","","clinica_opti");

$usu = $_POST['usuario'];
$pass = $_POST['password'];

$query= "SELECT Name, LastName, Cedula, DepartmentId, Phone, Address, EMail, BirthDate, Sex, Age, NameLastName, PhonePerContact, RealtionShip FROM empleados where EMail='".$usu."' and PassWord='".$pass."'";

$result= mysqli_query($conn,$query);
$cont=mysqli_num_rows($result);


if ($cont == 1) {
    $row = mysqli_fetch_assoc($result);
    $nombre = $row['Name'];
    $apellido = $row['LastName'];
    $cedula=$row['Cedula'];
    $departmentId =$row['DepartmentId'];
    $phone=$row['Phone'];
    $address=$row['Address'];
    $eMail=$row['EMail'];
    $fechaNacimiento=$row['BirthDate'];
    $sexo=$row['Sex'];
    $edad=$row['Age'];
    $nombreApellido=$row['NameLastName'];
    $celularTelefono=$row['PhonePerContact'];
    $parentesco=$row['RealtionShip'];

    $accion = "Usuario $nombre $apellido inicia sesión";
    $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('','','$departmentId','$accion')"; 
    $conn->query($sql_actividades);


        // Iniciar sesión si aún no se ha hecho
    session_start();
    // Guardar la información del usuario en la sesión
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['cedula'] = $cedula;
    $_SESSION['departmentId'] = $departmentId;
    $_SESSION['celular'] = $phone;
    $_SESSION['address'] = $address;
    $_SESSION['eMail'] = $eMail;
    $_SESSION['fechaNacimiento'] = $fechaNacimiento;
    $_SESSION['sexo'] = $sexo;
    $_SESSION['edad'] = $edad;
    $_SESSION['nombreYApellido'] = $nombreApellido;
    $_SESSION['celularTelefono'] = $celularTelefono;
    $_SESSION['parentesco'] = $parentesco;

    echo "<div id='welcomeMessage' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #512da8; color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-size: 2.5rem; display: none;'>¡Bienvenido/a, $nombre $apellido!</div>";

    echo "<script>
            var welcomeMessage = document.getElementById('welcomeMessage');
            welcomeMessage.style.display = 'block';
            welcomeMessage.style.opacity = '0';
            var opacity = 0;
            var interval = setInterval(function() {
                opacity += 0.1;
                welcomeMessage.style.opacity = opacity;
                if (opacity >= 1) {
                    clearInterval(interval);
                    setTimeout(function() {
                        welcomeMessage.style.opacity = '1';
                        var fadeOutInterval = setInterval(function() {
                            opacity -= 0.1;
                            welcomeMessage.style.opacity = opacity;
                            if (opacity <= 0) {
                                clearInterval(fadeOutInterval);
                                window.location.href = 'index.html';
                            }
                        }, 100);
                    }, 2000);
                }
            }, 100);
          </script>";
} else {
    echo "<style>
    .alert-container {
        text-align: center;
        margin-top: 20px;
        animation: fadeIn 0.5s ease-in-out;
    }

    .alert {
        background-color: #FF5733; /* Cambiar a rojo */
        color: white;
        padding: 20px;
        border-radius: 5px;
        font-size: 2.1rem;
        animation: slideIn 0.5s ease-in-out;
    }

    .alert p {
        margin: 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            height: 0;
        }
        to {
            height: auto;
        }
    }
  </style>";

    echo "<div class='alert-container'>
    <div class='alert'>
        <p>¡Usuario o Contraseña Incorrectos!</p>
    </div>
  </div>";

    echo "<script>
    setTimeout(function(){
        document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
        document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function(){
            window.location.href = 'http://localhost:8080/Clinica_Optica/index.php';
        }, 500);
    }, 2000);
  </script>";
}
?>