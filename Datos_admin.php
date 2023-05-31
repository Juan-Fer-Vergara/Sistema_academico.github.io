

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_normales/datos_admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>
        <script src="js/componentes.js"></script>
        <script src="js/promedio.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/0.7.21/webcomponents-lite.min.js"></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
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
            <a class="nav-link" href="#">docentes</a>
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
<!-- Ejercicio Promedios -->
<section class="page-section bg-light" id="promedios">
            <div class="container">
                <div class="text-center">    
                </div>
            <div class="form-group">
            <form action="php/agregarBDdocentes.php" method="POST">
              <div class="col-md-7">
                    <div class="row">
                        
                        <div class="form-group">
                                    <label for="inputNP1" class="control-label text-muted"> </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control p-4 text-lg-center" id="usuario" name="usuario" placeholder="Usuario/Nombre *" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNP1" class="control-label text-muted"></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control p-4 text-lg-center" id="clave" name="clave" placeholder="Contraseña de usuario*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNP1" class="control-label text-muted"></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control p-4 text-lg-center" id="grado" name="grado" placeholder="Grado *" required>
                                    </div>
                                <div class="form-group">
                                    <label for="inputNP1" class="control-label text-muted"></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control p-4 text-lg-center" id="documento" name="documento" placeholder="Documento de identidad*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row text-center">
                                        <br>
                                        
                                        <div class="col-md-5">
                                            
                                        <input type="reset" class="btn btn-xl btn-primary" id="notaP1" value="REINICIAR">
                                        <input type="submit" class="btn btn-xl btn-success" id="btnGuardar" value="GUARDAR EN DB">
                                      </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                    </div>
                    <div class="text-center">
                        <div class="">
                                                        
                            
                        </div>
                    </div>
                </form>
                </div>
        </section>

       <br><br><br><br>

        <section id="team" class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tabla de Docentes</h2>
                    <?php
                        require_once("php/conexion.php");
                        include_once("php/class/class.docentes.php");
                        
                        $cn = conectar();
                        $v = new docente($cn);
                        
                        if(isset($_GET['d'])){
                            $dato = base64_decode($_GET['d']);
                        //	echo $dato;exit;
                            $tmp = explode("/", $dato);
                            $op = $tmp[0];
                            $id = $tmp[1];
                            
                            if($op == "del"){
                                echo $v->delete_docente($id);
                            }elseif($op == "det"){
                                echo $v->get_detail_docente($id);
                            }elseif($op == "act"){
                                echo $v->get_form($id);
                            }
                        }elseif(isset($_POST['Guardar']) && $_POST['op']=="new"){
                                echo "<br>PETICION POST <br>";
                                echo "<pre>";
                                    print_r($_POST);
                                echo "</pre>";
                            $v->save_docente();
                        }elseif(isset($_POST['Guardar']) && $_POST['op']=="update"){
                            $v->update_docente();
                        }else{
                            echo $v->get_list();
                        }	
                            
                        function conectar(){
                            $servidor = 'mysql-128176-0.cloudclusters.net:18933'; 
                            $usuario = 'admin'; 
                            $contraseña = 'W77r5wJr'; 
                            $baseDatos = 'tbl_sistema_academico';  
                            
                            $c = new mysqli($servidor, $usuario, $contraseña, $baseDatos);
                            
                            if($c->connect_errno) {
                                die("Error de conexión: " . $c->connect_errno . ", " . $c->connect_error);
                            }
                            
                            $c->set_charset("utf8");
                            return $c;
                        }
                        
                    ?>
                </div>      
            </div>

        </section>






  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

</html>
