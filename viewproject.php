<?php 
include("config/conexion.php");


$departamento= $_POST["dep"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];

$sql = "SELECT * FROM `proyectos` WHERE `dep_sec`='$departamento' AND `mes`='$mes' AND `anio`='$anio'";
    $ejecutar_consulta = $conexion->query($sql);
?>

<?php include "template/header.php"; ?>
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
<!--             <center><img style="width: 200px;" src="assets/img/min-w.png"></center> -->
              <h2>Universidad de El Salvador <br> Facultad Multidisciplinaria Oriental</h2>
              <span class="subheading">Unidad de Proyección Social</span>
            </div>
          </div>
        </div>
      </div>
    </header>

 <!-- Page Content -->
    <div class="container">
          <center><h3 class="my-4">Estado de Proyectos</h3></center><br><br>

          <div class="row">
            <div class="col-md-12">
              <?php 
                 while($reg = $ejecutar_consulta->fetch_assoc()){
                        echo utf8_encode($reg["registro"]);
                         }
               ?>
            </div>           
          </div>
        <br>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include "template/footer.php"; ?>