<?php include 'header.php'; ?>   
        <!-- LO DE AGENDAR CITA
hora-->
<link rel="stylesheet" type="text/css" href="estilos.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#fecha").datepicker(); // Inicializar el Datepicker
        $("#hora").timepicker({ // Inicializar el Timepicker
            timeFormat: 'HH:mm',
            interval: 15,
            minTime: '09:00',
            maxTime: '18:00',
            startTime: '09:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    });
</script>

<style>
body {
    background-color: #F5F5F5;
    font-family: Arial, sans-serif;
}
h1 {
    color: #333333;
    text-align: center;
}
p {
    color: #483D8B;
    text-align: center;
}
form {
    background-color: #FFFFFF;
    padding: 20px;
    margin: 20px auto;
    width: 50%;
    box-shadow: 0px 0px 10px #AAAAAA;
}
label {
    display: block;
    margin-bottom: 10px;
    color: #333333;
    font-weight: bold;
}
input[type="text"], input[type="date"], input[type="time"] {
    padding: 10px;
    border: 1px solid #AAAAAA;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 20px;
}
input[type="submit"] {
    background-color: #0070C0;
    color: #FFFFFF;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
input[type="submit"]:hover {
    background-color: #003F7F;
}


.special-form {
    background-color: transparent;
    padding: 0;
    box-shadow: none;
    width: 75%; /* Ajustar al ancho del contenedor */
    margin: 0 auto; 
    max-width: 400px; 
}

.special-form .form-control {
    background-color: #ffffff;
    color: #495057;
}

.special-form .btn {
    background-color: #ffffff;
    padding: 6px 6px;
}
/* Estilos para ajustar el tamaño del formulario */
@media (max-width: 576px) {
    .special-form {
        width: 90%; /* Reducir el ancho en dispositivos pequeños */
        max-width: none; /* Eliminar el ancho máximo */
    }
}
</style>

<!-- ``````para las tarjetas````````-->
<style>
    
    .payment {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: flex-end;
    }
    .payment li {
        margin-right: 10px;
    }
    .payment li img {
        height: 30px;
        width: auto;
        vertical-align: middle;
    }
    /* Estilos para el pie de página */
    footer {
        background: rgba(255, 255, 255, 1);
        padding: 20px 0;
        text-align: center;
    }
    footer p {
        color: #010101;
        margin: 0;
    }
</style>
<!-- ````````````````````-->
        <!-- FORMULARIO DE AGENDAR CITA -->
        <h1>Bienvenido a la agenda de citas</h1>
        <p>Te asignaremos a uno de nuestros mejores oftalmólogos</p>
        <div id='calendar'></div>
        <form action="registrar_paciente.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido">
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono">
    <br>
    <label for="fecha">Fecha de cita:</label>
    <input type="text" id="fecha" name="fecha">
    <br>
    <label for="hora">Hora de cita:</label>
    <input type="text" id="hora" name="hora">
    <br>
    <input type="submit" value="Registrar paciente">
</form>