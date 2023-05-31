<?php
include "modelo/conexion.php";

$sql = ("SELECT * FROM estudiantes");
$resultado = $conn->query($sql);
if (!$resultado) {
  die('Error en la consulta: ' . $conexion->error);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sistema academico</title>
    <!-- MDB icon -->
    <link rel="icon" href="" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/css_normales/perfil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>src='./js/js_normales/perfil.js'</script>
  </head>
  <body>


    





    
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="https://mdbgo.com/">
        <img
          src="img/LOGO IMAGEN HSJ OFI.jpg"
          height="36"
          alt="MDB Logo"
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Deplegable</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Deplegable</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="controladores/cerrar_sesion_controlador.php">salir</a>
          </li>
        </ul>
        <!-- Left links -->
  
        
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->




<br><br><br><br><br>
  <div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
        <h2>Ingresar <b>Usuarios</b></h2>
      </div>
      <div class="col-sm-6">
        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
      </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
                <tr>

                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nota 1 </th>
                    <th>Nota 2 </th>
                    <th>Acciones</th>
                </tr>
              <?php
          while ($fila = $resultado->fetch_assoc()) {
          
          ?>
              <tr>

                    <td><?php echo '<td>' . $fila['NOMBRE'] . '</td>'?></td>
                    <td><?php echo '<td>' . $fila['APELLIDOS'] . '</td>'?></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>

                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
                

                <?php
                  }
                ?>
        </table>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
    <form>
      <div class="modal-header">						
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">					
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" required>
        </div>					
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" value="Add">
      </div>
    </form>
  </div>
</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
    <form>
      <div class="modal-header">						
        <h4 class="modal-title">Edit Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">					
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" required>
        </div>					
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
    <form>
      <div class="modal-header">						
        <h4 class="modal-title">Delete Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">					
        <p>Are you sure you want to delete these Records?</p>
        <p class="text-warning"><small>This action cannot be undone.</small></p>
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-danger" value="Delete">
      </div>
    </form>
  </div>
</div>
</div>




  </body>


</html>
