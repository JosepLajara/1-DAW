<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <center>
      <form class="header" action="registro.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Formulario de registro</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Nombre</b></td>
              <td><input type="text" name="NombreUsuario" placeholder="Nombre"/></td>
            </tr>
            <tr>
              <td><b>Apellidos</b></td>
              <td><input type="text" name="ApellidosUsuario" placeholder="Apellidos"/></td>
            </tr>
            <tr>
              <td><b>Edad</b></td>
              <td><input type="text" name="EdadUsuario" placeholder="Edad"/></td>
            </tr>
            <tr>
              <td><b>Curso</b></td>
              <td><input type="text" name="CursoUsuario" placeholder="Curso"/></td>
            </tr>
            <tr>
              <td><b>Puntuacion</b></td>
              <td><input type="text" name="PuntuacionUsuario" placeholder="Puntuacion"/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Registrarse</button>
<<<<<<< HEAD
        <button type="reset">Restaurar</button>
=======
        <button type="submit">Restaurar</button>
        <div hidden class="error"><h3>No se han llenado todos los campos<h3></h3></div>
>>>>>>> 733f5a54be7c24895c840b6cc01b878041f48cc3
      </form>
    </center>

    </script>
  </body>
</html>
